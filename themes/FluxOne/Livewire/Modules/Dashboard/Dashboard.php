<?php

namespace Themes\Fluxone\Livewire\Modules\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('pages.modules.dashboard.index')->layout('layouts.app');
    }
}
