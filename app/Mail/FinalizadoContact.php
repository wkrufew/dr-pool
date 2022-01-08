<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FinalizadoContact extends Mailable
{
    use Queueable, SerializesModels;

    
    public $contac;

    public $subject = "Completion of Contract";

    public function __construct($contac)
    {
        $this->contac = $contac;
    }

    public function build()
    {
        return $this->view('mail.finalizado-contact');
    }
}
