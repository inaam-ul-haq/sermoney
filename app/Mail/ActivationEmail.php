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
    public $base64Image;
    

    public function __construct($poBoxNumber,$name)
    {
        $this->poBoxNumber = $poBoxNumber;
        $this->name = $name;
        $path = public_path('asset/image/email.jpeg');

        // Read image file
        $image = file_get_contents($path);

        // Convert to base64
        $this->base64Image = base64_encode($image);
        
    }

    public function build()
    {
        return $this->view('activation')
            ->subject('Activation for Priority Express')
            ->with([
                'name' =>$this->name, // You can modify this to fetch from database if needed
                'poBoxNumber' => $this->poBoxNumber,
                'base64Image' => $this->base64Image,
            ]);
    }
}
