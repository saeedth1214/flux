<?php

namespace Modules\UI\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Modules\UI\Http\Livewire\Menu\SideBar;

class UIModuleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'ui');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'ui');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadLivewireComponents();
    }

    private function loadLivewireComponents()
    {
        Livewire::component('menu.side-bar', SideBar::class);
    }
}
