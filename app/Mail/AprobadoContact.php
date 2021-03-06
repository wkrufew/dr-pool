<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AprobadoContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public $subject = "Contract Approval";

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->view('mail.aprobado-contact');
    }
}
