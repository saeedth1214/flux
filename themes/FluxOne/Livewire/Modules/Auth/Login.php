<?php

namespace Themes\FluxOne\Livewire\Modules\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('pages.modules.auth.login')
            ->layout('layouts.auth');
    }
}
