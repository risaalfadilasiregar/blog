<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wilayah = Wilayah::all();
        return view('wilayah.index', compact('wilayah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayah = Wilayah::all();
        return view('wilayah.create', compact('wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wilayah::create([
            'nama_kelurahan' => $request->nama_kelurahan,
            'nama_kecamatan' => $request->nama_kecamata,
            'nama_kota' => $request->nama_kota,
            'nama_provinsi' => $request->nama_provinsi
        ]);

        return redirect('/wilayah');
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
        $wilayah = Wilayah::find($id);
        return view('wilayah.edit', compact('wilayah'));
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
        $wilayah = Wilayah::find($id);
        $wilayah->nama_kelurahan = $request->nama_kelurahan;
        $wilayah->nama_kecamatan= $request->nama_kecamatan;
        $wilayah->nama_kota = $request->nama_kota;
        $wilayah->nama_provinsi = $request->nama_provinsi;
        $wilayah->save();

        return redirect('/wilayah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->delete();

        return redirect('/wilayah');

    }
}
