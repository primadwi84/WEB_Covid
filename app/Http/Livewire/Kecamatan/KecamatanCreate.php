<?php

namespace App\Http\Livewire\Kecamatan;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Livewire\Component;

class KecamatanCreate extends Component
{
    public $carikabupaten;

    public $nama_kecamatan, $kabupaten;
    public function render()
    {
        $this->carikabupaten = Kabupaten::all();
        return view('livewire.kecamatan.kecamatan-create');
    }

    public function store()
    {
        $this->validate([
            'nama_kecamatan' => 'required',
            'kabupaten' => 'required',
        ]);

        $data = Kecamatan::create([
            'nama_kecamatan' => $this->nama_kecamatan,
            'kabupaten' => $this->kabupaten,
        ]);
        $this->resetInput();
        $this->emit('DataTersimpan', $data);
    }

    public function resetInput()
    {
        $this->nama_kecamatan = null;
        $this->kabupaten = null;
    }
}