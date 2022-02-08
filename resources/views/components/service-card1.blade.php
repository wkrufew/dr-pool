@props(['service'])

<article class="bg-white shadow-md max-w-xs rounded-3xl overflow-hidden hover:shadow-xl relative transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105">
    <a href="{{route('services.show', $service)}}" class="cursor-pointer">
    <div class="">
        <img class="w-full h-44 object-cover" src="{{Storage::url($service->image->url)}}" alt="{{$service->slug}}">
    </div>
    <div class="px-2 py-4">
        <div class="flex justify-center">
            <h1 class="font-bold text-base text-blue-900 leading-6 mb-1 select-none ">{{Str::limit($service->title, 35)}}</h1>
            <div class="ml-2 cursor-pointer">
                <img width="23px" src="{{Storage::url($service->logo)}}" alt="{{$service->slug}}">
            </div>
        </div>
    </div>
    </a>
</article>

{{-- <article>
    <div class="max-w-md mx-auto bg-white rounded-3xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="">
          <div class="md:shrink-0">
            <img class="h-48 w-full object-cover " src="{{Storage::url($service->image->url)}}" alt="Man looking at item at a store">
          </div>
          <div class="p-8">
            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
            <p class="mt-2 text-slate-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
          </div>
        </div>
      </div>
</article> --}}
{{-- <article class="bg-white shadow-md max-w-xs rounded-lg overflow-hidden hover:shadow-xl relative">
    <img class="h-24 md:h-44 bg-cover w-full cursor-pointer" data-preload="true" data-fancybox src="{{Storage::url($service->image->url)}}" alt="">
    <div class="px-2 py-2 mb-10">
        <div class="flex">
            <h1 class="font-bold text-base text-blue-900 leading-6 mb-1 select-none">{{Str::limit($service->title, 35)}}</h1>
            <div class="ml-4 cursor-pointer">
                <img width="25px" src="{{Storage::url($service->logo)}}" alt="{{$service->slug}}">
            </div>
        </div>
        <div class="select-none">
            <h1 class="font-bold text-xs mb-2 text-gray-600">Includeese</h1>
            <ul class="grid grid-cols-1 md:grid-cols-1 gap-x-1 gap-y-1">
                @foreach ($service->goals->take(3) as $goal)
                    <li class="text-gray-600 text-xs font-semibold">
                        <i class="fas fa-check-circle text-blue-900 mr-0"></i> {{Str::limit($goal->name, 30)}}  
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <a href="{{route('services.show', $service)}}" class="w-full bottom-0 py-2 px-4 text-sm rounded absolute text-center bg-blue-900 hover:bg-blue-700 text-white font-bold ">
        More Information
    </a>
</article> --}}