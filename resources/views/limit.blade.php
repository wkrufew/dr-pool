<x-app-layout>
    <style>
        
        .mapBox{
            position: relative;
            width: 100%;
            height: 90vh;
            background: white;
        }

        .mapBox iframe{
            width: 100%;
            height: 100%;
        }

        @media screen and (max-width: 600px) {

            .mapa {
                height: auto;

            }
        }

    </style>
    @php
        $empresa = DB::table('empresas')->select('detalle')->first();
    @endphp
    <section class="max-h-full w-full bg-black mt-24 flex justify-center items-center">
        <div class="mapBox">
            @if ($empresa->detalle)
                <iframe src="{{$empresa->detalle}}" ></iframe>
            @else
                <div class="w-full h-1/2 flex justify-center items-center">
                    <p class="text-lg md:text-3xl pr-2">The map is not available at the moment!</p>
                    <img class="w-9 md:w-20 bg-cover rounded-full" src="{{ asset('img/home/estado1.png') }}"
                        alt="coverage" title="Coverage">
                </div>
            @endif
        </div>
    </section>
   {{--  <div class="mt-6" x-data="{ open: true }">
        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);" x-show="open">
            <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
                <h2 class="text-2xl">Instructivo</h2>
                <ul class="list-decimal m-4">
                    <li>Para buscar un lugar se debe hacer esto y el otro </li>
                    <li>Luego haceer esto y el otro</li>
                </ul>
                <div class="flex justify-center mt-8">
                    <button class="bg-gray-700 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none" @click="open = false">Entiendo</button>
                </div>
            </div>
        </div>
    </div> --}}
   
</x-app-layout>