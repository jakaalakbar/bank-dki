<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembukaanRekeningController extends Controller
{
    public function index()
    {
        return view('pages.admin.rekening');
    }

    public function create()
    {
        return view('pages.admin.create_rekening');
    }
}
