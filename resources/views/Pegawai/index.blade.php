@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

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
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Poto</th>
                                    <th>Jabatan</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telepone</th>                                  
                                    <th>Action</th>
                                </tr>
                                </thead>
                                 <tbody>
                                @php $no=1; @endphp
                                @foreach ($pegawai as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                            alt="gambar"></td>
                                        <td>{{ $data->jabatans->jabatan }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->no_telp }}</td>                                  
                                        <td>
                                        <form action="{{ route('Pegawai.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('Pegawai.edit', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-warning">Edit</a>
                                                <a href="{{ route('Pegawai.show', $data->id) }}"
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


