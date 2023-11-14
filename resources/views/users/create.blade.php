@extends('layouts.app')
@section('titulo', 'Nuevo Usuario')
@section('content')

<div class="container">

	<div class="row">

		<div class="col-12 mb-4">

			<h3 class="fw-bold titulo">Nuevo usuario</h3>

		</div>

		<div class="p-2 bg-body-tertiary rounded col-12 mb-4 fw-bold table-isfd">

			<form method="POST" action="{{ route('users.store') }}" class="">
				@csrf

				<div class="mb-4">
					<label class="form-label">Usuario</label>
					<input id="name" type="text" name="name" class="form-control" placeholder = "Usuario123" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Contraseña</label>
					<input id="password" type="password" name="password" class="form-control" placeholder = "*********" required>
				</div>
				
				<div class="mb-4">
					<label class="form-label">Apellido y Nombre</label>
					<input id="apellidonombre" type="text" name="apellidonombre" class="form-control" placeholder = "Apellido y nombre" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Email</label>
					<input id="email" type="email" name="email" class="form-control" placeholder="ejemplo@email.abc" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Perfil</label>
					{!! Form::select('perfil_id', $perfiles, null, ['class' => 'form-select', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
				</div>

				<div class="mb-1">
					<button type="button" class="btn btn-danger bordered border-black border-1" data-dismiss="modal" onClick=" window.history.back()">Cancelar</button>
					<button type="submit" class="btn btn-success bordered border-black border-1">Aceptar</button>
				</div>
				
			</form>   

		</div>

	</div>

</div>

@endsection