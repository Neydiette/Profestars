<div class="w-full p-5">
    @if ($isOpen)
        <div
            class="fixed z-50 inset-0 flex justify-center items-start  bg-black/50 w-full h-full overflow-y-auto overflow-x-hidden">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-5 pt-6 pb-8 max-w-full md:w-1/3">
                <form wire:submit.prevent="store">
                    <input type="hidden" wire:model="profe_id">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Título</label>
                        <input type="text" wire:model="titulo" id="titulo"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('titulo')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre Completo</label>
                        <input type="text" wire:model="nombre" id="nombre"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('nombre')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="frase">Frase</label>
                        <input type="text" wire:model="frase" id="frase"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('frase')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="imagen1">Imagen1</label>
                        <input type="file" wire:model="imagen1" id="imagen1"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('imagen1')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="imagen2">Imagen2</label>
                        <input type="file" wire:model="imagen2" id="imagen2"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('imagen2')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">Correo</label>
                        <input type="text" wire:model="correo" id="correo"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('correo')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex gap-3 w-full">
                        <div class="mb-4 w-1/3">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nivel">Nivel</label>
                            <input type="number" min="0" wire:model="nivel" id="nivel"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('nivel')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 w-1/3">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rango">Rango</label>
                            <input type="number" min="0" wire:model="rango" id="rango"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('rango')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 w-1/3">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="copas">Copas</label>
                            <input type="number" min="0" wire:model="copas" id="copas"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @error('copas')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Semestres</label>
                        <div class="flex flex-wrap items-center justify-center gap-4">
                            @for ($i = 1; $i <= 9; $i++)
                                <label class="flex items-center">
                                    <input type="checkbox" wire:model="semestres" value="{{ $i }}"
                                        class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                    <span class="ml-2 text-sm text-gray-700">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                        @error('semestres')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="dificultad">Dificultad</label>
                        <select wire:model="dificultad" id="dificultad"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="1">Baja</option>
                            <option value="2">Media</option>
                            <option value="3">Alta</option>
                            <option value="4">Extrema</option>
                        </select>
                        @error('dificultad')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 text-gray-500 text-xs">
                        <label class="block text-gray-700 text-sm font-bold mb-2"
                            for="reprobacion">Reprobacion</label>
                        <input type="range" wire:model="reprobacion" id="reprobacion" min="0"
                            max="100" wire:change="$refresh"
                            oninput="reprobacionOutput.value = reprobacion.value"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <output id="reprobacionOutput" for="reprobacion"
                            class="text-gray-500 text-xs mt-2">{{ $reprobacion }}</output>%
                        @error('reprobacion')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 text-gray-500 text-xs">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="paciencia">Paciencia</label>
                        <input type="range" wire:model="paciencia" id="paciencia" min="0" max="100"
                            wire:change="$refresh" oninput="pacienciaOutput.value = paciencia.value"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <output id="pacienciaOutput" for="paciencia"
                            class="text-gray-500 text-xs mt-2">{{ $paciencia }}</output>%
                        @error('paciencia')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 text-gray-500 text-xs">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="caracter">Caracter</label>
                        <input type="range" wire:model="caracter" id="caracter" min="0" max="100"
                            wire:change="$refresh" oninput="caracterOutput.value = caracter.value"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <output id="caracterOutput" for="caracter"
                            class="text-gray-500 text-xs mt-2">{{ $caracter }}</output>%
                        @error('caracter')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 bg-gray-400 p-5">
                        <h2 class="text-sm font-bold text-gray-700 mb-4">Horarios</h2>
                        <div class="mb-4 text-xs">
                            <label class="block text-gray-700 font-bold mb-2">Lunes</label>
                            <div class="flex w-ful gap-2 justify-center items-center">
                                <input type="time" wire:model.lazy="horario_lunes.inicio"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span>a</span>
                                <input type="time" wire:model.lazy="horario_lunes.fin"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 text-xs">
                            <label class="block text-gray-700 font-bold mb-2">Martes</label>
                            <div class="flex w-full gap-2 justify-center items-center">
                                <input type="time" wire:model.lazy="horario_martes.inicio"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span>a</span>
                                <input type="time" wire:model.lazy="horario_martes.fin"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 text-xs">
                            <label class="block text-gray-700 font-bold mb-2">Miércoles</label>
                            <div class="flex w-full gap-2 justify-center items-center">
                                <input type="time" wire:model.lazy="horario_miercoles.inicio"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span>a</span>
                                <input type="time" wire:model.lazy="horario_miercoles.fin"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 text-xs">
                            <label class="block text-gray-700 font-bold mb-2">Jueves</label>
                            <div class="flex w-full gap-2 justify-center items-center">
                                <input type="time" wire:model.lazy="horario_jueves.inicio"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span>a</span>
                                <input type="time" wire:model.lazy="horario_jueves.fin"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 text-xs">
                            <label class="block text-gray-700 font-bold mb-2">Viernes</label>
                            <div class="flex w-full gap-2 justify-center items-center">
                                <input type="time" wire:model.lazy="horario_viernes.inicio"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span>a</span>
                                <input type="time" wire:model.lazy="horario_viernes.fin"
                                    class="shadow text-xs appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        @error('horarios')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="skills">Skills</label>
                        @for ($i = 0; $i < 5; $i++)
                            <input type="text" wire:model="skills.{{ $i }}"
                                id="skills_{{ $i }}" placeholder="skill {{ $i + 1 }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2">
                        @endfor
                        @error('skills')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="clases">clases</label>
                        @for ($i = 0; $i < 5; $i++)
                            <select wire:model="clases.{{ $i }}" id="clases_{{ $i }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2">
                                <option value="" class="placeholder-option text-red-600">Selecciona una clase
                                    {{ $i + 1 }}</option>
                                @foreach ($materias as $materia)
                                    <option value="{{ $materia->nombre }}">{{ $materia->nombre }}</option>
                                @endforeach
                            </select>
                        @endfor
                        @error('clases')
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
                <p class="text-gray-700 text-lg font-bold mb-4">¿Estás seguro de eliminar el profe?</p>
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
            Profesor</button>
    </div>

    <div class="overflow-x-auto">
        <table class="table-auto w-full text-sm">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Título</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Nombre completo</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Frase</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Imagen1</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Imagen2</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Correo</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Semestres</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Dificultad</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Porcentajes</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Horarios</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Skills</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Clases</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($profesores as $profe)
                    <tr>
                        <td class="border px-4 py-2text-xs">{{ $profe->titulo }}</td>
                        <td class="border px-4 py-2 text-xs">{{ $profe->nombre_completo }}</td>
                        <td class="border px-4 py-2 text-xs">{{ $profe->frase }}</td>
                        <td class="border">
                            <div class="w-40 flex">
                                <img src="{{ asset($profe->imagen1) }}" alt="imagen1" class="w-full object-cover">
                            </div>
                        </td>
                        <td class="border">
                            <div class="w-40 flex">
                                <img src="{{ asset($profe->imagen2) }}" alt="imagen2" class="w-full object-cover">
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-xs">
                            <div class="text-xs bg-amber-400/50 p-2 text-gray-200 rounded-xl">
                                {{ $profe->correo }}
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-xs">{{ implode(',', $profe->semestres) }}</td>
                        @php
                            $dificultades = [
                                1 => 'Baja',
                                2 => 'Media',
                                3 => 'Alta',
                                4 => 'Extrema',
                            ];
                        @endphp
                        <td class="border px-4 py-2 text-xs">
                            {{ $dificultades[$profe->dificultad] ?? 'Desconocido' }}
                        </td>
                        <td class="border px-4 py-2 text-xs">
                            <ul class="list-disc pl-5">
                                <li>Reprobación: {{ $profe->reprobacion }}%</li>
                                <li>Paciencia: {{ $profe->paciencia }}%</li>
                                <li>Carácter: {{ $profe->caracter }}%</li>
                            </ul>
                        </td>

                        <td class="border px-4 py-2 text-xs">
                            <div class="flex justify-center items-center gap-2 flex-wrap w-44">
                                @foreach ($profe->horarios as $horario)
                                    <div class="text-gray-200 shrink-0 mb-2 rounded-xl p-2 text-xs bg-black/50">
                                        {{ $horario }}</div>
                                @endforeach
                            </div>
                        </td>

                        <td class="border px-4 py-2 text-xs">
                            <div class="flex justify-center items-center gap-2 flex-wrap w-44">
                                @foreach ($profe->skills as $skill)
                                    <div class="text-gray-200 break-words mb-2 rounded-xl p-2 text-xs bg-rose-700/50">
                                        {{ $skill }}</div>
                                @endforeach
                            </div>
                        </td>
                        
                        <td class="border px-4 py-2 text-xs">
                            <div class="flex justify-center items-center gap-2 flex-wrap w-44">
                                @foreach ($profe->clases as $clase)
                                    <div class="text-gray-200 break-words mb-2 rounded-xl p-2 text-xs bg-emerald-700/50">
                                        {{ $clase }}</div>
                                @endforeach
                            </div>
                        </td>
                        <td class="border px-4 py-2 text-xs">
                            <button type="button" wire:click="edit({{ $profe->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button type="button" wire:click="confirmDelete({{ $profe->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
