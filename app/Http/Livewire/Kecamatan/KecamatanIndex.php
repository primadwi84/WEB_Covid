<?php

namespace App\Http\Livewire\Kecamatan;

use App\Models\Kabupaten;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Kecamatan;

class KecamatanIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search = '';

    public $statusEdit = false;

    public $listeners = [
        'DataTersimpan', 'DataTerupdate'
    ];

    public function render()
    {
        return view('livewire.kecamatan.kecamatan-index', [
            'kecamatan' => Kecamatan::all(),
            'kecamatan'=>$this->search == null ?
            Kecamatan::latest()->paginate($this->paginate) : 
            Kecamatan::where('nama_kecamatan', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.aple');
    }

    public function EditData($id){
        $this->statusEdit=true;
        $kecamatan = Kecamatan::find($id);
        $this->emit('GetData', $kecamatan);
    }
  
    public function DataTersimpan()
    {
        session()->flash('message', 'Data Ditambahkan');
    }

    public function DataTerupdate()
    {
        session()->flash('message', 'Data Diperbahaui');
    }

    public function destroy ($id){
        if($id){
            $data = Kecamatan::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus');
        }
    }
}