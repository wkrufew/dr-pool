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
        {{-- <div class="mb-4 h-auto flex justify-center items-center bg-transparent">
            <div class="rounded animate-spin ease duration-300 w-16 h-16 border-2 border-blue-900"></div>
        </div> --}}
        <div class="bg-white py-2 max-w-7xl mx-auto px-8 sm:px-16 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 mb-6 ">
            <div class="border border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                <div class="animate-pulse flex space-x-4">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-20 bg-gray-500 rounded"></div>
                        <div class="space-y-3">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-4 bg-gray-500 rounded col-span-1"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 col-span-1"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="h-8 bg-gray-500 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                <div class="animate-pulse flex space-x-4">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-20 bg-gray-500 rounded"></div>
                        <div class="space-y-3">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-4 bg-gray-500 rounded col-span-1"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 col-span-1"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="h-8 bg-gray-500 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                <div class="animate-pulse flex space-x-4">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-20 bg-gray-500 rounded"></div>
                        <div class="space-y-3">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-4 bg-gray-500 rounded col-span-1"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 col-span-1"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="h-8 bg-gray-500 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-gray-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                <div class="animate-pulse flex space-x-4">
                    <div class="flex-1 space-y-6 py-1">
                        <div class="h-20 bg-gray-500 rounded"></div>
                        <div class="space-y-3">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-4 bg-gray-500 rounded col-span-1"></div>
                                <div class="rounded-full bg-gray-500 h-5 w-5 col-span-1"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-2 bg-gray-500  my-auto rounded col-span-2"></div>
                            </div>
                            <div class="h-8 bg-gray-500 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endif

</div>
