@extends('layouts.app')

@section('content')
<div>
        <section class="container py-5">
        <h1 class="text-center mb-4">Registro de Entrada/Salida</h1>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h5 class="card-title">Entrada Registrada:</h5>
                            <ul class="list-group">

                                <li class="list-group-item">Apellido y Nombre:  {{ $datos->apellido }}</li>
                                <li class="list-group-item">DNI:  {{ $datos->dni }}</li>
                                <li class="list-group-item">Ultimo Ingreso:  {{ $datos->fyh }}</li>
                                <li class="list-group-item">Ultima Salida:  {{ $datos->fyh }}</li>
                            

                                <li class="list-group-item">DNI: {{ $datos->dni }}</li>
                                <li class="list-group-item">Apellido: {{ $datos->apellido }}</li>
                                <li class="list-group-item">Ultimo Ingreso:  {{ $datos->fyh }}</li>
                                <li class="list-group-item">Ultima Salida:  {{ $datos->fyh }}</li>

                            </ul>
                            <br>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

<script>
        setTimeout(function() {
            // Redirigir al usuario a la vista anterior
            window.history.back();
        }, 5000); // 5000 milisegundos = 5 segundos
</script>

@endsection