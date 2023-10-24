@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="col-12 mb-4">
			<div class="text-center shadow-lg p-2 bg-body-tertiary rounded">
				<h3 class="fw-bold">Lista de asistencias</h3>
			</div>
		</div>

		<div class="col-12 mb-4">
			<table class="table table-hover shadow-lg p-2 bg-body-tertiary rounded"" id="mitabla">
				<thead>
					<tr>
						<th scope="col">Sede</th>
						<th scope="col">Apellido y Nombre</th>
						<th scope="col">Fecha</th>
					</tr>

				</thead>
				<tbody>
					@foreach($regs as $reg)
					<tr>
						<td scope="row">{{ $reg->nombresede}}</td>
						<td>{{ $reg->apellidonombre}}</td>
						<td>{{ $reg->created_at}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>

@endsection()

@section('script')

<script>

// Si definimos asi va para todas las tablas del proyecto
$.extend(true, $.fn.dataTable.defaults, {
	searching: false,
	ordering: true,
});

$(document).ready(function () {

   //Inicia con valores por defecto  $('#mitabla').DataTable();

   // Definimos para 1 tabla en particular
	$('#mitabla').DataTable({
		searching: true,
		dom: '<"col-md-1"f> tp',
		language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    	},
	});

	$('div.toolbar').html('');

});

</script>

@endsection()