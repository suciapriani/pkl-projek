@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard


@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Lembur</div>
                    <div class="card-body">
                        <form action="{{ route('Lembur.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="">nik</label>
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="form-group">
                                <label for="">Tanggal lembur </label>
                                <input type="date" name="tgl_lembur"
                                    class="form-control @error('tgl_lembur') is-invalid @enderror">
                                @error('tgl_lembur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Jumlah </label>
                                <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                                @error('jumlah')
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