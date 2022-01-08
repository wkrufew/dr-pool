<div>
    <x-slot name="service">
        {{$service->slug}}
    </x-slot>
    <h1 class="text-2xl font-bold mb-6 uppercase">Contracts terminated: <strong class="ml-6">{{$personas->count()}}</strong></h1>
    <x-table-responsive class="shadow-lg">
        <div class="py-4 px-6 bg-gray-50">
            <input wire:model="search" type="search" class="w-full form-input flex-1 shadow-lg  rounded-md" placeholder="Write the name of the person ..">
        </div>

        @if ($personas->count())
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    #
                    </th>
                   <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Contract date
                    </th>
                   
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status      
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          
                    </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($personas as $key=>$persona)
              <tr>{{--  @if(  $persona->pivot->created_at->addMonth() < now()) class="bg-red-200" @else  @endif --}}
                <td class="px-6 py-2 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                            {{$key + 1}}
                        </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-2 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                            {{$persona->name}}
                        </div>
                        </div>
                    </div>
                </td>
                <td class="px-2 py-2 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$persona->pivot->created_at->isoFormat('dddd, D MMMM, Y') }}</div>
                </td>
                <td class="px-2 py-2 whitespace-nowrap">
                    @if ($persona->pivot->status == 1)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-500 text-white">
                            Process
                        </span>
                    @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-600 text-white">
                            Finalized
                        </span>
                    @endif()
                </td>
                <td class="px-2 py-2 whitespace-nowrap  text-sm font-medium" >
                    @if ($persona->pivot->status == 2)
                        <button class="btn btn-danger btn-sm" wire:click="baja({{$persona->id}})" ><i class="fas fa-power-off"></i></button>
                    @endif
                </td>
                <td class="px-2 py-2 whitespace-nowrap  text-sm font-medium">
                    @livewire('instructor.show-contacto', ['persona' => $persona], key('show-contacto-' . $persona->id))
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <div class="px-6 py-4">
                {{$personas->links()}}
          </div>
        @else
        <div class="px-6 py-4">
            No records found
        </div>
          
        @endif
    </x-table-responsive>

</div>