<x-app-layout>
    <section class="mt-16 md:mt-24 mb-0 md:mb-0 altura portada filo relative cursor-pointer">
        <!-- Swiper -->
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide posicion1">
                        <img src="{{ Storage::url($slider->foto) }}" alt="">
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="hidden md:block swiper-pagination swiper-pagination-white"></div>
            <!-- Add Navigation -->
            <div class="hidden md:block w-2 h-2">
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>
        </div>
        <!-- Initialize Swiper -->
        <script type="module">
            var swiper = new Swiper('.swiper', {
                effect: "fade",
                loop: true,
                autoplay: true,
                speed: 1000,
                parallax: true,
                centeredSlides: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    </section>
    <section class="py-3 md:py-4 mt-4 select-none">
        <div style="text-align: center; justify-content: center;"
            class="mb-1 flex titulo1 container max-w-5xl justify-center text-center mx-auto  pb-2 md:pb-4">
            <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                class="underline text-xl md:text-3xl text-center  font-bold text-blue-900 my-auto cursor-pointer">
                <a>
                    Serving in Connecticut
                </a>
            </div>
            <div class="ml-4 cursor-pointer">
                <a href="{{ route('coverage') }}">
                    <img class="w-9 md:w-20 bg-cover botonpro rounded-full" src="{{ asset('img/home/estado1.png') }}"
                        alt="coverage" title="Coverage">
                </a>
            </div>
        </div>
        <div
            class="bg-white py-2 max-w-7xl mx-auto px-8 sm:px-16 lg:px-8 grid  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mb-6 ">
            @foreach ($services as $service)
                <x-service-card1 :service="$service" />
            @endforeach
        </div>
        @if ($services->count() > 8)
            <div class="w-full text-center">
                <a href="{{ route('services.index') }}"
                    class="bg-blue-900 py-1.5 px-3 rounded-md text-white text-base font-semibold hover:bg-blue-700">
                    View More
                </a>
            </div>
        @endif
    </section>

    <section class="relative bg-gradient-to-t from-blue-900 to-blue-200  mt-10 z-30 select-none">
        <div class="relative w-full mt-0">
            <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                        <g class="wave" fill="#FFFFFF">
                            <path
                                d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                            </path>
                        </g>
                        <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                            <g
                                transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                                <path
                                    d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                    opacity="0.100000001"></path>
                                <path
                                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                    opacity="0.100000001"></path>
                                <path
                                    d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                    opacity="0.200000003"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                class="cotizar1 mt-10 tracking-wide  text-white text-center text-xl md:text-3xl font-bold">Make an
                appointment with us!
            </h1>
            <div class="flex justify-center mt-6 border-transparent border-0 border-none">
                <a href="{{ route('cotizacion2') }}"
                    class="cotizar3 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 center py-1 px-2 text-white  font-semibold rounded-full shadow-md hover:bg-blue-700 hover:text-white border-2 hover:border-white focus:outline-none  focus:ring-opacity-75 ">
                    Let's go
                </a>
            </div>
        </div>
        <div class="relative mt-1">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </section>

    <section class="pt-10 md:pt-24 bg-white relative overflow-hidden select-none">
        <div class="marcas1 max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="px-1 py-6 md:py-1 flex contenedor portada1 mt-6 md:mt-8">
                <div
                    class="liquid font-bold transition duration-500 ease-in-out transform hover:-translate-y hover:scale-105">
                    <h2 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                        class="text-6xl md:text-9xl font-bold ">Dr.<span>&nbsp;</span>Pools</h2>
                    <h2 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                        class="text-6xl md:text-9xl font-bold ">Dr.<span>&nbsp;</span>Pools</h2>
                </div>
            </div>
        </div>

        <div class="marcas2 max-w-4xl mx-auto sm:px-4 lg:px-0">
            <div id="card-slider" class="splide">
                <div class="splide__track mt-10 md:mt-28">
                    <ul class="splide__list">
                        @forelse ($resenas as $resena)
                            <li class="splide__slide m-4 p-4">
                                <blockquote
                                    class="flex items-center justify-center text-center w-full col-span-1 p-4 bg-white rounded-lg ">
                                    <div class="flex flex-col pr-6 md:pr-10">
                                        <div class="relative pl-6 md:pl-12">
                                            <svg class=" absolute left-0 w-6 md:w-10 h-6 md:h-10 text-blue-900 fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                <path
                                                    d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z">
                                                </path>
                                            </svg>
                                            <p style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                                                class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">
                                                {{ $resena->description }}</p>
                                        </div>
                                        <h3
                                            class="text-center pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base md:text-sm lg:text-base">
                                            <span
                                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                                                class="mt-1 text-sm leading-5 text-gray-500 truncate">{{ $resena->name }}</span>
                                        </h3>
                                    </div>
                                </blockquote>
                            </li>
                        @empty

                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-white relative overflow-hidden select-none">
        <div class="marcas2 max-w-4xl mx-auto sm:px-4 lg:px-0">
            <div id="card-slider1" class="splide">
                <div class="splide__track mt-2">
                    <ul class="splide__list">
                        @forelse ($brands as $marcas)
                            <li class="splide__slide">
                                @if ($marcas->url)
                                    <a href="{{ $marcas->url }}" target="_blank">
                                        <img alt="{{ $marcas->titulo }}"
                                            class="mx-auto cursor-pointer  duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105"
                                            src="{{ Storage::url($marcas->foto) }}">
                                    </a>
                                @else
                                    <a>
                                        <img alt="{{ $marcas->titulo }}"
                                            class="mx-auto cursor-pointer  duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105"
                                            src="{{ Storage::url($marcas->foto) }}">
                                    </a>
                                @endif
                            </li>
                        @empty
                            {{-- EN CASO DE NO HABER MARCAS NO MOSTRAR NADA --}}
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        //Opacidad a la portada
        const checkpoint = 350;
        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll <= checkpoint) {
                opacity = 1 - currentScroll / checkpoint;
            } else {
                opacity = 0;
            }
            document.querySelector(".portada").style.opacity = opacity;
        });
        //fin de opacidad a la portada
        Fancybox.bind("[data-fancybox]", {
            // Your options go here
        });
        document.addEventListener('DOMContentLoaded', function() {

            new Splide('#card-slider', {
                type: 'loop',
                speed: 2000,
                perPage: 1,
                trimSpace: false,
                focus: 'center',
                breakpoints: {
                    600: {
                        perPage: 1,
                        height: 'auto',
                    }
                },

                arrows: false,
                arrow: false,

                interval: 5000,
                pagination: false,
                autoplay: true,
            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function() {


            new Splide('#card-slider1', {
                type: 'loop', //que sea infinito que termine y vuelva a empezar
                perPage: 1, //cantidad de obejtos visibles en la pagina 
                speed: 2000, // aqui manejas la suavidad que tiene al pasar  3000 serian 3 segundos
                trimSpace: false,
                focus: 'center', //mantiene centrado las imagenes
                breakpoints: {
                    600: {
                        perPage: 1,
                        height: 'auto',
                    }
                },

                arrows: false, //yo lo tengo asi por que no quiero que me salgan las flechitas a los costados tu puedes quitarles
                arrow: false,

                interval: 5000, //aqui manejas el tiempo en el que quieres que pasen las imagenes 6000 serian 6 segundos
                pagination: false, // para la paginacion
                autoplay: true, //para que se reproduzca automaticamente
            }).mount();
        });
    </script>

</x-app-layout>
