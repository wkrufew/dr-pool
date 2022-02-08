<div>
    <div class="relative text-center bg-white">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(30,58,138,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(30,58,138,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(30,58,138,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#1E3A8A" />
                </g>
            </svg>
        <style>
            .waves {
                position: relative;
                width: 100%;
                height: 2vh;
                margin-bottom: -7px;
                /*Fix for safari gap*/
                min-height: 100px;
                max-height: 150px;
            }

            .content {
                position: relative;
                height: 10vh;
                text-align: center;
                background-color: white;
            }

            /* Animation */

            .parallax>use {
                animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
            }

            .parallax>use:nth-child(1) {
                animation-delay: -2s;
                animation-duration: 7s;
            }

            .parallax>use:nth-child(2) {
                animation-delay: -3s;
                animation-duration: 10s;
            }

            .parallax>use:nth-child(3) {
                animation-delay: -4s;
                animation-duration: 13s;
            }

            .parallax>use:nth-child(4) {
                animation-delay: -5s;
                animation-duration: 20s;
            }

            @keyframes move-forever {
                0% {
                    transform: translate3d(-90px, 0, 0);
                }

                100% {
                    transform: translate3d(85px, 0, 0);
                }
            }

            /*Shrinking for mobile*/
            @media (max-width: 768px) {
                .waves {
                    height: 40px;
                    min-height: 40px;
                }

                .content {
                    height: 30vh;
                }
            }

        </style>
    </div>
    <footer class="relative  bg-blue-900 text-gray-700 select-none">
        {{-- <div class="relative w-full -mt-1">
     <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink">
         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
             <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                 <g class="wave" fill="#FFFFFF">
                     <path
                         d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                     </path>
                 </g>
                 <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                     <g
                         transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                         <path
                             d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                             opacity="0.100000001"></path>
                         <path
                             d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                             opacity="0.100000001"></path>
                         <path
                             d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                             opacity="0.200000003"></path>
                     </g>
                 </g>
             </g>
         </g>
     </svg>
 </div> --}}

        <div class="px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-32 py-1">
            <div class="flex flex-col md:flex-row text-center">
                <div class="w-full lg:w-1/3 lg:mx-1">
                    <div class="flex items-center mt-2">
                        <div class="w-full">
                            <p class="block text-white text-sm md:text-sm font-bold mb-1">

                                {{ $empresa->propietario ?? '' }}
                            </p>
                            <img class="block h-36 w-auto mx-auto " src="{{ Storage::url($empresa->whatsapp) }}">
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 mt-8 lg:mt-0 lg:mx-1">
                    <h5 class="uppercase tracking-wider font-bold text-white">CONTACT DETAILS</h5>
                    <ul class="mt-4">
                        <li>
                            @if ($empresa->pais_ciudad && $empresa->calles)
                                <a href="#" title=""
                                    class="flex justify-center items-center opacity-90 hover:opacity-100">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                            <path class="text-white"
                                                d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="ml-3 text-white text-sm md:text-xs ">
                                        {{ $empresa->pais_ciudad }}<br>
                                        {{ $empresa->calles }}
                                    </span>
                                </a>
                            @endif
                        </li>
                        <li class="mt-4 flex justify-center items-center">
                            <a title="" class=" flex items-center opacity-90 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path class="text-white"
                                            d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-3">
                                    @if ($empresa->telefono1)
                                        <a class="text-white text-sm md:text-xs "
                                            href="tel: {{ $empresa->telefono1 }}">
                                            {{ $empresa->telefono1 }}</a>
                                        &nbsp;&nbsp; <b class="text-white"></b>
                                    @endif
                                    @if ($empresa->telefono2)
                                        <a class="text-white text-sm md:text-xs "
                                            href="tel:{{ $empresa->telefono2 }}">-&nbsp;&nbsp;{{ $empresa->telefono2 }}</a>
                                    @endif
                                </span>
                            </a>
                        </li>
                        <li class="mt-4 flex justify-center items-center">
                            <a href="" title="" class="flex items-center opacity-90 hover:opacity-100">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        class="fill-current">
                                        <path class="text-white"
                                            d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-3 ">
                                    <a class="text-white text-sm md:text-xs" href="mailto:m.{{ $empresa->correo }}">
                                        {{ $empresa->correo }}</a>
                                </span>
                            </a>
                        </li>
                        <li class="mt-4">
                            @if ($empresa->dias && $empresa->horas)
                                <a title="" class="justify-center flex items-center opacity-90 hover:opacity-100">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path class="text-white"
                                                d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z">
                                            </path>
                                            <path class="text-white" d="M13 7L11 7 11 13 17 13 17 11 13 11z"></path>
                                        </svg>
                                    </span>
                                    <span class="ml-3 text-white text-sm md:text-xs ">
                                        {{ $empresa->dias }}<br>
                                        {{ $empresa->horas }}
                                    </span>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="w-full lg:w-1/3 mt-8 lg:mt-0 lg:mx-1">
                    @if ($empresa->facebook)
                        <h5 class="uppercase tracking-wider font-bold text-white">SOCIAL NETWORKS</h5>
                    @endif
                    <ul class="mt-4 flex justify-center">
                        @if ($empresa->facebook)
                            <li>
                                <a href="{{ $empresa->facebook }}" target="_blank" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                        class="fill-current rounded-full">
                                        <path fill="#ffff" fill-rule="nonzero"
                                            d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        @else
                        @endif
                        <li class="ml-6">
                            @if ($empresa->instagram)
                                <a style="background: #3f729b; color:red" href="{{ $empresa->instagram }}"
                                    target="_blank" title="">
                                    <svg style="color: blue;" class="bg-pruple-400" xmlns="http://www.w3.org/2000/svg"
                                        width="27" height="27" viewBox="0 0 24 24" class="fill-current">
                                        <path fill="#E1306C" fill-rule="nonzero"
                                            d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z">
                                        </path>
                                        <circle fill="#E1306C" fill-rule="nonzero" cx="11.994" cy="11.979" r="3.003">
                                        </circle>
                                    </svg>
                                </a>
                            @else
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div
            class=" w-full py-4 mx-auto text-center mt-1 bg-blue-900 border-t-2 shadow-inner border-blue-900 text-white text-xs">
            Copyright ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            {{ $empresa->name ?? 'Dr. Pools' }} &nbsp;LLC &nbsp; - &nbsp; All rights reserved.
            </p>
        </div>
    </footer>
</div>
