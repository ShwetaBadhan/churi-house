<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $type;

    public function __construct($contact, $type)
    {
        $this->contact = $contact;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type == 'admin') {
            return $this->subject('New Contact Enquiry Received')
                ->view('emails.contact-admin');
        }

        return $this->subject('Contact Request Received - Churi House')
            ->view('emails.contact-customer');
    }
}
