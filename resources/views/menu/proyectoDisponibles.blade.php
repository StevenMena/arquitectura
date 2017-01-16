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

	 		<! -- BLOG POSTS LIST -->
	 		<div class="col-lg-8">
	 			<! -- Blog Post 1 -->
	 			@if(count($proyecto)>=1)
		 			@foreach($proyecto as $pry)

				 		<p><img class="img-responsive" src="data:{{$pry->mimeType}};base64,{{base64_encode($pry->imagen)}}"></p>
				 		<h3 class="ctitle">{!!$pry->nombreProyecto!!}</h3>
				 		<p><csmall>Posted: {{date_format(date_create($pry->fechaCreacion),'F j, Y')}}.</csmall> | <csmall2>By: Admin</csmall2></p>
				 		<p>{!!str_limit($pry->descripcion, 350)!!}</p>
				 		<p><a href="{{route('proyectos.leer',['id'=>$pry->idProyecto])}}">[Read More]</a></p>
				 		<div class="fb-share-button" data-href="http://YourPageLink.com" data-layout="button_count"></div>
				 		<div class="hline"></div>

				 		<div class="spacing"></div>
			 		@endforeach
			 	@else
			 		<div class="alert alert-warning" role="alert">No hay Proyectos disponibles para mostrar.</div>
		 		@endif
			</div><!--/col-lg-8 -->


	 		<!-- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<!--<h4>Search</h4>
		 		<div class="hline"></div>
		 			<p>
		 				<br/>
		 				<input type="text" class="form-control" placeholder="Search something">
		 			</p>-->

		 		<h4>Proyectos</h4>
		 		<div class="hline"></div>
		 			@foreach($sumapry as $sump)
		 				@if($sump->tipo==1)
			 				<p><a href="{{route('proyectos.graduacion')}}"><i class="fa fa-angle-right"></i>{!!$sump->tipoProyecto!!}</a> <span class="badge badge-theme pull-right">{!!$sump->cantidad!!}</span></p>
			 			@elseif($sump->tipo==2)
			 				<p><a href="{{route('proyectos.horas')}}"><i class="fa fa-angle-right"></i>{!!$sump->tipoProyecto!!}</a> <span class="badge badge-theme pull-right">{!!$sump->cantidad!!}</span></p>
			 			@elseif($sump->tipo==3)
			 				<p><a href="{{route('proyectos.disponibles')}}"><i class="fa fa-angle-right"></i>{!!$sump->tipoProyecto!!}</a> <span class="badge badge-theme pull-right">{!!$sump->cantidad!!}</span></p>
			 			@endif
			 		@endforeach

		 		<div class="spacing"></div>

		 		<h4>Recientes</h4>
		 		<div class="hline"></div>
					<ul class="popular-posts">
		                @foreach($lastproyectos as $lasp)
		                <li>
		                    <a href="#"><img src="data:{{$lasp->mimeType}};base64,{{base64_encode($lasp->imagen)}}" alt="Popular Post" width="80" height="80"></a>
		                    <p><a href="#">{{$lasp->nombreProyecto}}</a></p>
		                    <em>Posted on {{date_format(date_create($lasp->fechaCreacion),'F j, Y')}}</em>
		                </li>
		               	@endforeach
		            </ul>

		 		<div class="spacing"></div>

	 		</div>
	 	</div>
	</div>



@endsection
