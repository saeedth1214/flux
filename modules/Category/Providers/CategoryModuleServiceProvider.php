<?php

namespace Modules\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryModuleServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'Category');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Category');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}
