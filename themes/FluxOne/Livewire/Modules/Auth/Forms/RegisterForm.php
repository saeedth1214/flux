<?php

namespace Themes\Fluxone\Livewire\Modules\Auth\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Modules\Base\Rules\MobileNumberRule;

class RegisterForm extends Form
{

    #[Validate('required|string|min:3|max:255')]
    public string $firstname;

    #[Validate('required|string|min:3|max:255')]
    public string $lastname;

    #[Validate([
        'required',
        new MobileNumberRule,
        'unique:users,mobile'
    ])]
    public string $mobile;

    #[Validate('email|unique:users,email')]
    public string $email;

    #[Validate('required|string|min:8|max:255|confirmed')]
    public string $password;

    #[Validate('required|string')]
    public string $password_confirmation;

}
