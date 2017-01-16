@extends('admin1')

@section('css')
{!! Html::style('plugins/summernote/summernote.min.css') !!} 
	<style type="text/css">

.text-uppercase{
    text-transform:uppercase;
}


</style>
@endsection
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
{!!Form::open(['route'=>'proyectos.store', 'method'=>'POST', 'files'=>true])!!}
	<div class="form-group">
		{!!Form::label('Nombre del Proyecto')!!}
		{!!Form::text('nombreProyecto', null, ['class'=>'form-control text-uppercase','required'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Descripción del Proyecto')!!}
		<textarea name="descripcion" id="descripcion" class="summernote-sm">
		</textarea>    

	</div>
	<div class="form-group">
		{!!Form::label('Tipo de Proyecto')!!}
		<select name="tipo" class="form-control">
			<option value="0"></option>
			@foreach($tipos as $tipo)
				<option value="{{$tipo->id}}">{!!$tipo->tipoProyecto!!}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		{!!Form::label('Origen del Proyecto')!!}
		{!!Form::text('origen', null, ['class'=>'form-control','required'])!!}
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

@section('js')
{!! Html::script('plugins/summernote/summernote.min.js') !!}
@endsection