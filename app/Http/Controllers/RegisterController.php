<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        // Membuat user baru
        $user = new User([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
            'namaLengkap' => $request->input('namaLengkap'),
            'Alamat' => $request->input('Alamat'),
        ]);

        $user->save();

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }
}
