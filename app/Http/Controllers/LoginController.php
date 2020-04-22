<?php

namespace App\Http\Controllers;
use App\Pegawai;
use App\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        public function getDataByUser()
    {
        $test = 1;
      // $users = User::orderBy('created_at', 'ASC')->get();
      $pegawai = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja', 'skillpegawai', 'skillpegawai.skill'])
                ->whereHas('skillpegawai.skill', function($q) use($test){
                    $q->where('id', '=', $test);
                })
                ->orderBy('created_at', 'ASC')
                ->get();

                // dd($pegawai);

                return view('welcome', compact('pegawai'));
    //   return response()->json(['data' => $pegawai]);
    }

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
