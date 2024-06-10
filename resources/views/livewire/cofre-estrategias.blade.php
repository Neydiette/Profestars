<div class="w-full h-full flex flex-col gap-20 justify-start md:p-10" style="min-height: calc(100vh - 6.25rem);">
    <div class="bg-gray-800 md:p-10 md:px-20 p-5 w-full rounded-xl">
        <div class="w-full flex justify-center items-center bg-black rounded-xl">
            <span class="flex items-center p-3 h-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-8 h-8 stroke-white">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm8.25 5.25a.75.75 0 0 1 .75-.75h8.25a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75Z"
                        clip-rule="evenodd" />
                </svg>
            </span>
            <input placeholder="Buscar consejo" type="text"
                class=" rounded-xl h-full w-full bg-white text-lg text-black" wire:model="search" wire:input="$refresh">
            <span class="flex items-center p-3 h-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </span>
        </div>
        <div class="w-full py-10 flex flex-wrap justify-center items-stretch" style="min-height: calc(60vh)">
            @if ($showNoResults)
                <div class="text-green-500">No hay resultados</div>
            @else
                @foreach ($estrategias as $estrategia)
                    <div class="sm:w-1/3 w-full p-3">
                        <div
                            class="w-full h-full flex flex-col text-white justify-between gap-4 border-4 border-black rounded-xl p-5">
                            <div class="line-clamp-2 h-12 text-base">{{ $estrategia->titulo }}</div>
                            <div class="text-sm pl-6 w-full flex flex-col gap-1">
                                <div>{{ $estrategia->profesor->nombre_completo }}</div>
                                <div>{{ $estrategia->materia->nombre }}</div>
                                <div>{{ $estrategia->semestre }}</div>
                            </div>
                            <ul class="pl-10 list-disc line-clamp-6 px-5 text-base font-serif font-semibold">
                                <li class="">
                                    {{ $estrategia->estrategia }}
                                </li>
                            </ul>
                            <div class=" pl-6 mt-3 w-full flex">
                                <div class="w-4/6">
                                    <div class="text-base p-3">Etiquetas:</div>
                                    @php
                                        $etiquetas = json_decode($estrategia->etiquetas);
                                    @endphp
                                    <div class="flex flex-wrap gap-2 w-full">
                                        @foreach ($etiquetas as $etiqueta)
                                            <div class="p-1 border border-amber-400 text-xs rounded">{{ $etiqueta }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @php
                                    $reaction = DB::table('likes')
                                        ->where('id_estrategia', $estrategia->id)
                                        ->where('id_usuario', auth()->id())
                                        ->first();
                                @endphp
                                <div class="w-2/6 flex flex-wrap justify-center items-end gap-3">
                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            wire:click="toggleReaction({{ $estrategia->id }}, true)"
                                            class="w-8 h-8 cursor-pointer bg-green-600 p-2 rounded-full active:animate-ping {{ $reaction && $reaction->reaccion == 1 ? 'fill-white' : 'fill-black' }}">
                                            <path
                                                d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                                        </svg>
                                        <span>{{ \App\Models\Estrategia::where('id', $estrategia->id)->first()->like }}</span>
                                    </div>
                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            wire:click="toggleReaction({{ $estrategia->id }}, false)"
                                            class="w-8 h-8 cursor-pointer bg-red-600 p-2 rounded-full active:animate-ping {{ $reaction && $reaction->reaccion == 0 ? 'fill-white' : 'fill-black' }}">
                                            <path
                                                d="M15.73 5.5h1.035A7.465 7.465 0 0 1 18 9.625a7.465 7.465 0 0 1-1.235 4.125h-.148c-.806 0-1.534.446-2.031 1.08a9.04 9.04 0 0 1-2.861 2.4c-.723.384-1.35.956-1.653 1.715a4.499 4.499 0 0 0-.322 1.672v.633A.75.75 0 0 1 9 22a2.25 2.25 0 0 1-2.25-2.25c0-1.152.26-2.243.723-3.218.266-.558-.107-1.282-.725-1.282H3.622c-1.026 0-1.945-.694-2.054-1.715A12.137 12.137 0 0 1 1.5 12.25c0-2.848.992-5.464 2.649-7.521C4.537 4.247 5.136 4 5.754 4H9.77a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23ZM21.669 14.023c.536-1.362.831-2.845.831-4.398 0-1.22-.182-2.398-.52-3.507-.26-.85-1.084-1.368-1.973-1.368H19.1c-.445 0-.72.498-.523.898.591 1.2.924 2.55.924 3.977a8.958 8.958 0 0 1-1.302 4.666c-.245.403.028.959.5.959h1.053c.832 0 1.612-.453 1.918-1.227Z" />
                                        </svg>
                                        <span>{{ \App\Models\Estrategia::where('id', $estrategia->id)->first()->dislike }}</span>
                                    </div>
                                    <div class="flex flex-col items-center justify-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            wire:click="openReport({{ $estrategia->id }})"
                                            class="w-10 h-10 cursor-pointer fill-amber-400 rounded-full  active:animate-ping">
                                            <path fill-rule="evenodd"
                                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="opacity-0">200</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    @if ($modalReport)
        <div class="fixed z-50 h-full w-full inset-0 bg-black/40 flex justify-center items-center p-1">
            <div
                class="w-full md:w-1/2 bg-gray-800 rounded-xl px-2 py-4 flex flex-col gap-3 justify-center items-center text-white">
                <h1 class="text-xl text-center">¿Cuál es el problema?</h1>
                <p class="text-center text-sm">Si notas algo que no sea adecuado, háznoslo saber.</p>
                <div class="flex flex-col justify-center items-start gap-3 text-sm p-2" x-data="{ selectedOtro: false }">
                    <div class="block">
                        <label for="uno" class="flex items-center">
                            <x-ss-radio id="uno" name="option" value="violacion de privacidad" wire:model="razon"
                                wire:input="$refresh" @click="selectedOtro = false" />
                            <span class="ms-2 sm:text-sm text-xs">Violación de privacidad.</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="dos" class="flex items-center">
                            <x-ss-radio id="dos" name="option" value="contenido inapropiado" wire:model="razon"
                                wire:input="$refresh" @click="selectedOtro = false" />
                            <span class="ms-2 sm:text-sm text-xs">Contenido inapropiado.</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="tres" class="flex items-center">
                            <x-ss-radio id="tres" name="option" value="amenazas y conductas peligrosas"
                                wire:model="razon" wire:input="$refresh" @click="selectedOtro = false" />
                            <span class="ms-2 sm:text-sm text-xs">Amenazas y conductas peligrosas.</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="cuatro" class="flex items-center">
                            <x-ss-radio id="cuatro" name="option"
                                value="falta de respeto y comportamiento disruptivo" wire:model="razon"
                                wire:input="$refresh" @click="selectedOtro = false" />
                            <span class="ms-2 sm:text-sm text-xs">Falta de respeto y comportamiento
                                disruptivo.</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="cinco" class="flex items-center">
                            <x-ss-radio id="cinco" name="option"
                                value="violación de las normas de uso de la plataforma." wire:model="razon"
                                wire:input="$refresh" @click="selectedOtro = false" />
                            <span class="ms-2 sm:text-sm text-xs">Violación de las normas de uso de la
                                plataforma.</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="seis" class="flex items-center">
                            <x-ss-radio id="seis" name="option" value="otro" wire:input="updateRazon"
                                x-model="selectedOtro" />
                            <span class="ms-2 sm:text-sm text-xs">Otro, por favor escribenos tu queja.</span>
                        </label>
                        <textarea name="otro" id="otro" wire:model="razonOtro" rows="4"
                            class="w-full text-xs text-black mt-1 ml-5 border border-gray-300 rounded-md p-2 disabled:bg-gray-100 disabled:opacity-50"
                            wire:input="updateRazon" x-bind:disabled="!selectedOtro"></textarea>
                    </div>
                </div>
                <div class="flex gap-5 justify-between">
                    <x-ss-button type="button" class="text-sm" wire:click="closeReport()">Cancelar</x-ss-button>
                    <x-ss-button type="button" class="text-sm" wire:click="sendReport()">Enviar</x-ss-button>
                </div>
            </div>
        </div>
    @endif

    @if ($savedReport)
        <div class="fixed z-50 h-full w-full inset-0 bg-black/40 flex justify-center items-center p-1">
            <div class="flex flex-col justify-center items-center h-full">
                <div
                    class="bg-white/80 p-5 rounded-xl border-4 border-black flex flex-col items-center justify-center">
                    <p class="text-yellow-400 text-2xl mb-4 text-center">Estrategia reportada</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-28 h-28">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                    </svg>
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('show-noti', (event) => {
                setTimeout(() => {
                    @this.dispatch('resetNoti');
                }, 800);
            })
        });
    </script>
</div>
