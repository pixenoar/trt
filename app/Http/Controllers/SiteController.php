<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class SiteController extends Controller{

    public function index(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        return view('site.index', compact('categorias'));
    }

    public function empresa(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        return view('site.empresa', compact('categorias'));
    }

    public function servicios(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        return view('site.servicios', compact('categorias'));
    }

    // Servicios

    public function reformaDeCasas(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(4);
        return view('site.servicios.redeca', compact('categorias', 'servicio'));
    }

    public function oficinasLocales(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(3);
        return view('site.servicios.ofylo', compact('categorias', 'servicio'));
    }

    public function fachadas(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(2);
        return view('site.servicios.facha', compact('categorias', 'servicio'));
    }

    public function electricidad(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(1);
        return view('site.servicios.elec', compact('categorias', 'servicio'));
    }

    public function pinturaDecoracion(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(5);
        return view('site.servicios.pintu', compact('categorias', 'servicio'));
    }

    public function pladur(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(10);
        return view('site.servicios.pladur', compact('categorias', 'servicio'));
    }

    public function forjadosAceros(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(7);
        return view('site.servicios.acero', compact('categorias', 'servicio'));
    }

    public function certificadoEnergetico(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(8);
        return view('site.servicios.certi', compact('categorias', 'servicio'));
    }

    public function obraNueva(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(12);
        return view('site.servicios.obra', compact('categorias', 'servicio'));
    }

    public function casasDeMadera(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        $servicio = Categoria::find(13);
        return view('site.servicios.madera', compact('categorias', 'servicio'));
    }


    // Fin de Servicios

    public function trabajos(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        return view('site.trabajos', compact('categorias'));
    }    

    public function garantia(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        return view('site.garantia', compact('categorias'));
    }

    public function contacto(){
        $categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
        return view('site.contacto', compact('categorias'));
    }
    
}
