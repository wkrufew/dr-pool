<div>
    <a title="Ingresar Detalle" wire:click.prevent="$set('open', true)" href="" class=" p-1 text-blue-500 text-xl">
        <i class="fas fa-edit mx-auto"></i>
    </a>
    <x-jet-dialog-modal wire:model="open">
                    
        <x-slot name="title">
            <div class="text-left">
                <p class="block uppercase text-blue-900 text-sm font-bold mb-1">Contract: {{$persona->name}} </p> 
                <hr>
            </div> 
        </x-slot>

        <x-slot name="content">
         <div class="text-left mt-5">
            {{-- <p class="block uppercase text-blue-900 text-xs font-bold mb-1">Nombre de la persona:</p>{{$persona->name}}        
            <hr> --}}
            <div class="flex mb-1 mt-4">
                <div class=" uppercase text-blue-900 text-xs font-bold ">
                    Service:
                </div>
                <div class="ml-5 text-sm font-bold">
                    {{$persona->service_name}}
                </div>
            </div>
           
            <hr>

            <div class="flex mb-1 mt-4">
                <div class=" uppercase text-blue-900 text-xs font-bold ">
                    APPLICATION DATE:
                </div>
                <div class="ml-5 text-sm font-bold">
                    {{$persona->created_at->isoFormat('dddd, D MMMM, Y') }}
                </div>
            </div>

            <div class="flex mb-1 mt-4 w-full">
                <div class=" uppercase text-blue-900 text-xs font-bold mt-2">
                    END OF YOUR CONTRACT:
                </div>
                <div class="ml-5 text-sm font-bold flex-1">
                   
                    <input placeholder="Duracion del servicio" wire:model="persona.date" type="date" class=" border-2 border-gray-100 px-2 py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-md text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    
                    @error('persona.date')
                    <div x-data="{ open: true }" class="my-4">
                        <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                            <strong class="font-bold">Ups!</strong>
                            <span class="block sm:inline">{{$message}}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                            <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                        </div>
                    </div>
                    @enderror
                </div>
            </div>
           
            <hr>
            
            <div class="flex mb-1 mt-4 w-full">
                <div class=" uppercase text-blue-900 text-xs font-bold mt-2">
                    Price:  
                </div>
                <div class="ml-5 text-sm font-bold flex-1">
                    $<input placeholder="Price" name="persona.price" wire:model="persona.price" type="number" class=" border-2 border-gray-100 px-2 py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-md text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    @error('persona.price')
                    <div x-data="{ open: true }" class="my-4">
                        <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                            <strong class="font-bold">Ups!</strong>
                            <span class="block sm:inline">{{$message}}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                            <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                        </div>
                    </div>
                    @enderror
                </div>
            </div>
           
            <hr>
            <div class="flex mb-1 mt-4 w-full">
                <div class=" uppercase text-blue-900 text-xs font-bold mt-2">
                    Note:
                </div>
                <div class="ml-5 text-sm font-bold flex-1">
                   
                    <textarea class="border-2 border-gray-100 px-2 py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-md text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150" cols="30" rows="2" wire:model="persona.observation"></textarea>
                    @error('persona.observation')
                    <div x-data="{ open: true }" class="my-4">
                        <div x-show="open" class="bg-red-400 border border-red-500 text-white px-4 py-1 rounded-full relative" role="alert">
                            <strong class="font-bold">Ups!</strong>
                            <span class="block sm:inline">{{$message}}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                            <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                            </span>
                        </div>
                    </div>
                    @enderror
                </div>
            </div>
           
            <hr>
         </div>
       
        </x-slot>

        <x-slot name="footer">
            
            <div class="flex justify-evenly">
                <div class="py-1 whitespace-nowrap text-right text-sm font-medium" >
                    <button class="btn btn-danger btn-sm" wire:click="$set('open', false)">Close</button>
                </div>
                <div class="py-1 whitespace-nowrap text-right text-sm font-medium" >
                    <button class="btn btn-primary btn-sm " wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25">Save</button>
                </div>
            </div>
        </x-slot>

    </x-jet-dialog-modal>
</div>
