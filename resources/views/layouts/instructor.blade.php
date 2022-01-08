<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dr. Pools') }}</title>
        <link rel="shortcut icon" href="{{ asset('img/home/favicon.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Oswald:wght@300&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
        @livewireStyles
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')


            <!-- Page Content -->
            <div class="py-2"></div>
            <div class="container mt-20 py-8 grid grid-cols-1 lg:grid-cols-5 lg:gap-4 ">
                <aside class=" mb-4 rounded-lg ">
                    <h1 class="font-bold text-lg mt-2  mb-4 text-center">Edit Service</h1>
                    <ul class="overflow-hidden  text-md bg-white m-2 rounded-lg shadow-lg text-gray-600 mb-10 ml-2 mr-2">
                        <li class="mt-1 leading-7 mb-1 border-l-4 @routeIs('instructor.services.edit', $service) border-indigo-500 @else border-transparent  @endif pl-2 hover:bg-indigo-500 hover:text-gray-50">
                            <a href="{{route('instructor.services.edit', $service)}}">Information </a> 
                        </li>
                        <hr>
                        <li class="leading-7 mb-1 border-l-4  pl-2 @routeIs('instructor.services.goals', $service) border-indigo-500 @else border-transparent  @endif hover:bg-indigo-500 hover:text-gray-50">
                            <a href="{{route('instructor.services.goals', $service)}}">Goals </a> 
                        </li>
                        <hr>
                        <li class="leading-7 mb-1 border-l-4  pl-2 @routeIs('instructor.services.contactos', $service) border-indigo-500 @else border-transparent  @endif hover:bg-indigo-500 hover:text-gray-50">
                            <a href="{{route('instructor.services.contactos', $service)}}">Contracts</a> 
                        </li>
                        <hr>
                        <li class="leading-7 mb-1 border-l-4  pl-2 @routeIs('instructor.services.finalizados', $service) border-indigo-500 @else border-transparent  @endif hover:bg-indigo-500 hover:text-gray-50">
                            <a href="{{route('instructor.services.finalizados', $service)}}">Contract finished</a> 
                        </li>
                        <hr>
                        <li class="leading-7 mb-1 border-l-4 border-transparent  pl-2 hover:bg-indigo-500 hover:text-gray-50 ">
                            <a href="{{route('instructor.services.index')}}">Return to the list of Services</a> 
                        </li>
                    </ul>
                    @routeIs('instructor.services.edit', $service) 
                        @switch($service->status)
                            @case(1)
                                <div class="bg-white p-3 shadow-lg rounded-md">
                                    <div class=" text-red-500 py-2 px-4 rounded-md">
                                        <p class="font-bold text-center ">Draft Service</p>
                                    </div>
                                </div>
            
                                <form class="justify-center mx-auto" action="{{route('instructor.services.status', $service)}}" method="POST">
                                    @csrf
                                    <button class="block w-full bg-blue-600 text-white py-2 px-4 rounded-md mt-5" type="submit">To Post</button>
                                </form>
                                @break
                        
                            @case(2)
                            <div class="bg-white p-3 shadow-lg rounded-md">
                                <div class=" text-blue-500 py-2 px-4 rounded-md">
                                    <p class="font-bold text-center ">Published Service</p>
                                </div>
                            </div>
        
                            <form class="justify-center mx-auto" action="{{route('instructor.services.status', $service)}}" method="POST">
                                @csrf
                                <button class="block w-full hover:bg-red-500 bg-red-600 text-white py-2 px-4 rounded-md mt-5" type="submit">Go to draft</button>
                            </form>
                            
                            @break
                            
                            @default
                                
                        @endswitch
                    @endif
                </aside>
        
                <div class="col-span-4 p-10 rounded-lg bg-gray-50 shadow-md">
                    <main class="card-body ">
                        {{$slot}}
                    </main>
                </div> 
            </div>
            </div>

        @stack('modals')
        @stack('js')
        @livewireScripts

        @isset($js)
            {{$js}}
        @endisset
        <script>
            Fancybox.bind("[data-fancybox]", {
                load: true,
            });
        </script>
    </body>
</html>
