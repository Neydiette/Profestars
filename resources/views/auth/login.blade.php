<x-guest-layout>
    <div class="flex w-full justify-center items-center min-h-screen">
        <div class="xl:w-2/6 px-3">
            <div class="w-full h-10 flex justify-center items-center mb-2 text-center ">
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
                class="py-5 pb-10 xl:px-20 px-6 min-h-48 gap-5 bg-sky-900 flex flex-col items-center rounded-xl border-4 border-black">
                <h1 class="text-2xl text-yellow-500">Iniciar sesión</h1>
                <form class="w-full" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="w-full">
                        <x-ss-input label="Correo:" id="email" class="block mt-1 w-full " type="email"
                            name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-ss-input label="Contraseña:" id="password" class="block mt-1 w-full" type="password"
                            name="password" required autocomplete="current-password" />

                        <div class="block mt-4 mb-8">
                            <label for="remember_me" class="flex items-center">
                                <x-ss-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Recuérdame</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-end">
                        <x-ss-button class="mb-4" type="submit">Iniciar</x-ss-button>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                ¿Olvidó su contraseña?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
