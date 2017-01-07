<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiposProyectos;
use App\Proyectos;
use Session;
use Redirect;
use Illuminate\Support\Facades\DB;

class proyectoController extends Controller
{
    public function index(){

    }

    public function create(){
    /* $tipos =DB::table('tiposProyectos')
    	   			->select('tipoProyecto as tipo','id')
    	   			->where('estado',1)
    	   			->get();*/
    $data = ['title'            => 'Gestion de Usuarios'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Usuarios', 'url' => '#'],
                    ['nom'  =>  'Lista de Usuarios', 'url' => '#']
                ]]; 
    $tipos=tiposProyectos::all();
    $data['tipos']=$tipos;
    //dd($data);
    return view('proyectos.crear',$data);  
    }

    public function store(Request $request){
    
    $file=$request['path'];
    $imagen=$file->openFile()->fread($file->getSize());
    $proyecto=Proyectos::create([
    	'nombreProyecto'=>$request['nombreProyecto'],
    	'descripcion'=>$request['descripcion'],
    	'tipo'=>$request['tipo'],
    	'origen'=>$request['origen'],
    	'imagen'=>$imagen,
		]);
		Session::flash('message','Proyecto creado correctamente');
        return redirect::to('proyectos.crear');
    }
}
