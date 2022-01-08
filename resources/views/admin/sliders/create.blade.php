@extends('adminlte::page')

@section('title', 'Dr-Pool')

@section('content_header')
    <div class="card">
        <div class="card-header">
            Create Slider
        </div>

        <div class="card-body">
            {!! Form::open(['route' => 'admin.sliders.store', 'files' => true, 'autocomplete' => 'off']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Order: ') !!}
                {!! Form::number('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Write a order ...', 'autocomplete' => 'off']) !!}
                @error('name')
                    <div class="alert alert-danger mt-1" role="alert">
                        <strong>Ups!</strong>{{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('foto', 'Image: ') !!}
                <p class=""><b>Note:</b> select a rectangular image (1920 x 650)px</p>
                {!! Form::file('file', ['class' => 'form-input', 'accept' => 'image/png, .jpeg, .jpg', 'id' => 'file']) !!}
                @error('file')
                <div class="
                    alert alert-danger mt-1" role="alert">
                    <strong>Ups!</strong>{{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @enderror
    </div>
    </div>
    <div class="text-center">
        
        <img id="picture" style="border-radius: 8px;" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px" alt="">
                        
    </div>
    </div>
<div class="card-footer text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-md btn-primary']) !!}
</div>
{!! Form::close() !!}

</div>
</div>

@stop

@section('content')




@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

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
