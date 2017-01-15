<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Noticias;
use DB;

class MainController extends Controller
{
    //
     public function getInicio(){
        $data = ['title'            => 'Gestion de Usuarios'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Usuarios', 'url' => '#'],
                    ['nom'  =>  'Lista de Usuarios', 'url' => '#']
                ]]; 
    
        $noticias= DB::table('noticias')
                    ->where('estado','1')
                    ->get();

        $data['noticias']=$noticias;

        return view('inicio',$data);
    }

    public function getFases(){

    	return view('menu.fases');
    }

    public function getAreas(){

        return view('menu.areas');
    }

    public function getPlan(){

        return view('menu.plan');
    }

    public function getProyecto($id){
        $proyecto=Proyectos::find($id);
        $data=[];
        $data['proyecto']=$proyecto;
        return view('menu.LeerProyecto',$data);
    }

    public function getContacto(){
        return view('menu.contacto');
    }

    public function getGraduacion(){
        $data=[];
        $proyecto = Proyectos::where('tipo',1)->get();
        $data['proyecto']=$proyecto;
        $sumapry=DB::table('proyectos as pry')
            ->join('tiposproyectos as tipop','pry.tipo','=','tipop.id')
            ->select('tipo','tipoProyecto',DB::raw('count(*) as cantidad'))
            ->groupBy('pry.tipo','tipop.tipoProyecto')
            ->get();
        $data['sumapry']=$sumapry;
        $data['lastproyectos']=Proyectos::orderBy('fechaCreacion','desc')->limit(5)->select('idProyecto','nombreProyecto','imagen','mimeType','fechaCreacion')->get();
        //$data
        //dd($data);
        return view('menu.blog',$data);
    }

    public function getHorasSociales(){
        $data=[];
        $proyecto = Proyectos::where('tipo',2)->get();
        $data['proyecto']=$proyecto;
        $sumapry=DB::table('proyectos as pry')
            ->join('tiposproyectos as tipop','pry.tipo','=','tipop.id')
            ->select('tipo','tipoProyecto',DB::raw('count(*) as cantidad'))
            ->groupBy('pry.tipo','tipop.tipoProyecto')
            ->get();
        $data['sumapry']=$sumapry;
        $data['lastproyectos']=Proyectos::orderBy('fechaCreacion','desc')->limit(5)->select('idProyecto','nombreProyecto','imagen','mimeType','fechaCreacion')->get();
        //$data
        //dd($data);
        return view('menu.proyectoHoras',$data);
    }

    public function getDisponibles(){
        $data=[];
        $proyecto = Proyectos::where('tipo',3)->get();
        $data['proyecto']=$proyecto;
        $sumapry=DB::table('proyectos as pry')
            ->join('tiposproyectos as tipop','pry.tipo','=','tipop.id')
            ->select('tipo','tipoProyecto',DB::raw('count(*) as cantidad'))
            ->groupBy('pry.tipo','tipop.tipoProyecto')
            ->get();
        $data['sumapry']=$sumapry;
        $data['lastproyectos']=Proyectos::orderBy('fechaCreacion','desc')->limit(5)->select('idProyecto','nombreProyecto','imagen','mimeType','fechaCreacion')->get();
        //$data
        //dd($data['lastproyectos']);
        return view('menu.proyectoDisponibles',$data);
    }

   	
}
