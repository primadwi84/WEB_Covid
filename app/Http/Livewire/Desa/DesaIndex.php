<?php

namespace App\Http\Livewire\Desa;

use App\Models\Desa;
use Livewire\Component;
use Livewire\WithPagination;

class DesaIndex extends Component
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
        return view('livewire.desa.desa-index', [
            'desa'=>Desa::all(),
            'desa'=>$this->search == null ?
            Desa::latest()->paginate($this->paginate) : 
            Desa::where('nama_desa', 'like', '%'.$this->search.'%')->paginate($this->paginate)

        ])->layout('layouts.aple');
    }

    public function DataTersimpan()
    {
        session()->flash('message', 'Data Ditambahkan');
    }

    public function EditData($id){
        $this->statusEdit=true;
        $desa = Desa::find($id);
        $this->emit('GetData', $desa);
    }

    public function DataTerupdate()
    {
        session()->flash('message', 'Data Ditambahkan');
    }

    public function destroy ($id){
        if($id){
            $data = Desa::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus');
        }
    }


}