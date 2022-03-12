<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jabatan = DB::table('jabatans')->count();
        $pegawai = DB::table('pegawais')->count();
        $absen = DB::table('absensis')->count();
        $lembur = DB::table('lemburs')->count();
        $cuti = DB::table('cutis')->count();
        $penggajian = DB::table('penggajians')->count();

        return view('admin.dashboard', compact('jabatan','pegawai','absen','lembur','cuti','penggajian'));
    }

    public function dashboardUser()
    {
        $pegawai = DB::table('pegawais')->count();
        $penggajian = DB::table('penggajians')->count();
        return view('pengguna.dashboard', compact('pegawai','penggajian'));
    }

    // public function laporan()
    // {
    //     $pengguna = Pengguna::with('users')->get();
    //     $kegiatan = Kegiatan::all();
    //     $laporan = DB::table('users')->where('role', 'Account User')->get();
    //     return view('layouts.admin.laporan', compact('pengguna','kegiatan','laporan'));
    // }

}