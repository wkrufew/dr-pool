@extends('adminlte::page')

@section('title', 'Dr Pools')

@section('content_header')
    <h1>List Users</h1>
@stop

@section('content')
    @livewire('administrador.users-index')
@stop

@section('js')
    <script> 
       
    </script>
@stop