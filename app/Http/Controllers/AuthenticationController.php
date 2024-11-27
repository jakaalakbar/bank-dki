<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            return redirect()->route('login_view')->with('status', 'Register success!');
        }

        return redirect()->back()->with('status', 'Register failed!');
    }

    public function loginView()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && $user->is_blocked) {
            return redirect()->back()->with('status', 'Akun Anda diblokir!');
        }

        if ($user && Hash::check($password, $user->password)) {
            // Reset login attempts
            $user->login_attempts = 0;
            $user->is_blocked = false;
            $user->save();

            return redirect()->route('beranda');
        }

        if ($user) {
            $user->login_attempts++;
            if ($user->login_attempts >= 3) {
                $user->is_blocked = true;
            }
            $user->save();
        }

        return redirect()->back()->with('status', 'Email atau password salah!');
    }
}
