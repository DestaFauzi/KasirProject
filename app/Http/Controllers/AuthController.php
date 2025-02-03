<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect based on role
            if (Auth::user()->role ==='admin') {
                return redirect()->route('admin-dashboard');
            } elseif (Auth::user()->role === 'kasir') {
                return redirect()->route('kasir-dashboard');
            }
        }

        return back()->withErrors([
            'error' => 'Username atau password salah.',
        ]);
    }

    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
            'role'     => 'required|in:admin,kasir',
        ]);

        // Buat pengguna baru
        User::create([
            'username' => $request->username,
            // 'password' => Hash::make($request->password),
            'password' => $request->password,
            'role'     => $request->role,
        ]);

        return redirect()->route('login.form')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}