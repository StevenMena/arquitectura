@extends('master')

@section('content')
<style>

.sidebar .sidebar-wrapper {
  position: relative;
  max-height: none;
  min-height: 100%;
  overflow: hidden;
  width: 260px;
  z-index: 4;
}
.sidebar .sidebar-background {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  display: block;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
}

.wrapper {
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    left: 0;
    background-color: #f37752;
    width: 15%;
    margin-top: 4%;
    position: absolute;
  }
  .sidebar .nav li > a {
  color: #FFFFFF;
  margin: 5px 15px;
  opacity: .86;
  border-radius: 4px;
}
.sidebar .nav li:hover > a {
  background: rgba(255, 255, 255, 0.13);
  opacity: 1;
}

.sidebar .nav p {
  margin: 0;
  line-height: 30px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
}
.sidebar .nav i {
  font-size: 28px;
  float: left;
  margin-right: 15px;
  line-height: 30px;
  width: 30px;
  text-align: center;
}
.sidebar .nav p {
  margin: 0;
  line-height: 30px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
color:white;
}
.sidebar .logo,
body > .navbar-collapse .logo {
  padding: 10px 15px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

</style>

<div class="wrapper">
    	<div class="sidebar-wrapper">

            <ul class="nav">
                <li class="active">
                    <a href="user">
                        <p>Gestión de Usuarios</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>Gestión de Noticias</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>Gestión de Comentarios</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
            </ul>
    	</div>
   </div>

@yield('contenido')
