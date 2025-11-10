<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $instansi;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $instansi, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->instansi = $instansi;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\Mail\Mailable
     */
    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->view('emails.contact_form');  // Assuming you create an email view
    }
}
