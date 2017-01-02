<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;
use Redirect;
use Session;


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
 			'password'=>$request['pass'],
    		]);
        Session::flash('message','Usuario creado correctamente');
        return redirect::to('/user');     
    }

    public function edit($id){
     $user=Usuario::find($id);
     return view('usuario.editar',['user'=>$user]);
    }

    public function update($id, Request $request){
    $user=Usuario::find($id);
    $user->fill($request->all());
    $user->save();
    Session::flash('message','Usuario actualizado');
    return redirect::to('/user');     
    }

    public function destroy($id){
        
    }

    public function show($id){
        Usuario::destroy($id);
        Session::flash('message','Usuario Eliminado correctamente');
        return redirect::to('/user');
    }
}
