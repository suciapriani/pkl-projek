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
                    <div class="card-header">Data Penggajian</div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" name="id_pegawai" value="{{ $penggajian->pegawais->nama }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" name="id_jabatan" value="{{ $penggajian->jabatans->jabatan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Golongan</label>
                                <input type="text" name="id_jabatan" value="{{ $penggajian->jabatans->golongan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Gaji pokok</label>
                                <input type="text" name="id_jabatan" value="{{ $penggajian->jabatans->gaji_pokok }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tunjangan</label>
                                <input type="text" name="id_jabatan" value="{{ $penggajian->jabatans->tunjangan_jabatan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Lemburan</label>
                                <input type="text" name="lemburan" value="{{ $penggajian->lemburs->jumlah }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Potongan</label>
                                <input type="text" name="potongan" value="{{ $penggajian->cutis->jumlah}}" class="form-control" readonly>
                            </div>
                           
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/Penggajian') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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