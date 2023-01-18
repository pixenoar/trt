<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Models\Trabajo;

class TrabajosRelacionados extends Component{

    public $moCategoria;
    public $moTrabajo;

    // --------

    public function verTrabajo($trabajo_id){
        $this->moTrabajo = Trabajo::find($trabajo_id);
        usleep(200000);
    }

    public function render(){
        return view('livewire.site.trabajos-relacionados', [
            'trabajos' => Trabajo::where('estado', 1)->where('categoria_id', $this->moCategoria->id)->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
    }

}