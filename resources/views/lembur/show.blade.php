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
                    <div class="card-header">Data Lembur</div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="">karyawan</label>
                                <input type="text" name="id_karyawan" value="{{ $lembur->pegawais->nama }}" class="form-control" readonly>
                            </div>
                    <div class="form-group">
                                <label for="">Nik</label>
                                <br>
                                <input type="text" name="nik" value="{{ $lembur->pegawais->nik }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal lembur</label>
                                <input type="date" name="tgl_lembur" value="{{ $lembur->tgl_lembur }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">jumlah</label>
                                <input type="text" name="jumlah" value="{{ $lembur->jumlah }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/Lembur') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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