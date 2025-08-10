<?php

namespace Modules\Core\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Modules\Auth\Providers\RouteServiceProvider as AuthRouteServiceProvider;
use Modules\UI\Providers\RouteServiceProvider as UIRouteServiceProvider;

class CoreRouteServiceProvider extends RouteServiceProvider
{

    public function register()
    {
        $this->resolveAuthModuleRouteProvider();
        $this->resolveUIModuleRouteProvider();
    }

    private function resolveAuthModuleRouteProvider()
    {
        $this->app->register(AuthRouteServiceProvider::class);
    }

    private function resolveUIModuleRouteProvider()
    {
        $this->app->register(UIRouteServiceProvider::class);
    }
}
