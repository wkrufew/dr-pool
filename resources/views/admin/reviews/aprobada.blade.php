@extends('adminlte::page')

@section('title', 'Dr. Pools')

@section('content_header')
    <h1>List Approved Reviews</h1>
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
        <a class="btn btn-primary" href="{{route('admin.reviews.index')}}">Back</a>
    </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm text-center">
                <thead class="thead-dark ">
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Qualification</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $key=>$review)
                     
                       <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$review->user->name}}</td>
                        <td>{{$review->comment}}</td>
                        <td>{{$review->rating}}</td>
                        <td width="10px">
                            <form action="{{route('admin.reviews.destroy', $review)}}" method="POST">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i> </button>
                            </form>
                        </td>
                    </tr>
                      
                    @empty
                        <tr>
                            <td colspan="6">There are no records</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="card-footer">
                {{$reviews->links()}}
            </div>
        </div>
        
    </div>
@stop

@section('css')
 
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop