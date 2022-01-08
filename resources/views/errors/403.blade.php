{{-- @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
 --}}
 <x-app-layout>
    <div class="bg-cover bg-black w-full h-full m-auto ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-56 ">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bolt text-5xl mb-2 mt-20">Stop!</h1>
                <p class="text-white font-bolt   text-3xl mb-40">You are violating the security policies of Dr. Pools</p>
            </div>
        </div>
    </div>    
</x-app-layout>