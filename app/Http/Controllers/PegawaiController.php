<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('Pegawai.index', compact('pegawai'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('Pegawai.create', compact('jabatan'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $validated = $request->validate([
        //     'pegawai' => 'required'
        // ]);
        $pegawai = new Pegawai;
        $pegawai->id_jabatan = $request->id_jabatan;
        $pegawai->nik = $request->nik;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->golongan = $request->golongan;
        $pegawai->save();
        return redirect()->route('Pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('Pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('Pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request,$id)
    {
     
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'golongan' => 'required',

        ]);
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->id_jabatan = $request->id_jabatan;
        $pegawai->nik = $request->nik;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->golongan = $request->golongan;
        $pegawai->save();
        return redirect()->route('Pegawai.index');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('Pegawai.index');
    }
}
