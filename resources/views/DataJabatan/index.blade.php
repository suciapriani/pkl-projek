@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data Jabatan
            <a href="{{ route('DataJabatan.create')}}" class="btn btn-primary float-right">Tambah</a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    <thead>
                              <tr>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Tunjangan Jabatan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                 <tbody>
                                @php $no=1; @endphp
                                @foreach ($jabatan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td><span>
                                        Rp.{{number_format($data->gaji_pokok,2,",",".")}}
                                        </span></td>
                                        <td><span>
                                        Rp.{{number_format($data->tunjangan_jabatan ,2,",",".")}}
                                        </span></td>
                                        <td>
                                        <form action="{{ route('DataJabatan.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('DataJabatan.edit', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-warning">Edit</a>
                                                <a href="{{ route('DataJabatan.show', $data->id) }}"
                                                    class="btn btn-outline btn-sm btn btn-info">Show</a>
                                                <button type="submit" class="btn btn-outline btn-sm btn btn-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </thead>
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
