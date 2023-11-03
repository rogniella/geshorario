@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 mb-4">

					<h3 class="fw-bold titulo">Asistencias</h3>
				
			</div>

			<div class="col-12 mb-4">
				<table class="table table-hover shadow-lg p-2 bg-body-tertiary border border-black w-25">
					<tbody>
						<tr>
							<td>Fecha inicio:</td>
							<td><i class="bi bi-calendar m-2"></i><input type="text" id="min" name="min"></td>
						</tr>
						<tr>
							<td>Fecha final:</td>
							<td><i class="bi bi-calendar m-2"></i><input type="text" id="max" name="max"></td>
						</tr>
					</tbody>
				</table>
			
				<table class="table table-hover shadow-lg p-2 bg-body-tertiary border border-black rounded" id="example" >

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
	
	</div>

@endsection()

@section('script')

<script>
let minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
DataTable.ext.search.push(function (settings, data, dataIndex) {
    let min = minDate.val();
    let max = maxDate.val();
    let date = new Date(data[2]);
 
    if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
    ) {
        return true;
    }
    return false;
});
 
// Create date inputs
minDate = new DateTime('#min', {
    format: 'MMMMM Do YYYY'
});
maxDate = new DateTime('#max', {
    format: 'MMMM Do YYYY'
});
 
// DataTables initialisation
let table = new DataTable('#example', {
	language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    },
});
 
// Refilter the table
document.querySelectorAll('#min, #max').forEach((el) => {
    el.addEventListener('change', () => table.draw());
});
</script>


<script url="https://code.jquery.com/jquery-3.7.0.js"></script>
<script url="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script url="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script url="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>


<!-- <script>
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
		dom: '<"col-md-1"f> tBp',
		buttons:['pdf','print',],
		language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    	},
	});

	$('div.toolbar').html('');

});


<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
</script> -->
@endsection()