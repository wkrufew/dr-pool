<div>
    <x-slot name="service">
        {{ $service->slug }}
    </x-slot>
    <h1 class="text-2xl font-bold mb-6 uppercase">Contracts: <strong
            class="ml-6">{{ $personas->count() }}</strong></h1>
    <x-table-responsive class="shadow-lg">
        <div class="py-4 px-6 bg-gray-50">
            <input wire:model="search" type="search" class="w-full form-input flex-1 shadow-lg  rounded-md"
                placeholder="search ...">
        </div>
        @if (session('errores'))
            <div x-data="{ open: true }">
                <div x-show="open" class="bg-red-500 border border-red-600 text-red-50 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{ session('errores') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
        @endif

        @if ($personas->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Start Date
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            End Date
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($personas as $key => $persona)
                        <tr @if ($persona->observation && $persona->pivot->status == 1) class="bg-green-300" @else  @endif>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $key + 1 }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $persona->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $persona->pivot->created_at->isoFormat(' D, MMMM, Y') }}
                                    {{-- {{ $persona->pivot->created_at->locale('es')->isoFormat('YYYY') }} --}}</div>
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    @if ($persona->date)
                                        {{\Carbon\Carbon::parse($persona->date)->isoFormat(' D, MMMM, Y')}}
                                    @else
                                    Undefined
                                    @endif 
                                    {{-- {{date('D, M-Y', strtotime($persona->date));}} --}}
                                    
                                </div>
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap flex-col">
                                @if ($persona->pivot->status == 1)
                                    @if ($persona->date < date('Y-m-d') && $persona->date)
                                        <span
                                            class="px-2 py-1 text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                            Completed time
                                        </span>
                                    @else
                                        @if (!$persona->date || !$persona->price || !$persona->observation)
                                            <span
                                                class="px-2 py-1 text-xs leading-5 font-semibold rounded-full bg-yellow-500 text-white">
                                                
                                                    Missing details
                                            </span>
                                        @else
                                            <span
                                                class="px-2 py-1 text-xs leading-5 font-semibold rounded-full bg-purple-500 text-white">
                                                In process
                                            </span>
                                        @endif
                                    @endif
                                @endif
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap text-right text-sm font-medium">
                                @if ($persona->observation && $persona->pivot->status == 1)
                                    {{-- <button title="Finalizar" class="btn btn-primary btn-sm"
                                        wire:click="sube({{ $persona->id }})"><i class="fas fa-power-off"></i>
                                    </button> --}}
                                    <div wire:loading wire:target="sube({{ $persona->id }})" :wire:key="{{ $persona->id }}">
                                        <label class="text-xs flex items-center bg-blue-900 text-white font-bold rounded-full py-1 px-3">
                                            Processing ...
                                            <svg class="animate-spin flex items-center ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <button title="Finalizar" wire:click="sube({{ $persona->id }})" :wire:key="{{ $persona->id }}"  wire:target="sube({{ $persona->id }})"
                                            wire:loading.remove class="border-0  mx-auto focus:outline-none focus:ring ease-linear transition-all duration-150 lg:mx-0 hover:bg-blue-900  bg-blue-600 text-white font-bold rounded-full py-2 px-3 shadow-2xl">
                                            <i class="fas fa-power-off"></i>
                                    </button>
                                @endif
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap text-sm font-medium">
                                @livewire('instructor.show-contacto', ['persona' => $persona], key('show-contacto-' .
                                $persona->id))
                            </td>
                            <td class="px-2 py-2 whitespace-nowrap text-right text-sm font-medium">
                                @livewire('instructor.edit-contacto', ['persona' => $persona], key('edit-contacto-' .
                                $persona->id))
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="px-6 py-4">
                {{ $personas->links() }}
            </div>
        @else
            <div class="px-6 py-4">
                No records found
            </div>

        @endif
    </x-table-responsive>

</div>
