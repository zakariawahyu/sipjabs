<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Jabatan;
use App\Pegawai;

use App\PegawaiDb;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();

        return view('user.filter.index', compact('jabatan'));
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
        $pegawai = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',
                                'skillpegawai', 'skillpegawai.skill'])
                            ->where('pegawai.id', $id)
                            ->first();
        
        return view('user.filter.show', compact('pegawai'));
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

    public function filtertallent(Request $request)
    {
        // mengambil data dari model
        $pegawai_model = new PegawaiDB();
        $pegawai = $pegawai_model->getFilteredPegawai($request);

        // ambil status url
        $orderby = $request->order_by;
        $show = $request->show;
        $level = $request->level;
        $masakerja = $request->masakerja;
        $selected_status = $request->status_pegawai;
        $selected_jenjang = $request->jenjang;
        $selected_jurusan = $request->jurusan;
        $selected_skill = $request->skill;

        // ambil data status pegawai dari model
        $statuspegawai = $pegawai_model->getStatusPegawai();

        // ambil data jenjang pendidikan
        $jenjangpendidikan = $pegawai_model->getDataJenjang();

        // ambil data jurusan
        $jurusan = $pegawai_model->getDataJurusan();

        // ambil data skill
        $skill = $pegawai_model->getDataSkill();

        return view('user.filter.filter', compact('pegawai', 'orderby', 'show', 'level', 
                    'masakerja', 'statuspegawai', 'jenjangpendidikan','jurusan', 'selected_jenjang', 
                    'selected_jurusan', 'selected_status', 'skill', 'selected_skill'));
    }
}
