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
                    <div class="card-header">Edit lembur</div>
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
                        <form action="{{ route('Lembur.update', $lembur->id) }}" method="post" accept="">
                            @csrf
                            @method('put')
                           <div class="col-md-12">
                            <div class="form-group">
                                <label for="">karyawan</label>
                                <input type="text" name="id_karyawan" value="{{ $lembur->id_karyawan }}"
                                    class="form-control @error('id_karyawan') is-invalid @enderror">
                                @error('id_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nik</label>
                                <input type="text" name="nik" value="{{ $lembur->nik }}"
                                    class="form-control @error('nik') is-invalid @enderror">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Tanggal Lembur</label>
                                <input type="date" name="tgl_lembur" value="{{ $lembur->tgl_lembur }}"
                                    class="form-control @error('tgl_lembur') is-invalid @enderror">
                                @error('tgl_lembur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" value="{{ $lembur->jumlah }}"
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