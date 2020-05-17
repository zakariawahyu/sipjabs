<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\PegawaiDb;
use App\Jabatan;
use App\UnitKerja;
use App\UnitBagian;
use App\Pegawai;
use App\Cart;
use App\JabatanStruktural;


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
        $unitkerja = UnitKerja::all();
        $unitbagian = UnitBagian::all();

        return view('user.filter.index', compact('jabatan', 'unitkerja', 'unitbagian'));
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
        $selected_personalquality = $request->personalquality;
        $selected_kodeetik = $request->kode_etik;
        $jabstruk = $request->jabatanstruktural;

        // ambil data status pegawai dari model
        $statuspegawai = $pegawai_model->getStatusPegawai();

        // ambil data kode etik dari model
        $kodeetik = $pegawai_model->getKodeEtik();

        // ambil data jenjang pendidikan
        $jenjangpendidikan = $pegawai_model->getDataJenjang();

        // ambil data jurusan
        $jurusan = $pegawai_model->getDataJurusan();

        // ambil data skill
        $skill = $pegawai_model->getDataSkill();

        // ambil data personal quality
        $personalquality = $pegawai_model->getDataPersonalQuality();


        return view('user.filter.filter', compact('pegawai', 'orderby', 'show', 'level', 'jabstruk' ,
                    'masakerja', 'statuspegawai', 'jenjangpendidikan','jurusan', 'selected_jenjang', 
                    'selected_jurusan', 'selected_status', 'skill', 'selected_skill', 'personalquality',
                    'selected_personalquality', 'kodeetik', 'selected_kodeetik'));
    }

    public function getJabatan($id)
    {
        $jabatan = JabatanStruktural::with(['jabatan', 'unitbagian', 'unitkerja'])
                            ->select('id_jabatan')
                            ->where('id_unitkerja', $id)
                            ->distinct()
                            ->get();

        return response()->json($jabatan); 
    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $dependent = $request->get('dependent');

        if ($select == 'unitkerja') {
            $value = $request->get('value');

            $data = DB::table('jabatan_struktural')
                    ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                    ->where('id_unitkerja', $value)
                    ->groupBy('id_jabatan')
                    ->get();

            $output = '<option value="">Select Jabatan</option>';

            foreach ($data as $row) {

                $output .= '<option value="'.$row->id_unitkerja.' '.$row->id_jabatan.'">'.$row->nama_jabatan.'</option>';
            }

            echo $output;

        } else if($select == 'jabatan') {
            $value = $request->get('value');
            $PecahStr = explode(" ", $value);
            $valueunitkerja = $PecahStr[0];
            $valuejabatan = $PecahStr[1];

            $data = DB::table('jabatan_struktural')
                    ->join('unit_bagian', 'jabatan_struktural.id_unitbagian', '=', 'unit_bagian.id')
                    ->join('unit_kerja', 'jabatan_struktural.id_unitkerja', '=', 'unit_kerja.id')
                    ->join('jabatan', 'jabatan_struktural.id_jabatan', '=', 'jabatan.id')
                    ->where('id_unitkerja', $valueunitkerja)
                    ->where('id_jabatan', $valuejabatan)
                    ->get();

            $output = '<option value="">Select Unit Bagian</option>';

            foreach($data as $row) {

                $output .= '<option value="'.$row->id_unitkerja.' '.$row->id_jabatan.' '.$row->id_unitbagian.'">'.$row->nama_unitbagian.'</option>';
            }

            echo $output;

        } else if($select = 'unitbagian') {
            $value = $request->get('value');
            $PecahStr = explode(" ", $value);
            $valueunitkerja = $PecahStr[0];
            $valuejabatan = $PecahStr[1];
            $valueunitbagian = $PecahStr[2];

            $jabstruk = JabatanStruktural::where('id_unitkerja', $valueunitkerja)
                                            ->where('id_jabatan', $valuejabatan)
                                            ->where('id_unitbagian', $valueunitbagian)
                                            ->first();
            
            $output = '<input type="hidden" value="'.$jabstruk->id.'" name="jabatanstruktural">';

            echo $output;

        }
    }
}
