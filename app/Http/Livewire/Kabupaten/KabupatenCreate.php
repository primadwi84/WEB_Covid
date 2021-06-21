<?php

namespace App\Http\Livewire\Kabupaten;

use App\Models\Kabupaten;
use Livewire\Component;

class KabupatenCreate extends Component
{
    public $nama_kabupaten;
    
    public function render()
    {
        return view('livewire.kabupaten.kabupaten-create');
    }
    
    public function store()
    {
        $this->validate([
            'nama_kabupaten' => 'required',
        ]);

        $data = Kabupaten::create([
            'nama_kabupaten' => $this->nama_kabupaten,
            
        ]);
        $this->resetInput();
        $this->emit('DataTersimpan', $data);
    }

    public function resetInput()
    {
        $this->nama_kabupaten = null;
    }
}