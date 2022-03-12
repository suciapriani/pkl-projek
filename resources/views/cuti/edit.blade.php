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
                    <div class="card-header">Edit Cuti</div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-denger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            <div>
                                @endif
                        <form action="{{ route('Cuti.update', $cuti->id) }}" method="post" accept="">
                            @csrf
                            @method('put')
                            <div class="panel-body">
                                <label for="">karyawan</label>
                                <select name="id_kar" class="form-control">
                                 @foreach($pegawai as $data)
                                 <option value="{{$data->id}}">{{$data->nama}}</option>
                                 @endforeach
                                 </select>
                           </div>
                            <br>
                            <div class="form-group">
                                <label for="">Tanggal Cuti</label>
                                <input type="date" name="tgl_cuti" value="{{ $cuti->tgl_cuti }}"
                                    class="form-control @error('tgl_cuti') is-invalid @enderror">
                                @error('tgl_cuti')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nominal Uang</label>
                                <input type="text" name="jumlah" value="{{ $cuti->jumlah }}"
                                    class="form-control @error('jumlah') is-invalid @enderror">
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