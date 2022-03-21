@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
           Data Penggajian
            <a href="{{ route('Penggajian.create')}}" class="btn btn-primary float-right">Tambah</a>
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
                                    <th>Potongan Cuti</th>
                                    {{-- <th>keterangan Kerja</th> --}}
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($penggajian as $data)
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

                                        {{-- <td>{{ $data->pegawai->absensi->keterangan}}</td> --}}

                                        <td><span>
                                            Rp.{{number_format($data->total,2,",",".")}}
                                        </span></td>
                                        <td>
                                        <form action="{{ route('Penggajian.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                               
                                                <a href="{{ route('Penggajian.show', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-info">Show</a>
                                                    <button type="submit" class="btn btn-outline btn-sm btn btn-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
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


