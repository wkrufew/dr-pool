<div wire:init="loadService">
    @if (count($services))
        <div
            class="bg-white py-2 max-w-7xl mx-auto px-8 sm:px-16 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mb-6 ">
            @foreach ($services as $service)
                <x-service-card1 :service="$service" />
            @endforeach
        </div>
        @if ($services->count() > 8)
            <div class="w-full text-center">
                <a href="{{ route('services.index') }}"
                    class="bg-blue-900 py-1.5 px-3 rounded-md text-white text-base font-semibold hover:bg-blue-700">
                    View More
                </a>
            </div>
        @endif
    @else
        <div class="bg-white max-w-7xl mx-auto px-8 sm:px-16 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6">
            <div class="border border-gray-300 shadow rounded-3xl max-w-sm w-full mx-auto">
                <div class="animate-pulse flex">
                    <div class="flex-1">
                        <div class="h-44 bg-gray-500 rounded-t-3xl"></div>
                        <div class="py-6">
                             <div class="flex justify-center">
                                <div class="w-36 h-5 bg-gray-500 rounded-full"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 ml-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-300 shadow rounded-3xl max-w-sm w-full mx-auto">
                <div class="animate-pulse flex">
                    <div class="flex-1">
                        <div class="h-44 bg-gray-500 rounded-t-3xl"></div>
                        <div class="py-6">
                             <div class="flex justify-center">
                                <div class="w-36 h-5 bg-gray-500 rounded-full"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 ml-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-300 shadow rounded-3xl max-w-sm w-full mx-auto">
                <div class="animate-pulse flex">
                    <div class="flex-1">
                        <div class="h-44 bg-gray-500 rounded-t-3xl"></div>
                        <div class="py-6">
                             <div class="flex justify-center">
                                <div class="w-36 h-5 bg-gray-500 rounded-full"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 ml-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-300 shadow rounded-3xl max-w-sm w-full mx-auto">
                <div class="animate-pulse flex">
                    <div class="flex-1">
                        <div class="h-44 bg-gray-500 rounded-t-3xl"></div>
                        <div class="py-6">
                             <div class="flex justify-center">
                                <div class="w-36 h-5 bg-gray-500 rounded-full"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 ml-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
