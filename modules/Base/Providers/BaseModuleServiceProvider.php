<?php

namespace Modules\Base\Providers;

use Illuminate\Support\ServiceProvider;

class BaseModuleServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'Base');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Base');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}
