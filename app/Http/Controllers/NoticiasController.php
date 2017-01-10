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
    	$file=$request['path'];
    	$imagen=$file->openFile()->fread($file->getSize());
        $noticia = new Noticias();
        $noticia->nombreNoticia=$request->nombreNoticia;
        $noticia->textoNoticia=$request->textoNoticia;
        $noticia->archivo=$imagen;
        $noticia->save();

        Session::flash('message','Noticias creado correctamente');
    	return redirect::to('noticias.crear');

    }


}
