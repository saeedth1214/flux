<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserModuleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'User');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'User');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}
