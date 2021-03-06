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
        $request->session()->put('status', Auth::user()->status);
        $request->session()->put('id', Auth::id());

        $level = session('role');
        $status = session('status');

            if($level == 'admin' && $status == 1) {
            // jika berhasil login dan role admin
            $request->session()->put('role', Auth::user()->role);
            $request->session()->put('id', Auth::id());

            return redirect('admin');

            }elseif($level == 'user' && $status == 1) {
                // jika berhasil login dan role user
                $request->session()->put('role', Auth::user()->role);
                $request->session()->put('id', Auth::id());

                return redirect('user');
            } else {
                return redirect('login')->with('error','Akun belum aktif !!');
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
