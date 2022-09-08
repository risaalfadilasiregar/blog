<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Perawatan as ModelsPerawatan;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
        $rawat = ModelsPerawatan::all();
        return view('pasien.index',compact('pasien','rawat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        $pasien2 = ModelsPerawatan::all();
        return view('pasien.create',compact('pasien','pasien2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pasien::create([
            'id_rawat' => $request->id_rawat,
            'nama_pasien' => $request->nama_pasien,
            'alamat_pasien' => $request->alamat_pasien
        ]);

        return redirect('/pasien');
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
        $pasien = Pasien::find($id);
        $rawat = ModelsPerawatan::all();
        return view('pasien.edit',compact('pasien','rawat'));
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
        $pasien = Pasien::find($id);
        $pasien->id_rawat = $request->id_rawat;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->alamat_pasien = $request->alamat_pasien;
        $pasien->save();

        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien ->delete();
        return redirect('/pasien');
    }
}
