@extends('adminlte::page')

@section('title', 'About')

@section('content_header')
    <h1>About</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            Data
        </div>
        <div class="card-body">

            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                    <label class="form-control" for="">{{ $about->title }}</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">characteristic 1</span>
                    <label class="form-control" for="">{{ $about->car1 }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">characteristic 2</span>
                    <label class="form-control" for="">{{ $about->car2 }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">characteristic 3</span>
                    <label class="form-control" for="">{{ $about->car3 }}</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Mission</span>
                    <textarea rows="4" disabled class="form-control" for="">{{ $about->mision }}</textarea rows="4" disabled>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Vision</span>
                    <textarea rows="4" disabled class="form-control" for="">{{ $about->vision }}</textarea rows="4" disabled>
                </div>
            </div>

            <div class="text-center">
                @if ($about->image)
                    <img style="border: 8px; border-color: black; " src=" {{ Storage::url($about->image) }}"
                        width="100px;" alt="Cover-About">
                @endif
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('admin.abouts.edit', $about) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@stop
@section('css')
@stop
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (Session::has('mensaje'))
            Swal.fire({
            position: 'top-end',
            width: 400,
            /* background: '#333333', */
            toast: true,
            timerProgressBar: true,
            icon: 'success',
            title: 'Date uptade!',
            showConfirmButton: false,
            timer: 4000
            })
        @endif
    </script>
@stop
