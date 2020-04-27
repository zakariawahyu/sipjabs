<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Tallent;
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
        $tallents = Tallent::select('nomor_urut', 'nomor_surat')->distinct()->get();

        return view('admin.tallent.index', compact('tallents'));
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
        $tallents = Tallent::where('nomor_urut', $id)->get();

        return view('admin.tallent.show', compact('tallents'));
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

     public function cetak_pdf($id)
    {
        $tallents = Tallent::where('nomor_urut', $id)
                            ->get();

        $nosurat = Tallent::select('nomor_surat')
                            ->where('nomor_urut', $id)
                            ->distinct()
                            ->get();

        $pdf = PDF::Loadview('admin.tallent.cetak', compact('tallents', 'nosurat'));
        return $pdf->download('laporan-tallent-pdf');

    }
}
