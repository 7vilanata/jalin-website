<?php

namespace App\Livewire;

use App\Services\GoogleSheetsService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Mail\SuccessReplyMail;
use Livewire\Component;
use App\Models\Contact;

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

        // Save the data to the database
        $contact = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'instansi' => $this->instansi,
            'message' => $this->message,
        ]);

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

        // Send the success email
        Mail::to($this->email)->send(new SuccessReplyMail($this->name));

        // Flash success message and reset the form
        session()->flash('success', 'Message sent successfully!');
        $this->reset();  // Reset the form after submission
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
