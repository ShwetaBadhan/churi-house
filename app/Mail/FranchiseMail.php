<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class FranchiseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $franchise;
    public $type;

    public function __construct($franchise, $type)
    {
        $this->franchise = $franchise;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type == 'admin') {
            return $this->subject('New Franchise Application Received')
                ->view('emails.franchise-admin');
        }

        return $this->subject('Franchise Application Received - Churi House')
            ->view('emails.franchise-customer');
    }
}
