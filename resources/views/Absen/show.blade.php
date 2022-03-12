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
                    <div class="card-header">Data absen</div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="">karyawan</label>
                                <input type="text" name="id_karyawan" value="{{ $absen->pegawais->nama }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">jabatan</label>
                                <br>
                                <input type="text" name="jabatan" value="{{ $absen->pegawais->jabatans->jabatan }}" class="form-control" readonly>
                            </div>
                                <div class="form-group">
                                <label for="">Nik</label>
                                <br>
                                <input type="text" name="nik" value="{{ $absen->pegawais->nik }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal absen</label>
                                <input type="date" name="tgl_absen" value="{{ $absen->tgl_absen }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">keterangan</label>
                                <input type="text" name="keterangan" value="{{ $absen->keterangan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/Absen') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                            </div>
                        </form>
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