<?php

namespace App\Http\Livewire\Site;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContacto;

class Contacto extends Component{

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;

    // --------

    public function enviar(){

        $this->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'mensaje' => 'required|string|max:255',
        ]);

        Mail::to('contacto@todoreformastenerife.com')->send(new FormularioContacto($this->nombre, $this->telefono, $this->email, $this->mensaje));

        $this->reset(['nombre', 'telefono', 'email', 'mensaje']);

        session()->flash('enviado', 'Gracias por utilizar nuestro servicio de contacto, respondemos diariamente todas las consultas.');
        
    }

    public function render(){
        return view('livewire.site.contacto');
    }

}