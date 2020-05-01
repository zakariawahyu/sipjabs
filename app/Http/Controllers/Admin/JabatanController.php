<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Jabatan;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();

        return view('admin.jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $leveljabatan = Jabatan::select('level_jabatan')->distinct()->get();

        return view('admin.jabatan.create', compact('leveljabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jabatan= Jabatan::where('nama_jabatan', $request->jabatan)->first();

        if ($jabatan == null) 
        {
            Jabatan::create([
                'nama_jabatan' => $request->jabatan,
                'level_jabatan' => $request->level
            ]);

            return back()->with('succes', 'Jabatan berhasil ditambahkan');

        } else 
        {

            return back()->with('error', 'Jabatan sudah ada dalam database');

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
        $jabatan = Jabatan::find($id);

        return view('admin.jabatan.edit', compact('jabatan'));
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
        Jabatan::where('id', $id)->update([
            'nama_jabatan' => $request->jabatan,
            'level_jabatan' => $request->level
        ]);

        return back()->with('succes', 'Jabatan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);

        $jabatan->delete();

        return back()->with('succes', 'Jabatan berhasil dihapus');
    }
}
