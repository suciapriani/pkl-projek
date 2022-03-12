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
                    <div class="card-header">Data Cuti</div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="">karyawan</label>
                                <input type="text" name="id_kar" value="{{ $cuti->pegawais->nama }}" class="form-control" readonly>
                            </div>
                    <div class="form-group">
                                <label for="">Nik</label>
                                <br>
                                <input type="text" name="nik" value="{{ $cuti->pegawais->nik }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Cuti</label>
                                <input type="date" name="tgl_cuti" value="{{ $cuti->tgl_cuti }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nominal Uang</label>
                                <input type="text" name="jumlah" value="Rp.{{ number_format($cuti->jumlah) }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/Cuti') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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