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
    $tipos=tiposProyectos::all('tipoProyecto');

    return view('proyectos.crear',compact('tipos'));  
    }

    public function store(Request $request){
    $file=$request['path'];
    $imagen=$file->openFile()->fread($file->getSize());
    dd($imagen);
    
    $proyecto=Proyectos::create([
    	'nombreProyecto'=>$request['nombreProyecto'],
    	'descripcion'=>$request['descripcion'],
    	'tipo'=>$request['tipo'],
    	'origen'=>$request['origen'],
    	'imagen'=>file_get_contents($request['path']),
		]);
		Session::flash('message','Proyecto creado correctamente');
        return redirect::to('/proyectos/create');
    }
}
