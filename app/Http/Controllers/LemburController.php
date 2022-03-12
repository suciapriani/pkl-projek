<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use App\Models\Pegawai;

use Carbon\Carbon;
use Illuminate\Http\Request;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembur = Lembur::all();
        return view('Lembur.index', compact('lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('Lembur.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tgl_lembur' => 'required|date|after_or_equal:'.Carbon::now()->startOfMonth().'|before_or_equal:'.Carbon::now()->endOfMonth()
        ]);

        $lembur = new Lembur;
        //db              create
        $lembur->id_karyawan = $request->id_karyawan;
        $lembur->tgl_lembur = $request->tgl_lembur;
        $lembur->jumlah = $request->jumlah;
        $lembur->save();
        return redirect()->route('Lembur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lembur = Lembur::findOrFail($id);
        return view('Lembur.show', compact('lembur'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::all();
        $lembur = Lembur::findOrFail($id);
        return view('Lembur.edit', compact('lembur','pegawai'));  //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_lembur' => 'required|date|after_or_equal:'.Carbon::now()->startOfMonth().'|before_or_equal:'.Carbon::now()->endOfMonth(),
            'jumlah' => 'required',

        ]);
        $lembur = Lembur::findOrFail($id);
        $lembur->id_karyawan = $request->id_karyawan;
        $lembur->tgl_lembur = $request->tgl_lembur;
        $lembur->jumlah = $request->jumlah;
        $lembur->save();
        return redirect()->route('Lembur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lembur  $lembur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lembur = Lembur::findOrFail($id);
        $lembur->delete();
        return redirect()->route('Lembur.index');
    }
}
