<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            @php
                $empresa = DB::table('empresas')->select('foto')->first();
                @endphp
                <div class="flex-shrink-0 flex items-center mt-14 md:mt-4">
                    <a href="{{ route('home') }}">
                        <img id="logo" class="transition-all duration-300 ease-in block h-16 md:h-28 py-1 items-center" src="{{Storage::url($empresa->foto)}}">
                    </a>
                </div> 
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
