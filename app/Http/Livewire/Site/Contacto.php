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
    public $captcha;

    // --------

    public function enviar(){

        $this->validate(
            [
            'nombre' => 'required|string|max:128',
            'telefono' => 'required|string|max:128',
            'email' => 'required|email|string|max:128',
            'mensaje' => 'required|string',
            'captcha' => 'required|integer|size:10',
            ],
            [
                'captcha.size' => 'La suma es incorrecta.',
            ]
        );

        if($this->captcha == 10){
            Mail::to('gestion@todoreformastenerife.com')->send(new FormularioContacto($this->nombre, $this->telefono, $this->email, $this->mensaje));
        }

        $this->reset(['nombre', 'telefono', 'email', 'mensaje', 'captcha']);

        session()->flash('enviado', 'Gracias por utilizar nuestro servicio de contacto, respondemos diariamente todas las consultas.');
        
    }

    public function render(){
        return view('livewire.site.contacto');
    }

}