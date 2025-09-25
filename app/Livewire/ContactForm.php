<?php

namespace App\Livewire;

use App\Services\GoogleSheetsService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Mail\SuccessReplyMail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $instansi;
    public $message;


    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email',
        'instansi' => 'nullable|max:255',
        'message' => 'required|max:200',
    ];

    public function submit(GoogleSheetsService $googleSheetsService)
    {
        // Validate form input
        $this->validate();

        // Prepare the data to append to Google Sheets
        $data = [
            $this->name,
            $this->email,
            $this->instansi,
            $this->message,
            now()->setTimezone('Asia/Jakarta')->toDateTimeString(), // Add timestamp for when the message was sent
        ];
        $spreadsheetId = '1eStefVSVOGNy7mA_s8S-8gn0hP1NycQyVgvYbvODzDA';  // Replace with your actual Spreadsheet ID

        // Append data to the Google Sheet
        $googleSheetsService->appendToSpreadsheet($spreadsheetId, $data);

        Mail::to($this->email)->send(new SuccessReplyMail($this->name));
        // Flash success message and reset the form
        session()->flash('success', 'Message sent successfully!');
        $this->reset();  // Reset the form after submission
    }

    // Function to send an email via Zoho Mail API
    // public function sendEmail($name, $email, $instansi, $message)
    // {
    //     // Retrieve the access token from cookies (you should have set this earlier)
    //     $accessToken = Cookie::get('zoho_access_token'); // Or retrieve it from your file/database

    //     if (!$accessToken) {
    //         // If no access token is found, attempt to refresh the token
    //         $accessToken = $this->generateAccessToken();
    //         if (!$accessToken) {
    //             return response()->json(['error' => 'Failed to obtain access token'], 400);
    //         }
    //     }
    //     // Set the Zoho Mail API endpoint (replace with your actual account ID)
    //     $accountId = config('services.zoho.acc_id');  // Replace with your actual Zoho account ID
    //     $url = "https://mail.zoho.com/api/accounts/{$accountId}/messages";

    //     // Prepare the email data
    //     $emailData = [
    //         'fromAddress' => 'admin@generasiraw.org',  // Your Zoho email address
    //         'toAddress' => $email,                 // Recipient email address
    //         'subject' => 'Contact Form Message',
    //         'content' =>  "Thankyou For your Submission",  // Email body
    //     ];

    //     // Send the email via Zoho API using the access token
    //     $response = Http::withHeaders([
    //         'Authorization' => 'Zoho-oauthtoken ' . $accessToken,
    //         'Accept' => 'application/json',
    //         'Content-Type' => 'application/json'
    //     ])->post($url, $emailData);


    //     // Check if the request was successful
    //     if ($response->successful()) {
    //         return response()->json(['message' => 'Email sent successfully!']);
    //     } else {
    //         // Log the error and return the response with error details
    //         Log::error('Failed to send email via Zoho: ' . $response->body());
    //         return response()->json(['error' => 'Failed to send email', 'details' => $response->body()], 400);
    //     }
    // }

    // public function generateAccessToken()
    // {
    //     $refreshToken = config('services.zoho.refresh_token');
    //     // dd(config('app.zoho.refresh_token'));

    //     if (!$refreshToken) {
    //         return null; // Return null if refresh token is not available
    //     }

    //     $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
    //         'client_id' => config('services.zoho.client_id'),
    //         'client_secret' => config('services.zoho.client_secret'),
    //         'refresh_token' => $refreshToken,
    //         'grant_type' => 'refresh_token',
    //         'scope' => 'ZohoMail.messages.CREATE'
    //     ]);


    //     // Process the response (access token, refresh token, etc.)
    //     if ($response->successful()) {
    //         $data = $response->json();

    //         // Store tokens in cookies for 30 days
    //         $newAccessToken = $data['access_token'];
    //         $expiresAt = $data['expires_in'];

    //         // Set the access token cookie (expires in 30 days)
    //         Cookie::queue('zoho_access_token', $newAccessToken, $expiresAt);
    //         Cookie::queue('zoho_access_token_expires_at', $expiresAt, 43200);

    //         // Optionally log the cookies' values
    //         // Log::info('Access Token Cookie: ' . $accessToken);
    //         // Log::info('Refresh Token Cookie: ' . $refreshToken);

    //         return $newAccessToken; // Redirect after successful OAuth authentication
    //     } else {
    //         // Log::error('Zoho OAuth failed: ' . $response->body());
    //         Log::error('Failed to refresh access token via Zoho: ' . $response->body());
    //         return null;
    //     }
    // }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
