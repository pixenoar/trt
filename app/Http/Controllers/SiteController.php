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
    
}
