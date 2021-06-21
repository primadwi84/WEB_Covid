<?php

namespace App\Http\Livewire\Desa;

use App\Models\Desa;
use App\Models\Kecamatan;
use Livewire\Component;

class DesaCreate extends Component
{
    public $nama_kecamatan, $nama_desa;
    
    public function render()
    {
        return view('livewire.desa.desa-create', [
            'cariKecamatan'=>Kecamatan::all()
        ]);
    }

    public function store()
    {
        $this->validate([
            'nama_kecamatan' => 'required',
            'nama_desa' => 'required',
        ]);

        $data = Desa::create([
            'nama_kecamatan' => $this->nama_kecamatan,
            'nama_desa' => $this->nama_desa,
        ]);
        $this->resetInput();
        $this->emit('DataTersimpan', $data);
    }

    public function resetInput()
    {
        $this->nama_kecamatan = null;
        $this->nama_desa = null;
    }

}