@extends('admin')

<?php $message=Session::get('message')?>
@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario creado existosamente
</div>
@endif

@section('contenido')
<div class="form-group" style="width: 75%; margin-top: 100px;">

<table class="table">
	 <thead>
		  <th>Nombre</th>
		  <th>Apellidos</th>
		  <th>Usuario</th>
		  <th>Estado</th>
		  <th>Opciones</th>
	</thead>
	@foreach($usuarios as $user)
  <tbody>
	    	<td>{{$user->nombre}}</td>
			<td>{{$user->apellidos}}</td>
			<td>{{$user->usuario}}</td>
			<td>{{$user->estado}}</td>
			<td>
{!!link_to_route('user.edit', $title = 'Editar',$parameters=$user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
  </tbody> 
  @endforeach
</table> 


{!!link_to_route('user.create', $title = 'Crear Usuario', $parameters=null, $attributes = ['class'=>'btn btn-success'])!!}
</div>