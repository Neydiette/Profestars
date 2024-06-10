<div class="flex flex-col justify-center items-center sm:p-3 w-full overflow-hidden"
    style="min-height: calc(100vh - 6.25rem);">
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
    <div class="w-full flex flex-col justify-center items-center">
        <div
            class="p-4 sm:p-8 w-full lg:w-4/6 min-h-5 gap-3 bg-gray-800 flex flex-col justify-center rounded-xl border-4 border-black">
            <x-ss-input-white id="titulo" label="Titulo de tu estrategia:" classLabel="text-base sm:text-xl"
                wire:model="titulo" wire:input="$refresh" />
            <div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-2 gap-3 gap-x-10">
                <x-ss-select-white label="Semestre:" classLabel="text-base sm:text-xl" wire:model="semestre"
                    wire:input="$refresh">
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
                <div class="row-span-4 overflow-hidden">
                    <x-ss-textarea-white label="Escribe tu estrategia:" classLabel="text-base sm:text-xl"
                        wire:model="estrategia_text" wire:input="$refresh">
                    </x-ss-textarea-white>
                </div>
                <x-ss-select-white label="Profesor:" classLabel="text-base sm:text-xl" wire:model="profesor"
                    wire:input="$refresh">
                    @foreach ($profesores as $item)
                        <option value="{{ $item->id }}">{{ $item->titulo }} {{ $item->nombre_completo }}</option>
                    @endforeach
                </x-ss-select-white>
                <x-ss-select-white label="Materia:" classLabel="text-base sm:text-xl" wire:model="materia"
                    wire:input="$refresh">
                    @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                    @endforeach
                </x-ss-select-white>
                <div class="flex flex-col gap-5 justify-center sm:hidden mb-3 sm:mb-0">
                    <label for="" class=" text-gray-300 sm:text-lg text-sm ">Etiquetas:</label>
                    <div class="flex flex-wrap gap-5 items-center justify-center w-full">
                        @foreach (['exito', 'salvasemestre', 'consejazo', 'experiencia'] as $etiqueta)
                            <div class="block">
                                <label for="{{ $etiqueta }}" class="flex items-center">
                                    <input type="checkbox" id="{{ $etiqueta }}" name="etiquetas[]"
                                        value="{{ $etiqueta }}" wire:model="etiquetas">
                                    <span class="ms-2 sm:text-sm text-xs text-gray-300">{{ $etiqueta }}</span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="md:col-span-2 hidden sm:block sm:mb-3 mb-0">
                    <div class="md:flex w-full gap-10 justify-center items-center">
                        <label for="" class=" text-gray-300 sm:text-lg text-sm">Etiquetas:</label>
                        <div class="flex justify-between w-full">
                            @foreach (['exito', 'salvasemestre', 'consejazo', 'experiencia'] as $etiqueta)
                                <div class="block">
                                    <label for="{{ $etiqueta }}" class="flex items-center">
                                        <input type="checkbox" id="{{ $etiqueta }}" name="etiquetas[]"
                                            value="{{ $etiqueta }}" wire:model="etiquetas">
                                        <span class="ms-2 sm:text-sm text-xs text-gray-300">{{ $etiqueta }}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-5 p-5">
            <a href="{{ route('estrategias') }}"><x-ss-button class="w-full sm:text-lg text-sm text-center"
                    type="button">Regresar</x-ss-button></a>
            <div><x-ss-button type="button" class="w-full sm:text-lg text-sm text-center" wire:click="submitForm"
                    onclick="scrollToTop()">Enviar</x-ss-button></div>
        </div>
    </div>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</div>
