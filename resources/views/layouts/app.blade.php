<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ProfeStars') }}</title>

    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moul&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    @livewireStyles

    <style>
        body {
            font-family: 'Moul', sans-serif;
        }

        .preload {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
    </style>
</head>

<body class="bg-sky-600 preload">
    <div class="min-h-screen w-full">
        @livewire('navbar')
        <div class="w-full bg-rose-700 h-9 sticky top-16 z-10 xl:text-xl text-base text-gray-300 py-1 px-6 flex items-center justify-center">
            @isset($title)
                {{ $title }}
            @endisset
        </div>
        <main class="">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.remove("preload");
        });
    </script>
</body>

</html>
