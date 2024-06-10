<div class="flex flex-col justify-center items-center sm:p-3 w-full overflow-hidden"
    style="min-height: calc(100vh - 6.25rem);">
    <div class="flex flex-col gap-x-10 justify-start sm:p-5 p-3 gap-2 mb-10 items-center mx-auto z-0 sm:w-1/2 w-full bg-gray-800 rounded-xl border border-black"
        style="height: calc(100vh - 10.50rem)">
        <div class="text-white text-xl">Buzón</div>
        <div class=" w-full flex flex-col items-center justify-start gap-3 overflow-y-auto"
            style="height: calc(100% - 2.5rem);">
            @if ($notificaciones->isEmpty())
                <p class=" text-emerald-500 p-2 py-10">No hay notificaciones.</p>
            @else
                @foreach ($notificaciones as $notificacion)
                    <div class="w-full h-20 flex-shrink-0 px-3 py-1 border overflow-hidden bg-sky-600 flex gap-3">
                        <div class="text-white font-semibold sm:w-4/5 w-2/3 line-clamp-3 text-base">
                            {{ $notificacion->estrategia }}
                        </div>
                        <div class="sm:w-1/5 w-1/3 flex flex-col justify-center items-center gap-2 p-2">
                            <div class="text-xs text-center">{{ $notificacion->updated_at->diffForHumans() }}</div>
                            <div class="flex gap-2">
                                <button wire:click="verNoti({{ $notificacion->id }})"
                                    class="bg-emerald-500 rounded-xl px-4 text-sm border p-1 border-black text-white">Ver
                                </button>
                                <button wire:click="eliminarNoti({{ $notificacion->id }})"
                                    class="bg-rose-500 rounded-xl px-4 text-sm border p-1 border-black text-white">Borrar
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>


    @if ($selectedNoti)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center p-3">
            <div class="bg-gray-300 sm:w-1/2 w-full" style="height: 28rem">
                <div class="w-full bg-rose-700 text-center text-white text-sm p-2 relative">
                    <span class=" select-none">Notificación</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        wire:click="cerrarNoti()" stroke="currentColor"
                        class="w-auto h-full p-1 absolute right-0 top-0 hover:bg-rose-600 cursor-pointer active:bg-rose-800">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <div class="w-full flex flex-col items-center h-full justify-center p-3">
                    <div
                        class="font-semibold select-none text-lg h-1/3 flex items-center justify-center text-center overflow-hidden">
                        {{ $notiVista->estrategia }}</div>
                    @if ($notiVista->tipo == 1)
                        <div class="font-semibold select-none text-lg h-1/3 flex items-center justify-center">
                            <img src="/img/feliz.png" alt="feliz" class="h-full w-auto">
                        </div>
                        <div
                            class="font-semibold select-none text-sm h-1/3 flex items-center justify-center text-center">
                            ¡Agradecemos que nos hayas enviado tu consejo! Nos complace informarte que ha sido
                            publicado.
                        </div>
                    @else
                        <div class="font-semibold select-none text-lg h-1/3 flex items-center justify-center">
                            <img src="/img/sorry.webp" alt="feliz" class="h-full w-auto">
                        </div>
                        <div
                            class="font-semibold select-none text-sm h-1/3 flex items-center justify-center text-center">
                            ¡Agradecemos que nos hayas enviado tu consejo! Lamentablemente, no ha sido aprobado en esta
                            ocasión.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
