@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Beranda

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="far fa-id-badge"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah pegawai</span>
                        <span class="info-box-number">
                            {{$pegawai}} pegawai 
                        </span>
                        <a href ="http://localhost:8000/admin/profile" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="	fas fa-donate"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah penggajian</span>
                        <span class="info-box-number">
                        {{ $penggajian }} penggajian
                        </span>
                        <a href ="http://localhost:8000/admin/laporan" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>

@endsection