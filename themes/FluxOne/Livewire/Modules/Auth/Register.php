<?php

namespace Themes\Fluxone\Livewire\Modules\Auth;

use Exception;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\User\Entities\V1\User\User;
use Themes\Fluxone\Livewire\Modules\Auth\Forms\RegisterForm;

class Register extends Component
{

    public RegisterForm $form;

    public function register()
    {
        try {
            $validatedData = $this->form->validate();
            $validatedData['password'] = Hash::make($validatedData['password']);
            User::query()->create($validatedData);
            request()->session()->flash('success', 'ثبت نام با موفقیت انجام شد.');
            return redirect()->route('auth.login');
        } catch (Exception $ex) {
            request()->session()->flash('failed', 'مشکلی در روند ثبت نام شما رخ داده است.');
        }
    }

    public function render()
    {
        return view('pages.modules.auth.register')
            ->layout('layouts.auth');
    }
}
