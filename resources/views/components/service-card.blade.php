
@props(['service'])

<article class="bg-white shadow-md max-w-sm rounded-3xl overflow-hidden hover:shadow-xl relative transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105">
    <img class="h-36 object-cover w-full cursor-pointer" data-preload="true" data-fancybox src="{{Storage::url($service->image->url)}}" alt="{{$service->slug}}">
    <div class="px-6 py-4  mb-10 select-none">
        <div class="flex justify-center">
            <h1 class="font-bold text-lg text-blue-900 leading-6 mb-2">{{Str::limit($service->title, 28)}}</h1>
            <div class="ml-2 cursor-pointer">
                <img width="23px" src="{{Storage::url($service->logo)}}" alt="{{$service->slug}}">
            </div>
        </div>
            <div class="h-16 items-center flex">
                {{-- <h1 class="font-bold text-sm mb-3 text-gray-600">Include</h1>
                <ul class="grid grid-cols-1 md:grid-cols-1 gap-x-1 gap-y-2">
                    @foreach ($service->goals->take(3) as $goal)
                        <li class="text-gray-600 text-xs font-semibold ">
                            <i class="fas fa-check-circle text-blue-900 mr-1"></i> {{Str::limit($goal->name, 45)}}  
                        </li>
                    @endforeach
                </ul> --}}
                <h2 class="text-gray-600 text-sm font-semibold text-justify">
                    {!! Str::limit($service->description, 110) !!}
                </h2>
            </div>  
    </div>
    <a href="{{route('services.show', $service)}}" class="w-full bottom-0 py-3 md:py-2 px-4 rounded rounded-t-none text-base md:text-sm absolute text-center bg-blue-900 hover:bg-blue-700 text-white font-bold ">
        More Information
    </a>
</article>