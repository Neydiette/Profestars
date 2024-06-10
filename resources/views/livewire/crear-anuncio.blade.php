<div class="flex flex-col justify-center items-center sm:p-3 w-full overflow-hidden" style="min-height: calc(100vh - 6.25rem);">
    <div class="w-full h-10 flex justify-center items-center mb-2 text-center">
        @if ($errors->any() || session()->has('error') || session()->has('success'))
            <div class="text-sm bg-white rounded-xl p-2">
                @if ($errors->any())
                    <span class="text-red-600">{{ $errors->first() }}</span>
                @elseif (session()->has('error'))
                    <span class="text-red-600">{{ session('error') }}</span>
                @elseif (session()->has('success'))
                    <span class="text-green-600">{{ session('success') }}</span>
                @endif
            </div>
        @endif
    </div>
    <div class="p-4 sm:p-8 w-full lg:w-4/6 min-h-5 gap-3 bg-sky-900 flex flex-col justify-center rounded-xl border-4 border-black">
        <x-ss-input-white id="titulo" label="Titulo de tu anuncio:" classLabel="text-base sm:text-xl" wire:model="titulo"
            wire:input="$refresh" />
        <div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-3 gap-3 gap-x-10">
            <x-ss-select-white label="Profesor:" classLabel="text-base sm:text-xl" wire:model="profesor" wire:input="$refresh">
                @foreach ($profesores as $item) 
                    <option value="{{ $item->id }}">{{ $item->titulo }} {{ $item->nombre_completo }}</option>
                @endforeach
            </x-ss-select-white>
            <div class="row-span-2 overflow-hidden">
                <x-ss-textarea-white label="Escribe tu anuncio:" classLabel="text-base sm:text-xl" wire:model="anuncio"
                    wire:input="$refresh">
                </x-ss-textarea-white>
            </div>
            <x-ss-select-white label="Semestre:" classLabel="text-base sm:text-xl" wire:model="semestre" wire:input="$refresh">
                <option selected value="primer semestre">Primer semestre</option>
                <option value="segundo semestre">Segundo semestre</option>
                <option value="tercer semestre">Tercer semestre</option>
                <option value="cuarto semestre">Cuarto semestre</option>
                <option value="quinto semestre">Quinto semestre</option>
                <option value="sexto semestre">Sexto semestre</option>
                <option value="septimo semestre">Septimo semestre</option>
                <option value="octavo semestre">Octavo semestre</option>
                <option value="noveno semestre">Noveno semestre</option>
            </x-ss-select-white>
            <div class="flex flex-col gap-5 justify-center sm:hidden mb-3 sm:mb-0">
                <label for="" class="font-semibold text-gray-300 sm:text-lg text-sm ">Etiquetas:</label>
                <div class="flex justify-between w-full" >
                    <div class="block">
                        <label for="urgente" class="flex items-center">
                            <x-ss-radio id="urgente" name="option" value="urgente" wire:model="prioridad" wire:input="$refresh" />
                            <span class="ms-2 sm:text-sm text-xs  text-gray-300 ">Urgente</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="importante" class="flex items-center">
                            <x-ss-radio id="importante" name="option" value="importante" wire:model="prioridad" wire:input="$refresh" />
                            <span class="ms-2 sm:text-sm text-xs text-gray-300 ">Importante</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="util" class="flex items-center">
                            <x-ss-radio id="util" name="option" value="util" wire:model="prioridad" wire:input="$refresh" />
                            <span class="ms-2 sm:text-sm text-xs text-gray-300 ">Util</span>
                        </label>
                    </div>
                </div>
            </div> 
            <div class="flex flex-col gap-5 items-center justify-center">
                <div x-data="{ isMenuOpen: false }" class="w-full relative">
                    <x-ss-button type="button" @click="isMenuOpen = true" class="w-full sm:text-lg text-sm py-1.5">Seleccionar
                        emote</x-ss-button>
                    <div x-show.transition="isMenuOpen" x-cloak x-on:click.away="isMenuOpen = false" x-ref="button"
                        class="absolute bottom-full left-0 bg-gray-300 border border-gray-200 shadow-lg z-1 grid grid-cols-5 md:grid-cols-12 w-full rounded-xl overflow-hidden">
                        @foreach ($emotes as $emote)
                                <img src="{{ asset('storage/'.$emote) }}" wire:click="selectImage('{{ $emote }}')"
                                @click="isMenuOpen = false"
                                class="block cursor-pointer w-14 h-14 object-cover py-2 mx-auto hover:bg-gray-400 focus:outline-none">
                        @endforeach
                    </div>
                </div>
                <div class="grid grid-cols-3 w-full">
                    <a href="{{ route('dashboard') }}"><x-ss-button class="w-full sm:text-lg text-sm text-center"
                            type="button">Regresar</x-ss-button></a>
                    <div class="w-full flex justify-center"><img src="{{ asset('storage/'. $selectedImage) }}"  class="w-10 h-10 object-cover"></div>
                    <div><x-ss-button type="button" class="w-full sm:text-lg text-sm text-center" wire:click="submitForm" onclick="scrollToTop()">Subir</x-ss-button></div>
                </div>
            </div>
            <div class="md:flex flex-col gap-5 justify-center hidden">
                <label for="" class="font-semibold text-gray-300 sm:text-lg text-sm ">Etiquetas:</label>
                <div class="flex justify-between w-full" >
                    <div class="block">
                        <label for="urgente" class="flex items-center">
                            <x-ss-radio id="urgente" name="option" value="urgente" wire:model="prioridad" wire:input="$refresh" />
                            <span class="ms-2 sm:text-sm text-xs  text-gray-300 ">Urgente</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="importante" class="flex items-center">
                            <x-ss-radio id="importante" name="option" value="importante" wire:model="prioridad" wire:input="$refresh" />
                            <span class="ms-2 sm:text-sm text-xs text-gray-300 ">Importante</span>
                        </label>
                    </div>
                    <div class="block">
                        <label for="util" class="flex items-center">
                            <x-ss-radio id="util" name="option" value="util" wire:model="prioridad" wire:input="$refresh" />
                            <span class="ms-2 sm:text-sm text-xs text-gray-300 ">Util</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</div>
