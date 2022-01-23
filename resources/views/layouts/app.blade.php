<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Dr. Pools') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/home/favicon.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css') }}" />   

    @livewireStyles
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('https://kit.fontawesome.com/a501d340ea.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@9') }}"></script>
    
    {{-- SEO --}}
    <meta name="robots" content="index, follow">
    <meta name="description"
        content="Serving in the state of Connecticut, offering quality services for your pool, Dr. Pools is your solution." />
    <!-- Open Graph data -->
    <meta property="og:title" content="Dr. Pools" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ config('app.url', 'Dr. P/ools') }}" />
    <meta property="og:image" content="{{ asset('img/home/favicon.png') }}" />
    <meta property="og:description"
        content="Serving in the state of Connecticut, offering quality services for your pool, Dr. Pools is your solution." />
</head>

<body class="font-sans antialiased">
    <x-jet-banner />
    <div class="min-h-screen bg-white">
        @livewire('navigation-menu')
        @livewire('login-modal')
        <main>
            {{ $slot }}
        </main>
    </div>
    @stack('modals')
    @livewireScripts
    {{-- @isset($js)
        {{ $js }}
    @endisset --}}
    {{-- FOOTER --}}
    <x-prueba />
    {{-- JAVASCRIPT --}}
    <script>
        /* Fancybox.bind("[data-fancybox]", {
            // Your options go here
        }); */
        @if (Session::has('mensaje'))
            Swal.fire({
            icon: 'success',
            title: 'Done!',
            text: 'Thanks for choosing us',
            footer: '<a>check your spam if you do not receive the message</a>'
            })
        @endif
    </script>
    
    @stack('js')
</body>
</html>
