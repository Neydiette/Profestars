<div x-data="{ open: false, openOverlay: false }" class="w-full bg-red-950 flex justify-between h-16 sticky top-0 z-50">

    @auth
        <a href="{{ route('dashboard') }}" class="text-gray-300 text-lg px-3 flex items-center justify-center">
            <img src="/img/logo.png" alt="profestars" class="h-full">
        </a>
        <div class="hidden md:flex text-gray-300 pr-5">
            <a href="{{ route('dashboard') }}" class="hover:bg-red-900 px-3 flex items-center justify-center">Inicio</a>
            <a href="{{ route('crear-estrategia') }}"
                class="hover:bg-red-900 px-3 flex items-center justify-center">Postear</a>
            <div @click.away="open = false" class="relative ">
                <button @click="open = !open"
                    class="border px-2 flex gap-2 hover:bg-red-900 h-full items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                    <h4>{{ auth()->user()->name }}</h4>
                </button>
                <div x-show="open"
                    class="absolute  right-0 mt-2 w-48 text-black text-md bg-gray-300 border border-gray-200 shadow-lg flex flex-col items-center z-20">
                    <hr class="border-gray-400 w-5/6">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold focus:outline-none">
                        Cerrar sesión
                    </a>
                </div>

            </div>
            @if (auth()->user()->hasRole('user'))
                <div @click="openOverlay = !openOverlay"
                    class="py-1 cursor-pointer hover:bg-red-900 px-3 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                    </svg>
                </div>
            @endif
        </div>
        <div class="md:hidden ">
            <div @click.away="open = false" class="relative h-full flex gap-1">
                @if (auth()->user()->hasRole('user'))
                    <a href="{{ route('notificaciones') }}">
                        <button
                            class="flex h-full items-center hover:no-underline focus:outline-none focus:bg-red-900 text-gray-300 focus:text-black relative">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 fill-white">
                                <path fill-rule="evenodd"
                                    d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            @if ($countNoti)
                                <div
                                    class="absolute top-1 right-0  bg-emerald-500 rounded-full border border-black text-white h-3 w-3 text-xs flex justify-center items-center font-thin">
                                </div>
                            @endif
                        </button>
                    </a>
                @endif
                <button
                    class="flex h-full items-center hover:no-underline focus:outline-none focus:bg-red-900 text-gray-300 focus:text-black"
                    @click="open = !open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-full h-full">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div x-show="open"
                    class="absolute right-0 mt-2 w-48 text-black text-md bg-gray-300 border border-gray-200 shadow-lg flex flex-col items-center z-30">
                    @if (auth()->user()->hasRole('user'))
                        <a href="{{ route('dashboard') }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">Inicio</a>
                        <a href="{{ route('crear-estrategia') }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">Postear</a>
                    @elseif (auth()->user()->hasRole('admin'))
                        <a href="{{ route('admin', ['section' => 'usuarios']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Usuarios
                        </a>
                        <a href="{{ route('admin', ['section' => 'elementos']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Elementos
                        </a>
                        <a href="{{ route('admin', ['section' => 'anuncios']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Anuncios
                        </a>
                        <a href="{{ route('admin', ['section' => 'profesores']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Profesores
                        </a>
                        <a href="{{ route('admin', ['section' => 'materias']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Materias
                        </a>
                        <a href="{{ route('admin', ['section' => 'estrategias']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Estrategias
                        </a>
                        <a href="{{ route('admin', ['section' => 'reportes']) }}"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">
                            Reportes
                        </a>
                    @endif
                    <hr class="border-gray-400 w-5/6">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold focus:outline-none">
                            <button type="submit">Cerrar sesión</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>
    @else
        <a href="/" class="text-gray-300 text-lg px-3 flex items-center justify-center">
            <img src="/img/logo.png" alt="profestars" class="h-full">
        </a>
        <div class="hidden md:flex text-gray-300 mr-16">
            <a href="{{ route('login') }}" class="hover:bg-red-900 px-3 flex items-center justify-center">Inicio sesión</a>
            <a href="{{ route('register') }}" class="hover:bg-red-900 px-3 flex items-center justify-center">Registrate</a>
        </div>
        <div class="md:hidden ">
            <div @click.away="open = false" class="relative h-full flex gap-1">

                <a href="{{ route('notificaciones') }}">
                    <button
                        class="flex h-full items-center hover:no-underline focus:outline-none focus:bg-red-900 text-gray-300 focus:text-black relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 fill-white">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        @if ($countNoti)
                            <div
                                class="absolute top-1 right-0  bg-emerald-500 rounded-full border border-black text-white h-3 w-3 text-xs flex justify-center items-center font-thin">
                            </div>
                        @endif
                    </button>
                </a>
                <button
                    class="flex h-full items-center hover:no-underline focus:outline-none focus:bg-red-900 text-gray-300 focus:text-black"
                    @click="open = !open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div x-show="open"
                    class="absolute right-0 mt-2 w-48 text-black text-md bg-gray-300 border border-gray-200 shadow-lg flex flex-col items-center z-30">
                    <a href="{{ route('login') }}"
                        class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">Iniciar sesion</a>
                    <a href="{{ route('register') }}"
                        class="block w-full px-4 py-2 text-center hover:bg-gray-300 font-semibold">Registrarse</a>
                </div>
            </div>
        </div>
    @endauth
    <div x-show="openOverlay" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform translate-x-0"
        x-transition:leave-end="transform translate-x-full"
        class="fixed bg-black/50 w-72 right-0 rounded-xl border-4 border-black"
        style="height: calc(100vh - 4.50rem); top: 4.50rem">
        <div class="w-full h-full flex justify-center items-start px-2 py-8">
            <a href="{{ route('notificaciones') }}">
                <div class="px-16 py-4 font-semibold bg-slate-800 rounded-xl border-2 border-black relative">
                    <div class="text-white text-sm">BUZÓN</div>
                    @if ($countNoti)
                        <div
                            class="absolute -top-1/4 right-0 transform -translate-y-1/2 translate-x-1/2 animate-bounce  bg-emerald-500 rounded-full border border-black text-white h-8 w-8 text-xs flex justify-center items-center font-thin">
                            {{ $countNoti }}</div>
                    @endif
                    <div
                        class="absolute top-1/2 left-0 transform -translate-y-1/2  -translate-x-1/2 text-white w-12 h-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-full h-full fill-amber-500 stroke-black">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path
                                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>

                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
