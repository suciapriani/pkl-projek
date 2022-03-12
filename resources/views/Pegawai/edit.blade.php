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
                    <div class="card-header">Edit pegawai</div>
                    <div class="card-body">
                        <form action="{{ route('Pegawai.update', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="panel-body">
                                 <label for="">id_jabatan</label>
                                 <select name="id_jabatan" class="form-control">
                                  @foreach($jabatan as $data)
                                  <option value="{{$data->id}}">{{$data->id}} - {{$data->jabatan}}</option>
                                  @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="">Poto</label>
                                <input type="file" name="gambar" value="{{ $pegawai->gambar }}"
                                    class="form-control @error('pegawai') is-invalid @enderror">
                                @error('gambar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">nik</label>
                                <input type="text" name="nik" value="{{ $pegawai->nik }}"
                                    class="form-control @error('pegawai') is-invalid @enderror">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">nama</label>
                                <input type="text" name="nama" value="{{ $pegawai->nama }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <input type="text" name="alamat" value="{{ $pegawai->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">tanggal lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">jenis kelamin</label>
                                <input type="text" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}"
                                    class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepone</label>
                                <input type="text" name="no_telp" value="{{ $pegawai->no_telp }}"
                                    class="form-control @error('no_telp') is-invalid @enderror">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="panel-body">
                                 <label for="">golongan</label>
                                 <select name="golongan" class="form-control">
                                  @foreach($jabatan as $data)
                                  <option value="{{$data->golongan}}">{{$data->golongan}}</option>
                                  @endforeach
                                  </select>
                            </div>
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