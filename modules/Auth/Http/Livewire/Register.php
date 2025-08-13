<?php

namespace Modules\Auth\Http\Livewire;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Modules\Base\Rules\MobileNumberRule;
use Modules\User\Fields\UserFields;
use Modules\User\Services\UserService;

class Register extends Component
{
    public string $first_name;
    public string $last_name;
    public string $mobile;
    public string $email;
    public string $password;
    public string $confirmed_password;

    protected function rules()
    {
        return [
            'first_name' => 'required|min:5|max:128',
            'last_name' => 'required|min:5|max:128',
            'mobile' => [
                'required',
                'number',
                Rule::unique(UserFields::_TABLE, UserFields::_MOBILE),
                new MobileNumberRule()
            ],
            'email' => [
                'email',
                Rule::unique(UserFields::_TABLE, UserFields::_EMAIL)
            ],
            'password' => [
                'required',
                'confirmed',
                Password::min(8)->letters()->numbers(),
            ]
        ];
    }

    public function register(UserService $userService)
    {
        $this->validate();

        $userService->createUser([
            UserFields::_FIRST_NAME => $this->first_name,
            UserFields::_LAST_NAME => $this->last_name,
            UserFields::_MOBILE => $this->mobile,
            UserFields::_EMAIL => $this->email,
            // UserFields::_EMAIL => $this->
        ]);
    }

    public function render()
    {
        return view('auth::livewire.register')
            ->layout('auth::layouts.auth');
    }
}
