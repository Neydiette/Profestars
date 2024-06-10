<x-guest-layout>
    <div class="flex w-full justify-center items-center min-h-screen ">
        <div class="xl:w-2/6 px-3">
            <div class="w-full h-10 flex justify-center mt-10 items-center mb-5 text-center ">
        @if ($errors->any() || session()->has('error') || session()->has('success'))
            <div class="text-sm bg-white rounded-xl p-2">
                @if ($errors->any())
                    <span class="text-red-600">{{ $errors->first() }}</span>
                @elseif (session()->has('error'))
                    <span class="text-red-600">{{ session('error') }}</span>
                @elseif (session()->has('success'))
                    <span class="text-green-600">{{ session('success') }}</span>
                @endif
            </div>
        @endif
    </div>
            <div
                class="py-5 pb-10 xl:px-20 px-8 min-h-48 gap-5 bg-sky-900 flex flex-col items-center rounded-xl border-4 border-black">
                <h1 class="text-2xl text-yellow-500">Reestablecer contraseña</h1>
                <p class="text-sm text-white">Ingresa tu correo y te enviaremos un link para poder elegir una nueva contraseña</p>
                <form class="w-full" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="w-full">
                        <x-ss-input label="Correo:" id="email" class="block mt-1 w-full" type="email"
                            name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="flex flex-col items-center justify-end">
                        <x-ss-button class="mb-4" type="submit">Reestablecer</x-ss-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
