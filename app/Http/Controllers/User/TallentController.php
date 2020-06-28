<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Tallent;
use App\Pegawai;
use App\Cart;
use App\PosisiKosong;
use PDF;

use Illuminate\Http\Request;

class TallentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tallents = Tallent::select(DB::raw('count(*) as count, id_posisikosong'))->where('id_user', session('id'))->groupBy('id_posisikosong')->get();

        return view('user.tallent.index', compact('tallents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $tallents = Tallent::where('id_posisikosong', $id)
                            ->where('id_user', session('id'))
                            ->get();

        return view('user.tallent.show', compact('tallents'));
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
        $tallents = Tallent::where('id_user', session('id'))
                        ->where('id', $id)->first();
        
        if ($tallents != null)
        {
            $tallents->delete();

            return back()->with('succes', 'Berhasil dihapus dalam data kandidat');

        } else
        {
            return back()->with('error', 'Pegawai tidak ditemukan');
        }
    }

    public function cetak_pdf($id)
    {
        $tallents = Tallent::where('id_user', session('id'))
                            ->where('id_posisikosong', $id)
                            ->get();

        $nomor = Tallent::select('nomor_surat', 'created_at')
                            ->where('id_user', session('id'))
                            ->where('id_posisikosong', $id)
                            ->first();


        $pdf = PDF::Loadview('user.tallent.cetak', compact('tallents', 'nomor'));
        return $pdf->download('laporan-kandidat.pdf');

    }

    public function addTallent($id)
    {
        $noUrutAkhir = Tallent::max('nomor_urut');
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $kode = 'YSDM';
        $no = 1;

        $carts = Cart::where('id_user', session('id'))
                        ->where('id_posisikosong', $id)->get();
        
        if($noUrutAkhir)
        {
        $nourut = sprintf("%03s", abs($noUrutAkhir + 1));
        $nosurat = sprintf("%03s", abs($noUrutAkhir + 1)). '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');

        } else 
        {
        $nourut = sprintf("%03s", $no);
        $nosurat = sprintf("%03s", $no). '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');

        }

        foreach ($carts as $ct ) {
            $tallent = new Tallent;
        $tallent->id_user = $ct->id_user;
        $tallent->id_pegawai = $ct->id_pegawai;
        $tallent->nomor_urut = $nourut;
        $tallent->nomor_surat = $nosurat;
        $tallent->id_posisikosong = $ct->id_posisikosong;
        $tallent->save();

        $ct->delete();
        }

        PosisiKosong::where('id', $id)->update([
            'status_posisi' => 'Sudah Terpenuhi'
        ]);

        

        return back()->with('succes', 'Berhasil di proses, silahkan cek data kandidat');
    }
}
