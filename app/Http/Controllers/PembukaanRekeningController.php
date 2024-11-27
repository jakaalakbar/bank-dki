<?php

namespace App\Http\Controllers;

use App\Enums\StatusPembukaanRekening;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pekerjaan;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class PembukaanRekeningController extends Controller
{
    public function index()
    {
        return view('pages.admin.rekening');
    }

    public function create()
    {
        $pekerjaan = Pekerjaan::all();

        return view('pages.admin.create_rekening', compact('pekerjaan'));
    }

    public function store(Request $request)
    {
        $alamat = $request->input('provinsi') . ', ' .
            $request->input('kabupaten') . ', ' .
            $request->input('kecamatan') . ', ' .
            $request->input('kelurahan') . ', ' .
            $request->input('nama_jalan');

        $values = [
            "nama" => $request->input('nama'),
            "tempat_lahir" => $request->input('tempat_lahir'),
            "tanggal_lahir" => $request->input('tanggal_lahir'),
            "jenis_kelamin" => $request->input('jenis_kelamin'),
            "pekerjaan" => $request->input('pekerjaan'),
            "alamat" => $alamat,
            "nominal_setor" => $request->input('nominal_setor'),
            "status" => StatusPembukaanRekening::MENUNGGU,
        ];
        return $values;
    }
}
