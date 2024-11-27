<?php

namespace App\Http\Controllers;

use App\Enums\StatusPembukaanRekening;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pekerjaan;
use App\Models\Provinsi;
use App\Models\Rekening;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembukaanRekeningController extends Controller
{
    public function index()
    {
        $rekening = Rekening::join('pekerjaans', 'rekenings.pekerjaan', '=', 'pekerjaans.kode')
        ->select('rekenings.*', 'pekerjaans.kode', 'pekerjaans.nama as nama_pekerjaan')
        ->get();

        $role_user = Auth::user()->role_user;

        return view('pages.admin.rekening', compact('rekening', 'role_user'));
    }

    public function create()
    {
        $pekerjaan = Pekerjaan::all();

        return view('pages.admin.create_rekening', compact('pekerjaan'));
    }

    public function store(Request $request)
    {
        $provinsi = Provinsi::select('nama')
        ->where('kode', $request->input('provinsi'))
        ->first();
        $kabupaten = Kabupaten::select('nama')
        ->where('kode', $request->input('kabupaten'))
        ->first();
        $kecamatan = Kecamatan::select('nama')
        ->where('kode', $request->input('kecamatan'))
        ->first();
        $kelurahan = Kelurahan::select('nama')
        ->where('kode', $request->input('kelurahan'))
        ->first();

        $alamat = $provinsi->nama . ', ' .
        $kabupaten->nama . ', ' .
        $kecamatan->nama . ', ' .
        $kelurahan->nama . ', ' .
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
        Rekening::create($values);
        return redirect()->route('rekening');
    }

    public function approved(Request $request)
    {
        $rekening = Rekening::find($request->input('approved'));
        if ($rekening->status == 'Disetujui') {
            return redirect()->back()->with('status', 'Status sudah disetujui!');
        }

        $rekening->status = StatusPembukaanRekening::DISETUJUI;
        $rekening->save();
        return redirect()->back();
    }
}
