<?php

namespace App\Http\Livewire\Kecamatan;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Livewire\Component;

class KecamatanUpdate extends Component
{

    public $nama_kecamatan, $kabupaten, $KecamatanID;
    
    public $listeners = [
        'GetData'
    ];
    
    
    public function GetData($kecamatan)
    {
        $this->nama_kecamatan = $kecamatan['nama_kecamatan'];
        $this->kabupaten = $kecamatan['kabupaten'];        
        $this->KecamatanID = $kecamatan['id'];
    }

    public function render()
    {
      
        return view('livewire.kecamatan.kecamatan-update', [
            'carikabupaten'=>Kabupaten::all()
        ]);
    }


    public function update()
    {
        $this->validate([
            'nama_kecamatan' => 'required',
            'kabupaten'=> 'required',
        ]);
        if($this->KecamatanID){ 
            $data= Kecamatan::find($this->KecamatanID);

            $data-> update([
                'nama_kecamatan' => $this->nama_kecamatan,
                'kabupaten'=>$this->kabupaten
            ]);
        }
        $this->resetInput();
        $this->emit('DataTerupdate', $data);
    }

    public function resetInput()
    {
        $this->nama_kecamatan = null;
        $this->kabupaten = null;
    }

}