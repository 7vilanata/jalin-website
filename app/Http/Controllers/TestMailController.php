<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class TestMailController extends Controller
{
   public function sendTestEmail()
    {
        $data = ['message' => 'This is a test email from Zoho Mail!'];

        Mail::send('emails.test', $data, function ($message) {
            $message->to('raffi@esensidigital.com')
                    ->subject('Test Email from Zoho Mail');
        });

        return "Test email sent!";
    }
}
