<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Redirect;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function index(){
      //Verificamos si ya esta logueado de lo contrario se redirige al login
      if(Auth::check()){
        $data = ['title'      => 'BIENVENIDO AL PANEL DE ADMINISTRACION DEL SITIO DE LA ESCUELA DE ARQUITECTURA' 
        ,'subtitle'     => ''];
      $tipo=DB::table('usuarios')
      ->select('id_tipoUsuario')
      ->where('usuario',$datos['usuariotxt'])
      ->get();
      $data['tipo']=$tipo;
     
        return view('admin1',$data);
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
      $tipo=DB::table('usuarios')
      ->select('id_tipoUsuario')
      ->where('usuario',$datos['usuariotxt'])
      ->get();
      $data['tipo']=$tipo;
      return view('admin1',$data);
  	}
    else{
  	    Session::flash('message','Datos inv&aacute;lidos');
        return redirect::to('/login');
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