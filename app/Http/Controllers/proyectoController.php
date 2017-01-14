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
            ->select('pry.idProyecto','pry.nombreProyecto','tipo.tipoProyecto',DB::raw('concat(usu.nombre," ",usu.apellidos) as nombres'),'pry.fechaCreacion');
        

        return Datatables::of($proyectos)
            ->addColumn('eliminar',function ($dt){
                //'.route('bitacora.detalle',['idBitacora' => Crypt::encrypt($dt->idBitacora)]).'
                return '<a href="'.route('proyectos.edit',['idProyecto'=>$proyecto->id]).'" class="btn btn-xs btn btn-warning btn-perspective"> Editar</a>'.' '.'<a href="" class="btn btn-xs btn btn-danger btn-perspective"> Eliminar</a>';
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

    public function getImage(){

        //$file_info = new finfo(FILEINFO_MIME_TYPE);
        $proyecto = Proyectos::find(1);
         return response()->make($proyecto->imagen, 200, array(
        'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($proyecto->imagen)
        ));
        
        /*$pic = Image::make($proyecto->imagen);
        $response = Response::make($pic->encode('png'));

        //setting content-type
        $response->header('Content-Type', 'image/png');

        return $response;*/
    }

    public function edit(){
        return view('proyectos.editar');
    }

    public function show(){
        return view('proyectos.editar');
    }
}
