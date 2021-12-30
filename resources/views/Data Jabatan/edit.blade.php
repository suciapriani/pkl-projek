@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">edit jabatan</div>
                    <div class="card-body">
                        <form action="{{ route('Data Jabatan.edit', $jabatan->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" name="jabatan" value="{{ $jabatan->jabatan }}"
                                    class="form-control
                                    @error('jabatan') is-invalid @enderror">

                                @error('Jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Golongan</label>
                                <input type="text" name="golongan" value="{{ $jabatan->golongan }}"
                                    class="form-control
                                    @error('golongan') is-invalid @enderror">

                                @error('golongan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" value="{{ $jabatan->gaji_pokok }}"
                                    class="form-control
                                    @error('gaji_pokok') is-invalid @enderror">

                                @error('gaji_pokok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">tunjangan jabatan</label>
                                <input type="text" name="tunjangan_jabatan" value="{{ $jabatan->tunjangan_jabatan }}"
                                    class="form-control
                                    @error('tunjangan_jabatan') is-invalid @enderror">

                                @error('tunjangan_jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
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