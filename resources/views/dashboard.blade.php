<x-app-layout>
    @auth
        @if (auth()->user()->hasRole('admin'))
            <x-slot name="title">
                Admin dashboard
            </x-slot>
            @livewire('dashboard-admin')
        @else
            <x-slot name="title">
                Dashboard
            </x-slot>
            <div class="flex flex-col justify-center items-center md:p-14 p-3 gap-5">
                <div class="bg-gray-800 w-full flex flex-col gap-3 p-3 justify-center items-center text-white rounded-xl">
                    <div class="text-2xl text-center">Tablon de anuncios</div>
                    <div class="flex flex-wrap w-full">
                        @php
                            $anuncios = \App\Models\anuncio::take(4)->get();
                        @endphp
                        @foreach ($anuncios as $anuncio)
                            <div class="md:w-1/2 w-full p-2">
                                <div
                                    class="border-4 border-black rounded-xl px-2 py-2 flex items-center flex-col space-x-4 gap-2">
                                    <div class="w-full flex justify-between">
                                        <div class="flex items-center justify-center gap-2">
                                            @if ($anuncio->prioridad === 'Util')
                                                <div class="md:w-6 md:h-6 w-4 h-4 bg-blue-500 rounded-full"></div>
                                            @elseif ($anuncio->prioridad === 'Importante')
                                                <div class="md:w-6 md:h-6 w-4 h-4 bg-green-500 rounded-full"></div>
                                            @elseif ($anuncio->prioridad === 'Urgente')
                                                <div class="md:w-6 md:h-6 w-4 h-4 bg-red-500 rounded-full"></div>
                                            @else
                                                <div class="md:w-6 md:h-6 w-4 h-4 bg-gray-500 rounded-full"></div>
                                            @endif
                                            <h1 class="md:text-3xl text-base">{{ $anuncio->prioridad }}</h1>
                                        </div>
                                        <h2 class="md:text-xl text-xs">{{ $anuncio->created_at->format('Y/m/d') }}</h2>
                                    </div>
                                    <div class="flex w-full h-36 gap-2">
                                        <div class="w-2/3 flex flex-col items-start justify-between">
                                            <div
                                                class="overflow-hidden md:text-sm text-xs md:line-clamp-4 line-clamp-4 mb-2">
                                                {{ $anuncio->anuncio }}
                                            </div>
                                            <div class="w-full flex justify-center items-center">
                                                <a href="{{ route('anuncio-mostrar', ['id' => $anuncio->id]) }}">
                                                    <x-ss-button class="md:text-lg text-sm text-center">ver
                                                        más</x-ss-button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="w-1/3 flex flex-col justify-end">
                                            @if ($anuncio->imagen_path)
                                                <img src="{{ asset('storage/' . $anuncio->imagen_path) }}"
                                                    alt="Imagen de anuncio" class="h-2/3 object-contain" />
                                            @else
                                                <img src="img/image-placeholder.svg" alt="Imagen de anuncio"
                                                    class="h-2/3 object-contain" />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('crear') }}"><x-ss-button class="text-lg">Crear</x-ss-button></a>
                </div>
                <div class="w-full flex flex-col gap-3 justify-center items-center text-white">
                    <div class="text-lg w-full">¿Que quieres ver?. Échale un vistazo a lo más nuevo.</div>
                    <div class="w-full flex md:flex-row flex-col gap-2 justify-center items-center">
                        <div id="slider" class="relative w-full">
                            <div class="cardContainer flex flex-col sm:flex-row w-full gap-3">
                                <div class="slideCard w-full sm:w-1/3">
                                    <a href="{{ route('educards') }}"
                                        class="w-full overflow-hidden h-80 bg-gray-800 rounded-xl flex flex-col text-center items-center gap-2 p-5 cursor-pointer transition-transform duration-300 transform lg:hover:rotate-2">
                                        <div class="h-1/3">
                                            <h1 class="md:text-2xl text-lg">Educards</h1>
                                            <p class="line-clamp-3">
                                                Explora nuestro amplio catálogo de maestros representados en estas cartas
                                                únicas.
                                            </p>
                                        </div>
                                        <img src="img/educards.png" alt="Imagen de anuncio" class="h-2/3 object-contain" />
                                    </a>
                                </div>
                                <div class="slideCard w-full sm:w-1/3">
                                    <a href="{{ route('estrategias') }}"
                                        class="w-full overflow-hidden h-80 bg-gray-800 rounded-xl flex flex-col text-center items-center gap-2 p-5 cursor-pointer transition-transform duration-300 transform lg:hover:rotate-2">
                                        <div class="h-1/3">
                                            <h1 class="md:text-2xl text-lg">Mis estrategias</h1>
                                            <p class="line-clamp-3">
                                                Consulta tus estrategias. </p>
                                        </div>
                                        <img src="img/estrategias.png" alt="Imagen de anuncio"
                                            class="h-2/3 object-contain" />
                                    </a>
                                </div>
                                <div class="slideCard w-full sm:w-1/3">
                                    <a href="{{ route('emotes') }}"
                                        class="w-full overflow-hidden h-80 bg-gray-800 rounded-xl flex flex-col text-center items-center gap-2 p-5 cursor-pointer transition-transform duration-300 transform lg:hover:rotate-2">
                                        <div class="h-1/3">
                                            <h1 class="md:text-2xl text-lg">Emotes</h1>
                                            <p class="line-clamp-3">
                                                Dale un emote a tu profesor
                                            </p>
                                        </div>
                                        <img src="img/emotes.png" alt="Imagen de anuncio" class="h-2/3 object-contain" />
                                    </a>
                                </div>
                                <div class="slideCard w-full sm:w-1/3">
                                    <a href="{{ route('favoritos') }}"
                                        class="w-full overflow-hidden h-80 bg-gray-800 rounded-xl flex flex-col text-center items-center gap-2 p-5 cursor-pointer transition-transform duration-300 transform lg:hover:rotate-2">
                                        <div class="h-1/3">
                                            <h1 class="md:text-2xl text-lg">Favoritos</h1>
                                            <p class="line-clamp-3">
                                                Consulta tus profesores favoritos
                                            </p>
                                        </div>
                                        <img src="img/favoritos.png" alt="Imagen de anuncio" class="h-2/3 object-contain" />
                                    </a>
                                </div>
                                <div class="slideCard w-full sm:w-1/3 hidden">
                                    <a href="{{ route('cofre') }}"
                                        class="w-full overflow-hidden h-80 bg-gray-800 rounded-xl flex flex-col text-center items-center gap-2 p-5 cursor-pointer transition-transform duration-300 transform lg:hover:rotate-2">
                                        <div class="h-1/3">
                                            <h1 class="md:text-2xl text-lg">Comunidad</h1>
                                            <p class="line-clamp-3">
                                                Revisa lo nuevo que hay en la comunidad.
                                            </p>
                                        </div>
                                        <img src="img/comunidad.png" alt="Imagen de anuncio" class="h-2/3 object-contain" />
                                    </a>
                                </div>
                            </div>
                            <button id="prevBtn"
                                class="absolute hidden sm:block enabled:hover:bg-slate-500 disabled:cursor-not-allowed enabled:active:bg-slate-400 rounded-full border-4 border-black p-1 top-1/2 -mt-5 -left-14 z-10 text-black focus:outline-none">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7">
                                    </path>
                                </svg>
                            </button>
                            <button id="nextBtn"
                                class="absolute hidden sm:block enabled:hover:bg-slate-500 disabled:cursor-not-allowed enabled:active:bg-slate-400 rounded-full border-4 border-black p-1 top-1/2 -mt-5 -right-14 z-10 text-black focus:outline-none">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <script>
                            const prevBtn = document.getElementById('prevBtn');
                            const nextBtn = document.getElementById('nextBtn');
                            const slider = document.getElementById('slider');
                            const cardsContainer = slider.querySelector('.cardContainer');
                            const cards = slider.querySelectorAll('.slideCard');
                            const totalCards = cards.length;
                            const visibleCards = 3;
                            let currentIndex = 0;

                            window.addEventListener('DOMContentLoaded', () => {
                                checkWindowSize();
                            });

                            window.addEventListener('resize', () => {
                                checkWindowSize();
                            });

                            function checkWindowSize() {
                                if (window.innerWidth < 640) {
                                    cards.forEach((card, index) => {
                                        if (index >= visibleCards) {
                                            card.classList.remove('hidden');
                                        }
                                    });
                                } else {
                                    cards.forEach((card, index) => {
                                        if (index >= visibleCards) {
                                            card.classList.add('hidden');
                                        }
                                    });
                                }
                            }
                            if (currentIndex === 0) {
                                prevBtn.disabled = true;
                            }
                            prevBtn.addEventListener('click', () => {
                                if (currentIndex > 0) {
                                    cards[currentIndex + visibleCards - 1].classList.add('hidden');
                                    currentIndex -= 1;
                                    cards[currentIndex].classList.remove('hidden');
                                    if (currentIndex === 0) {
                                        prevBtn.disabled = true;
                                    }
                                    if (nextBtn.disabled) {
                                        nextBtn.disabled = false;
                                    }
                                }
                            });
                            nextBtn.addEventListener('click', () => {
                                if (currentIndex < totalCards - visibleCards) {
                                    cards[currentIndex].classList.add('hidden');
                                    currentIndex += 1;
                                    cards[currentIndex + visibleCards - 1].classList.remove('hidden');
                                    if (currentIndex === totalCards - visibleCards) {
                                        nextBtn.disabled = true;
                                    }
                                    if (prevBtn.disabled) {
                                        prevBtn.disabled = false;
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div class="flex flex-col justify-center items-center md:p-14 p-3 gap-5">
            <div class="bg-gray-800 w-full flex flex-col gap-3 p-3 justify-center items-center text-white rounded-xl">
                <div class="text-2xl text-center">Tablon de anuncios</div>
                <div class="flex flex-wrap w-full">
                    @php
                        $anuncios = \App\Models\anuncio::take(4)->get();

                    @endphp
                    @foreach ($anuncios as $anuncio)
                        <div class="md:w-1/2 w-full p-2">
                            <div
                                class="border-4 border-black rounded-xl px-2 py-2 flex items-center flex-col space-x-4 gap-2">
                                <div class="w-full flex justify-between">
                                    <div class="flex items-center justify-center gap-2">
                                        @if ($anuncio->prioridad === 'Util')
                                            <div class="md:w-6 md:h-6 w-4 h-4 bg-blue-500 rounded-full"></div>
                                        @elseif ($anuncio->prioridad === 'Importante')
                                            <div class="md:w-6 md:h-6 w-4 h-4 bg-green-500 rounded-full"></div>
                                        @elseif ($anuncio->prioridad === 'Urgente')
                                            <div class="md:w-6 md:h-6 w-4 h-4 bg-red-500 rounded-full"></div>
                                        @else
                                            <div class="md:w-6 md:h-6 w-4 h-4 bg-gray-500 rounded-full"></div>
                                        @endif
                                        <h1 class="md:text-3xl text-base">{{ $anuncio->prioridad }}</h1>
                                    </div>
                                    <h2 class="md:text-xl text-xs">{{ $anuncio->created_at->format('Y/m/d') }}</h2>
                                </div>
                                <div class="flex w-full h-36 gap-2">
                                    <div class="w-2/3 flex flex-col items-start justify-between">
                                        <div class="overflow-hidden md:text-sm text-xs md:line-clamp-4 line-clamp-4 mb-2">
                                            {{ $anuncio->anuncio }}
                                        </div>
                                        <div class="w-full flex justify-center items-center">
                                            <x-ss-button class="md:text-lg text-sm text-center"
                                                onclick="mostrarOverlay()">ver más</x-ss-button>
                                        </div>
                                    </div>
                                    <div class="w-1/3 flex flex-col justify-end">
                                        @if ($anuncio->imagen_path)
                                            <img src="{{ asset('storage/' . $anuncio->imagen_path) }}"
                                                alt="Imagen de anuncio" class="h-2/3 object-contain" />
                                        @else
                                            <img src="img/image-placeholder.svg" alt="Imagen de anuncio"
                                                class="h-2/3 object-contain" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <x-ss-button onclick="mostrarOverlay()" class="text-lg">Crear</x-ss-button>
                <div id="overlay"
                    class="fixed inset-0 mt-16 bg-black/80 transition-opacity duration-500 justify-center items-center z-50 opacity-0 flex pointer-events-none">
                    <img id="flechaLogin"
                        class="absolute md:flex hidden right-72 top-0 w-20 h-auto transition-opacity duration-500 opacity-0"
                        src="/img/flecha.png" alt="flecha">
                    <img id="flechaRegister"
                        class="absolute md:flex hidden right-40 top-0 w-20 h-auto transition-opacity duration-500 opacity-0"
                        src="/img/flecha.png" alt="flecha">
                    <div class="relative">
                        <img id="imgProfe" src="/img/profe.png" alt="profe"
                            class="w-auto transition-opacity duration-500 opacity-0">
                        <div id="imgGlobo"
                            class="absolute md:-top-1/2 -top-full md:-left-1 left-0 bg-white rounded-full md:w-72 md:h-44 w-full flex  items-center justify-center transition-opacity duration-500 opacity-0">
                            <div class="text-center">
                                <p id="textLogin"
                                    class="text-xl text-yellow-500 font-bold p-5 opacity-0 transition-opacity duration-500">
                                    <span class="md:block hidden">Para poder ver contenido adicional ¡Inicia sesión!</span><span class="block md:hidden">haz clic en el menu hamburguesa para poder iniciar sesion</span>
                                </p>
                                <p id="textRegister"
                                    class="text-xl text-yellow-500 font-bold p-5 opacity-0 transition-opacity duration-500 hidden">
                                    <span class="md:block hidden">¡Si no tienes una cuenta, regístrate!</span><span class="block md:hidden">Tambien te puedes registrar.</span></p>
                            </div>
                            <div
                                class="absolute md:block hidden -bottom-5 right-0 w-0 h-0 border-l-[30px] border-l-transparent border-t-[50px] border-t-white border-r-[30px] border-r-transparent transform -rotate-45">
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function mostrarOverlay() {
                        const overlay = document.getElementById("overlay");
                        overlay.classList.remove("opacity-0");
                        overlay.classList.add("opacity-100");

                        setTimeout(() => {
                            document.getElementById("imgProfe").classList.remove("opacity-0");
                            setTimeout(() => {
                                document.getElementById("imgGlobo").classList.remove("opacity-0");
                                document.getElementById("textLogin").classList.remove("opacity-0");
                                setTimeout(() => {
                                    document.getElementById("flechaLogin").classList.remove("opacity-0");
                                    setTimeout(() => {
                                        document.getElementById("flechaLogin").classList.add(
                                            "opacity-0");

                                        setTimeout(() => {
                                            document.getElementById("textRegister").classList
                                                .remove("opacity-0");
                                            document.getElementById("textLogin").classList.add(
                                                "hidden");
                                            document.getElementById("textRegister").classList
                                                .remove("hidden");
                                            document.getElementById("flechaRegister").classList
                                                .remove("opacity-0");
                                            setTimeout(() => {
                                                overlay.classList.remove("opacity-100");
                                                overlay.classList.add("opacity-0");
                                                document.getElementById("imgGlobo")
                                                    .classList.add("opacity-0");
                                                document.getElementById("textRegister")
                                                    .classList.add("opacity-0");
                                                document.getElementById(
                                                    "flechaRegister").classList.add(
                                                    "opacity-0");
                                                setTimeout(() => {
                                                    document.getElementById(
                                                            "textLogin")
                                                        .classList.remove(
                                                            "hidden");
                                                    document.getElementById(
                                                            "textRegister")
                                                        .classList.add(
                                                            "hidden");
                                                }, 1500);
                                            }, 1500);
                                        }, 800);
                                    }, 800);
                                }, 800);
                            }, 800);
                        }, 800);
                    }
                </script>
            </div>
        </div>
    @endauth
</x-app-layout>
