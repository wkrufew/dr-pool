<x-app-layout>  
    <section class="relative overflow-hidden">
        <div class="h-auto pt-20 w-full bg-center bg-cover  top-0 left-0 z-0">
            <img src="{{ Storage::url($about->image) }}" alt=" {{$about->title}}"
                class="object-cover fotoportada w-full">
        </div>
    </section>
    <section class=" relative bg-white pt-1 md:pt-4">
        <div class="max-w-xl mx-auto mt-6">
            <div class="container grid grid-cols-1 lg:grid-cols-1">
                <P class="text-center font-bold text-sm md:text-xl text-gray-600 px-2">
                    {{$about->title}}
                </P>
            </div>
        </div>

    </section>

    <section class=" relative bg-white pt-4 md:pt-8 ">
        <div class="max-w-6xl mx-auto  grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 space-y-2 md:space-y-0 pb-4 md:pb-12 ">
            <P class="text-center font-bold text-sm md:text-base text-blue-900 ">
                <i class="fas fa-check-circle text-blue-900 mr-2"></i>{{$about->car1}}
            </P>
            <P class="text-center font-bold text-sm md:text-base text-blue-900 ">
                <i class="fas fa-check-circle text-blue-900 mr-2"></i>{{$about->car2}}
            </P>
            <P class="text-center font-bold text-sm md:text-base text-blue-900 ">
                <i class="fas fa-check-circle text-blue-900 mr-2"></i>{{$about->car3}} 
            </P>
        </div>
    </section>

    <section class=" relative bg-white py-5">
        <div class="max-w-6xl mx-auto  grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-x-28">
            <div class="text-center font-semibold text-sm md:text-base mb-6 text-gray-500">
                <b class="text-blue-900 text-lg underline">Mission </b><br>
                <p class="px-6 text-justify mt-2 md:mt-0">{{$about->mision}}
                </p>
            </div>
            <div class="text-center font-semibold text-sm md:text-base mb-6 text-gray-500">
                <b class="text-blue-900 text-lg underline">Vision </b><br>
                <p class="px-6 text-justify mt-2 md:mt-0">{{$about->vision}}
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
