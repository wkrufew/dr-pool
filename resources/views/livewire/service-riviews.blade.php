<section class="pb-10 select-none">
    <h1 class="font-bold text-blue-900 text-base md:text-xl mb-2 mt-1 ml-4">Comments</h1>
    @auth
        <article class="mb-2 rounded-xl">
            @can('valued', $service)
                <textarea wire:model="comment" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Write a comment..." rows="2"></textarea>
                @error('comment')
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
                <div class="flex items-center mt-2 mb-2">
                    <button wire:click="store" class="btn bg-blue-900 hover:bg-blue-700 text-white">Send<i class="ml-2 fas fa-paper-plane"></i></button>
                    <ul class="flex ml-2">
                        <li wire:click="$set('rating', 1)" class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            <i class="fas fa-star text-{{$rating >= 1 ? 'yellow' : 'gray'}}-500"></i>
                        </li>
                        <li wire:click="$set('rating', 2)" class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            <i class="fas fa-star text-{{$rating >= 2 ? 'yellow' : 'gray'}}-500"></i>
                        </li>
                        <li wire:click="$set('rating', 3)" class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            <i class="fas fa-star text-{{$rating >= 3 ? 'yellow' : 'gray'}}-500"></i>
                        </li>
                        <li wire:click="$set('rating', 4)" class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            <i class="fas fa-star text-{{$rating >= 4 ? 'yellow' : 'gray'}}-500"></i>
                        </li>
                        <li wire:click="$set('rating', 5)" class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            <i class="fas fa-star text-{{$rating == 5 ? 'yellow' : 'gray'}}-500"></i>
                        </li>
                    </ul>
                </div>
            @else 
                <div class="rounded-lg flex items-center bg-blue-500 text-white text-xs md:text-sm font-bold px-4 py-2" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>Comment made successfully, thank you for rating the service</p>
                </div>   
            @endcan
        </article>
    @endauth

    @guest
        <textarea class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder=" “Remenber“ before  comment you need to be a user !" rows="2"></textarea>
            <div class="flex items-center mt-2 mb-2">
            
                <button wire:click = "store" class="btn bg-blue-900 hover:bg-blue-700 text-white">Send<i class="ml-2 fas fa-paper-plane"></i></button>
            
            <ul class="flex ml-2">
                <li class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <i class="fas fa-star text-yellow-500"></i>
                </li>
                <li class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <i class="fas fa-star text-yellow-500"></i>
                </li>
                <li class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <i class="fas fa-star text-yellow-500"></i>
                </li>
                <li class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <i class="fas fa-star text-yellow-500"></i>
                </li>
                <li class="mr-2 cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    <i class="fas fa-star text-yellow-500"></i>
                </li>
            </ul>
        </div>
    @endguest

    <div class="shadow-sm rounded-lg px-1 py-2 md:py-4 bg-gray-50 mt-3">
        <div class="px-0.5">
            <p class="text-gray-800 text-xs md:text-sm mb-2 pl-1"><b>{{ $comentarios->total()}} &nbsp; Comment (s)</b></p>

            @forelse ($comentarios as $review)
                <article class="flex  text-gray-800 select-none mt-3">
                    <figure>
                        <img class="rounded-full h-9 w-9 object-cover shadow-lg border-2 border-white" src="{{$review->user->profile_photo_url}}" alt="">
                    </figure>
                    <div class="card flex-1 shadow-md ml-1 md:ml-3">
                        <div class="px-4 py-2 relative shadow-lg">
                            <p class="text-xs md:text-sm"><b>{{$review->user->name}}</b> <i class="fas fa-star text-yellow-500 ml-2 mr-1"></i> <b>({{$review->rating}})</b></p>
                            <p class="text-xs md:text-sm py-1 text-gray-700">{{$review->comment}}</p>
                            
                            <p class="flex-1 text-gray-500 text-xs"><i class="fas fa-clock mr-1"></i> {{$review->created_at->diffForHumans() }} </p>
                            
                            @if ($review->user_id ==  Auth::id())
                                <div class="flex absolute right-1 top-1 md:right-4 md:top-4 cursor-pointer">
                                    <span wire:click="destroy({{$review}})" class="text-base font-bold text-red-600  rounded-full items-center"><i class="fas fa-trash-alt"></i></span>
                                </div>
                            @endif
                        </div>
                    </div>
                </article>
            @empty
                <div class="text-gray-600 text-sm md:text-base">
                    No comments at this time
                </div>
            @endforelse
            <div class="pt-4">
                {{$comentarios->links()}}
            </div>
        </div>
    </div>
</section>
