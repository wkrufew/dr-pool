<section class=" p-4">
    <h1 class="text-2xl font-bold">Goals <b class="uppercase text-blue-600">{{$service->title}}</b></h1>

    <hr class="mt-2 mb-6">

    @foreach ($service->goals as $item)
        
        <article class="card mb-4">
            <div class="card-body bg-gray-200 ">
                @if ($goal->id == $item->id)

                    <form wire:submit.prevent="update">
                        <input wire:model="goal.name" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('goal.name')   
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
                            <strong class="font-bold">Ups!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
                        @enderror
                    </form>
                @else
                    <header class="flex justify-between">
                        <h1>{{$item->name}}</h1>
                        
                        <div>
                            <i wire:click="edit({{$item}})" class="fas fa-edit cursor-pointer text-blue-500"></i>
                            <i wire:click="destroy({{$item}})" class="fas fa-trash cursor-pointer text-red-500 ml-3"></i>
                        </div>
                    </header>
                @endif
            </div>
        </article>

    @endforeach

    <article class="card">
        <div class="p-5 bg-gray-200 shadow-lg">
            <form wire:submit.prevent="store">
                <input placeholder="Goal..." wire:model="name" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @error('name')   
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
                            <strong class="font-bold">Ups!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
                    @enderror
                <div class="flex mt-2 justify-center ">
                    <button class="flex items-center btn btn-primary btn-sm"> 
                        <i class="far fa-plus-square text-2xl text-white mr-2"></i>
                        Add goal
                    </button>
                </div>
            </form>
        </div>
    </article>
</section>
