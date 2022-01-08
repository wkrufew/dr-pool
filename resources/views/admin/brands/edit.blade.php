@extends('adminlte::page')

@section('title', 'Dr-Pool')

@section('content_header')
    <div class="card">
        <div class="card-header">
            Create Product
        </div>

        <div class="card-body">
            {!! Form::model($brand, ['route' => ['admin.brands.update',$brand], 'method' => 'put', 'files' => true, 'autocomplete' => 'off']) !!}
            <div class="form-group">
                {!! Form::label('titulo', 'Name Producto: ') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre', 'autocomplete' => 'off']) !!}
                @error('titulo')
                    <div class="alert alert-danger mt-1" role="alert">
                        <strong>Ups!</strong>{{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('url', 'Link company: ') !!}
                {!! Form::text('url', null, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Escriba un nombre', 'autocomplete' => 'off']) !!}
                @error('url')
                    <div class="alert alert-danger mt-1" role="alert">
                        <strong>Ups!</strong>{{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <p class=""><b>Note:</b> Select image</p>
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
        @if ($brand->foto)
            <img id="picture" style="border-radius: 8px;" src="{{Storage::url($brand->foto)}}" width="100px" alt="">
        @else
            <img id="picture" style="border-radius: 8px;" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px" alt="">
        @endif              
    </div>
    </div>
<div class="card-footer">
    {!! Form::submit('Update', ['class' => 'btn btn-md btn-primary']) !!}
</div>
{!! Form::close() !!}

</div>
</div>

@stop

@section('content')


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
