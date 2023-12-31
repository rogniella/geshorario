@extends('layouts.app')

@section('titulo', 'Editar Usuario '. $user->name)

@section('content')

<div class="container">

	<div class="row">

		<div class="col-12 mb-4">

			<h3 class="fw-bold titulo">Editar usuario</h3>

		</div>

		<div class="col-12 mb-4">

			<div class="p-2 bg-body-tertiary rounded fw-bold table-isfd">

				{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

				<div class="mb-4">
					<label class="form-label">Usuario</label>
					<input id="name" type="text" name="name" class="form-control" value="{{$user->name}}" placeholder = "Nombre Completo" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Apellido y Nombre</label>
					<input id="apellidonombre" type="text" name="apellidonombre" class="form-control" value="{{$user->apellidonombre}}" placeholder = "Apellido y Nombre" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Contraseña</label>
					<input id="password" type="text" name="password" class="form-control" value="{{$user->password}}" placeholder = "Contraseña" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Email</label>
					<input id="email" type="email" name="email" class="form-control" value="{{$user->email}}" placeholder = "Email" required>
				</div>

				<div class="mb-4">
					<label class="form-label">Perfil</label>
					{!! Form::select('perfil_id', $perfiles, $user->perfil_id, ['class' => 'form-control', 'required']) !!}
				</div>

				<div class="mb-4">
					<label class="form-label">Estado</label>
					{!! Form::select('estado_id', $estados, $user->estado_id, ['class' => 'form-select', 'required']) !!}
				</div>

				<div class="mb-1">
					<button type="button" class="btn btn-danger bordered border-black border-1" data-dismiss="modal" onClick=" window.history.back()">Cancelar</button>
					<button type="submit" class="btn btn-success bordered border-black border-1">Aceptar</button>
				</div>

				{!! Form::close() !!}
			
			</div>

		</div>
	
	</div>

</div>
			
@endsection