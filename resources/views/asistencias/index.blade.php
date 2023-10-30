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
		responsive:true,
		dom: 'B<"clear"f> ltp',
		buttons:['pdf','print','copy'],
		language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    	},
	});

	$('div.toolbar').html('');

});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
@endsection()