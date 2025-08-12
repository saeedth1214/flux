<?php

namespace Modules\Auth\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('auth::livewire.login')->layout('auth::layouts.auth');
    }
}
