@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Absen
            <a href="{{ route('Absen.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>jabatan</th>
                                    <th>Nik</th>
                                    <th>Tanggal absen</th>
                                    <th>keterangan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                 <tbody>
                                @php $no=1; @endphp
                                @foreach ($absen as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->pegawais->nama }}</td>
                                        <td>{{ $data->pegawais->jabatans->jabatan }}</td>
                                        <td>{{ $data->pegawais->nik }}</td>
                                        <td>{{ $data->tgl_absen }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                        <form action="{{ route('Absen.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('Absen.edit', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-warning">Edit</a>
                                                 <a href="{{ route('Absen.show', $data->id) }}"
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


