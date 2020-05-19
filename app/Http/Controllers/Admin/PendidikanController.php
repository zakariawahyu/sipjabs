<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendidikan;
use App\Pegawai;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();

        return view('admin.pendidikan.index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenjang = Pendidikan::select('jenjang_pendidikan')->distinct()->get();

        return view('admin.pendidikan.create', compact('jenjang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendidikan = Pendidikan::where('jurusan', $request->jurusan)
                            ->where('jenjang_pendidikan', $request->jenjang)
                            ->first();

        if ($pendidikan == null) 
        {
            Pendidikan::create([
                'jenjang_pendidikan' => $request->jenjang,
                'jurusan' => $request->jurusan
            ]);
            
            return back()->with('succes', 'Pendidikan berhasil ditambahkan');

        } else 
        {

            return back()->with('error', 'Pendidikan sudah ada dalam database');

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
        $pendidikan = Pendidikan::find($id);

        $pegawai = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan'])
                            ->whereHas('riwayatpendidikan.pendidikan', function($q) use($id){
                                $q->where('id', $id);
                            })
                            ->get();
        
        return view('admin.pendidikan.show', compact('pegawai', 'pendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenjang = Pendidikan::select('jenjang_pendidikan')->distinct()->get();

        $pendidikan = Pendidikan::find($id);

        return view('admin.pendidikan.edit', compact('jenjang', 'pendidikan'));
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
        Pendidikan::where('id', $id)->update([
            'jenjang_pendidikan' => $request->jenjang,
            'jurusan' => $request->jurusan,
        ]);

        return back()->with('succes', 'Pendidikan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);

        $pendidikan->delete();

        return back()->with('succes', 'Pendidikan berhasil dihapus');
    }
}
