<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthModuleServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'auth');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'auth');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}
