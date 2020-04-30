<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JabatanStruktural;
use DataTables;

class JabatanStrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jabatanstruktural.index');
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
        //
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

    public function dataTables()
    {
        $jabatanstruk = JabatanStruktural::with(['unitkerja', 'jabatan', 'unitbagian'])->get();

        return DataTables::of($jabatanstruk)
                        ->addColumn('action', function($jabatanstruk){
                            return view('admin.jabatanstruktural.action', [
                                'jabatanstruk' => $jabatanstruk,
                                'url_delete' => route('admin.jabatanstruktural.destroy', $jabatanstruk->id),
                                'url_edit' => route('admin.jabatanstruktural.edit', $jabatanstruk->id),
                            ]);
                        })
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->make(true);
    }
}
