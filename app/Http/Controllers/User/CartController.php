<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Pegawai;

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
        $cart = new Cart;

        $cart->id_user = session('id');
        $cart->id_pegawai = $request->id;

        $cart->save();

        return back()->with('succes', 'Berhasil ditambahkan ke Cart');
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
        $carts = Cart::where('id_user', session('id'))
                        ->where('id_pegawai', $id)->get();
        
            
        if ($carts->count()>0)
        {

            return back()->with('error', 'Pegawai sudah di cart');

        } else
        {

        $cart = new Cart;

        $cart->id_user = session('id');
        $cart->id_pegawai = $id;

        $cart->save();

        return back()->with('succes', 'Berhasil ditambahkan ke cart');

        }

        
    }
}
