<?php

namespace Modules\UI\Http\Livewire\Menu;

use Livewire\Component;

class FirstPage extends Component
{
    public function render()
    {
        return view('ui::livewire.menu.first-page')
            ->layout('ui::layouts.app');
    }
}
