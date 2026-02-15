<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patunes</title>

    {{-- Website Logo --}}
    <link rel="icon" type="image/png" href="/images/logo-light.webp" />

    <!--  Jakarta Sans Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    {{-- Fugaz One Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">

    {{-- Styles --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="font-jakarta bg-[#F6F6F8]">

    @yield('content')

</body>

</html>
