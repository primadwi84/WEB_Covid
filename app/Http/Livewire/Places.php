<?php

namespace App\Http\Livewire;
use App\Models\Place;
use Livewire\Component;


class Places extends Component
{
    public $Desa, $Kecamatan, $Kabupaten, $Provinsi, $Sehat, $Sakit, $Dirawat, $Sembuh, $Zona, $place_id;
    // public $places
    public $isModal;

    public function render()
    {
        return view('livewire.places', [
            'places'=>Place::orderBy('created_at','DESC')->get(),
            'title'=>'Data Desa Covid-19 Indonesia'
            ])
            ->layout('layouts.aple');

        // $this->places = Place::orderBy('created_at','DESC')->get();
        // return view('livewire.places')
        // ->layout('layouts.aple');
    }
    

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->Desa='';
        $this->Kecamatan='';
        $this->Kabupaten='';
        $this->Provinsi='';
        $this->Zona='';
        $this->place_id='';
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
            'Desa' => 'required|string',
            'Kecamatan' => 'required|string',
            'Kabupaten' => 'required|string',
            'Provinsi' => 'required|string',
            'Zona' => 'required|string'
        ]);

        Place::updateOrCreate(
            ['id' => $this->place_id], 
            [
             'Desa'=>$this->Desa,
             'Kecamatan'=>$this->Kecamatan,
             'Kabupaten'=>$this->Kabupaten,
             'Provinsi'=>$this->Provinsi,
             'Zona'=> $this->Zona,

            ]
            );

            session()->flash('message', $this->place_id ? $this-> Desa .' Dirubah':$this->Desa . ' Ditambahkan');
            $this -> resetFields();
            $this -> closeModal();
    }

    public function edit($id)
    {
        $place = Place::find($id);
        $this->place_id = $id;
        $this->Desa =$place->Desa;
        $this->Kecamatan =$place->Desa;
        $this->Kabupaten =$place->Kabupaten;
        $this->Provinsi =$place->Provinsi;
        $this->Zona=$place->Zona;

        $this->openModal();

    }

    public function delete($id)
    {
        $place = Place::find($id);
        $place-> delete();
      session()->flash('message', $place->Desa . ' Dihapus');

    }
}

