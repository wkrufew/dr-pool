<x-app-layout>
    <div class="py-10"></div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-gray-600">NEW SERVICE</h1>
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1">{{ session('error') }}</div>
                @endif
                <hr class="mt-2 mb-4">

                {!! Form::open(['route' => 'instructor.services.store', 'files' => true, 'autocomplete' => 'off']) !!}
                    
                    @include('instructor.services.partials.form')
                    
                    <div class="flex justify-center mt-6 mb-4">
                        {!! Form::submit('New Servicio', ['class' => 'btn btn-primary cursor-pointer']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js') }}"></script>
        <script src="{{asset('js/instructor/services/form.js')}}"></script>
    @endpush
{{--     <x-slot name="js">
       
    </x-slot> --}}
</x-app-layout>
