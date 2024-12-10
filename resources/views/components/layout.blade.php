@props(['crud' => null, 'title' => 'Products CRUD', 'showSidebar' => true])
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<div id="app">
    <div class="container-fluid h-100">
        <div class="row flex-nowrap">

            <x-sidebar></x-sidebar>
            <div class="col p-0">
                <x-topbar :crud="$crud">
                    {{$heading}}
                </x-topbar>
                {{$slot}}
            </div>
        </div>
    </div>

</div>
</body>
</html>
