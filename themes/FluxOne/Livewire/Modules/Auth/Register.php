<?php

namespace Themes\FluxOne\Livewire\Modules\Auth;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('pages.modules.auth.register')
            ->layout('layouts.auth');
    }
}
