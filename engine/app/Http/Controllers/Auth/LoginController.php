<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginController extends Controller
{
    public function showformlogin()
    {
        $pageTitle = "Login Panel";
        return view('login', compact('pageTitle'));
    }

    public function authLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'Pass' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('users')->where('username', $username)->first();

        if ($user && password_verify($password, $user->password)) {
            $notify[] = ['Login', 'Berhasil Login '];
            return redirect()->route('dashboard')->withNotify($notify);
        } else {
            $notify[] = ['Login', 'Auth Tidak Sesuai '];
            return redirect()->route('login')->withInput()->withNotify($notify);
        }
    }
}
