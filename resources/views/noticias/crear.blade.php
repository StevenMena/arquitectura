@extends('admin1')

@section('contenido')
@if(count($errors)>0)
<div class="alert alert-danger alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<ul>
		@foreach($errors->all() as $error)
		<li>{!! $error !!}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="the-box">
{!!Form::open(['route'=>'noticias.store', 'method'=>'POST', 'files'=>true])!!}
	<div class="form-group">
		{!!Form::label('Nombre Noticia')!!}
		{!!Form::text('nombreNoticia', null, ['class'=>'form-control','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Texto Noticia')!!}
		{!!Form::text('textoNoticia', null, ['class'=>'form-control','required'])!!}
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