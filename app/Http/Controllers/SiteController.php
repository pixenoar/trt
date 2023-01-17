<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class SiteController extends Controller{

    public function index(){
        $categorias = Categoria::orderBy('orden')->get();
        return view('site.index', compact('categorias'));
    }

    public function empresa(){
        $categorias = Categoria::orderBy('orden')->get();
        return view('site.empresa', compact('categorias'));
    }

    public function servicios(){
        $categorias = Categoria::orderBy('orden')->get();
        return view('site.servicios', compact('categorias'));
    }

    // Servicios

    public function serviciosReDeCa(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(4);
        return view('site.servicios.redeca', compact('categorias', 'servicio'));
    }

    public function serviciosOfyLo(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(3);
        return view('site.servicios.ofylo', compact('categorias', 'servicio'));
    }

    public function serviciosFacha(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(2);
        return view('site.servicios.facha', compact('categorias', 'servicio'));
    }

    public function serviciosElec(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(1);
        return view('site.servicios.elec', compact('categorias', 'servicio'));
    }

    public function serviciosPintu(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(5);
        return view('site.servicios.pintu', compact('categorias', 'servicio'));
    }

    public function serviciosPladur(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(10);
        return view('site.servicios.pladur', compact('categorias', 'servicio'));
    }

    public function serviciosAcero(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(7);
        return view('site.servicios.acero', compact('categorias', 'servicio'));
    }

    public function serviciosCerti(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(8);
        return view('site.servicios.certi', compact('categorias', 'servicio'));
    }

    public function serviciosObra(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(12);
        return view('site.servicios.obra', compact('categorias', 'servicio'));
    }

    public function serviciosMadera(){
        $categorias = Categoria::orderBy('orden')->get();
        $servicio = Categoria::find(13);
        return view('site.servicios.madera', compact('categorias', 'servicio'));
    }



    // Fin de Servicios

    public function trabajos(){
        $categorias = Categoria::orderBy('orden')->get();
        return view('site.trabajos', compact('categorias'));
    }    

    public function garantia(){
        $categorias = Categoria::orderBy('orden')->get();
        return view('site.garantia', compact('categorias'));
    }

    public function contacto(){
        $categorias = Categoria::orderBy('orden')->get();
        return view('site.contacto', compact('categorias'));
    }
    
}
