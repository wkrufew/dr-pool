<div>
    <div class=" py-4 md:py-8">
    </div>

    <div class="bg-white py-2 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-8 mb-6 ">

        @foreach ($services as $service)
            <x-service-card :service="$service"/>
        @endforeach

    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-6">
        {{$services->links()}}
    </div>

</div>
