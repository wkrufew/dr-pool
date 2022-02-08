@extends('adminlte::page')

@section('title', 'Empresa')

@section('content_header')
    <h1>Company</h1>
@stop

@section('content')
    @if(session('notificacion'))   
    <div class="alert alert-success" role="alert">
    <strong>Success! </strong> {{session('notificacion')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @forelse($empresas as $empresa)
    <div class="card">
        <div class="card-header">
            Data
        </div>
        <div class="card-body justify-between flex">
            <a class="btn btn-danger" href="{{route('down')}}">System Maintenance</a>
            <a class="btn btn-success" href="{{route('up')}}">System Up</a>
            <a class="btn btn-primary" href="{{route('fresh')}}">Refresh Cache</a>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Company</span>
                    <label class="form-control" for="">{{ $empresa->name }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Owner</span>
                    <label class="form-control" for="">{{ $empresa->propietario }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <label class="form-control" for="">{{ $empresa->correo }}</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Phone 1</span>
                    <label class="form-control" for="">{{ $empresa->telefono1 }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Phone 2</span>
                    <label class="form-control" for="">{{ $empresa->telefono2 }}</label>
                </div>

                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">City</span>
                    <label class="form-control" for="">{{ $empresa->pais_ciudad }}</label>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Address</span>
                    <label class="form-control" for="">{{ $empresa->calles }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Day</span>
                    <label class="form-control" for="">{{ $empresa->dias }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Hours</span>
                    <label class="form-control" for="">{{ $empresa->horas }}</label>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Facebook</span>
                    <label class="form-control" for="">{{ $empresa->facebook }}</label>
                </div>
                <div class="col input-group">
                    <span class="input-group-text" id="basic-addon1">Intagram</span>
                    <label class="form-control" for="">{{ $empresa->instagram }}</label>
                </div>
            </div>



            <div class="row mb-3">
                <div class="col-12 input-group">
                    <span class="input-group-text" id="basic-addon1">Maps</span>
                    <label class="form-control" for="">{{ $empresa->detalle }}</label>
                </div>
            </div>
            <div class="row">
                <div class="col text-center my-auto">
                <label>Logo-Menu</label>
                @if ($empresa->foto)
                    <div>
                        <img style="border: 8px; border-color: black; " src=" {{ Storage::url($empresa->foto) }}"
                        width="100px;" alt="logo-menu">
                    </div>
                @else
                    <div>
                        No Image
                    </div> 
                @endif
                </div>
                <div class="col text-center my-auto">
                    <label>Logo-Footer</label>
                    @if ($empresa->whatsapp)
                       <div>
                            <img style="border: 8px; border-color: black; " src=" {{ Storage::url($empresa->whatsapp) }}"
                            width="100px;" alt="logo-footer"> 
                        </div> 
                    @else
                        <div>
                            No Image
                        </div>      
                    @endif
                </div>
            </div>

        </div>
        <div class="card-footer text-center">
            <a href="{{ route('admin.empresas.edit', $empresa) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
    @empty
    
    @endforelse

@stop

@section('css')

@stop

@section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- @if (session('mensaje') == 'ok')
    <script>
        Swal.fire(
            'Ok!',
            'La marca ha sido eliminado con exito',
            'success'
        )
    </script>
@endif --}}

    <script>
        @if (Session::has('mensaje'))
            Swal.fire({
            position: 'top-end',
            width: 400,
            /* background: '#333333', */
            toast: true,
            timerProgressBar: true,
            icon: 'success',
            title: 'Date update!',
            showConfirmButton: false,
            timer: 4000
            })
        @endif
    </script>

@stop
