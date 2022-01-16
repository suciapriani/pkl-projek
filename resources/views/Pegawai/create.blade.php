@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard


@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                        <form action="{{ route('Pegawai.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                           <div class="panel-body">
                               <label>Pilih Jabatan</label>
                               <select name="id_jabatan" class="form-control">
                                @foreach($jabatan as $data)
                               <option value="{{$data->id}}">{{$data->jabatan}}</option>
                               @endforeach
                               </select>

                            </div> 
                            <div class="form-group">
                                <label for="">Nik</label>
                                <input type="number" name="nik" class="form-control @error('nik') is-invalid @enderror">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="form-group">
                                <label for="">Nama Pegawai</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Alamat </label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for=""> Tanggal Lahir </label>
                                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Jenis Kelamin </label>
                                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                    <option value=""></option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="laki-laki">laki-laki</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> No Telepon </label>
                                <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Golongan </label>
                                <select name="golongan" class="form-control @error('golongan') is-invalid @enderror">
                                    <option value=""></option>
                                        <option value="staf">staf</option>
                                        <option value="admin">admin</option>
                                        <option value="pegawai">pegawai</option>

                                </select>
                                @error('golongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Save</button>
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