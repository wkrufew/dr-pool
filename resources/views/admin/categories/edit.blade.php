@extends('adminlte::page')

@section('title', 'Dr. Pools')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update',$category], 'method' => 'put']) !!}
           <div class="form-group">
            {!! Form::label('name', 'Name Category: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Write a name', 'autocomplete' => 'off']) !!}
            @error('name')
                <div class="alert alert-danger mt-1" role="alert">
                <strong>Ups!</strong>{{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
           </div>
        {!! Form::submit('Update Category', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop