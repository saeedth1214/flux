<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->resolveModules();
    }

    private function resolveModules()
    {
        $modulesFile = base_path('modules.json');

        if (!file_exists($modulesFile)) {
            return;
        }

        $modules = json_decode(file_get_contents($modulesFile), true);

        foreach ($modules as $moduleName => $config) {
            if (!empty($config['enabled'])) {
                $providerClass = "Modules\\{$moduleName}\\Providers\\{$moduleName}ModuleServiceProvider";
                $routeProviderClass = "Modules\\{$moduleName}\\Providers\\{$moduleName}RoutesServiceProvider";

                if (class_exists($providerClass)) {
                    $this->app->register($providerClass);
                }
                if (class_exists($routeProviderClass)) {
                    $this->app->register($routeProviderClass);
                }
            }
        }
    }
}
