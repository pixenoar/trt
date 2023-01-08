<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

use Illuminate\Support\Str;

use App\Models\Categoria;
use App\Models\Trabajo;

class TrabajosInterior extends Component{

    public $moCategorias;
    public $moTrabajo;
    public $cantidad = 6;
    public $categoria_id = 0;

    // --------

    public function mount(){
        $this->moCategorias = Categoria::orderBy('orden')->limit(5)->get();
    }

    public function setCategoria($categoria_id){
        $this->categoria_id = $categoria_id;
        $this->reset('cantidad');
        usleep(200000);
    }

    public function cargar(){
        $this->cantidad = $this->cantidad + 3;
        usleep(200000);
    }  

    public function verTrabajo($trabajo_id){
        $this->moTrabajo = Trabajo::find($trabajo_id);
        usleep(200000);
    }

    public function render(){
        return view('livewire.site.trabajos-interior', [
            'trabajos' => Trabajo::where('estado', 1)->when($this->categoria_id, function ($query, $cid){ $query->where('categoria_id', $cid); })->orderBy('created_at', 'desc')->limit($this->cantidad)->get(),
        ]);
    }

}