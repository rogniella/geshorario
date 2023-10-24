<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo','Gestión Horarios')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">

    <!-- Estilo Local -->
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <div id="app">
        @include('layouts.partials.menu')
        <main class="p-5">
            @include('flash::message')
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    @yield('script')

</body>
</html>
