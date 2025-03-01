<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Authcontroler extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function aksilogin(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('Home')->with('success', 'Login berhasil! Selamat datang kembali, ' . Auth::user()->name);
        }

        return back()->with('error', 'Login gagal! Email atau password salah.');
    }

    public function aksiregister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }
    public function register()
    {
        return view('register');
    }


    public function home()
    {
        return view('home');
    }

    public function logout(Request $request){

        Auth::logout(); // Logout user dari session

        $request->session()->invalidate(); // Hapus session
        $request->session()->regenerateToken(); // Regenerasi token CSRF untuk keamanan

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }
}


