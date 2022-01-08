@extends('adminlte::page')

@section('title', 'Dr. Pools')

@section('content_header')
    <h1>Rejected Contacts</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('admin.contacts.rechazo') }}" method="GET">
                @csrf
                <div class="form-row">
                    <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="texto" placeholder="Search a name ...">
                    </div>
                    <div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary"> Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body table-responsive">
            @if (session('info'))
                <div class="alert alert-success" role="alert">
                    {{ session('info') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-striped table-hover table-sm">
                <thead class="thead-dark ">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th> Service</th>
                        <th> Date Request</th>
                        <th colspan="3">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $key=>$contact)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->service_name }}</td>
                            <td>{{ $contact->created_at->isoFormat('dddd D MMMM Y') }} </td>

                            <td>
                                <button width="10px" type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal{{ $contact->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $contact->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <b>Name:</b> &nbsp;&nbsp;&nbsp;{{ $contact->name }}
                                                <hr>
                                                <b>Phone:</b>&nbsp;&nbsp;&nbsp;{{ $contact->phone }}
                                                <hr>
                                                <b>Email:</b>&nbsp;&nbsp;&nbsp;{{ $contact->email }}
                                                <hr>
                                                <b>Address:</b>&nbsp;&nbsp;&nbsp;{{ $contact->ubication }}
                                                <hr>
                                                <b>Service:</b>&nbsp;&nbsp;&nbsp;{{ $contact->service_name }}
                                                <hr>
                                                <b>Material:</b>&nbsp;&nbsp;&nbsp;{{ $contact->material }}
                                                <hr>
                                                <b>Substance:</b>&nbsp;&nbsp;&nbsp;{{ $contact->sustancia }}
                                                <hr>
                                                <b>Gallons:</b>&nbsp;&nbsp;&nbsp;{{ $contact->galon }}
                                                <hr>
                                                <b>Detail:</b>&nbsp;&nbsp;&nbsp;{{ $contact->description }}
                                                <hr>
                                                <b>Date request:</b>&nbsp;&nbsp;&nbsp;{{ $contact->created_at }}
                                                <hr>
                                                <div class="flex">
                                                    <img width="200px" data-preload="true" data-fancybox
                                                        src="{{ Storage::url($contact->image1) }}" alt="">
                                                    @if ($contact->image2)
                                                        <img width="200px" data-preload="true" data-fancybox
                                                            src="{{ Storage::url($contact->image2) }}" alt="">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer bg-dark">
                                                <div class="mx-auto">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="flex justify-center">
                                @if ($contact->status == 2)
                                    <form action="{{ route('admin.contacts.rechazar', $contact) }}" method="POST">
                                        @csrf
                                        <button title="Pendiente" type="submit"
                                            class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105 btn btn-sm btn-warning"><i
                                                class="fas fa-arrow-alt-circle-up"></i></button>
                                    </form>
                                @else

                                @endif
                            </td>
                            <td class="flex justify-center">
                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">There are no records </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            {{ $contacts->links() }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            load: true,
        });
    </script>
@stop
