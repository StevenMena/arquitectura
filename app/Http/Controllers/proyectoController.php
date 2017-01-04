<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proyectos;
use Session;
use Redirect;
use Illuminate\Support\Facades\DB;

class proyectoController extends Controller
{
    public function index(){

    }

    public function create(){
    $tipos =DB::table('tiposProyectos')
    	   			->select('tipoProyecto as tipo','id')
    	   			->where('estado',1)
    	   			->get();
    return view('proyectos.crear',compact('tipos'));  
    }
}
