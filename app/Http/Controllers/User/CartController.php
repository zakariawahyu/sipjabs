<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Pegawai;
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

        return view('user.cart.index', compact('carts'));
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
        
        return view('user.cart.show', compact('pegawai'));
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

            return back()->with('succes', 'Berhasil dihapus dalam cart');

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

        $carts = Cart::where('id_user', session('id'))
                    ->where('id_pegawai', $valuepegawai)->get();
        
            
        if ($carts->count()>0)
        {

            return back()->with('error', 'Pegawai sudah di cart');

        } else
        {

        Cart::create([
            'id_user' => session('id'),
            'id_pegawai' => $valuepegawai,
            'id_jabstruklama' => $jabstruk->id
        ]);

        return back()->with('succes', 'Berhasil ditambahkan ke cart');

        }

        
    }
}
