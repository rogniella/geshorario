@extends('layouts.app')

@section('content')
    
    <!-- Panel de la tabla -->
    <div class="panel panel-info">         
      <div class="panel-heading">
            <h3 class="panel-title">Lista de usuarios</h3>
      </div>
      <div class="panel-body">
		<a href="{{ route('users.create')}}" class="pull-right btn btn-success"><i class="glyphicon glyphicon-plus"></i> Nuevo Usuario</a>
		<table id="mitabla" class="table table-striped">
		  <thead>
			<th>Id</th>
			<th>Usuario</th>
			<th>Apellido y Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Estado</th>
			<th>Accion</th>
		  </thead>
		  <tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id}}</td>
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
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench " aria-hidden="true"></span></a> 
						<a href="{{ route('user.destroy', $user->id) }}" onclick="return confirm('Seguro de Eliminar Usuario')" class="btn btn-danger"> <span class="glyphicon glyphicon-remove-circle " aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		  </tbody>
		</table>
       </div> <!-- Fin Panel Body -->
    </div> <!-- Fin Panel Info -->

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
		 dom: '<"toolbar">frtip',
	});

	$('div.toolbar').html('<b>Personalizar Text/images etc.</b>');

});

</script>

@endsection()