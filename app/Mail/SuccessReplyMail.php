<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuccessReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    // Inject the name (and any other data you want to pass) into the constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function build()
    {
        return $this->subject('We got your message!')
                    ->view('emails.success_reply');  // Create a new view for the email
    }
}