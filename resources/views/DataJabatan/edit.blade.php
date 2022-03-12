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
            <div class="card-header"><h5>Edit Jabatan</h5></div>
                <table class="table" id="example">                                  
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('DataJabatan.update', $jabatan->id) }}" method="post" accept="">
                            @csrf
                            @method('put')
                            <br>
                             <div class="panel-body">
                                <label for="">Jabatan</label>
                                <input type="text" name="jabatan" value="{{ $jabatan->jabatan }}"
                                    class="form-control @error('jabatan') is-invalid @enderror">
                                @error('jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                             <div class="panel-body">
                                <label for="">golongan</label>
                                <input type="text" name="golongan" value="{{ $jabatan->golongan }}"
                                    class="form-control @error('golongan') is-invalid @enderror">
                                @error('golongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                             <div class="panel-body">
                                <label for="">gaji pokok</label>
                                <input type="text" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}"
                                    class="form-control @error('gaji_pokok') is-invalid @enderror">
                                @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                             <div class="panel-body">
                                <label for="">Tunjangan</label>
                                <input type="text" name="tunjangan_jabatan" value="{{ $jabatan->tunjangan_jabatan }}"
                                    class="form-control @error('tunjangan_jabatan') is-invalid @enderror">
                                @error('tunjangan_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                             <div class="panel-body">
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