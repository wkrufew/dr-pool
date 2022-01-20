
@props(['service'])

<article class="bg-white shadow-lg max-w-xs rounded-lg overflow-hidden border-4 border-white hover:shadow-xl hover:border-blue-400 relative">
    <img class="h-24 md:h-24 bg-cover w-full cursor-pointer" data-preload="true" data-fancybox src="{{Storage::url($service->image->url)}}" alt="">
    <div class="px-2 py-2 mb-10">
        <div class="flex">
            <h1 class="font-bold text-base text-blue-900 leading-6 mb-1 select-none">{{Str::limit($service->title, 35)}}</h1>
            <div class="ml-4 cursor-pointer">
                <img width="25px" src="{{Storage::url($service->logo)}}" alt="{{$service->slug}}">
            </div>
        </div>
        <div class="select-none">
            <h1 class="font-bold text-xs mb-2 text-gray-600">Include</h1>
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
</article>