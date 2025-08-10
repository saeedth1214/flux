<?php

namespace Modules\UI\Http\Livewire\Menu;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('ui::livewire.menu.dashboard')->layout('ui::layouts.app');
    }
}
