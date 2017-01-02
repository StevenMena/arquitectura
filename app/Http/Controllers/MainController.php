<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function getFases(){

    	return view('navs.fases');
    }

   	public function getContacto(){
   		//configuaración
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 1250;
        $config['map_height'] = 500;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(13.7212017, -89.2026063)
 
            });
        }
        centreGot = true;';
 
        \Gmaps::initialize($config);
 
        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        \Gmaps::add_marker($marker);
 
        $map = \Gmaps::create_map();
 		
 		//return $map;
        //Devolver vista con datos del mapa
        return view('menu.contacto', compact('map'));
   	}
}
