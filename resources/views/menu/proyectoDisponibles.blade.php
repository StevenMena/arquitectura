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
	 			@if($proyecto!=null)
		 			@foreach($proyecto as $pry)
		 			
				 		<p><img class="img-responsive" src="data:{{$pry->mimeType}};base64,{{base64_encode($pry->imagen)}}"></p>
				 		<a href="single-post.html"><h3 class="ctitle">{!!$pry->nombreProyecto!!}</h3></a>
				 		<p><csmall>Posted: {{date_format(date_create($pry->fechaCreacion),'F j, Y')}}.</csmall> | <csmall2>By: Admin</csmall2></p>
				 		<p>{!!$pry->descripcion!!}</p>
				 		<p><a href="single-post.html">[Read More]</a></p>
				 		<div class="fb-share-button" data-href="http://YourPageLink.com" data-layout="button_count"></div>
				 		<div class="hline"></div>
				 		
				 		<div class="spacing"></div>
			 		@endforeach
			 	@else
			 		<div class="alert alert-warning" role="alert">No hay Proyectos de graduaci&oacute;n disponibles para mostrar.</div>
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
		 			
		 		<div class="spacing"></div>
		 		
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
		                <li>
		                    <a href="#"><img src="assets/img/thumb01.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 02/21/14</em>
		                </li>
		                <li>
		                    <a href="#"><img src="assets/img/thumb02.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 03/01/14</em>
		                <li>
		                    <a href="#"><img src="assets/img/thumb03.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 05/16/14</em>
		                </li>
		                <li>
		                    <a href="#"><img src="assets/img/thumb04.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 05/16/14</em>
		                </li>
		            </ul>
		            
		 		<div class="spacing"></div>
		 		
	 		</div>
	 	</div>
	</div>



@endsection