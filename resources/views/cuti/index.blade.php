@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Cuti
            <a href="{{ route('Cuti.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>id_karyawan</th>
                                    <th>nik</th>
                                    <th>tgl_cuti</th>
                                    <th>jumlah</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                 <tbody>
                                @php $no=1; @endphp
                                @foreach ($cuti as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->id_kar }}</td>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->tgl_cuti }}</td>
                                        <td>{{ $data->jumlah }}</td>
                                        <td>
                                        <form action="{{ route('Cuti.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('Cuti.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('Cuti.show', $data->id) }}"
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


