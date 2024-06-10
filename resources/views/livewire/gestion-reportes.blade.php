<div>
    <div class="p-5 flex flex-col gap-5">
        @foreach ($reportes as $index => $reporte)
            <div
                class="{{ $index % 2 === 0 ? 'bg-yellow-600' : 'bg-emerald-500' }} border border-gray-300 p-4 flex justify-between items-center rounded-lg">
                <div>
                    <p class="text-lg font-bold {{ $index % 2 === 0 ? 'text-blue-800' : 'text-green-800' }}">
                        {{ $reporte->reporte }}</p>
                    <p class="text-sm text-gray-600">{{ $reporte->estrategia->titulo }}</p>
                </div>
                <div class="flex items-center space-x-2">
                    <button wire:click="showDetails({{ $reporte->id_estrategia }}, {{ $reporte->id }})"
                        class="text-white text-xs font-semibold bg-blue-500 hover:bg-blue-600 focus:outline-none focus:bg-blue-600 px-4 py-2 rounded-lg">Ver
                        detalles</button>
                </div>

            </div>
        @endforeach
    </div>
    @if ($modalDetails)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
            <div class="bg-white p-4 rounded shadow-md md:w-1/2 w-full flex flex-col items-center justify-center">
                <h2 class="text-xl font-bold mb-2">{{ $estrategia->titulo }}</h2>
                <p class="text-sm text-gray-500">{{ $estrategia->estrategia }}</p>
                <div class="mt-4 flex flex-wrap gap-2 justify-center items-center w-full">
                    <button wire:click="confirmar('conservar')"
                        class="bg-green-500 text-white font-bold px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:bg-green-600">Conservar</button>
                    <button wire:click="confirmar('eliminar')"
                        class="bg-red-500 text-white font-bold px-4 py-2 rounded hover:bg-red-600 focus:outline-none focus:bg-red-600">Eliminar</button>
                    <button wire:click="closeDetails"
                        class="bg-gray-500 text-white font-bold px-4 py-2 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Cancelar</button>
                </div>
            </div>
        </div>
    @endif
    @if ($modalConfirm)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
            <div class="bg-white p-4 rounded shadow-md">
                <h2 class="text-xl font-bold mb-4">¿Estás seguro? Se eliminara
                    {{ $modalConfirm == 'conservar' ? 'solo el reporte' : 'la estrategia' }}</h2>
                <div class="mt-4 flex justify-end">
                    @if ($modalConfirm == 'conservar')
                        <button wire:click="conservarEstrategia"
                            class="mr-2 bg-green-500 text-white font-bold px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:bg-green-600">Sí</button>
                    @elseif ($modalConfirm == 'eliminar')
                        <button wire:click="eliminarEstrategia"
                            class="mr-2 bg-red-500 text-white font-bold px-4 py-2 rounded hover:bg-red-600 focus:outline-none focus:bg-red-600">Sí</button>
                    @endif
                    <button wire:click="closeConfirm"
                        class="bg-gray-500 text-white font-bold px-4 py-2 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">No</button>
                </div>
            </div>
        </div>
    @endif
</div>
