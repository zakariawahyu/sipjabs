<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\UnitBagian;
use App\Pegawai;

use Illuminate\Http\Request;

class UnitBagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $unitbagian = UnitBagian::all();

        return view('admin.unitbagian.index', compact('unitbagian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.unitbagian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unitbagian = UnitBagian::where('nama_unitbagian', $request->unitbagian)->first();

        if ($unitbagian == null) 
        {
            UnitBagian::create([
                'nama_unitbagian' => $request->unitbagian
            ]);
            
            return back()->with('succes', 'Unit bagian berhasil ditambahkan');

        } else 
        {

            return back()->with('error', 'Unit bagian sudah ada dalam database');

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
        $unitbagian = UnitBagian::find($id);

        $pegawai = Pegawai::with(['jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',])
                            ->whereHas('jabatanstruktural.unitbagian', function($q) use($id){
                                $q->where('id', $id);
                            })
                            ->get();
        
        return view('admin.unitbagian.show', compact('pegawai', 'unitbagian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unitbagian = UnitBagian::find($id);

        return view('admin.unitbagian.edit', compact('unitbagian'));
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
        UnitBagian::where('id', $id)->update([
            'nama_unitbagian' => $request->unitbagian
        ]);

        return back()->with('succes', 'Unit Bagian berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unitbagian = UnitBagian::find($id);

        $unitbagian->delete();

        return back()->with('succes', 'Unit Bagian berhasil dihapus');
    }
}
