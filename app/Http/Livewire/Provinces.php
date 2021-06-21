<?php

namespace App\Http\Livewire;
use App\Models\Province;
use Livewire\Component;
use Livewire\WithPagination;

class Provinces extends Component
{
    public $Provinsi, $provinsi_id;
    public $isModal;
    use WithPagination;
    public function render()
    {
        return view('provinces.provinces', [
        'provinces'=>Province::orderBy('created_at','DESC')->get(),
        'provinces'=>Province::paginate(5),
        'title'=>'Provinsi'
        ])
        ->layout('layouts.aple');

        // $this->regencies = Province::orderBy('created_at','DESC')->get();
        // return view('livewire.regencies')
        // ->layout('layouts.aple');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->Provinsi='';
        $this->provinsi_id='';
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }
    
    public function store()
    {
        $this->validate([
            'Provinsi' => 'required|string'
        ]);

        Province::updateOrCreate(
            ['id' => $this->provinsi_id], 
            [
             'Provinsi'=>$this->Provinsi
            ]
            );

            session()->flash('message', $this->provinsi_id ? $this-> Provinsi .' Dirubah':$this->Provinsi . ' Ditambahkan');
            $this -> resetFields();
            $this -> closeModal();
    }

    public function edit($id)
    {
        $province = Province::find($id);
        $this->provinsi_id = $id;
        $this->Provinsi =$province->Provinsi;

        $this->openModal();

    }

    public function delete($id)
    {
        $province = Province::find($id);
        $province-> delete();
      session()->flash('message', $province->Provinsi . ' Dihapus');

    }
}
