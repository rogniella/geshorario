@extends('layouts.app')

@section('content')
<div>Registro de Entrada/Salida</div>


<div>Entrada Registrada:</div>

<div> DNI:  {{ $datos->dni }}</div>
<div> Apellido y Nombre:  {{ $datos->apellido }}</div>
<div> Ultimo Ingreso:  {{ $datos->ultimo_ingreso }}</div>



<button type="submit" class="btn btn-primary">
        Acetar
</button>

@endsection