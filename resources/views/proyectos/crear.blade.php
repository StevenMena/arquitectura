@extends('admin1')

@section('contenido')

<div class="the-box">
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
		<select class="form-control">
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