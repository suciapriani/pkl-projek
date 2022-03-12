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
                    <div class="card-header">Data Jabatan</div>
                    <div class="card-body">
                    <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" name="jabatan" value="{{ $jabatan->jabatan }}" class="form-control" readonly>
                            </div>
                    <div class="form-group">
                                <label for="">Golongan</label>
                                <br>
                                <input type="text" name="golongan" value="{{ $jabatan->golongan }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Gaji Pokok</label>
                                <input type="text" name="gaji_pokok" value=" Rp.{{ number_format($jabatan->gaji_pokok) }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Tunjangan Jabatan</label>
                                <input type="text" name="tunjangan_jabatan" value="Rp.{{number_format( $jabatan->tunjangan_jabatan) }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <br>
                                <a href="{{ url('admin/DataJabatan') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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