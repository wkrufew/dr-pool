<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormularioContact extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;

    public $subject = "Information Contact";

    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

   
    public function build()
    {
        return $this->view('mail.formulario-contact');
    }
}
