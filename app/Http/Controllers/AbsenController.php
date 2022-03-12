<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absensi::all();
        return view('Absen.index', compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('Absen.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_absen' => 'required',
            'keterangan' => 'required',
           
        ]);
        $absen = new Absensi;
        $absen->id_karyawan = $request->id_karyawan;
        $absen->tgl_absen = $request->tgl_absen;
        $absen->keterangan = $request->keterangan;
        $absen->save();
        return redirect()->route('Absen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absensi::findOrFail($id);
        return view('Absen.show', compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::all();
        $absen = Absensi::findOrFail($id);
        return view('Absen.edit', compact('absen','pegawai')); 
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
        $request->validate([
            'tgl_absen' => 'required',
            'keterangan' => 'required',
           
        ]);
        $absen = new Absensi;
        $absen->id_karyawan = $request->id_karyawan;
        $absen->tgl_absen = $request->tgl_absen;
        $absen->keterangan = $request->keterangan;
        $absen->save();
        return redirect()->route('Absen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absen = Absensi::findOrFail($id);
        $absen->delete();
        return redirect()->route('Absen.index');
    }
}
