@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('Absen.update', $absen->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                            @csrf
                            @method('put')
                           
                            <div class="panel-body">
                                 <label for="">karyawan</label>
                                 <select name="id_karyawan" class="form-control">
                                  @foreach($pegawai as $data)
                                  <option value="{{$data->id}}">{{$data->nama}}</option>
                                  @endforeach
                                  </select>
                            </div>
                            
                            <br>
                             <div class="panel-body">
                                <label for="">Tanggal absen</label>
                                <input type="date" name="tgl_absen" value="{{ $absen->tgl_absen }}"
                                    class="form-control @error('tgl_absen') is-invalid @enderror">
                                @error('tgl_absen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="panel-body">
                               <label for="">Keteranngan</label>
                               <input type="text" name="keterangan" value="{{ $absen->keterangan }}"
                                   class="form-control @error('keterangan') is-invalid @enderror">
                               @error('keterangan')
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