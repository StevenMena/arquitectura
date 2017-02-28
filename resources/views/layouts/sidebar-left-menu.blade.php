<!-- BEGIN SIDEBAR LEFT -->
<div class="sidebar-left sidebar-nicescroller">
	<ul class="sidebar-menu">
		<li class="">
			<a href="#"><i class="fa fa-dashboard icon-sidebar"></i>Inicio</a>
		</li>

	@if(Session::get('tipo')==1)
		<li class="">
		  <a href="{{route('user.index')}}">
				<i class="fa fa-users fa-2x  icon-sidebar"></i>
				<i class="fa fa-angle-right chevron-icon-sidebar"></i>
				Gestion Usuarios
				</a>
		    </li>
	@endif  
		   
		<li class="">
			<a href="{{route('proyectos.index')}}">
				<i class="fa fa-clipboard fa-2x  icon-sidebar"></i>
				<i class="fa fa-angle-right chevron-icon-sidebar"></i>
				Gestion de Proyectos
				</a>
		</li>

		<li class="">
			<a href="{{route('noticias.index')}}">
				<i class="fa fa-newspaper-o fa-2x  icon-sidebar"></i>
				<i class="fa fa-angle-right chevron-icon-sidebar"></i>
				Gestion de Noticias
				</a>
		</li>

		<li class="">
			<a href="{{route('interesados')}}">
				<i class="fa fa-child fa-2x icon-sidebar"></i>
				<i class="fa fa-angle-right chevron-icon-sidebar"></i>
				Estudiantes Interesados
				</a>
		</li>

	</ul>
</div><!-- /.sidebar-left -->
	<!-- END SIDEBAR LEFT -->
