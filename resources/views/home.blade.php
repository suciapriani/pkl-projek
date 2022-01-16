@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@stop

@role('admin')
@section('content')

Welcome to this beautiful admin panel.

@stop
@endrole

@role('pengguna')
@section('content')

Welcome to this beautiful pengguna panel.

@stop
@endrole

@section('js')

@stop

