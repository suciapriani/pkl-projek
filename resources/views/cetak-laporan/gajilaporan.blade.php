@extends('adminlte::page')

@section('content_header')
    Admin Dashrboard
@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Laporan Penggajian Karyawan') }}</div>

                    <div class="card-body">
            <form action="/admin/cetak-laporan" method="post">
                {{-- <form action="/admin/cetakgaji" method="post"> --}}
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Gajian Awal</label>
                                <input type="date" name="tanggalawal"  class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Tanggal Gajian Akhir</label>
                                <input type="date" name="tanggalakhir"  class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary" type="submit">Cetak</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection