<x-guest-layout>
    <div class="flex w-full justify-center items-center min-h-screen ">
        <div class="xl:w-2/6 px-3">
            <div class="w-full flex items-center justify-center p-5"><img class="h-44 w-44" src="/img/image-placeholder.svg" alt="logo"></div>
            <div class="py-5 pb-12 xl:px-20 px-6 min-h-48 gap-10 bg-sky-900 flex flex-col items-center rounded-xl border-4 border-black">
                <h1 class="text-2xl text-yellow-500">Iniciar sesión</h1>
                <div class="flex md:flex-row gap-4 justify-center items-center flex-col">
                    <a href="{{ route('login') }}"><x-ss-button>Iniciar sesión</x-ss-button></a>
                <a href="{{ route('register') }}"><x-ss-button>Registrarse</x-ss-button></a>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>