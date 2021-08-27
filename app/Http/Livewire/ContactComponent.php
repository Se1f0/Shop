<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Thanks,Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
