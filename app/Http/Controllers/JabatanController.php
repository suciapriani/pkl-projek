<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jabatan = Jabatan::all();
        return view('DataJabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan = Jabatan::all();
        return view('DataJabatan.create', compact('jabatan'));
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
            'jabatan' => 'required'
        ]);

        $jabatan = new Jabatan;
        //db              create
        $jabatan->jabatan = $request->jabatan;
        $jabatan->gaji_pokok = $request->gaji_pokok;
        $jabatan->tunjangan_jabatan = $request->tunjangan_jabatan;
        $jabatan->save();
        return redirect()->route('DataJabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('DataJabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('DataJabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
            'tunjangan_jabatan' => 'required',

        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->jabatan = $request->jabatan;
        $jabatan->gaji_pokok = $request->gaji_pokok;
        $jabatan->tunjangan_jabatan = $request->tunjangan_jabatan;
        $jabatan->save();
        return redirect()->route('DataJabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('DataJabatan.index');
    }
}
