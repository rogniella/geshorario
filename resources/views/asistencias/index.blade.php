@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 mb-4">
				<h3 class="fw-bold titulo">Asistencias</h3>
			</div>

			<div class="col-3 mb-3">
				<table class="table table-hover p-2 bg-body-tertiary border border-black rounded table-isfd">
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
			</div>

			<div class="col-12 mb-4">
				<table class="table table-hover p-2 bg-body-tertiary border border-black rounded table-isfd" id="example" >

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
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
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
<!-- <script url="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.4/locale/es.js"></script> --> <!-- SCRIPT PARA PASAR DATETIME A ESPAÑOL --> 


@endsection()