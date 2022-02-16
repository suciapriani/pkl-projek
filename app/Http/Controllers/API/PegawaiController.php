<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
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
        return response()->json([
            'success' => true,
            'message' => 'Data pegawai',
            'data' => $pegawai,
        ], 200);
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
        return response()->json([
            'success' => true,
            'message' => 'Data pegawai Berhasil Dibuat',
            'data' => $pegawai,
        ], 201);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        if ($pegawai) {
        return response()->json([
            'success' => true,
            'message' => 'Data pegawai ditemukan',
            'data' => $pegawai,
        ], 200);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Data pegawai tidak ditemukan',
            'data' => [],
        ], 404);
      }
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
        $pegawai = Pegawai::find($id);
        if ($pegawai) {
        $pegawai->id_jabatan = $request->id_jabatan;
        $pegawai->nik = $request->nik;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_telp = $request->no_telp;
        $pegawai->golongan = $request->golongan;
        $pegawai->save(); 
        return response()->json([
            'success' => true,
            'message' => 'Data pegawai Berhasil diedit',
            'data' => $pegawai,
        ], 201);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Data pegawai tidak ditemukan',
            'data' => [],
        ], 404);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pegawai = Pegawai::find($id);
        if ($pegawai) {
            $pegawai->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data pegawai Berhasil dihapus',
                'data' => $pegawai,
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data pegawai tidak ditemukan',
                'data' => [],
            ], 404);
          }
    }
}
