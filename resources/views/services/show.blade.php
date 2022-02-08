<x-app-layout>
    {{-- SECCION DEL BOTON BLOTANTE --}}
    <section class="overflow-hidden block md:hidden">
        <div class="fixed z-50 right-0 bottom-1 w-full -mb-1 shadow-xl md:sticky md:top-36 ">
            <div class="text-center bg-white p-2 border-t rounded-t-2xl">
                <p class="text-blue-900 text-base md:text-lg"> <b>{{$service->title}} </b> </p>
                <a href="{{ route('cotizacion', $service) }}"
                    class="botonpro block border-t-2 border-white rounded-lg text-center font-bold  text-white py-2 px-4 bg-blue-900 hover:bg-blue-800">
                    Get a quote <i class="far fa-file-alt ml-2"></i>
                </a>
            </div>
        </div> 
    </section>
    {{-- SECCION DE PORTADA --}}
    <section class="alturaportada relative">
        <div class="fixed bg-fixed h-auto object-cover w-full">
            <img class="object-cover cursor-pointer w-full" data-preload="true" data-fancybox src="{{ Storage::url($service->image->url) }}" alt="{{$service->title}}">
        </div>
    </section>
    <script>
        Fancybox.bind("[data-fancybox]", {
        });
    </script>
    <section class="relative bg-white pt-2">
        <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="order-2 lg:col-span-2 lg:order-1">
                <section class="card mb-12 select-none shadow-xl">
                    <div class="card-body">
                        <h1 class="font-bold text-base md:text-lg mb-4 text-blue-900">Include </h1>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                            @foreach ($service->goals as $goal)
                                <li class="text-gray-800 text-sm md:text-sm">
                                    <i class="fas fa-check-circle text-blue-900 mr-1"></i> 
                                        {{ $goal->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
                <section class=" card select-none mb-10 shadow-xl">
                    <div class="card-body">
                        <h1 class="font-bold text-base md:text-lg mb-2 text-blue-900">Description</h1>
                        <div class="text-gray-800 text-sm md:text-sm">
                            {!! $service->description !!}
                        </div>
                    </div>
                </section>
                 {{-- RENDERIZA LA VISTA DE LOS COMENTARIOS --}}
                @livewire('service-riviews', ['service' => $service])
            </div>
            <div class="order-2 lg:order-2 select-none hidden md:block">
                <section class="card mb-6 shadow-md">
                    <div class="card-body text-center w-full">
                        <p class="text-blue-900 text-lg"> <b>{{$service->title}} </b> </p>
                        <a href="{{ route('cotizacion', $service) }}"
                            class="botonpro btn-block text-center font-bold rounded mt-3 text-white py-2 px-4 bg-blue-900 hover:bg-blue-800">
                            Get a quote
                            <i class="far fa-file-alt ml-2"></i>
                        </a>
                    </div>
                </section>
                <section class="card py-2 shadow-md">
                    <article class="justify-center object-cover overflow-hidden flex ">
                        <div class="text-center">
                            <a href="{{ route('coverage') }}">
                                <p class="text-blue-900 text-sm font-bold">Coverage</p>
                                <div class="flex items-center p-1">
                                    <img class="h-auto w-12 object-cover transition duration-300 ease-in-out transform hover:-translate-y-0 hover:scale-105"
                                        src="{{ asset('img/home/estado1.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </section>
</x-app-layout>
