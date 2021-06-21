<?php

namespace App\Http\Livewire\Data;

use App\Models\DataCovid;
use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Livewire\Component;

class DataCreate extends Component
{
    public $sehat, $sakit, $meninggal, $status, $kabupaten, $kecamatan, $desa;

    public function render()
    {
        return view('livewire.data.data-create',[
            'carikabupaten'=>Kabupaten::all(),
            'carikecamatan' => Kecamatan::where('kabupaten', $this->kabupaten)->get(),
            'caridesa' => Desa::where('nama_kecamatan', $this->kecamatan)->get(),
        ]);
    }

    public function store()
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

        $data = DataCovid::create([
            'sehat' => $this->sehat,
            'sakit' => $this->sakit,
            'meninggal' => $this->meninggal,
            'status' => $this->status,
            'desa' => $this->desa,
            'kecamatan' => $this->kecamatan,
            'kabupaten' => $this->kabupaten
        ]);
        $this->resetInput();
        $this->emit('DataTersimpan', $data);
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