<x-app-layout>
    <x-slot name="title">
        <div class="w-full overflow-hidden hidden sm:flex justify-center items-center">
            <a href="{{ route('admin', ['section' => 'usuarios']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Usuarios
            </a>
            <a href="{{ route('admin', ['section' => 'elementos']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Elementos
            </a>
            <a href="{{ route('admin', ['section' => 'anuncios']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Anuncios
            </a>
            <a href="{{ route('admin', ['section' => 'profesores']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Profesores
            </a>
            <a href="{{ route('admin', ['section' => 'materias']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Materias
            </a>
            <a href="{{ route('admin', ['section' => 'estrategias']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Estrategias
            </a>
            <a href="{{ route('admin', ['section' => 'reportes']) }}"
                class="p-1 text-base hover:bg-rose-800 active:bg-rose-900 border-b mx-2">
                Reportes
            </a>
        </div>
    </x-slot>
    @if ($section == 'usuarios')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de usuarios</div>
        @livewire('gestion-users')
    @elseif ($section == 'elementos')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de elementos</div>
        @livewire('gestion-elementos')
    @elseif ($section == 'anuncios')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de anuncios</div>
        @livewire('gestion-anuncios')
    @elseif ($section == 'profesores')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de profesores</div>
        @livewire('gestion-profesores')
    @elseif ($section == 'materias')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de materias</div>
        @livewire('gestion-materias')
    @elseif ($section == 'estrategias')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de estrategias</div>
        @livewire('gestion-estrategias')
    @elseif ($section == 'reportes')
        <div class="w-full p-3 text-white text-center text-2xl">Gestion de reportes</div>
        @livewire('gestion-reportes')
    @else
        <div class="text-4xl w-full text-center font-semibold">No se encontro la seccion</div>
    @endif
</x-app-layout>
