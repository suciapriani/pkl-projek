<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use App\Models\Pegawai;
use App\Models\Lembur;
use App\Models\Cuti;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
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
        $lembur = Lembur::all();
        $cuti = Cuti::all();


        return view('Penggajian.create', compact('pegawai', 'lembur', 'cuti'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tgl_gajian' => 'required|date|after_or_equal:' . Carbon::now()->startOfMonth() . '|before_or_equal:' . Carbon::now()->endOfMonth(),
                'id_pegawai' => Rule::unique('penggajians', 'id_pegawai')->where(function ($q) {
                   return $q->whereBetween('tgl_gajian', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
                })
            ],
        );

        $lembur = Lembur::where('id_karyawan', $request->id_pegawai)->whereBetween('tgl_lembur', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('jumlah');
        $cuti = Cuti::where('id_kar', $request->id_pegawai)->whereBetween('tgl_cuti', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->sum('jumlah');


        $penggajian = new Penggajian;
        //db              create
        $penggajian->id_pegawai = $request->id_pegawai;
        $penggajian->tgl_gajian = $request->tgl_gajian;

        $pegawai = Pegawai::findOrFail($request->id_pegawai);

        $penggajian->total = $pegawai->jabatans['gaji_pokok'] + $lembur - $cuti + $pegawai->jabatans['tunjangan_jabatan'];
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
