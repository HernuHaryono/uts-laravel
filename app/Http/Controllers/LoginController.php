<?php

namespace App\Http\Controllers;

use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function halamanlogin()
    {
        return view('Login.login-aplikasi');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        }
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi()
    {
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request)
    {
        dd($request->all());
    }
}
