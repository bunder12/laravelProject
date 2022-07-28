<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class authcontroller extends Controller
{
    public function login(Request $request)
    {
        // return $request;

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->level == 0) {
                return redirect('/beranda');
            }
            if (Auth::user()->level == 1) {
                return redirect('/dashboard');
            }
        }
        return redirect('/login')->with('danger', 'Masukkan email dan password dengan benar!');
    }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect('/login')->with('success', 'Berhasil Logout!');
    // }
}
