@extends('layouts.app')

@section('content')

	<div class="container">

		<div class="panel-heading text-center">
			<h3 class="panel-title">Lista de usuarios</h3>
		</div>

		<div class="panel-bottom mb-2 mt-2">
			<a href="{{ route('users.create')}}" class="pull-right btn btn-success"> <i class="bi bi-person-fill-add m-1"></i> Nuevo Usuario</a>
		</div>

		<table class="table table-hover" id="mitabla">
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

@endsection()

@section('scrip')

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
		 dom: '<"toolbar">ftip',
		 language: {
         	url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
    },
	});

	$('div.toolbar').html('');

});

</script>

@endsection()