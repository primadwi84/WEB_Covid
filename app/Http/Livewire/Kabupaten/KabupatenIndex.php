<?php

namespace App\Http\Livewire\Kabupaten;
use App\Models\Kabupaten;
use Livewire\Component;
use Livewire\WithPagination;

class KabupatenIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search = '';

    public $statusEdit=false;
    public $listeners = [
        'DataTersimpan', 'DataTerupdate'
    ];

    public function render()
    {
        return view('livewire.kabupaten.kabupaten-index', [
            'kabupaten' => Kabupaten::all(),
            'kabupaten'=>$this->search == null ?
            Kabupaten::latest()->paginate($this->paginate) : 
            Kabupaten::where('nama_kabupaten', 'like', '%'.$this->search.'%')->paginate($this->paginate)



        ])
        ->layout('layouts.aple');
    }

     public function DataTersimpan()
    {
        session()->flash('message', 'Data Ditambahkan');
    }

    public function EditData($id){
        $this->statusEdit=true;
        $kabupaten = Kabupaten::find($id);
        $this->emit('GetData', $kabupaten);
    }

    public function DataTerupdate()
    {
        session()->flash('message', 'Data Diperbahaui');
    }

    public function destroy ($id){
        if($id){
            $data = Kabupaten::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus');
        }
    }
  

}