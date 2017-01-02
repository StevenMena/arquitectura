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

	{!!$map['html']!!}	 
	 
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
		 				Some Ave, 987,<br/>
		 				23890, New York,<br/>
		 				United States.<br/>
		 			</p>
		 			<p>
		 				Email: hello@solidtheme.com<br/>
		 				Tel: +34 8493-4893
		 			</p>
		 			<h4>Hacia la Libertad por la Cultura</h4>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

@endsection