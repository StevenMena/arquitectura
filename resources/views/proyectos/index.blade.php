@extends('admin1')

@section('contenido')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif


<div class="the-box">

<table class="table">
	 <thead>
		  <th>Corelativo</th>
		  <th>Nombre</th>
		  <th>Tipo</th>
		  <th>Usuario Creacion</th>
		  <th>Fecha Creacion</th>
		  <th>Opciones</th>
	</thead>
	@foreach($proyectos as $proyecto)
  <tbody>
	    	<td>{{$proyecto->idProyecto}}</td>
			<td>{{$proyecto->nombreProyecto}}</td>
			<td>{{$proyecto->tipoProyecto}}</td>
			<td>{{$proyecto->nombres}}</td>
			<td>{{$proyecto->fechaCreacion}}</td>
			<td> {!!link_to_route('user.edit', $title = 'Editar',null, $attributes = ['class'=>'btn btn-warning'])!!} 
			{!!link_to_route('user.destroy', $title = 'Eliminar',null, $attributes = ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Seguro que desea eliminar este registro?")'])!!}</td>
    </tbody>
  @endforeach
</table> 

{!!link_to_route('proyectos.create', $title = 'Crear Proyecto', $parameters=null, $attributes = ['class'=>'btn btn-primary'])!!}
</div>

@endsection
