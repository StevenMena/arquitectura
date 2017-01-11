<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>ASEA</title>

    <!-- Bootstrap core CSS -->
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    @yield('css')

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
 
    {!!Html::script('js/script.js')!!}
    @yield('head')

  </head>

  <body>

    <!-- Fixed navbar -->
    <div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ESCUELA DE ARQUITECTURA</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="{{route('/')}}">INICIO</a></li>
            <li><a href="nosotros">NOSOTROS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROYECCION SOCIAL<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('proyectos.graduacion')}}">PROYECTOS DE GRADUACION</a></li>
                <li><a href="blog.html">PROYECTOS DISPONIBLES</a></li>
                <li><a href="portfolio.html">PROYECTOS SOCIALES</a></li>
<!--                <li><a href="single-project.html">SINGLE PROJECT</a></li>-->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">CARRERA <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('fases')}}">FASES DE FORMACION</a></li>
                <li><a href="{{route('plan')}}">PLAN DE ESTUDIOS</a></li>
                <li><a href="{{route('areas')}}">AREAS CURRICULARES</a></li>
<!--                <li><a href="single-project.html">SINGLE PROJECT</a></li>-->
              </ul>
            </li>
            <li><a href="{{route('contacto')}}">CONTACTO</a></li>
          </ul>
        </div><!--/.nav-collapse -->
</div>     

    </div>

  <!-- *****************************************************************************************************************
   HEADERWRAP
   ***************************************************************************************************************** -->
  @yield('content')

<div id="footerwrap">
  <div class="container">
      <div class="row">
        <div class="col-lg-4">
          
        </div>
        <div align="center" class="col-lg-4">
          <p>
            <a href="https://www.ues.edu.sv/" target="_blank">UNIVERSIDAD DE EL SALVADOR</a>
          </p>
        </div>
        <div align="center" class="col-lg-4">
          <p>
            <a href="login" target="_blank">Administración</a>
          </p>
        </div>
      
      </div><! --/row -->
    </div><! --/container -->
   </div>


   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
   
    {!!Html::script('js/jquery.hoverdir.js')!!}
    {!!Html::script('js/jquery.hoverex.min.js')!!}
    {!!Html::script('js/jquery.prettyPhoto.js')!!}
    {!!Html::script('js/jquery.isotope.min.js')!!}
    {!!Html::script('js/custom.js')!!}
    
    @yield('js')

<script>
/*footer
      $("#footerwrap").load("footer.html");
      
      $("#navbar").load("navbar.html");
      
*/
// Portfolio
(function($) {
  "use strict";
  var $container = $('.portfolio'),
    $items = $container.find('.portfolio-item'),
    portfolioLayout = 'fitRows';
    
    if( $container.hasClass('portfolio-centered') ) {
      portfolioLayout = 'masonry';
    }
        
    $container.isotope({
      filter: '*',
      animationEngine: 'best-available',
      layoutMode: portfolioLayout,
      animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    },
    masonry: {
    }
    }, refreshWaypoints());
    
    function refreshWaypoints() {
      setTimeout(function() {
      }, 1000);   
    }
        
    $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
    });
    
    function getColumnNumber() { 
      var winWidth = $(window).width(), 
      columnNumber = 1;
    
      if (winWidth > 1200) {
        columnNumber = 5;
      } else if (winWidth > 950) {
        columnNumber = 4;
      } else if (winWidth > 600) {
        columnNumber = 3;
      } else if (winWidth > 400) {
        columnNumber = 2;
      } else if (winWidth > 250) {
        columnNumber = 1;
      }
        return columnNumber;
      }       
      
      function setColumns() {
        var winWidth = $(window).width(), 
        columnNumber = getColumnNumber(), 
        itemWidth = Math.floor(winWidth / columnNumber);
        
        $container.find('.portfolio-item').each(function() { 
          $(this).css( { 
          width : itemWidth + 'px' 
        });
      });
    }
    
    function setPortfolio() { 
      setColumns();
      $container.isotope('reLayout');
    }
      
    $container.imagesLoaded(function () { 
      setPortfolio();
    });
    
    $(window).on('resize', function () { 
    setPortfolio();          
  });
})(jQuery);
</script>
  </body>
</html>
