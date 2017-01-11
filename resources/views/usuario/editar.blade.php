@extends('admin1')
@section('contenido')

<div class="the-box">
{!!Form::model($user,['route'=>['user.update', $user->id], 'method'=>'PUT'])!!}
	<div class="form-group">
		{!!Form::label('Nombre')!!}
		{!!Form::text('nombre', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Apellidos')!!}
		{!!Form::text('apellidos', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email')!!}
		{!!Form::text('email', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('usuario')!!}
		{!!Form::text('usuario', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('password')!!}
		{!!Form::password('password',['class'=>'form-control'])!!}
	</div>
    <div class="form-group">
		{!!Form::label('Estado')!!}
		<select name="estado" class="form-control">
			<option value="0">Inactivo</option>
	  		<option value="1">Activo</option>
	    </select>
	</div>
	<div class="form-group">
		{!!Form::label('Tipo')!!}
		<select name="id_tipoUsuario" class="form-control">
			<option value="1">Admnistrador</option>
	  		<option value="2">Docente</option>
	    </select>
	</div>

	<div class="form-group">
	{!!Form::submit('Actualizar', ['class'=>'btn btn-info'])!!}
	</div>
	{!!Form::close()!!}
	
</div>
@endsection
