<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){

        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'sandi' => 'required|min:8|max:255',
        ]);

        User::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'sandi' => $request->sandi,
        ]);
        return redirect('login');
    }
}
