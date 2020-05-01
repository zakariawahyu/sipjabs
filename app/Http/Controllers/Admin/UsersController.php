<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Pegawai;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['pegawai', 'pegawai.jabatanstruktural', 'pegawai.jabatanstruktural.jabatan',
                            'pegawai.jabatanstruktural.unitkerja', 'pegawai.jabatanstruktural.unitbagian'])
                            ->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();

        return view('admin.users.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::where('id_pegawai', $request->id_pegawai)->first();

        if ($users != null) {
            return back()->with('error', 'Pegawai sudah mempunyai akun');
        } else {

            User::create([
                'id_pegawai' => $request->id_pegawai,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'email' => $request->email,
                'role' => $request->role,
            ]);

            return back()->with('succes', 'Pegawai berhasil di daftarkan sebagai users');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return back()->with('succes', 'Users berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);

        $users->delete();

        return back()->with('succes', 'User berhasil dihapus');
    }
}
