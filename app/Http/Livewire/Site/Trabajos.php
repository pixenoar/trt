<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

use Illuminate\Support\Str;

use App\Models\Categoria;
use App\Models\Trabajo;

class Trabajos extends Component{


    // --------

    public function render(){
        return view('livewire.site.trabajos', [
            'trabajos' => Trabajo::where('estado', 1)->orderBy('created_at', 'desc')->limit(6)->get(),
        ]);
    }

}