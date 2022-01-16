<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Lembur;
use App\Models\Cuti;




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
    public function laporan()
    {
        $laporan = Penggajian::all();
        return view('Penggajian.laporan', compact('laporan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        $lembur = Lembur::all();
        $cuti = Cuti::all();


        return view('Penggajian.create', compact('pegawai','jabatan','lembur','cuti'));     
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggajian = new Penggajian;
        //db              create
        $penggajian->id_pegawai = $request->id_pegawai;
        $penggajian->id_jabatan = $request->id_jabatan;
        $penggajian->id_lembur = $request->id_lembur;
        $penggajian->id_cuti = $request->id_cuti;
       
        $jabatan = Jabatan::findOrFail($request->id_jabatan);
        $lembur = Lembur::findOrFail($request->id_lembur);
        $cuti = Cuti::findOrFail($request->id_cuti);
        $penggajian->total = $jabatan['jumlah'] + $jabatan['gaji_pokok'] + $lembur['jumlah'] - $cuti['jumlah'] + $jabatan['tunjangan_jabatan'];
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
        // $penggajian = Penggajian::findOrFail($id);
        // return view('Penggajian.edit', compact('penggajian'));
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
        $penggajian = new Penggajian;
        //db              create
        $penggajian->id_pegawai = $request->id_pegawai;
        $penggajian->id_jabatan = $request->id_jabatan;
        $penggajian->id_lembur = $request->id_lembur;
        $penggajian->id_cuti = $request->id_cuti;
       
        $jabatan = Jabatan::findOrFail($request->id_jabatan);
        $lembur = Lembur::findOrFail($request->id_lembur);
        $cuti = Cuti::findOrFail($request->id_cuti);
        $penggajian->total = $jabatan['jumlah'] + $jabatan['gaji_pokok'] + $lembur['jumlah'] - $cuti['jumlah'] + $jabatan['tunjangan_jabatan'];
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
