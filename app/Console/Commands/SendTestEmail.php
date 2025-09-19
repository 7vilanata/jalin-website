<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendTestEmail extends Command
{
    // Define the command signature
    protected $signature = 'send:testemail';

    // The command description
    protected $description = 'Send a test email from Zoho Mail using Laravel';

    // Create a new command instance.
    public function __construct()
    {
        parent::__construct();
    }

    // Execute the console command.
    public function handle()
    {
        // Debugging: Output to confirm the command starts
        $this->info('Starting email send process...');

        try {
            // Use Mail::raw() to send plain text email
            Mail::raw('This is a test email sent from Laravel via an Artisan command.', function ($message) {
                $message->to('raffi@esensidigital.com')  // Replace with the recipient's email
                        ->subject('Test Email from Zoho Mail');
            });

            // Debugging: Output to confirm email was sent
            $this->info('Test email sent successfully!');
        } catch (\Exception $e) {
            // If there was an error, output it
            $this->error('Error sending email: ' . $e->getMessage());
        }
    }
}

