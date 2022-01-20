<div wire:init="loadSlider">
    <style>
        .alturaslider {
            height: 65vh;
        }

        .alturaslidercarga {
            height: 78vh;
        }

        @media screen and (max-width: 600px) {
            .alturaslider {
                height: auto;
            }

            .alturaslidercarga {
                height: 29vh;
            }
        }

    </style>
    @if (count($sliders))
        <section class="mt-16 md:mt-24 mb-0 md:mb-0 alturaslider portada filo relative cursor-pointer">
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

        </section>
    @else
        <div class="mb-4 alturaslidercarga flex justify-center items-center bg-transparent pt-10 md:pt-0">
            {{-- <div class="rounded animate-spin ease duration-300 w-6 md:w-16 h-6 md:h-16 border-2 border-blue-900"></div> --}}
            <svg class="animate-spin flex items-center h-10 w-10 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
    @endif
</div>
