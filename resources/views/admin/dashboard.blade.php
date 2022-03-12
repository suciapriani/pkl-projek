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
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-stream"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah jabatan</span>
                        <span class="info-box-number">
                            {{$jabatan}} jabatan
                        </span>
                        <a href ="http://localhost:8000/admin/DataJabatan" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        
        <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ul"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pegawai</span>
                        <span class="info-box-number">
                        {{ $pegawai }} pegawai
                        </span>
                        <a href ="http://localhost:8000/admin/Pegawai" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
             <!-- fix for small devices only -->
             <div class="clearfix hidden-md-up"></div>

             <div class="col-12 col-sm-6 col-md-3">
                 <div class="info-box mb-3">
                     <span class="info-box-icon bg-success elevation-1"><i class="far fa-folder-open"></i></span>
 
                     <div class="info-box-content">
                         <span class="info-box-text">Absensi</span>
                         <span class="info-box-number">
                             {{$absen}} absen 
                         </span>
                         <a href ="http://localhost:8000/admin/Absen" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>
 
                     </div>
                     <!-- /.info-box-content -->
                 </div>
                 <!-- /.info-box -->
             </div>
             <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="far fa-folder-open"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Lembur</span>
                        <span class="info-box-number">
                            {{$lembur}} lembur 
                        </span>
                        <a href ="http://localhost:8000/admin/Lembur" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sign-in-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Cuti</span>
                        <span class="info-box-number">
                            {{$cuti}} Cuti 
                        </span>
                        <a href ="http://localhost:8000/admin/Cuti" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ul"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Penggajian</span>
                        <span class="info-box-number">
                        {{ $penggajian }} Penggajian
                        </span>
                        <a href ="http://localhost:8000/admin/Penggajian" class="small-box-footer"> More info<i class="fas fa-arraw-circle-right"></i></a>

                    </div>
                    
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    </div>
  


@endsection