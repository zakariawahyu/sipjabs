<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('login', []);
    }

    public function proses_login(Request $request) {
        $username = $request->username;
        $password = $request->password;

        $login = Auth::attempt(['username' => $username, 'password' => $password]);

        if ($login) {
        $request->session()->put('role', Auth::user()->role);
        $request->session()->put('id', Auth::id());

        $level = session('role');

        if($level == 'admin') {
        $request->session()->put('role', Auth::user()->role);
        $request->session()->put('id', Auth::id());

        return redirect('admin');
        }
        elseif($level == 'user') {
            $request->session()->put('role', Auth::user()->role);
            $request->session()->put('id', Auth::id());

            return redirect('user');
        }
        }
        else {
        return redirect('login')->with('error','Username dan Password salah !!');
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('login');
    }
}
