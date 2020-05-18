<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Pegawai;
use DataTables;
use App\UnitKerja;
use App\Jabatan;
use App\UnitBagian;
use App\JabatanStruktural;

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
        return view('admin.pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuspegawai = Pegawai::select('status_pegawai')->distinct()->get();
        $unitkerja = UnitKerja::all();

        return view('admin.pegawai.create', compact('statuspegawai', 'unitkerja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PecahStr = explode(' ', $request->jabatanstruktural);
        $valueunitkerja = $PecahStr[0];
        $valuejabatan = $PecahStr[1];
        $valueunitbagian = $PecahStr[2];


        $jabstruk = JabatanStruktural::where('id_unitkerja', $valueunitkerja)
                                    ->where('id_jabatan', $valuejabatan)
                                    ->where('id_unitbagian', $valueunitbagian)
                                    ->first();

        $pegawai = Pegawai::create([
            'nama_lengkap' => $request->nama,
            'nip' => $request->nip,
            'status_pegawai' => $request->statuspegawai,
            'id_jabatanstruktural' => $jabstruk->id,
            'jenis_kelamin' => $request->jeniskelamin,
            'ttl' => $request->jeniskelamin,
            'gol_darah' => $request->goldarah,
            'status_perkawinan' => $request->statusperkawinan,
            'agama' => $request->agama,
            'tinggi_badan' => $request->tinggibadan,
            'berat_badan' => $request->beratbadan,
            'alamat' => $request->alamat,
            'kode_etik' => $request->kodeetik,
            'masa_kerja' => $request->mk
        ]);


        return back()->with('succes', 'Pegawai berhasil ditambahkan');

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

        return view('admin.pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        $statuspegawai = Pegawai::select('status_pegawai')->distinct()->get();
        $unitkerja = UnitKerja::all();
        $jabatan = Jabatan::all();
        $unitbagian = UnitBagian::all();

        return view('admin.pegawai.edit', compact('pegawai', 'statuspegawai', 'unitkerja', 'jabatan', 'unitbagian'));
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

    public function dataTables()
    {
        $pegawai = Pegawai::with(['jabatanstruktural', 'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian'])
                                ->orderBy('pegawai.id', 'asc')
                                ->get();
        
        return DataTables::of($pegawai)
                        ->addColumn('action', function($pegawai){
                            return view('admin.pegawai.action', [
                                'pegawai' => $pegawai,
                                'url_show' => route('admin.pegawai.show', $pegawai->id),
                                'url_edit' => route('admin.pegawai.edit', $pegawai->id)
                            ]);
                        })
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->make(true);
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
