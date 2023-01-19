<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormularioContacto extends Mailable{

    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $mensaje;


    public function __construct($nombre, $telefono, $email, $mensaje){
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }


    public function envelope(){
        return new Envelope(
            subject: 'Consulta desde el formulario de contacto',
        );
    }

    public function content(){
        return new Content(
            view: 'site.emails.formulario',
        );
    }


    public function attachments(){
        return [];
    }
}
