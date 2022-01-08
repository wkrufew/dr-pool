<nav x-data="{ open: false }" class="fixed inset-x-0 bg-white  md:bg-white top-0 z-50 py-0 md:py-4 transition-all duration-150 ease-in rounded-b-md" id="navbar">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img id="logo" class="transition-all duration-150 ease-in block h-16 md:h-24 py-1 items-center" src="{{Storage::url($empresa->foto)}}">
                    </a>
                </div> 
                <!-- Navigation Links -->
                <div class="hidden space-x-6 mx-auto sm:-my-px sm:ml-32 lg:flex @auth pl-44 @else pl-28 @endauth">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        <label style="font-family: Metropolis,sans-serif;" class="text-blue-800 text-sm border-2 border-blue-800 rounded-full py-1  px-5  cursor-pointer hover:text-white hover:bg-blue-800 transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 tracking-wider">Home</label>
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('services.index') }}" :active="request()->routeIs('services.*')">
                        <label style="font-family: Metropolis,sans-serif;" class="text-blue-800 text-sm border-2 border-blue-800 rounded-full py-1  px-5  cursor-pointer hover:text-white hover:bg-blue-800 transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 tracking-wider">Services</label>
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('cotizacion2') }}" :active="request()->routeIs('cotizacion2')">
                        <label style="font-family: Metropolis,sans-serif;" class="text-blue-800 text-sm border-2 border-blue-800 rounded-full py-1  px-5  cursor-pointer hover:text-white hover:bg-blue-800 transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 tracking-wider">Contact</label>
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                        <label style="font-family: Metropolis,sans-serif;" class="text-blue-800 text-sm border-2 border-blue-800 rounded-full py-1  px-5  cursor-pointer hover:text-white hover:bg-blue-800 transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 tracking-wider">About</label>
                    </x-jet-nav-link>
                    @guest
                        <x-jet-nav-link wire:click="$emit('login-modal')">
                            <label  style="font-family: Metropolis,sans-serif;" class="text-blue-800 text-sm border-2 border-blue-800 rounded-full py-1  px-5  cursor-pointer hover:text-white hover:bg-blue-800 transition duration-500 ease-in-out transform hover:-translate-y-0.5 hover:scale-105 tracking-wider">Login</label>
                        </x-jet-nav-link>
                    @endguest
                </div>
            </div>
           @auth
           <div class="hidden lg:block my-auto">
            <div class=" w-20">
                    <a title="Coverage" class="pr-6 text-blue-900 text-xl  hover:text-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105" href="{{route('coverage')}}"><i class="fas fa-globe-americas"></i></a>
                    <a class="text-blue-900 text-xl hover:text-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105" href="tel:{{$empresa->telefono1}}"><i class="fas fa-phone"></i></a> 
            </div>
           </div>
           @endauth
            <div class="hidden lg:flex sm:items-center sm:ml-6">
                <div class="flex">
                    <a class="pr-6 text-blue-900 text-xl  hover:text-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105" href="tel:{{$empresa->telefono1}}"><i class="fas fa-phone"></i></a>
                </div>
                <div class="flex">
                    <a title="Coverage" class="px-2 text-blue-900 text-xl  hover:text-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105" href="{{route('coverage')}}"><i class="fas fa-globe-americas"></i></a>
                </div>
                <!-- Settings Dropdown -->
                @auth
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Options
                                </div>

                                @can('Ver Dashboard')
                                <x-jet-dropdown-link href="{{ route('admin.home') }}">
                                    Administrator
                                </x-jet-dropdown-link>
                                @endcan

                                @can('Leer Servicios')
                                <x-jet-dropdown-link href="{{ route('instructor.services.index') }}">
                                    Moderator
                                </x-jet-dropdown-link>
                                @endcan

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    Profile
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        Logout
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>  
                @else
                    
                @endauth
                
            </div>
            <!-- Hamburger -->
            <div class="flex items-center lg:hidden">
                 {{-- BOTON PARA LLAMADA DIRECTA --}}
                <div class="flex lg:hidden my-auto text-right pr-6">
                    <a title="Coverage" class="text-blue-900 text-xl  hover:text-blue-700 transition duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105" href="{{route('coverage')}}"><i class="fas fa-globe-americas"></i></a>
                </div>
                <div class="flex lg:hidden my-auto text-right pr-6">
                    <a class="text-blue-900 text-xl  hover:text-blue-700" href="tel:{{$empresa->telefono1}}"><i class="fas fa-phone"></i></a>
                </div>
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-900 hover:text-gray-300 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-blue-900 transition-all duration-500 ease-in">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Home</label>
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('services.index') }}" :active="request()->routeIs('services.index')">
                
                <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Services</label>
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('cotizacion2') }}" :active="request()->routeIs('cotizacion2')">
                
                <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Contact</label>
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
               
               <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">About</label>
            </x-jet-responsive-nav-link>
            @guest
                <x-jet-responsive-nav-link wire:click="$emit('login-modal')">
                    
                    <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Login</label>
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">                    
                    <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Register</label>
                </x-jet-responsive-nav-link>
            @endguest
        </div>

        <!-- Responsive Settings Options -->
        
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-sm text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-xs text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                
                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        
                        <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Profile</label>
                    </x-jet-responsive-nav-link>

                    @can('Ver Dashboard')
                        <x-jet-responsive-nav-link href="{{ route('admin.home') }}" :active="request()->routeIs('admin.home')">
                             
                             <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Administrator</label>
                        </x-jet-responsive-nav-link>
                    @endcan
                    
                    @can('Leer Servicios')
                        <x-jet-responsive-nav-link href="{{ route('instructor.services.index') }}" :active="request()->routeIs('instructor.services.index')">
                            
                            <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Moderator</label>
                        </x-jet-responsive-nav-link>
                    @endcan
                    
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">                          
                            <label style="font-family: Metropolis,sans-serif;" class="text-blue-900 text-sm  rounded-full py-1  px-5  cursor-pointer tracking-wider font-semibold">Log Out</label>
                        </x-jet-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
        {{-- <div class="py-1 border-t border-gray-200">
            <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                Login
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                Register
            </x-jet-responsive-nav-link>
        </div> --}}
       
        @endauth
    </div>
</nav>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
<script>
    $('.navbar-toggler').click(function () {
    $(this).toggleClass('active');
    $('.navigation-menu').toggleClass('hidden');
    $('#navbar').addClass('bg-white');
    });
    $(function () {
    var navigation = $("#navbar");
    var logos = $("#logo");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 15) {
            navigation.addClass("bg-white  xl:py-0 shadow-md");
            navigation.removeClass("md:bg-bg-white xl:py-4 md:py-4");
            //Logo
            logos.addClass("h-14 md:h-16");
            logos.removeClass("h-16 md:h-24");

        } else {
            navigation.removeClass("bg-white xl:py-4 shadow-md");
            navigation.addClass("bg-white md:bg-white xl:py-4 md:py-4");
            //Logo
            logos.addClass("h-16 md:h-24");
            logos.removeClass("h-14 md:h-16");
        }
    });
    });
</script>
