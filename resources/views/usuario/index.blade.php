@extends('admin')

@section('contenido')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif


<div class="form-group" style="position:absolute; margin-left:20%; width: 75%; margin-top: 100px;">

<table class="table">
	 <thead>
		  <th>Nombre</th>
		  <th>Apellidos</th>
		  <th>Usuario</th>
		  <th>Estado</th>
		  <th>Tipo</th>
		  <th>Opciones</th>
	</thead>
	@foreach($usuarios as $user)
  <tbody>
	    	<td>{{$user->nombre}}</td>
			<td>{{$user->apellidos}}</td>
			<td>{{$user->usuario}}</td>
			<td>{{$user->estado}}</td>
			<td>{{$user->tipo}}</td>
			<td> {!!link_to_route('user.edit', $title = 'Editar',$parameters=$user->id, $attributes = ['class'=>'btn btn-primary'])!!} 
			{!!link_to_route('user.destroy', $title = 'Eliminar',$parameters=$user->id, $attributes = ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Seguro que desea eliminar este registro?")'])!!}</td>
    </tbody>
  @endforeach
</table> 

{!!link_to_route('user.create', $title = 'Crear Usuario', $parameters=null, $attributes = ['class'=>'btn btn-success'])!!}
</div>

@endsection
