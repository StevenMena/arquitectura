<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;


class UsuarioController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data = ['title'            => 'Gestion de Usuarios'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Usuarios', 'url' => '#'],
                    ['nom'  =>  'Lista de Usuarios', 'url' => '#']
                ]]; 

    $usuarios= DB::table('usuarios')
                ->join('tipousuario','usuarios.id_tipoUsuario','=','tipousuario.id')
                ->select('usuarios.*','tipousuario.tipo')
                ->get();
    $data['usuarios']=$usuarios;
	return view('usuario.index',$data);
    }

    public function create(){
        $data = ['title'            => 'Gestion de Usuarios' 
                ,'subtitle'         => ''];
    	return view('usuario.crear',$data);
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
        return redirect::to('/usuarios/user');     
    }

    public function edit($id){
    $data = ['title'            => 'Gestion de Usuarios' 
                ,'subtitle'         => ''];

     $user=Usuario::find($id);
     $data['user']=$user;
     return view('usuario.editar',$data);
    }

    public function update($id, Request $request){
    $user=Usuario::find($id);
    $user->fill($request->all());
    $user->save();
    Session::flash('message','Usuario actualizado');
    return redirect::to('/usuarios/user');     
    }

    public function destroy($id){
        
    }

    public function show($id){
        Usuario::destroy($id);
        Session::flash('message','Usuario Eliminado correctamente');
        return redirect::to('/usuarios/user');
    }
}
