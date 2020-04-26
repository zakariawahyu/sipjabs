<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Tallent;
use App\Pegawai;
use App\Cart;

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
        $tallents = Tallent::select('nomor_surat', 'nomor_urut')->where('id_user', session('id'))->distinct()->get();

        return view('user.tallent.index', compact('tallents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noUrutAkhir = Tallent::max('nomor_urut');
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $kode = 'YSDM';
        $no = 1;

        $carts = Cart::where('id_user', session('id'))->get();
        
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
            $tallent->save();
            
        }

        

        DB::table('carts')->delete();

        return back()->with('succes', 'Berhasil di proses, silahkan cek data tallent');

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
        $tallents = Tallent::where('nomor_urut', $id)->get();

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
        //
    }
}
