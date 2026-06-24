<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;
    public $type;

    public function __construct($subscriber, $type)
    {
        $this->subscriber = $subscriber;
        $this->type = $type;
    }

    public function build()
    {
        if ($this->type == 'admin') {
            return $this->subject('New Newsletter Subscription')
                ->view('emails.subscribe-admin');
        }

        return $this->subject('Welcome to Churi House Newsletter')
            ->view('emails.subscribe-customer');
    }
}
