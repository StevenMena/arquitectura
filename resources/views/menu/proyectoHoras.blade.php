@extends('master')

@section('content')
	


	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>PROYECTOS DE HORAS SOCIALES</h3>
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
				 		<a href="single-post.html"><h3 class="ctitle">{!!$pry->nombreProyecto!!}</h3></a>
				 		<p><csmall>Posted: {{date_format(date_create($pry->fechaCreacion),'F j, Y')}}.</csmall> | <csmall2>By: Admin</csmall2></p>
				 		<p>{!!$pry->descripcion!!}</p>
				 		<p><a href="single-post.html">[Read More]</a></p>
				 		<div class="fb-share-button" data-href="http://YourPageLink.com" data-layout="button_count"></div>
				 		<div class="hline"></div>
				 		
				 		<div class="spacing"></div>
			 		@endforeach
			 	@else
			 		<div class="alert alert-warning" role="alert">No hay Proyectos de Horas Sociales disponibles para mostrar.</div>
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
		               @foreach($lastproyectos as $lasp)
		                <li>
		                    <a href="#"><img src="data:{{$lasp->mimeType}};base64,{{base64_encode($lasp->imagen)}}" alt="Popular Post" width="80" height="80"></a>
		                    <p><a href="#">{{$lasp->nombreProyecto}}</a></p>
		                    <em>Posted on {{date_format(date_create($lasp->fechaCreacion),'F j, Y')}}</em>
		                </li>
		               	@endforeach
		            </ul>
		            
		 		<div class="spacing"></div>
		 		
		 	<!--	<h4>Popular Tags</h4>
		 		<div class="hline"></div>
		 			<p>
		            	<a class="btn btn-theme" href="#" role="button">Design</a>
		            	<a class="btn btn-theme" href="#" role="button">Wordpress</a>
		            	<a class="btn btn-theme" href="#" role="button">Flat</a>
		            	<a class="btn btn-theme" href="#" role="button">Modern</a>
		            	<a class="btn btn-theme" href="#" role="button">Wallpaper</a>
		            	<a class="btn btn-theme" href="#" role="button">HTML5</a>
		            	<a class="btn btn-theme" href="#" role="button">Pre-processor</a>
		            	<a class="btn btn-theme" href="#" role="button">Developer</a>
		            	<a class="btn btn-theme" href="#" role="button">Windows</a>
		            	<a class="btn btn-theme" href="#" role="button">Phothosop</a>
		            	<a class="btn btn-theme" href="#" role="button">UX</a>
		            	<a class="btn btn-theme" href="#" role="button">Interface</a>		            	
		            	<a class="btn btn-theme" href="#" role="button">UI</a>		            	
		            	<a class="btn btn-theme" href="#" role="button">Blog</a>		            	
		 			</p>
	 		</div> -->
	 		</div>
	 	</div>
	</div>



@endsection