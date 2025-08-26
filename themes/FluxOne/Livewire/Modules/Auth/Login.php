<?php

namespace Themes\Fluxone\Livewire\Modules\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\Base\Rules\MobileNumberRule;

class Login extends Component
{
    #[Validate([
        'required',
        'string',
        new MobileNumberRule
    ])]
    public string $mobile = '';

    #[Validate([
        'required',
        'string',
    ])]
    public string $password = '';

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'mobile' => $this->mobile,
            'password' => $this->password,
        ])) {
            request()->session()->regenerate();
            request()->session()->flash('success', __('v1.auth::auth.login.success'));
        } else {
            request()->session()->flash('failed', __('v1.auth::auth.login.failed'));
        };
        $this->reset(['password']);
    }

    public function render()
    {
        return view('pages.modules.auth.login')
            ->layout('layouts.auth');
    }
}
