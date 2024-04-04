<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
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

    public function submit(): void
    {
        $this->validate();

        dd($this->name);
    }
}
