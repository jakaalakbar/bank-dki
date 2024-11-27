<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        $user = User::all();
        return view('pages.admin.beranda', compact('user'));
    }

    public function bukaBlokir(Request $request, $id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return redirect()->back();
        }
        
        $user->is_blocked = false;
        $user->save();

        return redirect()->back();
    }
}
