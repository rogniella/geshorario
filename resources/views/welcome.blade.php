<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="m-1 d-inline">
                <a href="https://ifdgomez-crr.infd.edu.ar/sitio/" class="m-2">
                    <img src="{{ asset('img/isfdlogo.png') }}"class="rounded" width="50" alt="">
                </a>
            <div class="m-1 d-inline">
            </div>
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
        </nav>

        <div class="row justify-content-center m-5">
            
        <div class="m-5 col-lg-6 container-isfd">
                            
                <a href="{{ route('login') }}" class="m-5 bg-link-isfd">
                    <div class="bg-isfd">
                        <div class="bg-person">
                            <i class="bi bi-person"></i>
                        </div>

                        <h2 class="subtitulo">Iniciar sesión</h2>
                        
                        <p class="">
                            Inicie sesión para tener acceso a la gestión de horarios del ISFD.
                        </p>
                    </div>
                </a>

                <a href="{{ route('profesores.registro') }}" class="m-5 bg-link-isfd">
                    <div class="bg-isfd">
                        <div class="bg-person">
                            <i class="bi bi-person-add"></i>
                        </div>

                        <h2 class="subtitulo">Registro</h2>
                        
                        <p class="">
                            Para registrar la llegada de un profesor/a, entre aquí. Ademas tambien podra ver sus asistencias.
                        </p>
                    </div>
                </a>

            </div>
        </div>
    </body>
</html>
