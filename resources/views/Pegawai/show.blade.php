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
                    <div class="card-header">Data Pegawai</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" name="jabatan" value="{{ $pegawai->jabatans->jabatan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nik</label>
                                <input type="text" name="nik" value="{{ $pegawai->nik }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" value="{{ $pegawai->nama }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="{{ $pegawai->alamat }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tgl Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telp" value="{{ $pegawai->no_telp }}" class="form-control" readonly>
                            </div>  
                            <div class="form-group">
                                <label for="">Golongan</label>
                                <input type="text" name="golongan" value="{{ $pegawai->golongan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/Pegawai') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
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