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
                                <li class="list-group-item">Apellido y nombre: {{ $datos->apellido }}</li>
                                <li class="list-group-item">DNI: {{ $datos->dni }}</li>
                                <li class="list-group-item">Fecha: {{ $datos->fecha_entrada }}</li>
                                <li class="list-group-item">Hora: {{ $datos->hora_entrada }}</li>
                            </ul>
                            <br>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>




@endsection