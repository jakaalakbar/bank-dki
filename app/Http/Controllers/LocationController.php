<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocationController extends Controller
{
    public function provinsi()
    {
        $provinsi = Provinsi::all();

        return response()->json([
            'kode' => Response::HTTP_OK,
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'data' => $provinsi
        ], Response::HTTP_OK);
    }

    public function kabupaten($kode_provinsi)
    {
        if (!is_numeric($kode_provinsi)) {
            return response()->json([
                'kode' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'status' => Response::$statusTexts[Response::HTTP_UNPROCESSABLE_ENTITY],
                'message' => 'Parameter harus berupa angka'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $kabupaten = Kabupaten::where('kode_provinsi', $kode_provinsi)
            ->get();

        return response()->json([
            'kode' => Response::HTTP_OK,
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'data' => $kabupaten
        ], Response::HTTP_OK);
    }

    public function kecamatan($kode_kabupaten)
    {
        if (!is_numeric($kode_kabupaten)) {
            return response()->json([
                'kode' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'status' => Response::$statusTexts[Response::HTTP_UNPROCESSABLE_ENTITY],
                'message' => 'Parameter harus berupa angka'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $kecamatan = Kecamatan::where('kode_kabupaten', $kode_kabupaten)
            ->get();

        return response()->json([
            'kode' => Response::HTTP_OK,
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'data' => $kecamatan
        ], Response::HTTP_OK);
    }

    public function kelurahan($kode_kecamatan)
    {
        if (!is_numeric($kode_kecamatan)) {
            return response()->json([
                'kode' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'status' => Response::$statusTexts[Response::HTTP_UNPROCESSABLE_ENTITY],
                'message' => 'Parameter harus berupa angka'
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $kelurahan = Kelurahan::where('kode_kecamatan', $kode_kecamatan)
            ->get();
        return response()->json([
            'kode' => Response::HTTP_OK,
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'data' => $kelurahan
        ], Response::HTTP_OK);
    }
}
