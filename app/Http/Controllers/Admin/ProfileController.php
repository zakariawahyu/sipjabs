<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use File;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with(['pegawai', 'pegawai.jabatanstruktural', 'pegawai.jabatanstruktural.jabatan',
                            'pegawai.jabatanstruktural.unitkerja', 'pegawai.jabatanstruktural.unitbagian'])
                            ->where('users.id', '=', session('id'))
                            ->first();

        return view('admin.profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::with(['pegawai', 'pegawai.jabatanstruktural', 'pegawai.jabatanstruktural.jabatan',
                            'pegawai.jabatanstruktural.unitkerja', 'pegawai.jabatanstruktural.unitbagian'])
                            ->where('users.id', '=', session('id'))
                            ->first();

        return view('admin.profile.edit', compact('user'));
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
        $user = User::find($id);
        Storage::delete($user->url_foto);
        // $request->gambar->move(public_path('asset/dist/img'), $imageName);
        $image_path = public_path('/asset/images/'.Auth::user()->url_foto);  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $photo = $request->file('gambar');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/asset/images/');
        $thumb_img = Image::make($photo->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);

        User::where('id', $id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'url_foto' => $imagename
        ]);

        return back()->with('succes', 'Profile berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function help()
    {
        return view('admin.profile.help');
    }
}
