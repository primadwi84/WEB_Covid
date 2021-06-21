<?php

namespace App\Http\Livewire\Data;

use App\Models\DataCovid;
use Livewire\Component;
use Livewire\WithPagination;

class DataIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search = '';

    public $statusAdd=false;
    public $statusEdit=false;

    public $listeners = [
        'DataTersimpan', 'DataTerupdate'
    ];

    
    public function render()
    {
        return view('livewire.data.data-index', [
            'data'=> DataCovid::all(),
            'data'=>$this->search == null ?
            DataCovid::latest()->paginate($this->paginate) : 
            DataCovid::where('desa', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.aple');
    }

    public function addData()
    {
        $this->statusAdd=true;
    }

    public function DataTersimpan()
    {
        $this->statusAdd=false;
        session()->flash('message', 'Data Ditambahkan');
    }

    public function EditData($id){
        $this->statusEdit=true;
        $data = DataCovid::find($id);
        $this->emit('GetData', $data);
    }

    public function DataTerupdate()
    {
        $this->statusEdit=false;
        session()->flash('message', 'Data DiPerbaharui');
    }

    public function destroy ($id){
        if($id){
            $data = DataCovid::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus');
        }
    }
    
}