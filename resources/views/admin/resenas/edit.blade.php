@extends('adminlte::page')

@section('title', 'Dr. Pools')

@section('content_header')
    <h1>Edit Review</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($resena, ['route' => ['admin.resenas.update',$resena], 'method' => 'put']) !!}
           <div class="form-group">
            {!! Form::label('name', 'Nombre: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre', 'autocomplete' => 'off']) !!}
            @error('name')
                <div class="alert alert-danger mt-1" role="alert">
                <strong>Ups!</strong>{{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
           </div>

           <div class="form-group">
            {!! Form::label('description', 'Description: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Escriba una descripcion', 'autocomplete' => 'off']) !!}
            @error('description')
                <div class="alert alert-danger mt-1" role="alert">
                <strong>Ups!</strong>{{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
           </div>
        {!! Form::submit('Update', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop