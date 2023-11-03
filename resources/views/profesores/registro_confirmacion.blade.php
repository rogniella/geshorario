@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 shadow-lg p-2 bg-body-tertiary rounded border border-4 mb-4">
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('img/isfdlogo.png') }}"class="rounded mb-2" width="150" alt="">
                    <h5 class="fw-bold mb-3">Registro de entrada y salida</h5>
                </div>

                <li class="list-group-item">DNI: {{ $datos->dni }}</li>
                <li class="list-group-item">Nombre y apellido: {{ $datos->apellido }}</li>
          
            </div>
        </div>
    </div>
</div>

<script>
        setTimeout(function() {
            // Redirigir al usuario a la vista anterior
            window.history.back();
        }, 3000);   // 3000 milisegundos = 3 segundos
</script>

@endsection