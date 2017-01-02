@extends('admin')

@section('contenido')

<div class="form-group" style="position:absolute; margin-left:20%; width: 75%; margin-top: 100px;">
{!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('Nombre')!!}
		{!!Form::text('name', null, ['class'=>'form-control'])!!}
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
		{!!Form::text('user', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('password')!!}
		{!!Form::password('pass',['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
	{!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
	</div>
	{!!Form::close()!!}
</div>