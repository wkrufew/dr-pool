@extends('adminlte::page')

@section('title', 'About')

@section('content_header')
@stop
@section('content')
    <p>Date Update</p>
    <div class="card">
        <div class="card-header justify-between flex-row">
            Date
        </div>
        <div class="card-body">
            {!! Form::model($about, ['route' => ['admin.abouts.update', $about], 'method' => 'put', 'files' => true, 'autocomplete' => 'off']) !!}
            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('title', 'Title ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Write a title', 'autocomplete' => 'off']) !!}
                    @error('title')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('car1', 'Characteristic 1', ['class' => 'input-group-text']) !!}
                    {!! Form::text('car1', null, ['class' => 'form-control' . ($errors->has('car1') ? ' is-invalid' : ''), 'placeholder' => 'Write caracteristic 1', 'autocomplete' => 'off']) !!}
                    @error('car1')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('car2', 'Characteristic 2', ['class' => 'input-group-text']) !!}
                    {!! Form::text('car2', null, ['class' => 'form-control' . ($errors->has('car2') ? ' is-invalid' : ''), 'placeholder' => 'Write caracteristic 2', 'autocomplete' => 'off']) !!}
                    @error('car2')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>

                <div class="col input-group">
                    {!! Form::label('car3', 'Characteristic 3', ['class' => 'input-group-text']) !!}
                    {!! Form::text('car3', null, ['class' => 'form-control' . ($errors->has('car3') ? ' is-invalid' : ''), 'placeholder' => 'Write caracteristic 3', 'autocomplete' => 'off']) !!}
                    @error('car3')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>

            </div>
            {{-- dias y horas --}}
            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('mision', 'Mission ', ['class' => 'input-group-text']) !!}
                    {!! Form::textarea('mision', null, ['class' => 'form-control' . ($errors->has('mision') ? ' is-invalid' : ''), 'placeholder' => 'Write a Mission', 'autocomplete' => 'off']) !!}
                    @error('mision')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('vision', 'Vision', ['class' => 'input-group-text']) !!}
                    {!! Form::textarea('vision', null, ['class' => 'form-control' . ($errors->has('vision') ? ' is-invalid' : ''), 'placeholder' => 'Write a vision', 'autocomplete' => 'off','rows' => 3,]) !!}
                    @error('vision')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 text-center">
                <div class="col">

                </div>
                <div class="col input-group text-center items-center">
                    <p class=""><b>Select a photo (1920 x 650)px</b> </p>
                    {!! Form::file('file', ['class' => 'form-input', 'accept' => 'image/png, .jpeg, .jpg', 'id' => 'file']) !!}

                    @error('file')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col">

                </div>

            </div>
            <div class="text-center">
                @if ($about->image)
                    <img id="picture" style="border-radius: 8px;" src="{{ Storage::url($about->image) }}" width="100px"
                        alt="">
                @else
                    <img id="picture" style="border-radius: 8px;"
                        src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px"
                        alt="">
                @endif
            </div>
        </div>
        <div class="card-footer text-center">
            {!! Form::submit('Update', ['class' => ' btn btn-success mt-2']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
@stop

@section('js')
    <script>
        document.getElementById("file").addEventListener('change', cambiarImagen);
        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
@stop