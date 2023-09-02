@extends('layouts.app')

@section('titulo', 'Editar Usuario '. $user->name)

@section('content')

<h4> Editar Usuario </h4>

{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

	<div class="form-group">
		<label class="control-label">Usuario</label>
		<input id="name" type="text" name="name" class="form-control" value="{{$user->name}}" placeholder = "Nombre Completo" required>
	</div>

	<div class="form-group">
		<label class="control-label">Apellido y Nombre</label>
		<input id="apellidonombre" type="text" name="apellidonombre" class="form-control" value="{{$user->name}}" placeholder = "Apellido y Nombre" required>
	</div>

	<div class="form-group">
		<label class="control-label">Perfil</label>
		{!! Form::select('perfil_id', $perfiles, $user->perfil_id, ['class' => 'form-control', 'required']) !!}
	</div>

	<div class="form-group">
		<label class="control-label">Estado</label>
		{!! Form::select('estado_id', $estados, $user->estado_id, ['class' => 'form-control', 'required']) !!}
	</div>

   <div class="form-group">
		<button type="submit" class="btn btn-success btn-block">Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onClick=" window.history.back()">Cancelar</button>
   </div>

{!! Form::close() !!}

@endsection