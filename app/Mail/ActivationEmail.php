<?php

namespace App\Mail;

use App\Models\PoBox;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $poBoxNumber;

    public function __construct($poBoxNumber)
    {
        $this->poBoxNumber = $poBoxNumber;
    }

    public function build()
    {
        return $this->view('activation')
            ->subject('Activation for Priority Express')
            ->with([
                'name' => 'Cristofer Guardia', // You can modify this to fetch from database if needed
                'poBoxNumber' => $this->poBoxNumber,
            ]);
    }
}
