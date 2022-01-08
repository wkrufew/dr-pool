<div>
    {{-- <a title="Login" wire:click.prevent="$set('open', true)" href="" class="btn bg-blue-900 hover:bg-blue-700 text-white">
        Send<i class="ml-2 fas fa-paper-plane"></i>
    </a> --}}
    <x-jet-dialog-modal wire:model="open">
                    
        <x-slot name="title">
            <div class="text-left ">
                <p class="block uppercase text-blue-900 text-sm font-bold mb-1">Login </p> 
                <hr>
            </div> 
        </x-slot>

        <x-slot name="content">
     
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            @if (session()->has('error'))
            <div class="mb-4 font-medium text-sm text-red-600">
                {{ session('error') }}
            </div>
            @endif

            <form wire:submit.prevent="login">

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus wire:model.lazy="email"/>
                   
                    
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" wire:model.lazy="password"/>
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-center mt-4">
                   {{--  <a class="inline-flex items-center px-4 py-2 bg-blue-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('register') }}">
                        Register
                    </a>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}

                    <div wire:click="$emit('login-modal')" class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Close') }}
                    </div>
                    <x-jet-button class="ml-4 bg-blue-900 hover:bg-blue-600" type="submit">
                        {{ __('Log in') }}
                    </x-jet-button>
                    
                </div>
            </form>
           
        </x-slot>

        <x-slot name="footer">
            
            <div class="flex items-center justify-between">
                <a class="inline-flex items-center px-4 py-2 bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{ route('register') }}">
                    Register
                </a>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                {{-- <x-jet-button class="ml-4 bg-blue-900 hover:bg-blue-600" type="submit">
                    {{ __('Log in') }}
                </x-jet-button> --}}
            </div>
        </x-slot>

    </x-jet-dialog-modal>
</div>
