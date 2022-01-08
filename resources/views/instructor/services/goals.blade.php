<x-instructor-layout :service="$service">

    {{-- <x-slot name="service">
        {{$service->slug}}
    </x-slot> --}}
    <div>
        @livewire('instructor.services-goals', ['service' => $service], key('services-goals' . $service->id))
    </div>

</x-instructor-layout>