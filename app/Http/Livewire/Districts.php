<?php

namespace App\Http\Livewire;
use App\Models\District;
use Livewire\Component;
use Livewire\WithPagination;

class Districts extends Component
{
    public $Kecamatan, $kecamatan_id;
    public $isModal;
    public $search;

   

    use WithPagination;


    public function render()
    {
        return view('districts.districts', [
        'districts'=>District::orderBy('created_at','DESC')->get(),
        'districts'=>District::paginate(5),
        'title'=>'Kecamatan'
        ])
        ->layout('layouts.aple');

        // $this->districts = District::orderBy('created_at','DESC')->get();
        // return view('livewire.districts')
        // ->layout('layouts.aple');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->Kecamatan='';
        $this->kecamatan_id='';
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
            'Kecamatan' => 'required|string'
        ]);

        District::updateOrCreate(
            ['id' => $this->kecamatan_id], 
            [
             'Kecamatan'=>$this->Kecamatan
            ]
            );

            session()->flash('message', $this->kecamatan_id ? $this-> Kecamatan .' Dirubah':$this->Kecamatan . ' Ditambahkan');
            $this -> resetFields();
            $this -> closeModal();
    }

    public function edit($id)
    {
        $district = District::find($id);
        $this->kecamatan_id = $id;
        $this->Kecamatan =$district->Kecamatan;

        $this->openModal();

    }

    public function delete($id)
    {
        $district = District::find($id);
        $district-> delete();
      session()->flash('message', $district->Kecamatan . ' Dihapus');

    }
}
