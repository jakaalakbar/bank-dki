<?php

namespace App\Livewire;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Livewire\Component;

class LocationDropdown extends Component
{
    public $provinsi;
    public $kabupaten = [];
    public $kecamatan = [];
    public $kelurahan = [];

    public $pilihProvinsi = null;
    public $pilihKabupaten = null;
    public $pilihKecamatan = null;
    public $pilihKelurahan = null;

    public function mount()
    {
        $this->provinsi = Provinsi::all();
    }

    public function updatedPilihProvinsi($kode_provinsi)
    {
        $this->kabupaten = Kabupaten::where('kode_provinsi', $kode_provinsi)->get();
        $this->pilihKabupaten = null;
        $this->kecamatan = [];
        $this->kelurahan = [];
    }

    public function updatedPilihKabupaten($kode_kabupaten)
    {
        $this->kecamatan = Kecamatan::where('kode_kabupaten', $kode_kabupaten)->get();
        $this->pilihKecamatan = null;
        $this->kelurahan = [];
    }

    public function updatedPilihKecamatan($kode_kecamatan)
    {
        $this->kelurahan = Kelurahan::where('kode_kecamatan', $kode_kecamatan)->get();
        $this->pilihKelurahan = null;
    }

    public function render()
    {
        return view('livewire.location-dropdown');
    }
}
