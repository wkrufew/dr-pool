<x-instructor-layout :service="$service">

    {{-- <x-slot name="service">
        {{$service->slug}}
    </x-slot> --}}

    
        <h1 class="text-2xl font-bold">INFORMATION </h1>
        <hr class="mt-2 mb-6">
        
        {!! Form::model($service, ['route' => ['instructor.services.update', $service], 'method' => 'put', 'files' => true]) !!}
                
            @include('instructor.services.partials.form')
            
            <div class="flex justify-center mt-6 mb-4">
                {!! Form::submit('Update Service', ['class' => 'btn btn-primary cursor-pointer']) !!}
            </div>
        {!! Form::close() !!}
        
    <x-slot name="js">
        <script src="{{ asset('https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js') }}"></script>
        <script src="{{asset('js/instructor/services/form.js')}}"></script>
    </x-slot>
</x-instructor-layout>