<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function authenticate()
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = request()->only('username', 'password');

        if (Auth::attempt($credentials, request()->remember)) {
            // Authentication passed...
            return redirect()->intended(route('home'));
        }else{
            return back()->withInput()->with('error-login', true);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function changepassword()
    {
        return view('pages.auth.change-password');
    }

    public function confirmChangePassword()
    {
        request()->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = Auth::user();
        if(Hash::check(request()->old_password, $user->password)){
            $user->update(['password' => bcrypt(request()->password)]);
            return back()->with('success', 'Password berhasil diganti');
        }else{
            return back()->with('error', 'Password lama anda salah');
        }
    }
}
