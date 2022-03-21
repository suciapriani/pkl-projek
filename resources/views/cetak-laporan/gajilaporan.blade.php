@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-light">Laporan Penggajian Karyawan</div>
                    <div class="card-body">
                            <form action="/admin/cetak-laporan" method="post">
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
                            <br>
                            <div class="form-group">
                                <button  class="btn btn-outline btn-sm btn btn-info">cetak Laporan</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection