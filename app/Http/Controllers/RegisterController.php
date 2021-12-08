<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function save(Request $request)
    {
        /* validasi inputan user dari menu register */
        $validated = $request->validate([
            'email'=>'required|email:dns|max:255|unique:users',
            'username'=>'required|max:20|unique:users',
            'password'=>'required|min:6',
        ]);
        
        /* memasukkan input user yang sudah divalidasi ke tabel user */
        User::create([
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
        ]);
        
        return redirect('login')->with('success', 'Register telah berhasil! Silahkan login terlebih dahulu!');
    }
}
