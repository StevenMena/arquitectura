@extends('admin')


<div class="form-group" style="position: relative; margin-top: 10%;">
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
				{!!Form::text('estado',null, ['class'=>'form-control'])!!}
		    
	</div>

	<div class="form-group">
	{!!Form::submit('Iniciar')!!}
	</div>
	{!!Form::close()!!}
</div>
@section('contenido')

