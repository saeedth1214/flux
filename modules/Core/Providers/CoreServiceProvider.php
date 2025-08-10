<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Auth\Providers\ModuleServiceProvider as AuthModuleServiceProvider;
use Modules\UI\Providers\ModuleServiceProvider as UIModuleServiceProvider;

class CoreServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->resolveAuthModuleProvider();
        $this->resolveUIModuleProvider();
    }

    private function resolveAuthModuleProvider()
    {
        $this->app->register(AuthModuleServiceProvider::class);
    }

    private function resolveUIModuleProvider()
    {
        $this->app->register(UIModuleServiceProvider::class);
    }
}
