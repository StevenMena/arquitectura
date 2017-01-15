<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticias;
use Session;
use Redirect;
class NoticiasController extends Controller
{
    public function index(){
    $data = ['title'            => 'Gestion de Usuarios'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Usuarios', 'url' => '#'],
                    ['nom'  =>  'Lista de Usuarios', 'url' => '#']
                ]]; 
  	$noticias= Noticias::all();
    $data['noticias']=$noticias;
   	return view('noticias.index', $data);

    }

    public function create(){
    	 $data = ['title'            => 'Gestion de Usuarios'
                ,'subtitle'         => ''
                ,'breadcrumb'       => [
                    ['nom'  =>  'Gestion de Usuarios', 'url' => '#'],
                    ['nom'  =>  'Lista de Usuarios', 'url' => '#']
                ]]; 
   
    	return view('noticias.crear', $data);
    }

    public function store(Request $request){
      $conteo=Noticias::all();
      if(count($conteo)<20)
      {
        $file=$request['path'];
    	$imagen=$file->openFile()->fread($file->getSize());
        $noticia = new Noticias();
        $noticia->nombreNoticia=$request->nombreNoticia;
        $noticia->textoNoticia=$request->textoNoticia;
        $noticia->archivo=$imagen;
        $noticia->save();

        Session::flash('message','Noticia creada correctamente');
      } else {
        Session::flash('message','Se ha superado el número de noticias almacenadas, por favor elimine noticias antiguas');
      }
    	return redirect::to('/noticias/noticias');

    }

    public function edit($id){
    	$data = ['title'            => 'Gestion de Usuarios' 
                ,'subtitle'         => ''];
    	$noticia=Noticias::find($id);
    	$data['noticia']=$noticia;
    	return view('noticias.editar',$data);
    }

    public function update($id, Request $request){
        /* Busca la noticia*/
    	$noticia=Noticias::find($id);
    	/* Convierte contenido para guardar en db
    	$file=$request['path'];
    	$imagen=$file->openFile()->fread($file->getSize());
        /* Asigna campos para actualizar*/
        $noticia->fill($request->all());
        $noticia->save();

   		Session::flash('message','Noticia actualizado');
    	return redirect::to('/noticias/noticias');     
    
    }

    public function destroy($id){

    }

    public function show($id){
    	Noticias::destroy($id);
    	Session::flash('message','Noticia Eliminada');
    	return redirect::to('/noticias/noticias');     
    	
    }
}
