<?php

namespace Themes\Fluxone\Livewire\Modules\Dashboard;

use Livewire\Component;

class First extends Component
{
    public function render()
    {
        return view('pages.modules.dashboard.first')->layout('layouts.app');
    }
}
