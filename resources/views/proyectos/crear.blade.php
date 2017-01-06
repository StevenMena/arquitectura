@extends('admin')

@section('contenido')

<div class="form-group" style="position:absolute; margin-left:20%; width: 75%; margin-top: 100px;">
{!!Form::open(['route'=>'proyectos.store', 'method'=>'POST', 'files'=>true])!!}
	<div class="form-group">
		{!!Form::label('Nombre del Proyecto')!!}
		{!!Form::text('nombreProyecto', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Descripción del Proyecto')!!}
		{!!Form::text('descripcion', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Tipo de Proyecto')!!}
		{!!Form::select('tipo', $tipos,null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Origen del Proyecto')!!}
		{!!Form::text('origen', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Archivo')!!}
		{!!Form::file('path', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
	{!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
	</div>
	{!!Form::close()!!}
</div>