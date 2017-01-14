@extends('admin1')
@section('contenido')

@section('css')
{!! Html::style('plugins/summernote/summernote.min.css') !!} 
	<style type="text/css">

.text-uppercase{
    text-transform:uppercase;
}


</style>
@endsection
@section('contenido')

<div class="the-box">
{!!Form::model($proyecto['route'=>['proyectos.edit', $proyecto->id], 'method'=>'PUT', 'files'=>true])!!}
	<div class="form-group">
		{!!Form::label('Nombre del Proyecto')!!}
		{!!Form::text('nombreProyecto', null, ['class'=>'form-control text-uppercase'])!!}
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
@endsection

@section('js')
{!! Html::script('plugins/summernote/summernote.min.js') !!}
@endsection