<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
    #[Validate('required|string')]
    public ?string $captcha = null;
    #[Validate('required|string|max:255')]
    public string $name = '';
    #[Validate('required|email')]
    public string $email = '';
    public string $subject = '';
    #[Validate('required|string|max:1000')]
    public string $message = '';

    public function render()
    {
        return view('livewire.contact-form');
    }

    /**
     * @throws ValidationException
     */
    public function submit(): void
    {
        $this->validate();

        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret='.
            config('services.recaptcha.secret') .
            '&response=' . $this->captcha
        );

        $success = $response->json()['success'];

        if (!$success) {
            $this->dispatch('notification', type: 'error', message: 'There was a problem sending the form!');
        }

        Mail::to('antonio@antonioramirez.co')->send(new \App\Mail\ContactForm(
            name: $this->name,
            email: $this->email,
            title: $this->subject,
            message: $this->message,
        ));

        $this->dispatch('notification', type: 'success', message: 'Message successfully sent!');
    }
}
