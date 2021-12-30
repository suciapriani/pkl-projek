@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@stop

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Pegawai
            <a href="{{ route('Pegawai.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>nik</th>
                                    <th>nama</th>
                                    <th>alamat</th>
                                    <th>tgl_lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No telepon</th>
                                    <th>jabatan</th>
                                    <th>golongan</th>
                                    <th>Action</th>

                                </tr>
                                @php $no=1; @endphp
                                @foreach ($pegawai as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->no_telp }}</td>
                                        <td>{{ $data->jabatan}}</td>
                                        <td>{{ $data->golongan}}</td>
                                        <td>
                                        <form action="{{ route('Pegawai.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('Pegawai.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('Pegawai.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
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


@stop
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


