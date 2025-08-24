<?php

namespace Themes\Fluxone\Livewire\Modules\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\User\Entities\V1\User\User;
use Themes\Fluxone\Livewire\Modules\Auth\Forms\RegisterForm;

class Register extends Component
{

    public RegisterForm $form;

    public function register()
    {
        $validatedData = $this->form->validate();
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::query()->create($validatedData);
        return redirect()->route('auth.login');
    }

    public function render()
    {
        return view('pages.modules.auth.register')
            ->layout('layouts.auth');
    }
}
