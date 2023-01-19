<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class Politicas extends Component{

    public $cookie = false;

    public function mount(){
        if(Cookie::has('politicas')){
            $this->cookie = true;
        }
    }

    public function aceptar(){
        Cookie::queue('politicas', 'aceptada');        
        $this->cookie = true;
    }

    public function render(){
        return view('livewire.site.politicas');
    }

}
