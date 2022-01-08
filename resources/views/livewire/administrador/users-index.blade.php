<div>
    @if(session('notificacion'))   
    <div class="alert alert-success" role="alert">
    <strong>Success! </strong>{{session('notificacion')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <input wire.keydown="limpiar_page" wire:model="search" class="form-control w-100" placeholder="Write a name ...">
    </div>
    

    @if ($users->count())
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm">
                <thead class="thead-dark ">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th> Email</th>
                        <th> Permissions</th>
                        <th colspan="2"> Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @forelse ($user->roles as $item)
                                <label class="text-md">{{$item->name}}</label>@if (!$loop->last),@endif
                                @empty
                                    <label class="text-md">Normal userl</label>
                                @endforelse
                            </td>
                            <td width="10px">
                                <a class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                @if ($user->id == 1)
                                 <label class="btn btn-sm btn-warning">Admin</label>
                                @else
                                    <button wire:click="destroy({{$user->id}})" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                @endif
                            </td>
                            
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">There is no record that matches that name</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>There are no records</strong>
        </div>
    @endif


    
</div>

</div>
