<?php

namespace App\Livewire;

use App\Services\GoogleSheetsService;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMailable;
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
        $this->validate();

        $data = [
            $this->name,
            $this->email,
            $this->instansi,
            $this->message,
            now()->setTimezone('Asia/Jakarta')->toDateTimeString(),  // Add timestamp for when the message was sent
        ];
        $spreadsheetId = '1eStefVSVOGNy7mA_s8S-8gn0hP1NycQyVgvYbvODzDA';  // Replace with your actual Spreadsheet ID

        // Append data to the Google Sheet
        $googleSheetsService->appendToSpreadsheet($spreadsheetId, $data);

        // Send email
        // Mail::to('wiboworaffi82@gmail.com')->send(new ContactFormMailable($this->name, $this->email, $this->instansi, $this->message));


        session()->flash('success', 'Message sent successfully!');
        $this->reset();  // Reset the form after submission

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
