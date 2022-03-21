@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard


@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Rekap Gaji {{ $penggajian->pegawais->nama }}</div>
                    <div class="card-body">
                    <body>
                    <h1 align="left"><h1><b>PENGGAJIAN KARYAWAN</h1>
                    <h1 align="left"><h5>SMK ASSALAAM BANDUNG</h5>
                        
                    {{-- <td rowspan="10" align="bottom"><img src="karyawan.jpeg" alt="gambar" style="width:100px; height:100px;" alt="gambar"></td> --}}
                    <hr color="blue" width="100%" size=4 align="center" >
                   <center> <h1 align="Right"><h5><b>Gaji Karyawan</h5>
                    <h1 align="Right"><h5>Periode 1 Maret 2022 - 20 maret 2022</h5></center>
                        <head>
                             <h5>
                            <table>
                            <tr>
                            <td>Nik </td>
                            <td> : {{ $penggajian->pegawais->nik }}</td>
                            </tr>
                            <tr>
                            <td>Nama </td>
                            <td> : {{ $penggajian->pegawais->nama }}</td>
                            </tr>
                            <tr>
                            <td>Jabatan </td>
                            <td> : {{ $penggajian->pegawais->jabatans->jabatan }}</td> 
                            </tr>
                            <td><h5 align="left"><h4><b>Penghasilan<hr color="black" width="100%" size=3 align="center" ></h5></td>
                            <tr>
                            <td>Gaji Pokok</td>
                            <td> : Rp.{{number_format($penggajian->pegawais->jabatans->gaji_pokok)}}</td>
                            <tr>
                            <td>Tunjangan Jabatan</td>
                            <td> : Rp.{{number_format($penggajian->pegawais->jabatans->tunjangan_jabatan)}}</td>
                            <tr>
                            <td>Lemburan</td>
                            <td> : Rp.{{number_format($penggajian->pegawais->lemburs->sum('jumlah'))}}</td>
                            <tr>
                            <td><h5 align="right"><h4><b>Potongan<hr color="black" width="100%" size=3 align="center" ></h4></td>
                            <tr>
                            <td>Potongan cuti</td>
                            <td> : Rp.{{number_format($penggajian->pegawais->cutis->sum('jumlah'))}}</td>
                            <tr>
                            <td>Sakit</td>
                            <td>:  Rp. {{number_format($potSakit)}}</td> 
                            <tr>
                            <td>Alfa</td>
                            <td>: Rp. {{number_format($potAlfa)}}</td>
                            <tr>
                            <td>Izin</td>
                            <td>: Rp. {{number_format($potIzin)}}</td>
                            </table>
                            <hr color="black" width="30%" size=4 align="left"><td>
                            <td><b>Total Penggajian : Rp.{{number_format($penggajian->total,2,",",".")}}</td>
                            <br>
                            <br>
				         	<h3 style="background-color: #10338a;"><center><font color=white><b>Penerimaan Bersih = Rp.{{number_format($penggajian->total,2,",",".")}} </h3>
                            <hr>
                            <button onclick = "window.print()" class = "btn btn-primary"><i class = "fa fa-print">Cetak</i></button>

                            </body>
                            </head>
                            
                            </html>

                    </html>
                    {{-- <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" name="id_pegawai" value="{{ $penggajian->pegawais->nama }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" name="id_jabatan" value="{{ $penggajian->pegawais->jabatans->jabatan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Lemburan</label>
                                <input type="text" name="id_lembur" value="Rp.{{number_format($penggajian->pegawais->lemburs->sum('jumlah'))}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Potongan</label>
                                <input type="text" name="id_cuti" value="Rp.{{number_format($penggajian->pegawais->cutis->sum('jumlah'))}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Gaji pokok</label>
                                <input type="text" name="id_jabatan" value=" Rp.{{number_format($penggajian->pegawais->jabatans->gaji_pokok)}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tunjangan</label>
                                <input type="text" name="id_jabatan" value="Rp.{{number_format($penggajian->pegawais->jabatans->tunjangan_jabatan)}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">total</label>
                                <input type="text" name="penggajian" value="Rp.{{number_format($penggajian->total,2,",",".")}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/Penggajian') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('css')

@endsection

@section('js')

@endsection