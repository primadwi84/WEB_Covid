<?php

namespace App\Http\Livewire\Data;

use App\Models\DataCovid;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Livewire\Component;

class DataUpdate extends Component
{
    public $sehat, $sakit, $meninggal, $status, $kabupaten, $kecamatan, $desa, $DataID;

    public $listeners = [
        'GetData'
    ];
    
    public function GetData($data)
    {
        $this->sehat = $data['sehat'];
        $this->sakit = $data['sakit'];  
        $this->meninggal = $data['meninggal'];
        $this->status = $data['status']; 
        $this->kabupaten = $data['kabupaten'];
        $this->kecamatan = $data['kecamatan']; 
        $this->desa = $data['desa']; 
        $this->DataID = $data['id'];
    }

    public function render()
    {
        return view('livewire.data.data-update', [
            'carikabupaten'=>Kabupaten::all(),
            'carikecamatan' => Kecamatan::where('kabupaten', $this->kabupaten)->get(),
            'caridesa' => Desa::where('nama_kecamatan', $this->kecamatan)->get(),
        ]);
    }

    public function update()
    {
        $this->validate([
            'sehat' => 'required',
            'sakit' => 'required',
            'meninggal' => 'required',
            'status' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
        ]);
        
        if($this->DataID){ 
            $data= DataCovid::find($this->DataID);
            
            $data-> update([
            'sehat' => $this->sehat,
            'sakit' => $this->sakit,
            'meninggal' => $this->meninggal,
            'status' => $this->status,
            'desa' => $this->desa,
            'kecamatan' => $this->kecamatan,
            'kabupaten' => $this->kabupaten
            ]);
        }
        $this->resetInput();
        $this->emit('DataTerupdate', $data);
    }

    public function resetInput()
    {
        $this->sehat = null;
        $this->sakit = null;
        $this->meninggal = null;
        $this->status = null;
        $this->desa = null;
        $this->kecamatan = null;
        $this->kabupaten = null;
    }

    
}