<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggajian = Penggajian::all();
        return view('Penggajian.index', compact('penggajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('Penggajian.create', compact('pegawai',));     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $validated = $request->validate([
        //     'penggajian' => 'required'
        // ]);

        $penggajian = new Penggajian;
        //db              create
        $penggajian->id_karyawan = $request->id_karyawan;
        $penggajian->id_jabatan = $request->id_jabatan;
        $penggajian->lemburan = $request->lemburan;
        $penggajian->potongan = $request->potongan;
        $penggajian->jumlah = $request->jumlah;
        $penggajian->save();
        return redirect()->route('Penggajian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penggajian = Penggajian::findOrFail($id);
        return view('Penggajian.show', compact('penggajian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penggajian = Penggajian::findOrFail($id);
        return view('Penggajian.edit', compact('penggajian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'lemburan' => 'required',
            'potongan' => 'required',
            'jumlah' => 'required',

        ]);
        $penggajian->id_karyawan = $request->id_karyawan;
        $penggajian->id_jabatan = $request->id_jabatan;
        $penggajian->lemburan = $request->lemburan;
        $penggajian->potongan = $request->potongan;
        $penggajian->jumlah = $request->jumlah;
        $penggajian->save();
        return redirect()->route('Penggajian.index');
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penggajian = Penggajian::findOrFail($id);
        $penggajian->delete();
        return redirect()->route('Penggajian.index');
    }
}
