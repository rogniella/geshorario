@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 mb-4">

				<h3 class="fw-bold titulo">Lista de usuarios</h3>
				
			</div>

			<div class="col-2 mb-4">

				<div class="panel-bottom mt-2">
					<a href="{{ route('users.create')}}" class="pull-right btn btn-success fw-bold"> <i class="bi bi-person-fill-add m-1"></i> Nuevo Usuario</a>
				</div>

			</div>


			<div class="col-12 mb-4">
<!-- 
				<table class="table table-hover shadow-lg p-2 bg-body-tertiary rounded">
					<tbody>
						<tr>
							<td>Minimum date:</td>
							<td><input type="text" id="min" name="min"></td>
						</tr>
						<tr>
							<td>Maximum date:</td>
							<td><input type="text" id="max" name="max"></td>
						</tr>
					</tbody>
				</table>				
-->
				<table class="table table-hover shadow-lg p-2 bg-body-tertiary border border-black rounded" id="example" >

					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Usuario</th>
							<th scope="col">Apellido y Nombre</th>
							<th scope="col">Email</th>
							<th scope="col">Tipo</th>
							<th scope="col">Estado</th>
							<th scope="col">Accion</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td scope="row">{{ $user->id}}</td>
							<td>{{ $user->name}}</td>
							<td>{{ $user->apellidonombre}}</td>
							<td>{{ $user->email}}</td>
							<td>
								@if($user->perfil_id == 'ADM')
									<span class="label label-danger">{{ $user->perfil_nombre }}</span>
								@else
									<span class="label label-primary">{{ $user->perfil_nombre }}</span>
								@endif
							</td>					
							<td>{{ $user->estado_nombre}}</td>
							<td>
								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"> <i class="bi bi-pencil"></i> </a> 
								<a href="{{ route('user.destroy', $user->id) }}" onclick="return confirm('Seguro de Eliminar Usuario')" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
							</td>
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
    let date = new Date(data[4]);
 
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
    format: 'MMMM Do YYYY'
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



<!-- 
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
 -->
@endsection()