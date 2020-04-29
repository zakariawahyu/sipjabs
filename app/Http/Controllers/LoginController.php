<?php

namespace App\Http\Controllers;
use App\Pegawai;
use App\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('login', []);
    }

    public function proses_login(Request $request)
    {
        // ngambil data username dan password
        $username = $request->username;
        $password = $request->password;

        // query select login
        $login = Auth::attempt(['username' => $username, 'password' => $password]);

        if ($login) {
        // jika berhasil login save session
        $request->session()->put('role', Auth::user()->role);
        $request->session()->put('id', Auth::id());

        $level = session('role');

            if($level == 'admin') {
            // jika berhasil login dan role admin
            $request->session()->put('role', Auth::user()->role);
            $request->session()->put('id', Auth::id());

            return redirect('admin')->with('succes', 'Selamat datang admin '.Auth::user()->username);

            }elseif($level == 'user') {
                // jika berhasil login dan role user
                $request->session()->put('role', Auth::user()->role);
                $request->session()->put('id', Auth::id());

                return redirect('user')->with('succes', 'Selamat datang user '.Auth::user()->username);
            }
        }
        else {
        // jika gagal login
        return redirect('login')->with('error','Username dan Password salah !!');

        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('login');
    }
}
