<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Pegawai;

use Carbon\Carbon;

use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuti = Cuti::all();
        return view('Cuti.index', compact('cuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('Cuti.create', compact('pegawai'));
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
        $validated = $request->validate([
            'tgl_cuti' => 'required|date|after_or_equal:'.Carbon::now()->startOfMonth().'|before_or_equal:'.Carbon::now()->endOfMonth()
        ]);

        
        $cuti = new Cuti;
        $cuti->id_kar = $request->id_kar;
       
        $cuti->tgl_cuti = $request->tgl_cuti;
        $cuti->jumlah = $request->jumlah;
        $cuti->save();
        return redirect()->route('Cuti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuti = Cuti::findOrFail($id);
        return view('Cuti.show', compact('cuti'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::all();
        $cuti = Cuti::findOrFail($id);
        return view('Cuti.edit', compact('cuti','pegawai'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           
            'tgl_cuti' => 'required|date|after_or_equal:'.Carbon::now()->startOfMonth().'|before_or_equal:'.Carbon::now()->endOfMonth(),
            'jumlah' => 'required',
        ]);

        $cuti = Cuti::findOrFail($id);
        $cuti->id_kar = $request->id_kar;
       
        $cuti->tgl_cuti = $request->tgl_cuti;
        $cuti->jumlah = $request->jumlah;
        $cuti->save();
        return redirect()->route('Cuti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuti = Cuti::findOrFail($id);
        $cuti->delete();
        return redirect()->route('Cuti.index');
    }
}
