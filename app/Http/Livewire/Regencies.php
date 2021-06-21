<?php

namespace App\Http\Livewire;
use App\Models\Regency;
use App\Models\District;
use Livewire\Component;
use Livewire\WithPagination;

class Regencies extends Component
{
    public $Kabupaten, $kabupaten_id;
    public $isModal;

    public $selectedRegency = null;
    public $selectedDistrict = null;
    
    public $districts = null;

    use WithPagination;
    

    public function render()
    {
        return view('regencies.regencies', [
        'regencies'=>Regency::all(),
        'regencies'=>Regency::orderBy('created_at','DESC')->get(),
        'title'=>'Kabupaten'
        ])
        ->layout('layouts.aple');

        // $this->regencies = Regency::orderBy('created_at','DESC')->get();
        // return view('livewire.regencies')
        // ->layout('layouts.aple');
    }

    public function updatedSelectedRegency($regency_id)
    {
        $this->districts= District::where('regency_id', $regency_id)->get();
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->Kabupaten='';
        $this->kabupaten_id='';
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
            'Kabupaten' => 'required|string'
        ]);

        Regency::updateOrCreate(
            ['id' => $this->kabupaten_id], 
            [
             'Kabupaten'=>$this->Kabupaten
            ]
            );

            session()->flash('message', $this->kabupaten_id ? $this-> Kabupaten .' Dirubah':$this->Kabupaten . ' Ditambahkan');
            $this -> resetFields();
            $this -> closeModal();
    }

    public function edit($id)
    {
        $regency = Regency::find($id);
        $this->kabupaten_id = $id;
        $this->Kabupaten =$regency->Kabupaten;

        $this->openModal();

    }

    public function delete($id)
    {
        $regency = Regency::find($id);
        $regency-> delete();
      session()->flash('message', $regency->Kabupaten . ' Dihapus');

    }

  

   
}
