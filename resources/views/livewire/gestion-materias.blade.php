<div class="w-full p-5">
    @if ($isOpen)
        <div class="fixed z-50 inset-0 flex justify-center items-center bg-black/50 w-full h-full">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-8 pt-6 pb-8 mb-4">
                <form wire:submit.prevent="store">
                    <input type="hidden" wire:model="selectedMateria">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" wire:model="nombre" id="nombre">
                        @error('nombre')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">Guardar</button>
                        <button
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2 focus:outline-none focus:shadow-outline"
                            type="button" wire:click="closeModal()">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
    @if ($openDeleteModal)
        <div class="fixed inset-0 flex justify-center items-center bg-black/50 ">
            <div class="bg-gray-200 border border-gray-300 rounded-lg px-8 pt-6 pb-8 mb-4">
                <p class="text-gray-700 text-lg font-bold mb-4">¿Estás seguro de eliminar la materia?</p>
                <div class="flex justify-end">
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        wire:click="delete()">Aceptar</button>
                    <button
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2 focus:outline-none focus:shadow-outline"
                        wire:click="closeModal()">Cancelar</button>
                </div>
            </div>
        </div>
    @endif
    <div class="flex justify-end mb-4">
        <button type="button" wire:click="create"
            class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Nuevo
            Materia</button>
    </div>
    <div class="overflow-x-scroll">
        <table class="table-auto w-full text-xs">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">ID</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Nombre</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($materias as $materia)
                    <tr>
                        <td class="border px-4 py-2">{{ $materia->id }}</td>
                        <td class="border px-4 py-2">{{ $materia->nombre }}</td>
                        <td class="border px-4 py-2">
                            <div class="flex gap-2 justify-center items-center">
                                <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                                wire:click="edit({{ $materia->id }})">Editar</button>
                            <button
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ml-2 focus:outline-none focus:shadow-outline"
                                wire:click="confirmDelete({{ $materia->id }})">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
