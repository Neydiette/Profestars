<div class="w-full md:p-10 p-2">
    <div class="rounded-xl overflow-auto shadow-lg">
        <table class="min-w-full text-center divide-y divide-gray-200">
            <thead class="bg-black h-16">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        Número
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        Título
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        Semestre
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        Maestro
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        M
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        F
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">
                        E
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-center text-xs font-medium text-white uppercase tracking-wider">

                    </th>
                </tr>
            </thead>
            <tbody class="bg-black/50  text-white">
                @if ($estrategias->count() == 0)
                    <tr>
                        <td class="text-center p-5" colspan="8">No tienes ninguna estrategia</td>
                    </tr>
                @else
                    @foreach ($estrategias as $estrategia)
                        <tr class="border-t-4 border-b-4 border-black">
                            <td class="px-4 py-2 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $estrategia->titulo }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $estrategia->semestre }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $estrategia->profesor->nombre_completo }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">M</td>
                            <td class="px-4 py-2 whitespace-nowrap">F</td>
                            <td class="px-4 py-2 whitespace-nowrap">E</td>
                            <td class="px-4 py-2 whitespace-nowrap flex gap-3 justify-center items-center">
                                <div class="cursor-pointer" wire:click="verEstrategia({{ $estrategia->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 hover:fill-sky-600">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path fill-rule="evenodd"
                                            d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <a href="{{ route('editarEstrategia', ['id' => $estrategia->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 hover:fill-emerald-600">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path
                                            d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                </a>
                                <div class="cursor-pointer" wire:click="openConfirmDelete({{ $estrategia->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 hover:fill-rose-600">
                                        <path fill-rule="evenodd"
                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    @if ($modalEstrategia)
        <div class="fixed z-50 h-full w-full inset-0 bg-black/40 flex justify-center items-center p-1">
            <div class="flex flex-col justify-center items-center h-full">
                <div class="bg-white/80 p-5 rounded-xl border-4 border-black flex flex-col items-center justify-center">
                    <p class="text-yellow-600 text-2xl mb-4">Consejo #{{ $miestrategia->id }}</p>
                    <div class="flex justify-between w-full">
                        <p
                            class="mb-2 block font-sans text-2xl font-bold leading-relaxed text-black antialiased p-1">
                            {{ $miestrategia->semestre }}
                        </p>
                        <p
                            class="mb-2 block font-sans text-2xl font-bold leading-relaxed text-black antialiased p-1">
                            {{ $miestrategia->profesor->nombre_completo }}
                        </p>
                    </div>
                    <div class="flex items-center w-full justify-center">
                        <div
                            class="relative flex flex-col w-full max-w-[48rem] md:flex-row rounded-xl bg-gray-800 border shadow-md">
                            <div class="p-6">
                                @php
                                    $etiquetas = json_decode($miestrategia->etiquetas);
                                @endphp
                                @if ($etiquetas)
                                    <div class="flex flex-wrap items-center">
                                        @foreach ($etiquetas as $etiqueta)
                                            <span
                                                class="mr-2 mb-2 px-2 py-1 text-sm font-medium text-rose-500 bg-rose-500/20 rounded">{{ $etiqueta }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                <p
                                    class="mb-2 block font-sans text-base font-semibold leading-relaxed text-gray-200 antialiased p-1">
                                    Materia: <span class="text-emerald-500">{{ $miestrategia->materia->nombre }}</span>
                                </p>
                                <h4
                                    class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-500 antialiased">
                                    {{ $miestrategia->titulo }}
                                </h4>
                                <p
                                    class="mb-2 block font-sans text-base font-normal leading-relaxed text-gray-200 antialiased">
                                    {{ $miestrategia->estrategia }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full justify-end gap-5 items-center p-5">
                        <x-ss-button wire:click="cerrarEstrategia()" type="button"
                            class="sm:text-lg text-sm py-1.5">Cancelar</x-ss-button>
                        <a href="{{ route('editarEstrategia', ['id' => $miestrategia->id]) }}">
                            <button type="button"
                            class="sm:text-lg text-sm text-white rounded-xl border-2 border-black py-2 px-2  bg-red-600 hover:bg-red-700">Editar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($modalDelete)
        <div class="fixed z-50 h-full w-full inset-0 bg-black/40 flex justify-center items-center p-1">
            <div class="flex flex-col justify-center items-center h-full">
                <div class="bg-white/80 p-5 rounded-xl border-4 border-black flex flex-col items-center justify-center">
                    <p class="text-yellow-600 text-2xl mb-4">¿Estás seguro que quieres borrar este consejo?</p>
                    <div class="flex gap-4">
                        <x-ss-button wire:click="closeConfirmDelete()" type="button"
                            class="w-full sm:text-lg text-sm py-1.5">Cancelar</x-ss-button>
                        <button wire:click="delete()" type="button"
                            class="w-full sm:text-lg text-sm text-white rounded-xl border-2 border-black py-2 px-2  bg-red-600 hover:bg-red-700">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($estrategiaEliminada)
        <div class="fixed z-50 h-full w-full inset-0 bg-black/40 flex justify-center items-center p-1">
            <div class="flex flex-col justify-center items-center h-full">
                <div class="bg-white/80 p-5 rounded-xl border-4 border-black flex flex-col items-center justify-center">
                    <p class="text-yellow-600 text-2xl mb-4 text-center">Estrategia reportada</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-28 h-28">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                    </svg>
                </div>
            </div>
        </div>
    @endif

    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('show-noti', (event) => {
                setTimeout(() => {
                    @this.dispatch('resetNoti');
                }, 800);
            })
        });
    </script>
</div>
