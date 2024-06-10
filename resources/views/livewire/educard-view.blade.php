<div class="flex flex-col justify-center items-center lg:px-20 p-5 py-5 w-full lg:overflow-hidden"
    style="height: calc(100vh - 6.25rem);">
    <div class="w-full h-full flex lg:flex-row flex-col justify-start lg:gap-2 gap-5 lg:justify-center items-center">
        <div class="lg:w-1/3 w-full lg:h-full flex lg:gap-2 gap-5 flex-col justify-center items-center">
            <div class="w-full lg:h-1/3 flex justify-center items-center relative mb-8 lg:mb-0">
                <div class="px-5 py-2 bg-yellow-500 rounded-xl border-2 border-black text-3xl text-white relative">
                    <div class="line-clamp-2">
                        {{ $educard->nombre_completo }}
                    </div>
                    <div
                        class="absolute w-56 -bottom-9 left-1/2 transform -translate-x-1/2 bg-pink-950 border-2 border-black text-base px-10 py-1 rounded-b-xl flex items-center justify-center gap-1">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="h-5"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                            fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#F4AD47;"
                                    d="M389.711,10.751v184.777c0,19.942-4.367,38.864-12.202,55.877 c-5.913,12.834-13.801,24.579-23.289,34.832c-12.054,13.076-26.702,23.732-43.124,31.163c-16.247,7.364-34.254,11.557-53.202,11.812 c-0.632,0.027-1.263,0.027-1.895,0.027c-0.632,0-1.263,0-1.895-0.027c-18.948-0.255-36.955-4.448-53.202-11.812 c-16.422-7.431-31.069-18.088-43.124-31.163c-9.487-10.253-17.376-21.999-23.289-34.832c-7.835-17.013-12.202-35.934-12.202-55.877 V10.751H389.711z">
                                </path>
                                <polygon style="fill:#EFEFEF;"
                                    points="256,77.942 277.148,126.549 329.911,131.642 290.218,166.775 301.68,218.529 256,191.636 210.32,218.529 221.782,166.775 182.089,131.642 234.852,126.549 ">
                                </polygon>
                                <path style="fill:#E8594F;"
                                    d="M311.097,317.4v60.217H200.903V317.4c16.247,7.364,34.254,11.557,53.202,11.812 c0.632,0.027,1.263,0.027,1.895,0.027c0.632,0,1.263,0,1.895-0.027C276.843,328.957,294.85,324.764,311.097,317.4z">
                                </path>
                                <rect x="229.123" y="377.617" style="fill:#F4AD47;" width="53.753" height="61.816">
                                </rect>
                                <path style="fill:#E8594F;"
                                    d="M127.664,501.249h256.672l-7.255-33.373c-3.608-16.602-18.302-28.444-35.292-28.444H170.211 c-16.99,0-31.682,11.842-35.292,28.444L127.664,501.249z">
                                </path>
                                <g>
                                    <path style="fill:#231F20;"
                                        d="M209.917,170.63l-10.092,45.575c-0.925,4.177,0.715,8.506,4.177,11.022 c3.462,2.516,8.087,2.739,11.773,0.566L256,204.111l40.225,23.682c1.688,0.994,3.573,1.486,5.453,1.486 c2.225,0,4.443-0.691,6.32-2.052c3.462-2.516,5.103-6.845,4.177-11.022l-10.092-45.575l34.953-30.938 c3.204-2.835,4.421-7.302,3.099-11.372c-1.322-4.07-4.932-6.969-9.192-7.379l-46.463-4.486l-18.621-42.802 c-1.708-3.924-5.58-6.463-9.858-6.463c-4.279,0-8.15,2.538-9.858,6.462l-18.621,42.802l-46.463,4.486 c-4.259,0.411-7.869,3.309-9.192,7.379c-1.322,4.069-0.105,8.536,3.099,11.372L209.917,170.63z M235.886,137.25 c3.889-0.375,7.267-2.829,8.825-6.411L256,104.89l11.29,25.948c1.559,3.583,4.937,6.036,8.825,6.411l28.168,2.719l-21.191,18.756 c-2.926,2.59-4.216,6.561-3.37,10.374l6.118,27.631l-24.385-14.358c-1.682-0.99-3.568-1.486-5.455-1.486s-3.771,0.496-5.455,1.486 l-24.385,14.358l6.118-27.631c0.845-3.814-0.446-7.785-3.37-10.374l-21.191-18.756L235.886,137.25z">
                                    </path>
                                    <path style="fill:#231F20;"
                                        d="M475.717,40.315h-75.255V10.751C400.462,4.814,395.648,0,389.711,0H122.289 c-5.937,0-10.751,4.814-10.751,10.751v29.564H36.283c-5.937,0-10.751,4.814-10.751,10.751v87.403 c0,33.488,22.627,64.937,63.704,88.546c10.776,6.211,23.832,18.495,36.403,30.772c6.25,13.066,14.386,25.091,24.235,35.735 c11.617,12.601,25.144,22.88,40.277,30.625v53.47c0,5.937,4.814,10.751,10.751,10.751h17.47v40.315h-48.162 c-21.887,0-41.148,15.524-45.798,36.911l-7.254,33.373c-0.691,3.177,0.094,6.497,2.134,9.031c2.041,2.53,5.119,4.003,8.371,4.003 h256.672c3.252,0,6.329-1.473,8.371-4.003c2.041-2.533,2.826-5.852,2.134-9.031l-7.254-33.373 c-4.65-21.387-23.909-36.911-45.798-36.911h-48.162v-40.315h17.47c5.937,0,10.751-4.814,10.751-10.751v-53.471 c15.137-7.746,28.661-18.021,40.264-30.607c9.862-10.659,17.998-22.685,24.248-35.751c12.572-12.277,25.627-24.561,36.392-30.766 c41.088-23.616,63.715-55.065,63.715-88.553V51.066C486.467,45.129,481.654,40.315,475.717,40.315z M99.964,208.38 c-34.132-19.619-52.93-44.447-52.93-69.912V61.816h64.504v133.711c0,7.351,0.554,14.607,1.629,21.753 c0.008,0.074,0.009,0.146,0.02,0.22C108.705,213.972,104.292,210.875,99.964,208.38z M366.576,470.16l4.421,20.339H141.003 l4.421-20.339c2.517-11.574,12.941-19.976,24.787-19.976h58.912h53.753h58.912C353.635,450.184,364.06,458.585,366.576,470.16z M272.126,428.682h-32.252v-40.315h32.252V428.682z M300.346,366.866h-17.47h-53.753h-17.47v-33.8 c0.12,0.039,0.243,0.067,0.363,0.105c13.438,4.298,27.437,6.583,41.804,6.79c0.727,0.027,1.453,0.028,2.18,0.028 s1.453-0.003,2.18-0.028c14.227-0.206,28.093-2.448,41.41-6.664c0.25-0.075,0.496-0.146,0.757-0.23V366.866z M378.961,195.528 c0,17.932-3.773,35.218-11.216,51.377c-5.41,11.742-12.616,22.52-21.429,32.045c-11.242,12.195-24.583,21.836-39.656,28.657 c-15.382,6.972-31.837,10.624-48.909,10.855c-0.101,0.001-0.202,0.004-0.302,0.008c-0.481,0.022-0.964,0.017-1.449,0.017 c-0.482-0.001-0.966,0.004-1.449-0.017c-0.101-0.004-0.202-0.007-0.302-0.008c-2.134-0.028-4.259-0.112-6.372-0.247 c-14.797-0.95-29.078-4.509-42.543-10.612c-15.067-6.817-28.407-16.458-39.665-28.669c-8.799-9.509-16.005-20.286-21.415-32.028 c-7.441-16.161-11.214-33.447-11.214-51.379V21.501h245.921V195.528z M464.966,138.468c0,25.464-18.798,50.293-52.94,69.918 c-4.323,2.491-8.734,5.585-13.214,9.113c0.005-0.039,0-0.079,0.005-0.12c1.086-7.177,1.644-14.468,1.644-21.853V61.816h64.504 v76.652H464.966z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <div class="text-yellow-500">{{ $educard->copas }}/800</div>
                        <div class="absolute bottom-0 -left-5 z-10 w-auto h-12">
                            <img class="w-auto h-full" src="/img/rank.png" alt="">
                            <div
                                class="absolute bottom-2 left-0 text-sm text-white transform -rotate-6  w-full text-center">
                                {{ $educard->rango }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative w-full lg:h-4/5 lg:hidden h-80 ">
                <img class="object-cover rotate-on-hover w-full h-full" src="{{ asset($educard->imagen2) }}"
                    alt="profe">
                <div class="absolute top-0 -left-1 h-14 cursor-pointer" wire:click="openModal()">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-auto h-full">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M15.5 11.5H15.51M11.5 11.5H11.51M7.5 11.5H7.51M15.3 19.1L21 21L19.1 15.3C19.1 15.3 20 14 20 11.5C20 6.80558 16.1944 3 11.5 3C6.80558 3 3 6.80558 3 11.5C3 16.1944 6.80558 20 11.5 20C14.0847 20 15.3 19.1 15.3 19.1Z"
                                stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="w-full lg:h-1/3 flex justify-center items-center line-clamp-6 text-xl text-sky-200">
                {{ $educard->frase }}</div>
            <div
                class="w-full lg:h-1/3 flex lg:flex-row flex-col gap-5 justify-start items-center overflow-hidden text-white">
                <div class="w-full flex justify-center items-center lg:h-1/5 lg:hidden">
                    <div
                        class="bg-gray-800 px-5 py-1 w-full rounded-xl border-2 overflow-hidden text-white border-black flex flex-col gap-2 justify-center items-center">
                        <div class="text-xl">Correo:</div>
                        <div>{{ $educard->correo }}</div>
                    </div>
                </div>
                <div
                    class="bg-gray-800 rounded-xl p-2 lg:w-1/2 w-full h-full border-2 border-black flex flex-col gap-2 items-center justify-start">
                    <div class="text-xl">Horarios:</div>
                    <ul class="text-sm list-disc w-5/6">
                        @foreach ($educard->horarios as $horario)
                            <li>{{ $horario }}</li>
                        @endforeach
                    </ul>
                </div>
                <div
                    class="bg-gray-800 rounded-xl p-2 lg:w-1/2 w-full h-full border-2 border-black flex flex-col gap-2 items-center justify-start">
                    <div class="text-xl">Skills:</div>
                    <ul class="text-sm list-disc w-5/6">
                        @foreach ($educard->skills as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-1/3 h-full lg:flex flex-col gap-5 hidden">
            <div class="relative w-full h-4/5">
                <img id="tilt" class="object-cover rotate-on-hover w-full h-full"
                    src="{{ asset($educard->imagen2) }}" alt="profe">
                <div class="absolute top-5 left-5 h-20 cursor-pointer" wire:click="openModal()">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-auto h-full hover:scale-105">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M15.5 11.5H15.51M11.5 11.5H11.51M7.5 11.5H7.51M15.3 19.1L21 21L19.1 15.3C19.1 15.3 20 14 20 11.5C20 6.80558 16.1944 3 11.5 3C6.80558 3 3 6.80558 3 11.5C3 16.1944 6.80558 20 11.5 20C14.0847 20 15.3 19.1 15.3 19.1Z"
                                stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="w-full flex justify-center items-center h-1/5">
                <div
                    class="bg-gray-800 px-5 py-1 rounded-xl border-2 overflow-hidden text-white border-black flex flex-col gap-2 justify-center items-center">
                    <div class="text-xl">Correo:</div>
                    <div>{{ $educard->correo }}</div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 w-full lg:h-full flex gap-2 flex-col justify-center items-center text-white">
            <div class="w-full lg:h-1/6 flex flex-col gap-2 justify-center items-center overflow-hidden">
                <div class="text-xl">Semestres:</div>
                @php
                    $semestres = $educard->semestres;
                    sort($semestres);
                @endphp
                <div class="flex gap-2 justify-center items-center flex-wrap p-1">
                    @foreach ($semestres as $semestre)
                        <div class="px-2 bg-pink-950 border-2 border-black text-yellow-500 text-lg">{{ $semestre }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full lg:h-3/6 overflow-hidden">
                <div
                    class="bg-black/30 rounded-xl w-full lg:h-full border-2 border-black flex flex-col gap-2 items-center justify-start">
                    <div
                        class="w-full bg-black rounded-xl text-xl p-2 flex flex-col justify-center items-center gap-2">
                        @php
                            $estandares = [
                                1 => 'Baja',
                                2 => 'Media',
                                3 => 'Alta',
                                4 => 'MAX',
                            ];
                            $dificultad = $educard->dificultad;
                        @endphp
                        <div>Dificultad: <strong class="text-fuchsia-700 px-5">{{ $estandares[$dificultad] }}</strong>
                        </div>
                        <div class="flex gap-4">
                            @for ($i = 1; $i <= 4; $i++)
                                @if ($i <= $educard->dificultad)
                                    <svg height="200px" width="200px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" class="w-auto h-8"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:red;"
                                                d="M256,8.17C128.151,8.17,24.511,111.811,24.511,239.66v19.064c0,43.669,25.699,81.33,62.795,98.702 l26.55,146.405h284.229l26.62-146.409c37.092-17.373,62.786-55.031,62.786-98.697V239.66C487.489,111.811,383.849,8.17,256,8.17z">
                                            </path>
                                            <g>
                                                <circle style="fill:#000000;" cx="378.553" cy="258.723"
                                                    r="65.362">
                                                </circle>
                                                <circle style="fill:#000000;" cx="133.447" cy="258.723"
                                                    r="65.362">
                                                </circle>
                                            </g>
                                            <g>
                                                <path style="fill:#000000;"
                                                    d="M280.267,305.763c-1.095-4.378-5.533-7.038-9.909-5.945c-4.378,1.094-7.038,5.531-5.945,9.908 l10.894,43.574c0.929,3.713,4.259,6.191,7.921,6.191c0.657,0,1.324-0.08,1.988-0.246c4.378-1.094,7.038-5.531,5.945-9.908 L280.267,305.763z">
                                                </path>
                                                <path style="fill:#000000;"
                                                    d="M241.641,299.818c-4.379-1.094-8.813,1.566-9.909,5.945l-10.894,43.574 c-1.094,4.377,1.567,8.813,5.945,9.908c0.666,0.167,1.332,0.246,1.988,0.246c3.66,0,6.992-2.478,7.921-6.191l10.894-43.574 C248.679,305.349,246.019,300.913,241.641,299.818z">
                                                </path>
                                                <path style="fill:#000000;"
                                                    d="M425.464,70.195C380.199,24.929,320.015,0,256,0S131.801,24.929,86.536,70.195 S16.34,175.644,16.34,239.66v19.064c0,45.326,25.889,84.715,63.654,104.171l25.822,142.393c0.705,3.886,4.089,6.713,8.039,6.713 h284.229c3.949,0,7.331-2.824,8.038-6.708l25.891-142.401c37.759-19.458,63.646-58.844,63.646-104.167V239.66 C495.66,175.644,470.731,115.46,425.464,70.195z M391.265,495.66H120.677l-22.73-125.336c9.118,2.906,18.714,4.732,28.641,5.308 l9.683,53.402c0.705,3.886,4.089,6.713,8.039,6.713h54.496v13.617c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17v-13.618 h32.681v13.617c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17v-13.617h32.681v13.617c0,4.512,3.657,8.17,8.17,8.17 c4.513,0,8.17-3.658,8.17-8.17v-13.617h54.468c3.949,0,7.331-2.824,8.038-6.708l9.709-53.405c9.928-0.576,19.527-2.402,28.646-5.31 L391.265,495.66z M378.553,90.639c-4.513,0-8.17,3.658-8.17,8.17v50.978c0,4.512,3.657,8.17,8.17,8.17 c55.563,0,100.766,45.203,100.766,100.766s-45.203,100.766-100.766,100.766c-3.949,0-7.331,2.824-8.038,6.708l-9.675,53.207 h-47.649v-13.617c0-4.512-3.657-8.17-8.17-8.17c-4.513,0-8.17,3.658-8.17,8.17v13.617H264.17v-13.617c0-4.512-3.657-8.17-8.17-8.17 s-8.17,3.658-8.17,8.17v13.617h-32.681v-13.617c0-4.512-3.657-8.17-8.17-8.17s-8.17,3.658-8.17,8.17v13.617h-47.675l-9.647-53.202 c-0.705-3.887-4.089-6.713-8.039-6.713c-55.563,0-100.766-45.203-100.766-100.766s45.203-100.766,100.766-100.766 c4.513,0,8.17-3.658,8.17-8.17V98.809c0-4.512-3.657-8.17-8.17-8.17c-4.513,0-8.17,3.658-8.17,8.17v43.09 c-35.926,2.488-67.441,21.257-87.21,48.957C60.39,91.112,149.622,16.34,256,16.34s195.61,74.772,217.933,174.516 c-19.768-27.7-51.283-46.469-87.21-48.957v-43.09C386.723,94.297,383.066,90.639,378.553,90.639z">
                                                </path>
                                                <path style="fill:#000000;"
                                                    d="M305.021,258.723c0,40.546,32.986,73.532,73.532,73.532s73.532-32.986,73.532-73.532 s-32.986-73.532-73.532-73.532S305.021,218.177,305.021,258.723z M378.553,201.532c31.535,0,57.191,25.656,57.191,57.191 s-25.657,57.191-57.191,57.191s-57.191-25.656-57.191-57.191S347.018,201.532,378.553,201.532z">
                                                </path>
                                                <circle style="fill:#000000;" cx="193.362" cy="117.106" r="8.17">
                                                </circle>
                                                <circle style="fill:#000000;" cx="226.043" cy="149.787" r="8.17">
                                                </circle>
                                                <path style="fill:#000000;"
                                                    d="M133.447,185.191c-40.546,0-73.532,32.986-73.532,73.532s32.986,73.532,73.532,73.532 s73.532-32.986,73.532-73.532S173.993,185.191,133.447,185.191z M133.447,315.915c-31.535,0-57.191-25.656-57.191-57.191 s25.657-57.191,57.191-57.191s57.191,25.656,57.191,57.191S164.982,315.915,133.447,315.915z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                @else
                                    <svg height="200px" width="200px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" class="w-auto h-8"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                        xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#ffffff;"
                                                d="M256,8.17C128.151,8.17,24.511,111.811,24.511,239.66v19.064c0,43.669,25.699,81.33,62.795,98.702 l26.55,146.405h284.229l26.62-146.409c37.092-17.373,62.786-55.031,62.786-98.697V239.66C487.489,111.811,383.849,8.17,256,8.17z">
                                            </path>
                                            <g>
                                                <circle style="fill:#000000;" cx="378.553" cy="258.723"
                                                    r="65.362">
                                                </circle>
                                                <circle style="fill:#000000;" cx="133.447" cy="258.723"
                                                    r="65.362">
                                                </circle>
                                            </g>
                                            <g>
                                                <path style="fill:#000000;"
                                                    d="M280.267,305.763c-1.095-4.378-5.533-7.038-9.909-5.945c-4.378,1.094-7.038,5.531-5.945,9.908 l10.894,43.574c0.929,3.713,4.259,6.191,7.921,6.191c0.657,0,1.324-0.08,1.988-0.246c4.378-1.094,7.038-5.531,5.945-9.908 L280.267,305.763z">
                                                </path>
                                                <path style="fill:#000000;"
                                                    d="M241.641,299.818c-4.379-1.094-8.813,1.566-9.909,5.945l-10.894,43.574 c-1.094,4.377,1.567,8.813,5.945,9.908c0.666,0.167,1.332,0.246,1.988,0.246c3.66,0,6.992-2.478,7.921-6.191l10.894-43.574 C248.679,305.349,246.019,300.913,241.641,299.818z">
                                                </path>
                                                <path style="fill:#000000;"
                                                    d="M425.464,70.195C380.199,24.929,320.015,0,256,0S131.801,24.929,86.536,70.195 S16.34,175.644,16.34,239.66v19.064c0,45.326,25.889,84.715,63.654,104.171l25.822,142.393c0.705,3.886,4.089,6.713,8.039,6.713 h284.229c3.949,0,7.331-2.824,8.038-6.708l25.891-142.401c37.759-19.458,63.646-58.844,63.646-104.167V239.66 C495.66,175.644,470.731,115.46,425.464,70.195z M391.265,495.66H120.677l-22.73-125.336c9.118,2.906,18.714,4.732,28.641,5.308 l9.683,53.402c0.705,3.886,4.089,6.713,8.039,6.713h54.496v13.617c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17v-13.618 h32.681v13.617c0,4.512,3.657,8.17,8.17,8.17s8.17-3.658,8.17-8.17v-13.617h32.681v13.617c0,4.512,3.657,8.17,8.17,8.17 c4.513,0,8.17-3.658,8.17-8.17v-13.617h54.468c3.949,0,7.331-2.824,8.038-6.708l9.709-53.405c9.928-0.576,19.527-2.402,28.646-5.31 L391.265,495.66z M378.553,90.639c-4.513,0-8.17,3.658-8.17,8.17v50.978c0,4.512,3.657,8.17,8.17,8.17 c55.563,0,100.766,45.203,100.766,100.766s-45.203,100.766-100.766,100.766c-3.949,0-7.331,2.824-8.038,6.708l-9.675,53.207 h-47.649v-13.617c0-4.512-3.657-8.17-8.17-8.17c-4.513,0-8.17,3.658-8.17,8.17v13.617H264.17v-13.617c0-4.512-3.657-8.17-8.17-8.17 s-8.17,3.658-8.17,8.17v13.617h-32.681v-13.617c0-4.512-3.657-8.17-8.17-8.17s-8.17,3.658-8.17,8.17v13.617h-47.675l-9.647-53.202 c-0.705-3.887-4.089-6.713-8.039-6.713c-55.563,0-100.766-45.203-100.766-100.766s45.203-100.766,100.766-100.766 c4.513,0,8.17-3.658,8.17-8.17V98.809c0-4.512-3.657-8.17-8.17-8.17c-4.513,0-8.17,3.658-8.17,8.17v43.09 c-35.926,2.488-67.441,21.257-87.21,48.957C60.39,91.112,149.622,16.34,256,16.34s195.61,74.772,217.933,174.516 c-19.768-27.7-51.283-46.469-87.21-48.957v-43.09C386.723,94.297,383.066,90.639,378.553,90.639z">
                                                </path>
                                                <path style="fill:#000000;"
                                                    d="M305.021,258.723c0,40.546,32.986,73.532,73.532,73.532s73.532-32.986,73.532-73.532 s-32.986-73.532-73.532-73.532S305.021,218.177,305.021,258.723z M378.553,201.532c31.535,0,57.191,25.656,57.191,57.191 s-25.657,57.191-57.191,57.191s-57.191-25.656-57.191-57.191S347.018,201.532,378.553,201.532z">
                                                </path>
                                                <circle style="fill:#000000;" cx="193.362" cy="117.106" r="8.17">
                                                </circle>
                                                <circle style="fill:#000000;" cx="226.043" cy="149.787" r="8.17">
                                                </circle>
                                                <path style="fill:#000000;"
                                                    d="M133.447,185.191c-40.546,0-73.532,32.986-73.532,73.532s32.986,73.532,73.532,73.532 s73.532-32.986,73.532-73.532S173.993,185.191,133.447,185.191z M133.447,315.915c-31.535,0-57.191-25.656-57.191-57.191 s25.657-57.191,57.191-57.191s57.191,25.656,57.191,57.191S164.982,315.915,133.447,315.915z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div class="w-full lg:h-full flex flex-col justify-start items-center gap-5 px-10 py-2">
                        <div class="w-full flex flex-col justify-center items-center">
                            <div class="text-xl">Reprobación</div>
                            <div
                                class="w-full bg-transparent rounded-xl border-2 border-black h-6 text-center relative overflow-hidden">
                                <div class="h-full bg-red-600 absolute left-0"
                                    style="width: {{ $educard->reprobacion }}%"></div>
                                <div class="relative z-10">{{ $educard->reprobacion }}%</div>
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-center">
                            <div class="text-xl">Paciencia</div>
                            <div
                                class="w-full bg-transparent rounded-xl border-2 border-black h-6 text-center relative overflow-hidden">
                                <div class="h-full bg-blue-600 absolute left-0"
                                    style="width: {{ $educard->paciencia }}%"></div>
                                <div class="relative z-10">{{ $educard->paciencia }}%</div>
                            </div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-center">
                            <div class="text-xl">Caracter</div>
                            <div
                                class="w-full bg-transparent rounded-xl border-2 border-black h-6 text-center relative overflow-hidden">
                                <div class="h-full bg-green-600 absolute left-0"
                                    style="width: {{ $educard->caracter }}%"></div>
                                <div class="relative z-10">{{ $educard->caracter }}%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:h-2/6 lg:overflow-hidden lg:mb-0 mb-10">
                <div
                    class="bg-gray-800 rounded-xl p-2 w-full h-full border-2 border-black flex flex-col gap-2 items-center justify-start">
                    <div class="text-xl">Clases:</div>
                    <ul class="text-sm list-disc w-5/6">
                        @foreach ($educard->clases as $clase)
                            <li>{{ $clase }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
        .rotate-on-hover {
            transition: transform 0.3s ease;
        }
    </style>
    <script>
        const tilt = document.getElementById('tilt');
        tilt.addEventListener('mouseenter', () => {
            tilt.addEventListener('mousemove', handleMove);
        });
        tilt.addEventListener('mouseleave', () => {
            tilt.style.transform = 'perspective(500px) rotateX(0) rotateY(0)';
            tilt.removeEventListener('mousemove', handleMove);
        });

        function handleMove(e) {
            const boundingRect = tilt.getBoundingClientRect();
            const mouseX = e.clientX - boundingRect.left;
            const mouseY = e.clientY - boundingRect.top;
            const sensitivity = 0.2;
            const xRotation = (mouseY - boundingRect.height / 2) * sensitivity;
            const yRotation = (mouseX - boundingRect.width / 2) * -sensitivity;
            tilt.style.transform = `perspective(500px) rotateX(${xRotation}deg) rotateY(${yRotation}deg)`;
        }
    </script>

    @if ($modal)
        <div class="fixed w-full h-full inset-0 z-50 bg-black/50 flex justify-center items-center">
            <div class="bg-sky-500 rounded-xl md:w-1/2 w-full max-h-full flex flex-col overflow-hidden relative">
                <div class="absolute top-2 right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        wire:click="closeModal()" class="size-16 hover:scale-110 ease-in-out cursor-pointer">
                        <path fill-rule="evenodd"
                            d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="h-20 shrink-0 flex justify-center items-center gap-5 text-white">
                    <div class="bg-black h-full p-3 flex justify-center items-center cursor-pointer {{ $activeTab === 'emotes' ? 'bg-gray-800' : 'bg-black' }}"
                        wire:click="selectTab('emotes')">EMOTES</div>
                    <div class="bg-black h-full p-3 flex justify-center items-center cursor-pointer {{ $activeTab === 'items' ? 'bg-gray-800' : 'bg-black' }}"
                        wire:click="selectTab('items')">ITEMS</div>
                </div>
                <div class="min-h-80 bg-gray-800 rounded-xl p-3 py-10 flex justify-center items-start overflow-y-auto">
                    <div
                        class="w-full flex flex-wrap gap-3 justify-center items-center {{ $activeTab === 'emotes' ? '' : 'hidden' }}">
                        @php
                            $hayEmotes = false;
                        @endphp
                        @foreach ($elementos as $elemento)
                            @if ($elemento->tipo === 'emote')
                                @php
                                    $hayEmotes = true;
                                @endphp
                                <div class="w-20 h-20 bg-black/30 rounded-xl overflow-hidden">
                                    <img src="{{ asset('storage/' . $elemento->ruta) }}" alt="emote"
                                        class="h-full w-full object-cover">
                                </div>
                            @endif
                        @endforeach
                        @if (!$hayEmotes)
                            <p class="text-emerald-500 p-3">No hay Emotes.</p>
                        @endif
                    </div>
                    <div
                        class="w-full flex flex-wrap gap-3 justify-center items-center {{ $activeTab === 'items' ? '' : 'hidden' }}">
                        @php
                            $hayItems = false;
                        @endphp
                        @foreach ($elementos as $elemento)
                            @if ($elemento->tipo === 'item')
                                @php
                                    $hayItems = true;
                                @endphp
                                <div class="w-20 h-20 bg-black/30 rounded-xl overflow-hidden">
                                    <img src="{{ asset('storage/' . $elemento->ruta) }}" alt="item"
                                        class="h-full w-full object-cover">
                                </div>
                            @endif
                        @endforeach
                        @if (!$hayItems)
                            <p class="text-emerald-500 p-3">No hay items.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
