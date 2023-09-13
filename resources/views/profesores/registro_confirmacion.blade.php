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
                                <li class="list-group-item">Ultimo Ingreso:  {{ $datos->ultimo_ingreso }}</li>
                                <li class="list-group-item">Ultima Salida:  {{ $datos->ultima_salida }}</li>
                            
                            </ul>
                            <br>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>


<!--<div>Entrada Registrada:</div>

<div> DNI:  {{ $datos->dni }}</div>
<div> Apellido y Nombre:  {{ $datos->apellido }}</div>
<div> Ultimo Ingreso:  {{ $datos->ultimo_ingreso }}</div>
-->




@endsection