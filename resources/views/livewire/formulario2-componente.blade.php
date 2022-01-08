<div>
    <div class="relative w-full mb-4 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">Name * </label>
        <input placeholder="Complete names" wire:model.lazy="name" type="text" class=" border-2 border-gray-100 px-2 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
    
        @error('name')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror
    </div>

    <div class="relative w-full mb-4 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">Phone *</label>
        <input placeholder="Telephone or cell number" wire:model.lazy="phone" type="number" class=" border-2 border-gray-100 px-2   py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
      
        @error('phone')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror
    </div>

    <div class="relative w-full mb-4 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">ADDRESS * </label>
        <input wire:model.defer="ubication" placeholder="Danbury , 31 Clapboard ridge rd , CT" type="text" class=" border-2 border-gray-100 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        
        @error('ubication')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror
    </div>

    <div class="relative w-full mb-4 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">ZIP CODE *</label>
        <input wire:model.lazy="day" placeholder="06811" type="number" class=" border-2 border-gray-100 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        
        @error('day')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror
    </div>


    <div class="relative w-full mb-4 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">E-mail *</label>
        <input placeholder="doc@dr_pools.com" wire:model.lazy="email" type="email" class=" border-2 border-gray-100 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded-full text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
        
        @error('email')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror
    </div>
    
    <label class="block uppercase text-blue-900 text-xs font-bold mb-2">Select a service *</label>
    <div wire:ignore  class="relative cursor-pointer w-full mb-4 mt-2 text-sm text-gray-500 shadow-md px-4 border-2 rounded-full">
        
        <select id="select2-dropdown" required class="personalizado w-full text-sm cursor-pointer lowercase text-gray-600">
                <option class="" value="">Select a service</option>
                @foreach ($services as $service)
                    <option class="text-sm text-gray-600 lowercase" value="{{ $service->id }}">{{ $service->title }}</option>
                @endforeach
        </select>

        <style>
            .personalizado{
                background: #fff;
                border: none;
            }
            .personalizado:focus {            
                border-color: inherit;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            .select2-container--default .select2-selection--single{
                border: none;
            }
        </style>
    </div>
    @error('service_id')
    <div x-data="{ open: true }" class="my-4">
        <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
            <span class="block sm:inline">{{$message}}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
            <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    </div>
    @enderror
    
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#select2-dropdown').select2()
            $('#select2-dropdown').on('change', function (e) {
                var sId = $('#select2-dropdown').select2("val")
                var sName = $('#select2-dropdown option:selected').text()
                @this.set('service_id', sId)
                @this.set('serviceTite', sName)
            });
        });
    </script>

    <div class="relative w-full mb-4 mt-4 flex">
       <div class="w-1/2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">POOL MATERIAL? *</label>
        
        <div class="mt-1 text-gray-500 text-xs space-y-2">
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="material" name="material" type="radio" value="Concrete"/>
                </div> 
                <div class="ml-2 font-semibold">
                    Concrete
                </div>
            </div>
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="material" name="material" type="radio" value="Vinyl"/>
                </div> 
                <div class="ml-2 font-semibold">
                    Vinyl 
                </div>
            </div>
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="material" name="material" type="radio" value="Fiberglass"/>
                </div> 
                <div class="ml-2 font-semibold">
                    Fiberglass 
                </div>
            </div>
            
        </div>
        
        @error('material')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror
       </div>

       <div class="w-1/2">
        


        <label for="" class="block  text-blue-900 text-xs font-bold mb-2">POOL SIZE? (US gal)</label>
        
        <div class="mt-1 text-gray-500 text-xs space-y-2">
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="galon" name="galon" type="radio" value="10 - 20"/>
                </div> 
                <div class="ml-2 font-semibold">
                    10 - 20 (K) 
                </div>
            </div>
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="galon" name="galon" type="radio" value="30 - 50"/>
                </div> 
                <div class="ml-2 font-semibold">
                    30 - 50 (K) 
                </div>
            </div>
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="galon" name="galon" type="radio" value="+60"/>
                </div> 
                <div class="ml-2 font-semibold">
                    +60 (K) 
                </div>
            </div>
            
        </div>
        
        
       </div>
    </div>

    <div class="relative w-full mb-5 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">POOL CHEMISTRY? *</label>
        
        <div class="mt-1 text-gray-500 text-xs space-y-2">
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="sustancia" name="sustancia" type="radio" value="Chlorine"/>
                </div> 
                <div class="ml-2 font-semibold">
                    Chlorine
                </div>
            </div>
            <div class="flex items-center">
                <div>
                    <input class="text-blue-900" wire:model.defer="sustancia" name="sustancia" type="radio" value="Salt"/>
                </div> 
                <div class="ml-2 font-semibold">
                    Salt
                </div>
            </div>
            
        </div>
        @error('sustancia')
        <div x-data="{ open: true }" class="my-4">
            <div x-show="open" class="text-red-500 text-xs md:text-sm relative" role="alert">
                <span class="block sm:inline">{{$message}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
                <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        </div>
        @enderror

    </div>

    <div class="relative w-full mb-1 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">Describe your project</label>
        <textarea  wire:model.defer="description" type="text" name="" id="" cols="30" rows="2" class="text-gray-700 border-2 border-gray-100 px-3 py-2 placeholder-blueGray-300  bg-white rounded-xl text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150"></textarea>

    </div>

    <div class="relative w-full mb-1 mt-2">
        <label for="" class="block uppercase text-blue-900 text-xs font-bold mb-2">Files</label>
        <p class="block text-gray-600 text-xs mb-2">Upload a pool photo</p>       
        <input  wire:model.defer="file1" type="file" accept="image/png, .jpeg, .jpg"  cols="30" rows="2" class="text-gray-700 border-2 mb-2 border-gray-100 px-3 py-2 placeholder-blueGray-300  bg-white rounded-xl text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">

            <div wire:loading wire:target="file1" class="text-blue-900 text-xs md:text-sm">
                <strong>Loading File....</strong>
            </div>
            @if ($file1)
            <p class="text-gray-500 text-xs">Photo 1 Preview:</p>
            <div class="w-10 h-10 mb-2">
                <img style="border-radius: 10%"  src="{{ $file1->temporaryUrl() }}">
            </div>
            @endif
        

        <input  wire:model="file2" accept="image/png, .jpeg, .jpg" type="file" cols="30" rows="2" class="text-gray-700 border-2 border-gray-100 px-3 py-2 placeholder-blueGray-300  bg-white rounded-xl text-sm shadow-md focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            <div wire:loading wire:target="file2" class="text-blue-900 text-xs md:text-sm">
                <strong>Loading File....</strong>
            </div>
            @if ($file2)
                <p class="text-gray-500 text-xs w-full">Photo 2 Preview:</p>
                <div class="w-10 h-10 mb-2">
                    <img style="border-radius: 10%"  src="{{ $file2->temporaryUrl() }}">
                </div>
            @endif

    </div>
    
    <div class="mx-auto mb-2 mt-4 text-center">
        <div wire:loading wire:target="save">
            <label class="text-blue-900  text-base flex items-center">Processing data...
                <svg class="animate-spin flex items-center ml-2 mr-3 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </label>
        </div>
        <button wire:click="save" wire:target="save"  
                wire:loading.remove class="border-0  mx-auto focus:outline-none focus:ring ease-linear transition-all duration-150 lg:mx-0 hover:bg-blue-700  bg-blue-900 text-white font-bold rounded-full my-2 py-2 px-8 shadow-2xl">
                SEND
        </button> 
    </div>
    @if(session('errores'))   
    <div x-data="{ open: true }" >
        <div x-show="open" class="bg-red-500 border border-red-600 text-red-50 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Ups!</strong>
            <span class="block sm:inline">{{session('errores')}}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg x-on:click="open = false" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    </div>
    @endif

    </div>
    <h6 class="text-xs text-gray-400">Note: Your data is safe with our data encryption, thank you for trusting us.</h6>
</div>

</div>