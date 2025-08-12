<?php

namespace Modules\Book\Providers;

use Illuminate\Support\ServiceProvider;

class BookModuleServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'Book');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Book');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }
}
