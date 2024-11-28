<?php

namespace App\Http\Controllers;

use App\Enums\RoleUser;
use App\Enums\StatusPembukaanRekening;
use App\Mail\SendEmail;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pekerjaan;
use App\Models\Provinsi;
use App\Models\Rekening;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function approved(Request $request, $id)
    {
        $approve = Rekening::find($id);
        if (is_null($approve)) {
            return redirect()->back();
        }
        if ($approve->status == StatusPembukaanRekening::DISETUJUI->value) {
            return redirect()->back()->with('status', 'Status sudah disetujui!');
        }

        // update status pengajuan
        $approve->status = StatusPembukaanRekening::DISETUJUI;
        $approve->save();

        // send email notification
        $customer_service = User::where('role_user', RoleUser::CUSTOMER_SERVICE->value)->get();
        foreach ($customer_service as $item) {
            $data = [
                'subject' => 'Disetujui',
                'title' => 'Pengajuan Rekening Disetujui',
                'name' => $approve->nama,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam voluptates esse delectus rerum. Sint cum illo fugiat, aut quibusdam expedita! Illum sequi accusamus delectus numquam facilis sapiente autem, magnam alias?'
            ];
            Mail::to($item->email)->send(new SendEmail($data));
        }

        return redirect()->back();
    }
}
