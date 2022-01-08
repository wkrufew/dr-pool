<div>
    <a title="Ver" wire:click.prevent="$set('open', true)" href="" class=" p-1 text-blue-500 text-xl">
        <i class="fas fa-eye mx-auto"></i>
    </a>
    <x-jet-dialog-modal wire:model="open">
                    
        <x-slot name="title">
            <div class="text-left">
                <p class="block uppercase text-blue-900 text-base font-bold mb-1">Contract Details
                </p> 
                <hr>
            </div> 
        </x-slot>

        <x-slot name="content">
            
         <div class="mt-5">
            <div class="grid grid-cols-2">
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Contact:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->name}}"/>
                    </div>
                </div>
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Phone:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->phone}} "/>
                    </div>
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-2">
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Email:
                    </div>
                    <div class="ml-5 text-sm font-bold">                    
                        <x-jet-label value="{{$persona->email}}" />
                    </div>
                </div>
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                       Service:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->service_name}}" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-2">
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Materials:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->material}}" />
                    </div>
                </div>
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Substance:
                    </div>
                    <div class="ml-5 text-sm font-bold">                    
                        <x-jet-label value="{{$persona->sustancia}}" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-2">
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Gallons:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->galon}}" />
                    </div>
                </div>
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        Address:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->ubication}}" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="grid grid-cols-1">
                <div class="flex mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold ">
                        APPLICATION DATE:
                    </div>
                    <div class="ml-5 text-sm font-bold">
                        <x-jet-label value="{{$persona->created_at->isoFormat('dddd, D MMMM, Y') }}" />
                    </div>
                </div>                   
            </div>
            <hr>
            <div class="grid grid-cols-4 mb-1 mt-4">
                    <div class=" uppercase text-blue-900 text-xs font-bold col-span-1">
                        description:
                    </div>
                    <div class="col-span-3">
                        <textarea disabled class="w-full border-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md" wire:model="description" rows="3"></textarea>
                    </div>
            </div>
           <hr>
            <div class="flex mb-1 mt-4">
                <div class=" uppercase text-blue-900 text-xs font-bold ">
                   Photo:
                </div>
                <div class="flex ml-5 text-sm font-bold">
                    <div class="mr-4 cursor-pointer">
                        @if ($persona->image1)
                            {{-- <p class="text-gray-500 text-xs">Photo 1 Preview:</p> --}}
                            <div class="w-32 h-24 mb-2">
                                <img data-fancybox="gallery{{$persona->image1}}" style="border-radius: 10%"  src="{{Storage::url($persona->image1)}}">
                            </div>
                            @endif
                    </div>
                    <div class="mr-4 cursor-pointer">
                        @if ($persona->image2)
                        {{-- <p class="text-gray-500 text-xs">Photo 1 Preview:</p> --}}
                        <div class="w-32 h-24 mb-2">
                            <img data-fancybox="gallery{{$persona->image2}}" style="border-radius: 10%"  src="{{Storage::url($persona->image2)}}">
                        </div>
                        @endif
                    </div>
                </div>
                
            </div>
      
         </div>
       
        </x-slot>

        <x-slot name="footer">
            
            <div class="flex justify-evenly">
                <div class="py-1 whitespace-nowrap text-right text-sm font-medium" >
                    <button class="btn btn-primary btn-sm" wire:click="$set('open', false)">Exit</button>
                </div>
            </div>
        </x-slot>

    </x-jet-dialog-modal>
</div>
