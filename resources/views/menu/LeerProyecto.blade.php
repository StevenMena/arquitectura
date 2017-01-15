@extends('master')

@section('content')
	


	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>PROYECTOS DE DISPONIBLES</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row"> 	
	 		<div class="col-lg-8">
				 		<p><img class="img-responsive" src="data:{{$proyecto->mimeType}};base64,{{base64_encode($proyecto->imagen)}}"></p>
				 		<h3 class="ctitle">{!!$proyecto->nombreProyecto!!}</h3></a>
				 		<p><csmall>Posted: {{date_format(date_create($proyecto->fechaCreacion),'F j, Y')}}.</csmall> | <csmall2>By: Admin</csmall2></p>
				 		<p>{!!$proyecto->descripcion!!}</p>
			</div><!--/col-lg-8 -->
		</div>
	</div>

	<div class="container mtb">
     <h3 class="ctitle"> Te interesa el proyecto ...</h3>
     {{Form::open(array('route'=>'proyecto.guardar', 'method'=>'POST'))}}
	    <div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('nombre', null, ['class'=>'form-control text-uppercase'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Apellidos:')!!}
			{!!Form::text('apellidos', null, ['class'=>'form-control text-uppercase'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email:')!!}
			{!!Form::email('email', null, ['class'=>'form-control text-uppercase'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Telefono de contacto:')!!}
			{!!Form::text('telefono', null, ['class'=>'form-control text-uppercase'])!!}
		</div> 		
		<div class="form-group">
			{!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
		</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection