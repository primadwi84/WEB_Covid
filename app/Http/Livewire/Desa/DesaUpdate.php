<?php

namespace App\Http\Livewire\Desa;

use App\Models\Desa;
use App\Models\Kecamatan;
use Livewire\Component;

class DesaUpdate extends Component
{
    public $nama_kecamatan, $nama_desa, $DesaID;

    public $listeners = [
        'GetData'
    ];
    
    
    public function GetData($desa)
    {
        $this->nama_kecamatan = $desa['nama_kecamatan'];
        $this->nama_desa = $desa['nama_desa'];        
        $this->DesaID = $desa['id'];
    }
    public function render()
    {
        return view('livewire.desa.desa-update', [
            'cariKecamatan'=>Kecamatan::all()
        ]);
    }

    public function update()
    {
        $this->validate([
            'nama_kecamatan' => 'required',
            'nama_desa'=> 'required',
        ]);
        if($this->DesaID){ 
            $data= Desa::find($this->DesaID);

            $data-> update([
                'nama_kecamatan' => $this->nama_kecamatan,
                'nama_desa'=>$this->nama_desa
            ]);
        }
        $this->resetInput();
        $this->emit('DataTerupdate', $data);
    }

    public function resetInput()
    {
        $this->nama_kecamatan = null;
        $this->nama_desa = null;
    }
}