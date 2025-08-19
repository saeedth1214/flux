<?php

namespace Themes\FluxOne\Livewire\Modules\Dashboard;

use Livewire\Component;

class Second extends Component
{
    public function render()
    {
        return view('pages.modules.dashboard.second')->layout('layouts.app');
    }
}
