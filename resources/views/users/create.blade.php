@extends('layouts.app')
@section('titulo', 'Nuevo Usuario')
@section('content')


  <h4> Nuevo Usuario </h4>

  <form method="POST" action="{{ route('users.store') }}">
    @csrf

	<div class="form-group">
		<label class="control-label">Usuario</label>
		<input id="name" type="text" name="name" class="form-control" value="" placeholder = "Nombre Completo" required>
	</div>

	<div class="form-grup">
		<label class="control-label">Contraseña</label>
		<input id="password" type="password" name="password" class="form-control" value="" placeholder = "******" required>
	</div>
	<div class="form-group">
		<label class="control-label">Apellido y Nombre</label>
		<input id="apellidonombre" type="text" name="apellidonombre" class="form-control" value="" placeholder = "Apellido y Nombre" required>
	</div>
	<div class="form-group">
		<label class="control-label">Email</label>
		<input id="email" type="email" name="email" class="form-control" value=""  required>
	</div>

	<div class="form-group">
		<label class="control-label">Perfil</label>
		{!! Form::select('perfil_id', $perfiles, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
	</div>

   </div> <!-- FIN Modal body -->
   <div class="modal-footer">
   		<button type="submit" class="btn btn-success btn-block">Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onClick=" window.history.back()">Cancelar</button>
   </div>

  </form>   
   
@endsection