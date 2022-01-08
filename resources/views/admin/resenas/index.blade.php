@extends('adminlte::page')

@section('title', 'Dr. Pools')

@section('content_header')
    <h1>List Reviews</h1>
@stop

@section('content')
@if(session('notificacion'))   
<div class="alert alert-success" role="alert">
<strong>Success!</strong>{{session('notificacion')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card">
    <div class="card-header">
    <a class="btn btn-primary" href="{{route('admin.resenas.create')}}">Create</a>
    </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm text-center">
                <thead class="thead-dark ">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($resenas as $key=>$resena)
                     
                       <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$resena->name}}</td>
                        <td>{{$resena->description}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.resenas.edit', $resena)}}"><i class="fas fa-edit"></i></a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.resenas.destroy', $resena)}}" method="POST">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i> </button>
                            </form>
                        </td>
                    </tr>
                      
                    @empty
                        <tr>
                            <td colspan="4">There are no records</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
    </div>
@stop

@section('css')
   {{--  <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop