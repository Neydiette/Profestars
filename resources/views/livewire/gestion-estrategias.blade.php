<div class="w-full p-5">
    @if ($isOpen)
        <div class="fixed z-50 inset-0 flex justify-center items-center bg-black/50 w-full h-full overflow-y-auto">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-8 pt-6 pb-8">
                <form wire:submit.prevent="store">
                    <input type="hidden" wire:model="{{ $estrategia_id ? 'estrategia_id' : '' }}">

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
                        <select wire:model="user_id" id="user_id"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="materia_id">Materia</label>
                        <select wire:model="materia_id" id="materia_id"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione una materia</option>
                            @foreach ($materias as $materia)
                                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                            @endforeach
                        </select>
                        @error('materia_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="semestre">Semestre</label>
                        <select wire:model="semestre" id="semestre"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un semestre</option>
                            @foreach (['Primer semestre', 'Segundo semestre', 'Tercer semestre', 'Cuarto semestre', 'Quinto semestre', 'Sexto semestre', 'Séptimo semestre', 'Octavo semestre', 'Noveno semestre'] as $s)
                                <option value="{{ $s }}">{{ $s }}</option>
                            @endforeach
                        </select>
                        @error('semestre')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="estrategia">Estrategia</label>
                        <textarea wire:model="estrategia" id="estrategia" rows="6"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        @error('estrategia')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 w-full">
                        <div class="flex w-full gap-10 text-gray-700 justify-center items-center">
                            <label for="" class="text-gray-700 sm:text-lg text-sm">Etiquetas:</label>
                            <div class="flex flex-wrap gap-2 justify-between w-full">
                                <div class="block">
                                    <label for="exito" class="flex items-center">
                                        <input type="checkbox" id="exito" name="etiquetas[]" value="exito"
                                            wire:model="etiquetas">
                                        <span class="ms-2 sm:text-sm text-xs ">exito</span>
                                    </label>
                                </div>
                                <div class="block">
                                    <label for="salvasemestre" class="flex items-center">
                                        <input type="checkbox" id="salvasemestre" name="etiquetas[]"
                                            value="salvasemestre" wire:model="etiquetas">
                                        <span class="ms-2 sm:text-sm text-xs">salvasemestre</span>
                                    </label>
                                </div>
                                <div class="block">
                                    <label for="consejazo" class="flex items-center">
                                        <input type="checkbox" id="consejazo" name="etiquetas[]" value="consejazo"
                                            wire:model="etiquetas">
                                        <span class="ms-2 sm:text-sm text-xs">consejazo</span>
                                    </label>
                                </div>
                                <div class="block">
                                    <label for="experiencia" class="flex items-center">
                                        <input type="checkbox" id="experiencia" name="etiquetas[]" value="experiencia"
                                            wire:model="etiquetas">
                                        <span class="ms-2 sm:text-sm text-xs">experiencia</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        @error('etiquetas')
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
                @if ($showActive)
                    <p class="text-gray-700 text-lg font-bold mb-4">¿Estás seguro de eliminar la estrategia activa?</p>
                    <div class="flex justify-end">
                        <button type="button" wire:click="closeModal"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2 focus:outline-none focus:shadow-outline">Cancelar</button>
                        <button type="button" wire:click="delete"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
                    </div>
                @else
                    <p class="text-gray-700 text-lg font-bold mb-4">¿Estás seguro de declinar la estrategia? se eliminara.</p>
                    <div class="flex justify-end">
                        <button type="button" wire:click="closeModal"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2 focus:outline-none focus:shadow-outline">Cancelar</button>
                            <button type="button" wire:click="declinar"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
                    </div>
                @endif
            </div>
        </div>
    @endif
    <div class="flex justify-end mb-4">
        <button type="button" wire:click="create"
            class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Nueva
            Estrategia</button>
    </div>

    <ul class="flex mb-4">
        <li class="mr-1">
            <button wire:click="toggleTab(true)"
                class="py-2 px-4 rounded focus:outline-none {{ $showActive ? 'bg-amber-500 text-white' : 'bg-gray-300 text-gray-600' }} hover:bg-amber-700">
                Estrategias Publicadas
            </button>
        </li>
        <li class="mr-1">
            <button wire:click="toggleTab(false)"
                class="py-2 px-4 rounded focus:outline-none {{ !$showActive ? 'bg-amber-500 text-white' : 'bg-gray-300 text-gray-600' }}  hover:bg-amber-700">
                Estrategias sin publicar
            </button>
        </li>
    </ul>


    <div class="overflow-x-auto">
        <table class="table-auto w-full text-sm">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">ID</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Título</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Estrategia</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Usuario</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Profesor</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Materia</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Semestre</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Etiquetas</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estrategias as $estrategia)
                    <tr>
                        <td class="border px-4 py-2">{{ $estrategia->id }}</td>
                        <td class="border px-4 py-2">{{ $estrategia->titulo }}</td>
                        <td class="border px-4 py-2">{{ $estrategia->estrategia }}</td>
                        <td class="border px-4 py-2">{{ $estrategia->user->name }}</td>
                        <td class="border px-4 py-2">{{ $estrategia->profesor->nombre_completo }}</td>
                        <td class="border px-4 py-2">{{ $estrategia->materia->nombre }}</td>
                        <td class="border px-4 py-2">{{ $estrategia->semestre }}</td>
                        <td class="border px-4 py-2">
                            @if ($estrategia->etiquetas)
                                {{ implode(', ', json_decode($estrategia->etiquetas)) }}
                            @endif
                        </td>
                        <td class="border px-4 py-2">
                            @if ($showActive)
                                <button wire:click="edit({{ $estrategia->id }})"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                                <button wire:click="confirmDelete({{ $estrategia->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            @else
                                <button wire:click="validada({{ $estrategia->id }})"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Validar</button>
                                <button wire:click="confirmDelete({{ $estrategia->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Declinar</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
