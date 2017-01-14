<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tiposProyectos;
use App\Proyectos;
use Session;
use Redirect;
use Image;
use Response;
use Illuminate\Support\Facades\DB;
use finfo;
use Yajra\Datatables\Facades\Datatables;
use Auth;
use Crypt;

class proyectoController extends Controller
{
    public function index(){
         $data = ['title'            => 'Gestion de Proyectos'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Proyectos', 'url' => '#'],
                    ['nom'  =>  'Lista de Proyectos', 'url' => '#']
                ]]; 

    
        return view('proyectos.index',$data);

    }

    public function getDataRowsProyectos(){

        $proyectos=DB::table('proyectos as pry')
            ->join('tiposproyectos as tipo','pry.tipo','=','tipo.id')
            ->join('usuarios as usu','pry.idUsuarioCrea','=','usu.id')
            ->select('pry.idProyecto','pry.nombreProyecto','tipo.tipoProyecto',DB::raw('concat(usu.nombre," ",usu.apellidos) as nombres'),'pry.fechaCreacion')
            ->orderBy('idProyecto','desc');
        

        return Datatables::of($proyectos)
            ->addColumn('eliminar',function ($dt){
                //'.route('bitacora.detalle',['idBitacora' => Crypt::encrypt($dt->idBitacora)]).'

                return '<a href="'.route('proyectos.edit', ['idProyecto'=>$dt->idProyecto]).'" class="btn btn-xs btn btn-warning btn-perspective"> Editar</a>'.' '.'<a href="'.route('proyecto.destroy', ['idProyecto'=>Crypt::encrypt($dt->idProyecto)]).'" class="btn btn-xs btn btn-danger btn-perspective"> Eliminar</a>';

            })
            ->make(true);

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
    
    //dd($request->all());
    $file=$request['path'];
    //dd($file->openFile()->fread($file->getSize()));
    $imagen=$file->openFile()->fread($file->getSize());
    
    $proyecto= new Proyectos();
    $proyecto->nombreProyecto=$request->nombreProyecto;
    $proyecto->descripcion=$request->descripcion;
    $proyecto->tipo=$request->tipo;
    $proyecto->origen=$request->origen;
    $proyecto->imagen=$imagen;
    $proyecto->mimeType=$file->getMimeType();
    $proyecto->idUsuarioCrea=1;
    $proyecto->save();
	
    Session::flash('message','Se ha creado proyecto creado correctamente, puede visualizar en el menu de Proyeccion Social del sitio web.');
    return redirect()->route('proyectos.index');
    }

    

    public function edit($idProyecto){
        //dd($idProyecto);
         $data = ['title'            => 'Gestion de Proyectos'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Proyectos', 'url' => '#'],
                    ['nom'  =>  'Actualizar Proyecto', 'url' => '#']
                ]]; 
        $proyecto=Proyectos::find($idProyecto);
        $data['proyecto']=$proyecto;
        $tipos=tiposProyectos::all();
        $data['tipos']=$tipos;
        //dd($data);
        return view('proyectos.editar',$data);
    }

    public function actualizar(Request $request){
       // dd($request->all());

        $proyecto=Proyectos::find($request->idProyecto);
        $proyecto->nombreProyecto=$request->nombreProyecto;
        $proyecto->descripcion=$request->descripcion;
        $proyecto->tipo=$request->tipo;
        $proyecto->origen=$request->origen;
        $proyecto->idUsuarioModifica=Auth::user()->id;
        
            $file= $request->file('path');
            //dd($file);
            //primero verifica si hay archivos a subir
            if(!empty($file)){
                $imagen=$file->openFile()->fread($file->getSize());
                $proyecto->imagen=$imagen;
                $proyecto->mimeType=$file->getMimeType();
                 $proyecto->save();

                Session::flash('message','Se ha actualizado proyecto creado correctamente, podra visualizarlo en el menu de Proyeccion Social del sitio web.');
                return redirect()->route('proyectos.index');

            }
            else{
                 $proyecto->save();

                Session::flash('message','Se ha actualizado proyecto creado correctamente, podra visualizarlo en el menu de Proyeccion Social del sitio web.');
                return redirect()->route('proyectos.index');
            }
        //}
        //dd($request->all());
       
    }

    public function show(){
        return view('proyectos.editar');
    }

    public function eliminar($idProyecto){
        //dd($idProyecto);
        $idProy=Crypt::decrypt($idProyecto);

        $proyecto=Proyectos::find($idProy);
       // dd($proyecto);
        $proyecto->delete();

        Session::flash('message','Se ha eliminado proyecto creado correctamente, ya no podra visualizarlo en el menu de Proyeccion Social del sitio web.');
                return redirect()->route('proyectos.index');

    }
}
