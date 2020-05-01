<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\UnitKerja;

use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $unitkerja = UnitKerja::all();

        return view('admin.unitkerja.index', compact('unitkerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unitkerja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unitkerja = Unitkerja::where('nama_unitkerja', $request->unitkerja)->first();

        if ($unitkerja == null) 
        {
            UnitKerja::create([
                'nama_unitkerja' => $request->unitkerja
            ]);
            
            return back()->with('succes', 'Unit kerja berhasil ditambahkan');

        } else 
        {

            return back()->with('error', 'Unit kerja sudah ada dalam database');

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
        $unitkerja = UnitKerja::find($id);

        return view('admin.unitkerja.edit', compact('unitkerja'));
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
        UnitKerja::where('id', $id)->update([
            'nama_unitkerja' => $request->unitkerja
        ]);

        return back()->with('succes', 'Unit Kerja berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unitkerja = UnitKerja::find($id);

        $unitkerja->delete();

        return back()->with('succes', 'Unit Kerja berhasil dihapus');
    }
}
