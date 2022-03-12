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
                        <form action="{{ route('Absen.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="panel-body">
                                 <label>Nama Pegawai</label>
                                 <select name="id_karyawan" class="form-control">
                                  @foreach($pegawai as $data)
                                  <option value="{{$data->id}}">{{$data->nama}}</option>
                                  @endforeach
                                  </select>
                            </div>            
                            <div class="form-group">
                                <label for="">Tanggal Absen </label>
                                <input type="date" name="tgl_absen"
                                    class="form-control @error('tgl_absen') is-invalid @enderror">
                                @error('tgl_absen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for=""> Keterangan </label>
                                <br>
                                <input type="radio" name="keterangan" value=Hadir>Hadir
                                <br>
                                <input type=radio name=keterangan value=Alpha>Alpha
                                <br>
                                <input type=radio name=keterangan value=Sakit>sakit
                                <br>
                                <input type=radio name=keterangan value=Izin>Izin
                                @error('keterangan') is-invalid @enderror
                                @error('keterangan')
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