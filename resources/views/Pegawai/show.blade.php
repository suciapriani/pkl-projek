@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Profile Karyawan</div>
                    <div class="card-body">
                    <html>
                    <body>
                    <table width="745" border="1" cellspacing="0" cellpadding="5" align="center">
                    <tr align="center" bgcolor="#6495ED">
                    <td width="174"><b>DATA DIRI</td>
                    <td width="353"><b>KETERANGAN</td>
                    <td width="232"><b>FOTO</td>
                    </tr>
                    <tr>
                    <td>Nama</td>
                    <td>{{ $pegawai->nama }}</td>
                    <td rowspan="10" align="center"><img src="{{ $pegawai->image() }}" alt="gambar" style="width:210px; height:313px;" alt="gambar"></td>

                    </tr>
                    <tr>
                    <td>Jabatan</td>
                    <td>{{ $pegawai->jabatans->jabatan }}</td>
                    </tr>
                    <tr>
                    <td>NIK</td>
                    <td>{{ $pegawai->nik }}</td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                    <td>{{ $pegawai->alamat }}</td>
                    </tr>
                    <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $pegawai->tgl_lahir }}</td>
                    </tr>
                    <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $pegawai->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                    <td>No Telepone</td>
                    <td>{{ $pegawai->no_telp }}</td>
                    </tr>
                   
                    </table>
                    </body>   
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('css')

@endsection

@section('js')

@endsection