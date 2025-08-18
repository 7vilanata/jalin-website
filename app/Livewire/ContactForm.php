<?php

namespace App\Livewire;

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

    public function submit()
    {
        $this->validate();

        // Here you can process the data, like sending an email or storing it in the database.

        session()->flash('success', 'Message sent successfully!');
        $this->reset();  // Reset the form after submission

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
