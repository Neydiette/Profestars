<div class="w-full p-5">
    @if ($isOpen)
        <div
            class="fixed z-50 inset-0 flex justify-center items-center bg-black/50 w-full h-full overflow-y-auto">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-8 pt-6 pb-8">
                <form wire:submit.prevent="store">
                    <input type="hidden" wire:model="anuncio_id">
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Título</label>
                        <input type="text" wire:model="titulo" id="titulo"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('titulo')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">Usuario</label>
                        <select wire:model="user_id" id="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un usuario</option>
                            @foreach ($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                            @endforeach
                        </select>
                        
                        @error('user_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="profesor_id">Profesor</label>
                        <select wire:model="profesor_id" id="profesor_id"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un profesor</option>
                            @foreach ($profesores as $profesor)
                                <option value="{{ $profesor->id }}">{{ $profesor->nombre_completo }}</option>
                            @endforeach
                        </select>
                        @error('profesor_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="semestre">Semestre</label>
                        <select wire:model="semestre" id="semestre"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un semestre</option>
                            <option value="Primer semestre" {{ $semestre == 'Primer semestre' ? 'selected' : '' }}>
                                Primer Semestre</option>
                            <option value="Segundo semestre" {{ $semestre == 'Segundo semestre' ? 'selected' : '' }}>
                                Segundo Semestre</option>
                            <option value="Tercer semestre" {{ $semestre == 'Tercer semestre' ? 'selected' : '' }}>
                                Tercer Semestre</option>
                            <option value="Cuarto semestre" {{ $semestre == 'Cuarto semestre' ? 'selected' : '' }}>
                                Cuarto Semestre</option>
                            <option value="Quinto semestre" {{ $semestre == 'Quinto semestre' ? 'selected' : '' }}>
                                Quinto Semestre</option>
                            <option value="Sexto semestre" {{ $semestre == 'Sexto semestre' ? 'selected' : '' }}>Sexto
                                Semestre</option>
                            <option value="Séptimo semestre" {{ $semestre == 'Séptimo semestre' ? 'selected' : '' }}>
                                Séptimo Semestre</option>
                            <option value="Octavo semestre" {{ $semestre == 'Octavo semestre' ? 'selected' : '' }}>
                                Octavo Semestre</option>
                            <option value="Noveno semestre" {{ $semestre == 'Noveno semestre' ? 'selected' : '' }}>
                                Noveno Semestre</option>
                        </select>
                        @error('semestre')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="anuncio">Anuncio</label>
                        <textarea wire:model="anuncio" id="anuncio" rows="6"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('anuncio')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="imagen_path">Emote</label>
                        <div x-data="{ isMenuOpen: false }" class="w-full relative">
                            <button type="button" @click="isMenuOpen = !isMenuOpen"
                                class="w-full sm:text-lg text-sm py-1.5 bg-gray-300 rounded-lg">Seleccionar
                                emote</button>
                            <div x-show.transition="isMenuOpen" x-cloak @click.away="isMenuOpen = false"
                                class="absolute bottom-full left-0 bg-gray-300 border border-gray-200 shadow-lg z-1 grid grid-cols-5 md:grid-cols-12 w-full rounded-xl overflow-hidden">
                                @foreach ($emotes as $emote)
                                    <img src="{{ asset('storage/' . $emote) }}"
                                        wire:click="selectImage('{{ $emote }}')" @click="isMenuOpen = false"
                                        class="block cursor-pointer w-full h-auto py-2 mx-auto hover:bg-gray-400 focus:outline-none">
                                @endforeach
                            </div>
                        </div>
                        @if ($imagen_path)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $imagen_path) }}" alt="Emote seleccionado"
                                    class="w-16 h-16">
                            </div>
                        @endif
                        @error('imagen_path')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Prioridad</label>
                        <div class="flex items-center">
                            <input type="radio" wire:model="prioridad" value="util" id="prioridad_util"
                                class="mr-2">
                            <label for="prioridad_util" class="mr-4">Útil</label>

                            <input type="radio" wire:model="prioridad" value="importante" id="prioridad_importante"
                                class="mr-2">
                            <label for="prioridad_importante" class="mr-4">Importante</label>

                            <input type="radio" wire:model="prioridad" value="urgente" id="prioridad_urgente"
                                class="mr-2">
                            <label for="prioridad_urgente">Urgente</label>
                        </div>
                        @error('prioridad')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                        <button type="button" wire:click="closeModal"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2 focus:outline-none focus:shadow-outline">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    @if ($openDeleteModal)
        <div class="fixed inset-0 flex justify-center items-center bg-black/50 w-full h-full">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-8 pt-6 pb-8 mb-4">
                <p class="text-gray-700 text-lg font-bold mb-4">¿Estás seguro de eliminar el anuncio?</p>
                <div class="flex justify-end">
                    <button type="button" wire:click="closeModal"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2 focus:outline-none focus:shadow-outline">Cancelar</button>
                    <button type="button" wire:click="delete"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
                </div>
            </div>
        </div>
    @endif

    <div class="flex justify-end mb-4">
        <button type="button" wire:click="create"
            class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Nuevo
            Anuncio</button>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full text-sm">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Título</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Anuncio</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Usuario</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Profesor</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Semestre</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Emote</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Prioridad</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($anuncios as $anuncio)
                    <tr>
                        <td class="border px-4 py-2">{{ $anuncio->titulo }}</td>
                        <td class="border px-4 py-2">{{ $anuncio->anuncio }}</td>
                        <td class="border px-4 py-2">{{ $anuncio->user->name }}</td>
                        <td class="border px-4 py-2">{{ $anuncio->profesor->nombre_completo }}</td>
                        <td class="border px-4 py-2">{{ $anuncio->semestre }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('storage/'.$anuncio->imagen_path) }}" alt="emote" class="w-28 h-auto">
                        </td>
                        <td class="border px-4 py-2">{{ $anuncio->prioridad }}</td>
                        <td class="border px-4 py-2">
                            <button type="button" wire:click="edit({{ $anuncio->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button type="button" wire:click="confirmDelete({{ $anuncio->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
