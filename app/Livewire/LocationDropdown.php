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

    public $PilihProvinsi = null;
    public $pilihKabupaten = null;
    public $pilihKecamatan = null;
    public $pilihKelurahan = null;

    public function mount()
    {
        $this->provinsi = Provinsi::all();
    }

    public function updatedPilihProvinsi($provinceId)
    {
        $this->kabupaten = Kabupaten::where('kode_provinsi', $provinceId)->get();
        $this->pilihKabupaten = null; // Reset selected regency
        $this->kecamatan = []; // Reset districts
        $this->kelurahan = []; // Reset villages
    }

    public function updatedPilihKabupaten($regencyId)
    {
        $this->kecamatan = Kecamatan::where('kode_kabupaten', $regencyId)->get();
        $this->pilihKecamatan = null; // Reset selected district
        $this->kelurahan = []; // Reset villages
    }

    public function updatedPilihKecamatan($districtId)
    {
        $this->kelurahan = Kelurahan::where('kode_kecamatan', $districtId)->get();
        $this->pilihKelurahan = null; // Reset selected district
    }

    public function render()
    {
        return view('livewire.location-dropdown');
    }
}
