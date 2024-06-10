<div id="slider" class="flex flex-col sm:justify-center justify-start items-center sm:p-20 w-full relative"
    style="height: calc(100vh - 6.25rem);">
    @if ($elementos->isEmpty())
        <p>No hay elementos disponibles.</p>
    @else
        <div class="lg:flex hidden items-center justify-center h-full w-full">
            <div class="flex justify-center items-center w-24">
                <button wire:click="prev"
                    class=" prev-btn hidden sm:block enabled:hover:bg-slate-500 disabled:cursor-not-allowed enabled:active:bg-slate-400 rounded-full border-4 border-black p-1 text-black focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="overflow-hidden h-full w-full mx-8 flex justify-start items-center">
                <div class="flex gap-20 transition-transform duration-300"
                    style="transform: translateX(calc({{ $currentIndex }} * -{{ $cardWidth }}px));">
                    @foreach ($elementos as $elemento)
                        <div class="slideCard w-96 h-96 transform cursor-pointer flex shrink-0">
                            <div class="group h-full w-full [perspective:1000px]">
                                <div
                                    class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [backface-visibility:hidden] [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                                    <div
                                        class="absolute inset-0 overflow-hidden rounded-xl bg-violet-800 border border-black">
                                        <div class="h-4/5 w-full relative rounded-t-xl flex justify-center items-center"
                                            style="background-image: url('');">
                                            <img class="h-60 w-auto bg-cover bg-no-repeat"
                                                src="{{ 'storage/' . $elemento->ruta }}" alt="emote">
                                        </div>
                                        <div
                                            class="w-full mb-0 h-1/5 rounded-xl bg-yellow-500 text-2xl flex items-center justify-center text-white">
                                            {{ basename($elemento->ruta) }}
                                        </div>
                                    </div>

                                    <div
                                        class="absolute border border-black inset-0 h-full w-full rounded-xl bg-gray-500 [backface-visibility:hidden] [transform:rotateY(180deg)]">
                                        <div
                                            class="w-full mb-0 h-1/5 rounded-xl bg-black text-2xl flex items-center justify-center text-white">
                                            DATO
                                        </div>
                                        <p class="p-10 text-xl text-center text-white line-clamp-6 break-words">
                                            {{ $elemento->dato }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-center items-center w-24">
                <button wire:click="next"
                    class="next-btn hidden sm:block enabled:hover:bg-slate-500 disabled:cursor-not-allowed enabled:active:bg-slate-400 rounded-full border-4 border-black p-1  text-black focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>

        </div>
        <div class="lg:hidden mt-8 w-full p-2">
            <div class="flex flex-col gap-16 w-full mb-10">
                @foreach ($elementos as $elemento)
                <div class="slideCard w-full h-80 transform cursor-pointer flex shrink-0">
                    <div class="group h-full w-full [perspective:1000px]">
                        <div
                            class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [backface-visibility:hidden] [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                            <div
                                class="absolute inset-0 overflow-hidden rounded-xl bg-violet-800 border border-black">
                                <div class="h-4/5 w-full relative rounded-t-xl flex justify-center items-center"
                                    style="background-image: url('');">
                                    <img class="h-60 w-auto bg-cover bg-no-repeat"
                                        src="{{ 'storage/' . $elemento->ruta }}" alt="emote">
                                </div>
                                <div
                                    class="w-full mb-0 h-1/5 rounded-xl bg-yellow-500 text-2xl flex items-center justify-center text-white">
                                    {{ basename($elemento->ruta) }}
                                </div>
                            </div>

                            <div
                                class="absolute border border-black inset-0 h-full w-full rounded-xl overflow-hidden bg-gray-500 [backface-visibility:hidden] [transform:rotateY(180deg)]">
                                <div
                                    class="w-full mb-0 h-1/5 rounded-xl bg-black text-2xl flex items-center justify-center text-white">
                                    DATO
                                </div>
                                <p class="p-10 text-center text-white line-clamp-6 break-words">
                                    {{ $elemento->dato }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endif

</div>
