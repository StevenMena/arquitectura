@extends('admin1')

@section('contenido')

<div class="the-box">
{!!Form::open(['route'=>'noticias.store', 'method'=>'POST', 'files'=>true])!!}
	<div class="form-group">
		{!!Form::label('Nombre Noticia')!!}
		{!!Form::text('nombreNoticia', null, ['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Texto Noticia')!!}
		{!!Form::text('textoNoticia', null, ['class'=>'form-control'])!!}
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
@endsection