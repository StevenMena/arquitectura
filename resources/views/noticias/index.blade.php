@extends('admin1')

@section('contenido')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif


<div class="the-box">
{!!link_to_route('noticias.create','Crear Noticia', $parameters=null, $attributes = ['class'=>'btn btn-primary'])!!}
<br>
<br>
<table class="table">
	<thead>
		  <th>Noticia</th>
		  <th>Descripcion</th>
		  <th>Estado</th>
		  <th>Opciones</th>
	</thead>
	@foreach($noticias as $noticia)
  	<tbody>
	    	<td>{{$noticia->nombreNoticia}}</td>
			<td>{{$noticia->textoNoticia}}</td>
			@if($noticia->estado==1)
            	<td>Activo</td>
            @else
                <td>Inactivo</td>
            @endif
			<td> {!!link_to_route('noticias.edit','Editar',$parameters=$noticia->id, $attributes = ['class'=>'btn btn-warning'])!!}
			{!!link_to_route('noticias.destroy','Eliminar',$parameters=$noticia->id, $attributes = ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Seguro que desea eliminar este registro?")'])!!}</td>
    </tbody>
  @endforeach
</table>

</div>

@endsection
