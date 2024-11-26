<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function registerView()
    {
        return view('pages.register');
    }
    public function register(RegisterRequest $request)
    {
        $value = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_user' => $request->input('role_user'),
        ];

        $register = User::create($value);

        if ($register) {
            return redirect()->route('login')->with('status', 'Register success!');
        }

        return redirect()->back()->with('status', 'Register failed!');
    }
}
