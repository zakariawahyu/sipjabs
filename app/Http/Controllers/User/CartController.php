<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Pegawai;
use App\PosisiKosong;
use App\JabatanStruktural;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari model
        $cart_model = new Cart();
        $carts = $cart_model->getCart();

        $posisi = Cart::select(DB::raw('count(*) as count, id_posisikosong'))->where('id_user', session('id'))->groupBy('id_posisikosong')->get();

        return view('user.cart.index', compact('carts', 'posisi'));
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
        $cart = Cart::where('id_pegawai', $id)->first();

        $pegawai = Pegawai::with(['riwayatpendidikan', 'riwayatpendidikan.pendidikan', 'jabatanstruktural', 
                                'jabatanstruktural.jabatan', 'jabatanstruktural.unitbagian', 'jabatanstruktural.unitkerja',
                                'skillpegawai', 'skillpegawai.skill'])
                            ->where('pegawai.id', $id)
                            ->first();
        
        return view('user.cart.show', compact('pegawai', 'cart'));
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
        $carts = Cart::where('id_user', session('id'))
                        ->where('id_pegawai', $id)->first();
        
        if ($carts->count()>0)
        {
            $carts->delete();

            return back()->with('succes', 'Berhasil dihapus dalam kandidat sementara');

        } else
        {
            return back()->with('error', 'Pegawai tidak ditemukan');
        }
    }

    public function addCart($id)
    {

        $str = str_replace('%20',' ',$id);
        $PecahStr = explode(' ', $str);
        $valuepegawai = $PecahStr[0];
        $valueunitkerja = $PecahStr[1];
        $valuejabatan = $PecahStr[2];
        $valueunitbagian = $PecahStr[3];

        if ( ! isset($PecahStr[1])) {
            $PecahStr[1] = null;
        }

        $jabstruk = JabatanStruktural::where('id_unitkerja', $valueunitkerja)
                                            ->where('id_jabatan', $valuejabatan)
                                            ->where('id_unitbagian', $valueunitbagian)
                                            ->first();

        $posisikosong = PosisiKosong::where('id_jabatanstruktural', $jabstruk->id)
                                    ->first();

        $carts = Cart::where('id_user', session('id'))
                    ->where('id_pegawai', $valuepegawai)->get();
        
            
        if ($carts->count()>0)
        {

            return back()->with('error', 'Pegawai sudah di kandidat sementara');

        } else
        {

        Cart::create([
            'id_user' => session('id'),
            'id_posisikosong' => $posisikosong->id,
            'id_pegawai' => $valuepegawai
            
        ]);

        return back()->with('succes', 'Berhasil ditambahkan ke dalam kandidat sementara');

        }

        
    }
}
