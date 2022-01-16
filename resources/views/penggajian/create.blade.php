@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard


@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                        <form action="{{ route('Penggajian.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="panel-body">
                                 <label>Nama Pegawai</label>
                                 <select name="id_pegawai" class="form-control">
                                  @foreach($pegawai as $data)
                                  <option value="{{$data->id}}">{{$data->nama}}</option>
                                  @endforeach
                                  </select>
                            </div>  
                            <div class="panel-body">
                                            <label>id_jabatan</label>
                                            <select name="id_jabatan" class="form-control">
                                                @foreach($jabatan as $data)
                                                <option value="{{$data->id}}">{{$data->jabatan}}</option>
                                                @endforeach
                                            </select>
                            </div>  
                            <div class="panel-body">
                                            <label>lemburan</label>
                                            <select name="id_lembur" class="form-control">
                                                @foreach($lembur as $data)
                                                <option value="{{$data->id}}">{{$data->jumlah}}</option>
                                                @endforeach
                                            </select>
                            </div>    
                            <div class="panel-body">
                                            <label>cuti</label>
                                            <select name="id_cuti" class="form-control">
                                                @foreach($cuti as $data)
                                                <option value="{{$data->id}}">{{$data->jumlah}}</option>
                                                @endforeach
                                            </select>
                            </div>                                  
                            <!-- <div class="form-group">
                                <label for="">total</label>
                                <input type="text" name="total"
                                    class="form-control @error('total') is-invalid @enderror">
                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  --> 
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