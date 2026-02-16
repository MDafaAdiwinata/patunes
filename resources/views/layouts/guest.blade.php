<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-jakarta text-[#2a2a2a]">
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100 px-6">
        <div>
            <a href="/">
                <img src="/images/logo.webp" class="w-16" alt="Logo Patunes">
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-5 md:px-6 py-6 bg-[#fff] overflow-hidden rounded-xl md:rounded-2xl border border-black/10 shadow-sm">
            {{ $slot }}
        </div>
    </div>

    {{-- Footer --}}
    <x-footer-landing />
</body>

</html>
