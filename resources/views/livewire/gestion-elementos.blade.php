<div class="p-5">
    <div class="flex justify-end mb-4">
        <button type="button" wire:click="openModal"
            class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Nuevo
            Elemento</button>
    </div>
    <div class="mt-4 flex flex-col flex-wrap justify-center items-center gap-2 w-full overflow-hidden p-5">
        @if ($elementos->isEmpty())
            <p class="text-center text-green-500">No hay elementos</p>
        @else
            @foreach ($elementos->groupBy('id_profesor') as $profesor => $elementosPorProfesor)
                <div class="flex flex-col gap-3 w-full mb-6">
                    <h2 class="text-lg font-bold">Profesor:
                        {{ $elementosPorProfesor->first()->profesor->nombre_completo }}</h2>
                    <div
                        class="flex md:flex-row flex-col md:justify-start justify-center items-start gap-2 overflow-hidden w-full">
                        @foreach ($elementosPorProfesor->groupBy('tipo') as $tipo => $elementosPorTipo)
                            <div class="flex flex-col md:w-1/2 w-full">
                                <h3 class="text-md font-semibold mb-2">Tipo: {{ $tipo }}</h3>
                                <div class="flex gap-2 flex-wrap md:justify-start justify-center items-center">
                                    @foreach ($elementosPorTipo as $elemento)
                                        <div
                                            class="flex flex-col gap-3 w-52 h-60 overflow-hidden rounded-xl bg-gray-200 items-center justify-center">
                                            <img src="{{ asset('storage/' . $elemento->ruta) }}"
                                                alt="{{ basename($elemento->ruta) }}" class="w-auto h-4/6 object-cover">
                                            <span
                                                class="w-full text-center px-2 truncate">{{ basename($elemento->ruta) }}</span>
                                            <div class="flex w-full">
                                                <button wire:click="edit('{{ $elemento->id }}')"
                                                    class="w-1/2 bg-yellow-500 text-white font-bold py-1 px-2">Editar</button>
                                                <button wire:click="confirmDelete('{{ $elemento->id }}')"
                                                    class="w-1/2 bg-red-500 text-white font-bold py-1 px-2">Eliminar</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif
    </div>


    @if ($openDeleteModal)
        <div class="fixed inset-0 flex justify-center items-center bg-black/50 ">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-8 pt-6 pb-8 mb-4">
                <p class="text-gray-700 text-lg font-bold mb-4">¿Estás seguro de eliminar el elemento?</p>
                <div class="flex justify-end">
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        wire:click="delete()">Aceptar</button>
                    <button
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2 focus:outline-none focus:shadow-outline"
                        wire:click="closeModal">Cancelar</button>
                </div>
            </div>
        </div>
    @endif


    @if ($modalOpen)
        <div class="fixed z-50 inset-0 flex items-start md:items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                <form wire:submit.prevent="store">
                    <div class="mb-4">
                        <label for="selectedProfesor"
                            class="block text-gray-700 text-sm font-bold mb-2">Profesor</label>
                        <select id="selectedProfesor" wire:model="id_profesor"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un profesor</option>
                            @foreach ($profesores as $profesor)
                                <option value="{{ $profesor->id }}">{{ $profesor->nombre_completo }}</option>
                            @endforeach
                        </select>
                        @error('id_profesor')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo</label>
                        <div class="flex items-center gap-4">
                            <label class="flex items-center">
                                <input type="radio" id="emote" value="emote" wire:model="tipo"
                                    wire:input="$refresh" class="mr-2 leading-tight">
                                <span class="text-gray-700 text-sm">Emote</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" id="item" value="item" wire:model="tipo"
                                    wire:input="$refresh" class="mr-2 leading-tight">
                                <span class="text-gray-700 text-sm">Item</span>
                            </label>
                        </div>
                        @error('tipo')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="dato" class="block text-gray-700 text-sm font-bold mb-2">Dato (no es
                            obligatorio)</label>
                        <textarea name="dato" id="dato" cols="1" rows="5" wire:model="dato"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('dato')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="ruta" class="block text-gray-700 text-sm font-bold mb-2">Imagen</label>
                        <input type="file" id="ruta" wire:model="ruta"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('ruta')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="submit"
                            class="bg-blue-500 text-white font-bold py-2 px-4 rounded mr-2">Guardar</button>
                        <button type="button" wire:click="closeModal"
                            class="bg-gray-500 text-white font-bold py-2 px-4 rounded">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    @endif

</div>
