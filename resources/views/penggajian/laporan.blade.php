@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class = "card-header">
        <button onclick = "window.print()" class = "btn btn-primary"><i class = "fa fa-print">Print</i></button>
</div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class = "table" border = "1" id="example">
                            <thead>
                                <tr>
                                <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan</th>
                                    <th>golongan</th>
                                    <th>Lemburan</th>
                                    <th>potongan</th>
                                    <th>gaji pokok</th>
                                    <th>tunjangan</th>
                                    <th>total</th>
                                </tr>
                                </thead>
                                 <tbody>
                                 @php $no=1; @endphp
                                @foreach ($laporan as $data)
                                <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->pegawais->nama }}</td>
                                        <td>{{ $data->jabatans->jabatan }}</td>
                                        <td>{{ $data->jabatans->golongan }}</td>
                                        <td>Rp.{{ $data->lemburs->jumlah }}</td>
                                        <td>Rp.{{ $data->cutis->jumlah }}</td>
                                        <td>Rp.{{ $data->jabatans->gaji_pokok }}</td>
                                        <td>Rp.{{ $data->jabatans->tunjangan_jabatan}}</td>
                                        <td>Rp.{{ $data->total }}</td>

                                    </tr>
                                @endforeach
                        </tbody>
                   </table>
                </div>
               <!-- /.table-responsive -->
            </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection