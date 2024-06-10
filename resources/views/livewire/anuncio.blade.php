<div class="flex flex-col justify-center items-center sm:p-3 w-full overflow-hidden"
    style="min-height: calc(100vh - 6.25rem);">
    <div class="flex items-center w-full justify-center">
        <div class="relative flex flex-col w-full max-w-[48rem] md:flex-row rounded-xl bg-sky-900 border shadow-md">
            <div class="relative m-0 md:w-2/5 w-full shrink-0 overflow-hidden rounded-xl rounded-r-none">
                <img src="{{ asset('storage/' . $anuncio->imagen_path) }}" alt="imagen"
                    class="h-full w-full object-cover" />
            </div>
            <div class="p-6">
                <h6 class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-rose-500 antialiased">
                    Prioridad: {{ $anuncio->prioridad }}
                </h6>
                <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-500 antialiased">
                    {{ $anuncio->titulo }}
                </h4>
                <p class="mb-2 block font-sans text-base font-normal leading-relaxed text-gray-200 antialiased">
                    {{ $anuncio->anuncio }}
                </p>
                <p class="mb-2 block font-sans text-base font-semibold leading-relaxed text-gray-200 antialiased p-1">
                    Semestre: <span class="text-emerald-500">{{ $anuncio->semestre }}</span>
                </p>
                <p class="mb-2 block font-sans text-base font-semibold leading-relaxed text-gray-200 antialiased p-1">
                    Profesor: <span class="text-emerald-500">{{ $anuncio->profesor->nombre_completo }}</span>
                </p>
                
                
            </div>
        </div>
    </div>
    
</div>
