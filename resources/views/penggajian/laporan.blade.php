{{-- @extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class = "card-header">

                </div>
     <!-- /.card-heading -->
        <div class="card-body">
               <div class="table-responsive">
                   <table class="table">
                       <table class = "table" border = "1" id="example">
                            <thead>
                                <tr><b>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Jabatan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Tunjangan</th>
                                    <th>Lemburan</th>
                                    <th>Potongan</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </b>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($laporan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->pegawais->nama }}</td>
                                        <td>{{ $data->pegawais->jabatans->jabatan }}</td>
                                        <td><span>
                                            Rp.{{number_format($data->pegawais->jabatans->gaji_pokok,2,",",".")}}
                                        </span></td>
                                        <td><span>
                                            Rp.{{number_format($data->pegawais->jabatans->tunjangan_jabatan,2,",",".")}}
                                        </span></td>
                                        <td><span>
                                        Rp.{{number_format($data->pegawais->lemburs->sum('jumlah'),2,",",".")}}
                                        </span></td>
                                        <td><span>
                                            Rp.{{number_format($data->pegawais->cutis->sum('jumlah'),2,",",".")}}
                                        </span></td>
                                        <td><span>
                                            Rp.{{number_format($data->total,2,",",".")}}
                                        </span></td>
                                        <td>
                                     <a href="{{ route('Penggajian.show', $data->id) }}"
                                     class="btn btn-outline btn-sm btn btn-info">show</a>
                                        </td>
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
@endsection --}}
@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
          <center><h3 style="background-color: rgba(0, 153, 255, 0.83);">Penggajian Karyawan</h3>
            {{-- <h2 style="background-color: rgba(0, 153, 255, 0.83);"><center><font color= black><h3>Penggajian Karyawan</h3></color></h2> --}}

        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Jabatan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Tunjangan</th>
                                    <th>Lemburan</th>
                                    <th>Potongan</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($laporan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->pegawais->nama }}</td>
                                        <td>{{ $data->pegawais->jabatans->jabatan }}</td>
                                        <td><span>
                                            Rp.{{number_format($data->pegawais->jabatans->gaji_pokok,2,",",".")}}
                                        </span></td>
                                        <td><span>
                                            Rp.{{number_format($data->pegawais->jabatans->tunjangan_jabatan,2,",",".")}}
                                        </span></td>
                                        <td><span>
                                        Rp.{{number_format($data->pegawais->lemburs->sum('jumlah'),2,",",".")}}
                                        </span></td>
                                        <td><span>
                                            Rp.{{number_format($data->pegawais->cutis->sum('jumlah'),2,",",".")}}
                                        </span></td>
                                        <td><span>
                                            Rp.{{number_format($data->total,2,",",".")}}
                                        </span></td>
                                        <td>
                                                <a href="{{ route('Penggajian.show', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-info">Show</a>   
                                        </td>
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



