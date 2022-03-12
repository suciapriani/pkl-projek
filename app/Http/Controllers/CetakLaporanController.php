<?php

namespace App\Http\Controllers;
use App\Models\Penggajian;
use PDF;


use Illuminate\Http\Request;

class CetakLaporanController extends Controller
{
    public function gajilaporan()
    {
        return view('cetak-laporan.gajilaporan');
    }

    public function cetakgaji(Request $request)
    {
        $start = $request->tanggalawal;
        $end = $request->tanggalakhir;

        if ($end >= $start) {
                $penggajian = Penggajian::whereBetween('tgl_gajian', [$start, $end])->get();
                $pdf = PDF::loadview('cetak-laporan.cetakgaji', compact('penggajian','start','end'));
            return $pdf->download('print-laporan.pdf');

        } 
        else {
            return redirect()->back()->with('gagal', 'Tanggal tidak valid');
        }
    }
}
