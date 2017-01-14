<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function index(){
      //Verificamos si ya esta logueado de lo contrario se redirige al login
      if(Auth::check()){
        //return view('inicio.index',$data); 
      }else{
        return view('login');   
      }
 	    //return view('login');	
    }

  public function store(Request $datos){
  	$data = ['title' 			=> 'BIENVENIDO AL PANEL DE ADMINISTRACION DEL SITIO DE LA ESCUELA DE ARQUITECTURA' 
				,'subtitle'			=> ''];

  	if(Auth::attempt(['usuario'=>$datos['usuariotxt'], 'password'=>$datos['password']])){
  		//dd(Auth::user()->nombre);
      return View('admin1',$data);
  	}
    else{
  	    Session::flash('message','Datos inv&aacute;lidos');
        return redirect::to('/login');
    }
  }

  public function getLogin(){
    $data = ['title'      => ''
        ,'subtitle'     => ''];
      //Verificamos si ya esta logueado de lo contrario se redirige al login
      if(Auth::check()){
        return view('inicio.index',$data); 
      }else{
        return view('users.login');   
      }
  }  

    public function getLogout()
   {
      //Deslogueamos al usuario
      Auth::logout();
      //Redireccion a ruta inicial
      return redirect()->route('index');
   }
}