@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
@stop

@section('content')
    <p>Date Update</p>
    <div class="card">
        <div class="card-header justify-between flex-row">
            Date
        </div>
        <div class="card-body">
            {!! Form::model($empresa, ['route' => ['admin.empresas.update', $empresa], 'method' => 'put', 'files' => true, 'autocomplete' => 'off']) !!}
            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('name', 'Company ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Write a name company', 'autocomplete' => 'off']) !!}
                    @error('name')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('propietario', 'Owner', ['class' => 'input-group-text']) !!}
                    {!! Form::text('propietario', null, ['class' => 'form-control' . ($errors->has('propietario') ? ' is-invalid' : ''), 'placeholder' => 'Write owner', 'autocomplete' => 'off']) !!}
                    @error('propietario')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('correo', '@ ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('correo', null, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'doc@dr-pools.com', 'autocomplete' => 'off']) !!}
                    @error('correo')
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
                    {!! Form::label('telefono1', 'Phone 1', ['class' => 'input-group-text']) !!}
                    {!! Form::text('telefono1', null, ['class' => 'form-control' . ($errors->has('telefono1') ? ' is-invalid' : ''), 'placeholder' => 'White phone 1 main', 'autocomplete' => 'off']) !!}
                    @error('telefono1')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('telefono2', 'Phone 2', ['class' => 'input-group-text']) !!}
                    {!! Form::text('telefono2', null, ['class' => 'form-control' . ($errors->has('telefono2') ? ' is-invalid' : ''), 'placeholder' => 'White phone 2', 'autocomplete' => 'off']) !!}
                    @error('telefono2')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>

                <div class="col input-group">
                    {!! Form::label('pais_ciudad', 'Country - City ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('pais_ciudad', null, ['class' => 'form-control' . ($errors->has('pais_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Country-city', 'autocomplete' => 'off']) !!}
                    @error('pais_ciudad')
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
                    {!! Form::label('calles', 'Address ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('calles', null, ['class' => 'form-control' . ($errors->has('calles') ? ' is-invalid' : ''), 'placeholder' => 'Write a address', 'autocomplete' => 'off']) !!}
                    @error('calles')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('dias', 'Day', ['class' => 'input-group-text']) !!}
                    {!! Form::text('dias', null, ['class' => 'form-control' . ($errors->has('dias') ? ' is-invalid' : ''), 'placeholder' => 'Write days', 'autocomplete' => 'off']) !!}
                    @error('dias')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('horas', 'Hours ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('horas', null, ['class' => 'form-control' . ($errors->has('horas') ? ' is-invalid' : ''), 'placeholder' => 'Write hours', 'autocomplete' => 'off']) !!}
                    @error('horas')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>

            </div>
            {{-- fin de dias y horas --}}
            <div class="row mb-3">
                <div class="col input-group">
                    {!! Form::label('facebook', 'Facebook ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('facebook', null, ['class' => 'form-control' . ($errors->has('facebook') ? ' is-invalid' : ''), 'placeholder' => 'Facebook', 'autocomplete' => 'off']) !!}
                    @error('facebook')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="col input-group">
                    {!! Form::label('instagram', 'Instagram ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('instagram', null, ['class' => 'form-control' . ($errors->has('instagram') ? ' is-invalid' : ''), 'placeholder' => 'Instagram', 'autocomplete' => 'off']) !!}
                    @error('instagram')
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
                    {!! Form::label('detalle', 'Mapa ', ['class' => 'input-group-text']) !!}
                    {!! Form::text('detalle', null, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Write url map', 'autocomplete' => 'off']) !!}
                    @error('nota')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mx-auto">
                <div class="col text-center">
                    <p class="pr-2"><b>Select image menu</b> </p>
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

                <div class="col text-center">
                    <p class="pr-2"><b>Select image footer</b> </p>
                    {!! Form::file('file1', ['class' => 'form-input', 'accept' => 'image/png, .jpeg, .jpg', 'id' => 'file1']) !!}

                    @error('file1')
                        <div class="alert alert-danger mt-1" role="alert">
                            <strong>Ups!</strong>{{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="col text-center">
                    @if ($empresa->foto)
                        <img id="picture" style="border-radius: 8px;" src="{{ Storage::url($empresa->foto) }}" width="100px"
                            alt="">
                    @else
                        <img id="picture" style="border-radius: 8px;"
                            src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px"
                            alt="">
                    @endif
                </div>
                <div class="col text-center">
                    @if ($empresa->whatsapp)
                        <img id="picture2" style="border-radius: 8px;" src="{{ Storage::url($empresa->whatsapp) }}" width="100px"
                            alt="">
                    @else
                        <img id="picture2" style="border-radius: 8px;"
                            src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px"
                            alt="">
                    @endif
                </div>
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

        document.getElementById("file1").addEventListener('change', cambiarImagen1);

        function cambiarImagen1(event) {
            var file1 = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture2").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file1);
        }
    </script>
@stop
