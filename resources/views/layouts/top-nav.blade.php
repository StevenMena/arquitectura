<!-- BEGIN TOP NAV -->
		<div class="top-navbar {{ (Session::get('cfgHideMenu',false))?'toggle':'' }}">
			<div class="top-navbar-inner">
				
				<!-- Begin Logo brand -->
				<div class="logo-brand danger-color">
					<p>ESCUELA DE ARQUITECTURA</p>
				</div><!-- /.logo-brand -->
				<!-- End Logo brand -->
				
				<div class="top-nav-content">
					
					<!-- Begin button sidebar left toggle -->
					<div class="btn-collapse-sidebar-left">
						<i class="fa fa-long-arrow-right icon-dinamic"></i>
					</div><!-- /.btn-collapse-sidebar-left -->
					<!-- End button sidebar left toggle -->
								
				</div><!-- /.top-nav-content -->

				<!-- Begin user session nav -->
				<ul class="nav-user navbar-right">
					<li class="dropdown">
					  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
						Hola, <strong>{{Auth::user()->nombre.' '.Auth::user()->apellidos}}</strong>
					  </a>
					  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
						<li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
					  </ul>
					</li>
				</ul>
				<!-- End user session nav -->

			</div><!-- /.top-navbar-inner -->
		</div><!-- /.top-navbar -->
		<!-- END TOP NAV -->