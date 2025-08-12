<?php

namespace Modules\Order\Providers;

use Illuminate\Support\ServiceProvider;

class OrderModuleServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'Order');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Order');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}
