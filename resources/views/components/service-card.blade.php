
@props(['service'])

<article class="bg-white shadow-md rounded-lg overflow-hidden border-4 border-white hover:shadow-xl hover:border-blue-300 relative">
    <img class="h-30 md:h-32 bg-cover w-full cursor-pointer" data-preload="true" data-fancybox src="{{Storage::url($service->image->url)}}" alt="">
    <div class="px-6 py-4  mb-10">
        <h1 class="font-bold text-lg text-blue-900 leading-6 mb-4 ">{{Str::limit($service->title, 28)}}</h1>
            <div class="relative">
                <h1 class="font-bold text-sm mb-3 text-gray-600">Include</h1>
                <ul class="grid grid-cols-1 md:grid-cols-1 gap-x-1 gap-y-2">
                    @foreach ($service->goals->take(3) as $goal)
                        <li class="text-gray-600 text-xs font-semibold ">
                            <i class="fas fa-check-circle text-blue-900 mr-1"></i> {{Str::limit($goal->name, 45)}}  
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
    <a href="{{route('services.show', $service)}}" class="w-full bottom-0 py-2 px-4 rounded absolute text-center bg-blue-900 hover:bg-blue-700 text-white font-bold ">
        More Information
    </a>
</article>