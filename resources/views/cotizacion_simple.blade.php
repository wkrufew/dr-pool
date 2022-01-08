<x-app-layout>

    <section class="mt-2 md:mt-16 flex items-center justify-center py-16 bg-white overflow-hidden ">
        <div class="max-w-7xl px-3 mx-auto bg-white md:px-10 xl:px-6 ">
            <div class="flex flex-col items-center lg:flex-row">
                <div class="flex flex-col justify-center w-full pr-1 mb-10 lg:mb-0 lg:w-full">
                                <div class=" bg-white relative flex flex-col break-words w-full mb-6 mt-6 shadow-2xl rounded-lg">
                                    <div class="bg-blue-900 rounded-t-lg py-2">
                                        <h4 class="text-2xl text-gray-50 font-semibold pl-10 uppercase">Contact</h4>
                                    </div>
                                    <div class="flex-auto py-3 px-1 md:p-16 ">
                                        <p class="leading-relaxed text-sm font-bold  mb-2 text-blue-900 uppercase">Let us  analize your proyector and make an appointment. </p>
                                        <h1 class=" border-t bg-gray-400"></h1>
                                        <div>
                                            {{-- caja de formulario --}}
                                            <div class="px-2 md:px-0 ">
                                                @livewire('formulario2-componente')
                                            </div>
                                            {{-- fin del formulario --}}
                                        </div>
                                    </div>
                                </div>
                </div>
    </section>
    

</x-app-layout>
