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
{!!Form::open(['route'=>'proyecto.actualizar', 'method'=>'POST', 'files'=>true])!!}
	<input type="hidden" name="idProyecto" value="{{$proyecto->idProyecto}}">
	<div class="form-group">
		{!!Form::label('Nombre del Proyecto')!!}
		{!!Form::text('nombreProyecto', $proyecto->nombreProyecto, ['class'=>'form-control text-uppercase'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Descripción del Proyecto')!!}
		{!! Form::textarea('descripcion',$proyecto->descripcion,['id'=>'descripcion','class' => 'form-control summernote-sm'])!!}

	</div>
	<div class="form-group">
		{!!Form::label('Tipo de Proyecto')!!}
		<select name="tipo" class="form-control">
			@foreach($tipos as $tipo)
				@if($proyecto->tipo==$tipo->id)
					<option value="{{$tipo->id}}" selected>{!!$tipo->tipoProyecto!!}</option>
				@else
					<option value="{{$tipo->id}}" >{!!$tipo->tipoProyecto!!}</option>
				@endif
			@endforeach
		</select>
	</div>
	<div class="form-group">
		{!!Form::label('Origen del Proyecto')!!}
		{!!Form::text('origen',$proyecto->origen, ['class'=>'form-control'])!!}
	</div>
	<img src="data:{{$proyecto->mimeType}};base64,{{base64_encode($proyecto->imagen)}}" alt="Popular Post" width="600" height="300">
	<div class="form-group">
		{!!Form::label('Actualizar Imagen')!!}
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