@extends('admin')


<div class="form-group" style="position: relative; margin-top: 10%;">
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
	{!!Form::submit('Iniciar')!!}
	</div>
	{!!Form::close()!!}
</div>
@section('contenido')

