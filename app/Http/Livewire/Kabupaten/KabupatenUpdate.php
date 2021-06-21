<?php

namespace App\Http\Livewire\Kabupaten;

use App\Models\Kabupaten;
use Livewire\Component;

class KabupatenUpdate extends Component
{
    public $nama_kabupaten, $KabupatenID;

    public $listeners = [
        'GetData'
    ]; 
    
    public function GetData($kabupaten)
    {
        $this->nama_kabupaten = $kabupaten['nama_kabupaten'];
        $this->KabupatenID = $kabupaten['id'];
    }   
    
    public function render()
    {
        return view('livewire.kabupaten.kabupaten-update');
    }

    public function update()
    {
        $this->validate([
            'nama_kabupaten' => 'required',
           
        ]);
        if($this->KabupatenID){ 
            $data= Kabupaten::find($this->KabupatenID);

            $data-> update([
                'nama_kabupaten' => $this->nama_kabupaten,
                
            ]);
        }
        $this->resetInput();
        $this->emit('DataTerupdate', $data);
    }

    public function resetInput()
    {
        $this->nama_kabupaten = null;
    }

    
}