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
           <h2 style="background-color: rgba(0, 153, 255, 0.83);"><center><font color= black><h3>Laporan Penggajian Karyawan</h3></color></h2>
               <div class="table-responsive">
                   <table class="table">
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
                                    <td>{{ $data->pegawais->jabatans->jabatan }}</td>
                                    <td>{{ $data->pegawais->jabatans->golongan }}</td>
                                    <td><span>
                                    Rp.{{number_format($data->pegawais->lemburs->sum('jumlah'),2,",",".")}}
                                    </span></td>
                                    <td><span>
                                        Rp.{{number_format($data->pegawais->cutis->sum('jumlah'),2,",",".")}}
                                    </span></td>
                                    <td><span>
                                        Rp.{{number_format($data->pegawais->jabatans->gaji_pokok,2,",",".")}}
                                    </span></td>
                                    <td><span>
                                        Rp.{{number_format($data->pegawais->jabatans->tunjangan_jabatan,2,",",".")}}
                                    </span></td>
                                    <td><span>
                                        Rp.{{number_format($data->total,2,",",".")}}
                                    </span></td>
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
