@extends('master')

@section('content')


  <div class="container"><!-- contenedor slide-->
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slide/foto1.jpg" width="460" height="345">
        <p style="text-align: center">ESCUELA DE ARQUITECTURA</p>
      </div>
      @foreach($noticias as $noticia)
      <div class="item">
        <img src="data:image/jpg;base64,{{base64_encode($noticia->archivo)}}" width="460" height="345">
        <p style="text-align: center">{!!$noticia->textoNoticia!!}</p>
      </div>
      @endforeach
    </div>
<!--      <div class="item">
        <img src="img/slide/foto1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/slide/foto2.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/slide/foto3.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>
-->
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!--    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3>Show your work with this beautiful theme</h3>
          <h1>Eyecatching Bootstrap 3 Theme.</h1>
          <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
          <h5>More Lorem Ipsum added here too.</h5>
        </div>
        <div class="col-lg-8 col-lg-offset-2 himg">

        </div>
      </div> /row -->
<!--      </div>  /container -->
</div><!-- /headerwrap -->
  <!-- *****************************************************************************************************************
   SERVICE LOGOS
   ***************************************************************************************************************** -->
   <div id="service">
    <div class="container">
      <div class="row centered">
        <div class="col-md-4">
          <i class="fa fa-compass"></i>
          <h4>Misi&oacute;n</h4>
          <p>"Formar profesionales en arqutectura con capacidad t&eacute;nica, cient&iacute;fica y human&iacute;stica, que contribuyan a la soluc&iacute;on efectiva de las necesidades f&iacute;sico-espaciales de la sociedad salvadore&ntilde;a, en el contextodel desarollo sustentable de los adentamientos humanos."</p>

        </div>
        <div class="col-md-4">
          <i class="fa fa-eye-slash"></i>
          <h4>Vis&iacute;on</h4>
          <p>¨Ser una escuela con excelencia acad&eacute;mica, rectora de la educaci&oacute;n superior en arquitectura, que de repuesta a la problem&acute;tica de la sociedad salvadore&ntilde;a, fundamentada en principios y valores &eacute;ticos y morales.¨</p>

        </div>
        <div class="col-md-4">
          <i class="fa fa-trophy"></i>
          <h4>Objetivo</h4>
          <p>Contribuir al desarrollo social y económico del país en la formación de profesionales en Arquitectura con alta calidad académica, técnica y científica que se integren al mejoramiento del espacio urbano-arquitectónico en el contexto nacional.</p>

        </div>
      </div>
    </div><!--/container -->
   </div><!--/service -->

  <!-- *****************************************************************************************************************
   PORTFOLIO SECTION
   ***************************************************************************************************************** -->
   <div id="portfoliowrap">
    <h3>CAMPOS DE ACCION DE LA ARQUITECTURA</h3>
      <!-- Modal -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <!--Content-->
              <div class="modal-content" style="margin-top: 25%;">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">PLANIFICACIÓN URBANA Y TERRITORIAL</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    El arquitecto puede realizar actividades relacionadas con el análisis, planeación,
                    diseño y construcción de los espacios habitables para el ser humano.

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <!-- /.Live preview-->

      <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <!--Content-->
              <div class="modal-content" style="margin-top: 25%;">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">DISEÑOY ADMINISTRACIÓN DE PROYECTOS ARQUITECTÓNICOS Y URBANÍSTICOS</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    En oficinas públicas, empresas privadas, constructoras, desarrolladoras y
                    promotoras de inversión inmobiliaria, secretarías de Estado, entre otros lugares.
                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <!-- /.Live preview-->

      <!-- Modal -->
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <!--Content-->
              <div class="modal-content" style="margin-top: 25%;">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">ADMINISTRACIÓN, GESTIÓN, CONTRUCCIÓN Y/O SUPERVISIÓN DE PROYECTOS ARQUITECTÓNICOS Y URBANÍSTICOS</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    En la organización y administración de obras y empresas y en la realización de dibujos arquitectónicos,
                    maquetas y proyectos multimedia.

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <!-- /.Live preview-->

      <!-- Modal -->
      <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <!--Content-->
              <div class="modal-content" style="margin-top: 25%;">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">ASESORÍA Y CONSULTORÍA DE PROYECTOS ARQUITECTÓNICOS Y URBANÍSTICOS</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    En despachos independientes formados por arquitectos o grupos multidisciplinarios del ámbito de la arquitectura,
                     el diseño y la ingeniería.

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <!-- /.Live preview-->

      <!-- Modal -->
      <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <!--Content-->
              <div class="modal-content" style="margin-top: 25%;">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">DOCENCIA E INVESTIGACIÓN EN ARQUITECTURA Y URBANISMO</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    El arquitecto puede realizar actividades relacionadas con la docencia e investigación en los niveles medio,
                    medio superior y superior profesional.

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <!-- /.Live preview-->

      <!-- Modal -->
      <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <!--Content-->
              <div class="modal-content" style="margin-top: 25%;">
                  <!--Header-->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">EVALUACIÓN, CONSERVACIÓN, REMODELACIÓN Y /O RESTAURACIÓN DE BIENES INMUEBLES, QUE TENGAN VALOR HISTÓRICO Y /O ARQUITECTÓNICO</h4>
                  </div>
                  <!--Body-->
                  <div class="modal-body">
                    Este Campo de Conocimiento el arquitecto puede convertirse en un experto abocado a la restauración y
                    protección del patrimonio cultural arquitectónico del país.

                  </div>
                  <!--Footer-->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              <!--/.Content-->
          </div>
      </div>
      <!-- /.Live preview-->

      <div class="portfolio-centered col-md-12" style="padding: 5% 5% 0 5%;">
            <div class="portfolio-item col-md-4">
              <div class="he-wrap tpl6 item">
                <img src="img/AreasAccion/planificacionUrbana.jpg" alt="">
                  <div class="he-view">
                    <div class="bg a0" data-animate="fadeIn">
                      <h3 class="a1" data-animate="fadeInDown">Planificación urbana y territorial</h3>
                        <a data-rel="prettyPhoto" href="img/AreasAccion/planificacionUrbana.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                        <!-- Button trigger modal -->
                        <a data-toggle="modal" data-target="#myModal1" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                    </div><!-- he bg -->
                  </div><!-- he view -->
              </div><!-- he wrap -->
            </div>
            <div class="portfolio-item col-md-4">
              <div class="he-wrap tpl6 item">
                <img src="img/AreasAccion/disenoArq.jpg" alt="">
                  <div class="he-view">
                    <div class="bg a0" data-animate="fadeIn">
                      <h3 class="a1" data-animate="fadeInDown">Diseño y administración de proyectos arquitectónicos y urbanísticos   </h3>
                        <a data-rel="prettyPhoto" href="img/AreasAccion/diseñoArq.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                        <a data-toggle="modal" data-target="#myModal2" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                    </div><!-- he bg -->
                  </div><!-- he view -->
              </div><!-- he wrap -->
            </div>
            <div class="portfolio-item col-md-4">
              <div class="he-wrap tpl6 item">
                <img src="img/AreasAccion/supervision.jpg" alt="">
                  <div class="he-view">
                    <div class="bg a0" data-animate="fadeIn">
                      <h3 class="a1" data-animate="fadeInDown">Administración, gestión, construcción y /o supervisión de proyectos arquitectónicos y urbanísticos </h3>
                      <a data-rel="prettyPhoto" href="img/AreasAccion/supervision.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                      <a data-toggle="modal" data-target="#myModal3" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                    </div><!-- he bg -->
                  </div><!-- he view -->
                </div><!-- he wrap -->
            </div><!-- end col-12 -->
        </div>

        <div class="portfolio-centered col-md-12" style="padding: 5%;">
          <div class="portfolio-item col-md-4">
            <div class="he-wrap tpl6 item">
              <img src="img/AreasAccion/asesoria.jpg" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="a1" data-animate="fadeInDown">Asesoría y consultoría de proyectos arquitectónicos y urbanísticos</h3>
                    <a data-rel="prettyPhoto" href="img/AreasAccion/asesoria.jpg.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                    <a data-toggle="modal" data-target="#myModal4" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                  </div><!-- he bg -->
                </div><!-- he view -->
              </div><!-- he wrap -->
          </div>
          <div class="portfolio-item col-md-4">
            <div class="he-wrap tpl6 item">
              <img src="img/AreasAccion/docencia.jpg" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="a1" data-animate="fadeInDown">Docencia e investigación en arquitectura y urbanismo </h3>
                    <a data-rel="prettyPhoto" href="img/AreasAccion/docencia.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                    <a data-toggle="modal" data-target="#myModal5" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                  </div><!-- he bg -->
                </div><!-- he view -->
              </div><!-- he wrap -->
          </div>
          <div class="portfolio-item col-md-4">
            <div class="he-wrap tpl6 item">
              <img src="img/AreasAccion/restauracion.jpg" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                      <h3 class="a1" data-animate="fadeInDown">Evaluación, conservación, remodelación y /o restauración de bienes inmuebles, que tengan valor histórico y /o arquitectónico</h3>
                      <a data-rel="prettyPhoto" href="img/AreasAccion/restauracion.jpg" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                      <a data-toggle="modal" data-target="#myModal6" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                  </div><!-- he bg -->
                </div><!-- he view -->
              </div><!-- he wrap -->
          </div>
      </div>

 </div><!--/Portfoliowrap -->




  <!-- *****************************************************************************************************************
   OUR CLIENTS
   ***************************************************************************************************************** -->
   <div id="cwrap">
     <div class="container">
      <div class="row centered">
        <h3>EMPRESAS ALIADAS</h3>
        <div class="col-lg-3 col-md-3 col-sm-3">
        <br>
        <br>
          <img src="img/clients/client01.png" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <img src="img/client02.png" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <br>
          <br>
          <img src="{{asset('img/clients/durman.png')}}" class="img-responsive">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        <br>
        <br>
          <img src="img/clients/ply01.png" class="img-responsive">
        </div>
      </div><!--/row -->
     </div><!--/container -->
   </div><!--/cwrap -->
@endsection
