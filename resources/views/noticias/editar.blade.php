@extends('admin1')
@section('contenido')

<div class="the-box">
{!!Form::model($noticia,['route'=>['noticias.update', $noticia->id], 'method'=>'PUT'])!!}
	<div class="form-group">
		{!!Form::label('Nombre')!!}
		{!!Form::text('nombreNoticia', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Descripción')!!}
		{!!Form::text('textoNoticia', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Estado')!!}
		<select name="estado" class="form-control">
			<option value="0">Inactivo</option>
	  		<option value="1">Activo</option>
	    </select>
	</div>

	<div class="form-group">
	{!!Form::submit('Actualizar', ['class'=>'btn btn-info'])!!}
	</div>
	{!!Form::close()!!}
	
</div>
@endsection
