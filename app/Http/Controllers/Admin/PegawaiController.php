<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pegawai = DB::table('pegawai')
                ->join('jabatan_struktural', 'pegawai.id_jabatanstruktural', '=', 'jabatan_struktural.id')
                ->join('unit_kerja', 'jabatan_struktural.id_unitkerja', '=', 'unit_kerja.id')
                ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id')
                ->select('jabatan_struktural.*', 'jabatan.*', 'unit_kerja.*', 'unit_bagian.*', 'pegawai.*')
                ->orderBy('pegawai.id', 'asc')
                ->get();

        return view('admin.pegawai.index')->withPegawai($pegawai);
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
        $pegawai = DB::table('pegawai')
                ->join('jabatan_struktural', 'pegawai.id_jabatanstruktural', '=', 'jabatan_struktural.id')
                ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                ->join('unit_kerja', 'jabatan_struktural.id_unitkerja', '=', 'unit_kerja.id')
                ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id')
                ->where('pegawai.id', '=', $id)
                ->first();
        
        $riwayatpendidikan = DB::table('riwayat_pendidikan')
                ->join('pendidikan', 'riwayat_pendidikan.id_pendidikan', '=', 'pendidikan.id')
                ->join('pegawai', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id')
                ->where('pegawai.id', '=', $id)
                ->get();
        
        $skill = DB::table('skill_pegawai')
                ->join('skill', 'skill_pegawai.id_skill', '=', 'skill.id')
                ->join('pegawai', 'skill_pegawai.id_pegawai', '=', 'pegawai.id')
                ->where('pegawai.id', '=', $id)
                ->get();
        

        return view('admin.pegawai.show', compact('pegawai', 'riwayatpendidikan', 'skill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
