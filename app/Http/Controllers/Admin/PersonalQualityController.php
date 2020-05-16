<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PersonalQuality;

class PersonalQualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalquality = PersonalQuality::all();

        return view('admin.personalquality.index', compact('personalquality'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personalquality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personalquality = PersonalQuality::where('nama_personalquality', $request->personalquality)->first();

        if ($personalquality == null) 
        {
            PersonalQuality::create([
                'nama_personalquality' => $request->personalquality
            ]);
            
            return back()->with('succes', 'Personal Quality berhasil ditambahkan');

        } else 
        {

            return back()->with('error', 'Personal Quality sudah ada dalam database');

        }
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
        $personalquality = PersonalQuality::find($id);

        return view('admin.personalquality.edit', compact('personalquality'));
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
        PersonalQuality::where('id', $id)->update([
            'nama_personalquality' => $request->personalquality
        ]);

        return back()->with('succes', 'Personal Quality berhasil di update');
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
