@extends('admin1')


@section('contenido')




@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif




<div class="the-box">
{!!link_to_route('user.create','Crear Usuario', $parameters=null, $attributes = ['class'=>'btn btn-primary'])!!}
<br>
<br>	
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
			@if($user->estado=='1'||$user->estado=='A')
            	<td>Activo</td>
            @else
                <td>Inactivo</td>
            @endif
			<td>{{$user->tipo}}</td>
			<td> {!!link_to_route('user.edit', 'Editar',$parameters=$user->id, $attributes = ['class'=>'btn btn-warning'])!!}
			{!!link_to_route('user.destroy','Eliminar',$parameters=$user->id, $attributes = ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Seguro que desea eliminar este registro?")'])!!}</td>
    </tbody>
  @endforeach
</table>



</div>


@endsection
