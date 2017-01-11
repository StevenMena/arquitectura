@extends('master')

@section('head')
	    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
@endsection

@section('content')
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Contáctenos</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	<!--{!!$map['html']!!}	-->
	<div class="container">
		<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.973881393886!2d-89.20297150715953!3d13.720031111721317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92091929df212124!2sFacultad+de+Ingenier%C3%ADa+y+Arquitectura+-+UES!5e0!3m2!1ses-419!2ssv!4v1484022019079" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	 
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

	<!-- <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Escribinos</h4>
	 			<div class="hline"></div>
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		 			<form role="form">
					  <div class="form-group">
					    <label for="InputName1">Your Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div class="form-group">
					    <label for="InputSubject1">Subject</label>
					    <input type="email" class="form-control" id="exampleInputEmail1">
					  </div>
					  <div class="form-group">
					  	<label for="message1">Message</label>
					  	<textarea class="form-control" id="message1" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-theme">Submit</button>
					</form>
			</div><!--/col-lg-8 -->
	 		
	 		<!--<div class="col-lg-4"> -->
		 		
     <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 
		 		<h4>Dirección</h4>
		 		<div class="hline"></div>
		 			<p>
		 				Facultad de Ingeniería y Arquitectura - UES<br/>
		 				Autopista Norte<br/>
		 				Final 25 Avenida Norte,<br/>
		 				San Salvador<br/>
		 			</p>
		 			<p>
		 				Email: arquitectura@ues.edu.sv.com<br/>
		 				Tel: 2511 2000
		 			</p>
		 			<h4>Hacia la Libertad por la Cultura</h4>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

@endsection