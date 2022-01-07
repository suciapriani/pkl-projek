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
                    <div class="card-header">Data Penggajian</div>
                    <div class="card-body">
                        <form action="{{ route('Penggajian.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="panel-body">
                                 <label>Nama Pegawai</label>
                                 <select name="id_karyawan" class="form-control">
                                  @foreach($pegawai as $data)
                                  <option value="{{$data->id}}">{{$data->nama}}</option>
                                  @endforeach
                                  </select>
                            </div> 
                            <div class="panel-body">
                                 <label>jabatan</label>
                                 <select name="id_jabatan" class="form-control">
                                  @foreach($pegawai as $data)
                                  <option value="{{$data->id}}">{{$data->id_jabatan}}</option>
                                  @endforeach
                                  </select>
                            </div>                                      
                            <div class="form-group">
                                <label for="">Lemburan</label>
                                <input type="text" name="lemburan" class="form-control @error('lemburan') is-invalid @enderror">
                                @error('lemburan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                            <div class="form-group">
                                <label for="">Potongan</label>
                                <input type="text" name="potongan"
                                    class="form-control @error('potongan') is-invalid @enderror">
                                @error('potongan')
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
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
@endsection