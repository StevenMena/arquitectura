<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
 <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto+Slab'>-->
{!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')!!}
{!!Html::style('http://fonts.googleapis.com/css?family=Roboto+Slab')!!}
{!!Html::style('css/login.css')!!}

</head>


 <body>
 <div class='preload login--container'>
 @if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">  
{{Session::get('message')}}
</div>
@endif

  {!! Form::open(['route' => 'login.store', 'method'=>'POST']) !!}
  <div class='login--form'>
    <div class='login--username-container'>
      {!!Form::label('Usuario')!!}
      {!!Form::text('usuariotxt',null,['class'=>'form-control'])!!}
     </div>
    <div class='login--password-container'>
      {!!Form::label('Contrase&ntilde;a')!!}
      {!!Form::password('password')!!}
      {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
    </div>
  </div>
  <div class='login--toggle-container'>
    <small>Bienvenido,</small>
    <small>Administrador</small>
  </div>

{!!Form::close()!!}

</div>

<footer>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</footer>
</body> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
   <script src="js/jquery.isotope.min.js"></script>
    <script src="js/custom.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/login.js"></script>
</html>