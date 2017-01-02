@extends('admin')
@section('contenido')

@endsection


<div class="form-group" style="position:absolute; margin-left:20%; width: 75%; margin-top: 100px;">
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
		{!!Form::select('estado',['A' => 'Activo', 'I' => 'Inactivo'], ['class'=>'form-control'])!!}
		    
	</div>

	<div class="form-group">
	{!!Form::submit('Actualizar', ['class'=>'btn btn-info'])!!}
	</div>
	{!!Form::close()!!}
	
	</div>

