<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="ECM">
		<title>~Arquitectura~</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		{!! Html::style('css/bootstrap.css') !!} 
		<!--<link href="" rel="stylesheet">-->
		


		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		{!! Html::style('plugins/font-awesome/css/font-awesome.min.css') !!} 
		{!! Html::style('css/style-admin.css') !!} 
		{!! Html::style('css/style-responsive.css') !!} 
 		
		@yield('css')

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="tooltips">
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			
			@include('layouts.top-nav')
			
			@include('layouts.sidebar-left-menu')	
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<div class="container-fluid">
				
				<!-- Begin page heading -->
				<h1 class="page-heading">{{ $title }} <small>{{ $subtitle }}</small></h1>
				<!-- End page heading -->
				@if (!empty($breadcrumb))
					<!-- Begin breadcrumb -->
					<ol class="breadcrumb default square rsaquo sm">
						<li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
						@if(count($breadcrumb)>1)
							@for ($i = 0; $i < count($breadcrumb) ; $i++)
								@if(($i+1) == count($breadcrumb))
									<li class="active">{{ $breadcrumb[$i]['nom'] }}</li>
								@else
									<li><a href="{{ $breadcrumb[$i]['url'] }}">{{ $breadcrumb[$i]['nom'] }}</a></li>
								@endif
							@endfor
						@else
							<li class="active">{{ $breadcrumb[0]['nom']}}</li>					
						@endif
					</ol>
					<!-- End breadcrumb -->
				@endif					
					
				@yield('contenido')
								
				</div><!-- /.container-fluid -->
				
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; 2016 <a href="#"></a><br />
					<a href="#"></a>
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
			
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		{!! Html::script('js/jquery.min.js') !!}
		{!! Html::script('js/bootstrap.min.js') !!}
 		{!! Html::script('plugins/retina/retina.min.js') !!}
		{!! Html::script('plugins/nicescroll/jquery.nicescroll.js') !!}
		{!! Html::script('plugins/slimscroll/jquery.slimscroll.min.js') !!}
		{!! Html::script('plugins/backstretch/jquery.backstretch.min.js') !!}
 
		<!-- PLUGINS -->
		

		@yield('js')

		<!-- MAIN APPS JS -->
		{!! Html::script('js/apps.js') !!}



	</body>
</html>