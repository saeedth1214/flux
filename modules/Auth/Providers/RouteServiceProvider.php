<?php

namespace Modules\Auth\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function map()
    {
        $this->mapWebRoutes();
        $this->mapApiRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace('Modules\Auth\Routes')
            ->group(__DIR__ . '/../Routes/web.php');
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace('Modules\Auth\Routes')
            ->group(__DIR__ . '/../Routes/api.php');
    }
}
