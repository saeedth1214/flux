<?php

namespace Modules\UI\Http\Livewire\Menu;

use Livewire\Component;

class SecondPage extends Component
{
    public function render()
    {
        return view('ui::livewire.menu.second-page')
            ->layout('ui::layouts.app');
    }
}
