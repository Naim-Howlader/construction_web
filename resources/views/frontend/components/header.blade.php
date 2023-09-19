<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    {{-- csrf token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    {{-- ion icons  --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- google icons  --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    {{-- font aweseome 5 cdn  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- mobile menu css  --}}
    <link rel="stylesheet" href="{{ asset('css/grt-responsive-menu.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-72351641.css') }}">
    <script src="{{ asset('build/assets/app-e7c8c463.js') }}"></script>
    {{-- cusom css  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="font-body dark:bg-slate-800">
