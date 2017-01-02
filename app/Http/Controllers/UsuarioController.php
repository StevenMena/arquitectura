<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
    $usuarios= Usuario::all();
	return view('usuario.index',compact('usuarios'));
    }
    public function create(){
    	return view('usuario.crear');
    }        

    public function store(Request $request){
    	Usuario::create([
    		'nombre'=>$request['name'],
 			'apellidos'=>$request['apellidos'],
 			'email'=>$request['email'],
 			'usuario'=>$request['user'],
 			'password'=>bcrypt($request['pass']),
    		]);

    	return redirect('/user')->with('message','store');
    }

    public function edit($id){
     $user=Usuario::find($id);
     return view('usuario.editar',['user'=>$user]);
    }

    public function update(){
     }

}
