<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function showformlogin()
    {
        $pageTitle = "Login Panel";
        return view('login', compact('pageTitle'));
    }

    public function authlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->with('success', 'Berhasil login.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Kombinasi username dan password salah.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Anda telah berhasil logout.');

    }
}