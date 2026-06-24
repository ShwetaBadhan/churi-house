<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $career;
    public $type;

    public function __construct($career, $type)
    {
        $this->career = $career;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type == 'admin') {
            return $this->subject('New Career Application Received')
                ->view('emails.career-admin');
        }

        return $this->subject('Career Application Received - Churi House')
            ->view('emails.career-customer');
    }
}
