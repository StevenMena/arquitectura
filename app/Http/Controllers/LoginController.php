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
 	   return view('login');	
    }

  public function store(Request $datos){
  	if(Auth::attempt(['usuario'=>$datos['usuariotxt'], 'password'=>$datos['password']])){
  		return View('inicio');
  	}
  	return redirect('/login')->with('message','store');

  }
}