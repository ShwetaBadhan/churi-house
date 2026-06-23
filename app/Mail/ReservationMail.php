<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $type;

    public function __construct($reservation, $type)
    {
        $this->reservation = $reservation;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type == 'admin') {
            return $this->subject('New Table Reservation Received')
                        ->view('emails.reservation-admin');
        }

        return $this->subject('Reservation Request Received - Churi House')
                    ->view('emails.reservation-customer');
    }
}