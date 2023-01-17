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
