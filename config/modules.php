<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Commands\SetupCommand;
use Nwidart\Modules\Commands\Actions\UseCommand;
use Nwidart\Modules\Commands\Actions\DumpCommand;
use Nwidart\Modules\Commands\Actions\ListCommand;
use Nwidart\Modules\Commands\Make\JobMakeCommand;
use Nwidart\Modules\Commands\Actions\UnUseCommand;
use Nwidart\Modules\Commands\Database\SeedCommand;
use Nwidart\Modules\Commands\Make\MailMakeCommand;
use Nwidart\Modules\Commands\Make\RuleMakeCommand;
use Nwidart\Modules\Commands\Make\SeedMakeCommand;
use Nwidart\Modules\Commands\Make\TestMakeCommand;
use Nwidart\Modules\Commands\Actions\EnableCommand;
use Nwidart\Modules\Commands\Actions\UpdateCommand;
use Nwidart\Modules\Commands\Make\EventMakeCommand;
use Nwidart\Modules\Commands\Make\ModelMakeCommand;
use Nwidart\Modules\Commands\Actions\DisableCommand;
use Nwidart\Modules\Commands\Actions\InstallCommand;
use Nwidart\Modules\Commands\Make\ModuleMakeCommand;
use Nwidart\Modules\Commands\Make\PolicyMakeCommand;
use Nwidart\Modules\Commands\Publish\PublishCommand;
use Nwidart\Modules\Commands\Database\MigrateCommand;
use Nwidart\Modules\Commands\Make\FactoryMakeCommand;
use Nwidart\Modules\Commands\Make\RequestMakeCommand;
use Nwidart\Modules\Commands\LaravelModulesV6Migrator;
use Nwidart\Modules\Commands\Make\ListenerMakeCommand;
use Nwidart\Modules\Commands\Make\ProviderMakeCommand;
use Nwidart\Modules\Commands\Make\ResourceMakeCommand;
use Nwidart\Modules\Commands\Make\MigrationMakeCommand;
use Nwidart\Modules\Commands\Make\MiddlewareMakeCommand;
use Nwidart\Modules\Commands\Actions\ModuleDeleteCommand;
use Nwidart\Modules\Commands\Database\MigrateFreshCommand;
use Nwidart\Modules\Commands\Database\MigrateResetCommand;
use Nwidart\Modules\Commands\Make\NotificationMakeCommand;
use Nwidart\Modules\Commands\Database\MigrateStatusCommand;
use Nwidart\Modules\Commands\Make\ComponentViewMakeCommand;
use Nwidart\Modules\Commands\Make\RouteProviderMakeCommand;
use Nwidart\Modules\Commands\Database\MigrateRefreshCommand;
use Nwidart\Modules\Commands\Make\ComponentClassMakeCommand;
use Nwidart\Modules\Commands\Database\MigrateRollbackCommand;
use Nwidart\Modules\Commands\Make\CommandMakeCommand;
use Nwidart\Modules\Commands\Make\ControllerMakeCommand;
use Nwidart\Modules\Commands\Publish\PublishMigrationCommand;
use Nwidart\Modules\Commands\Publish\PublishTranslationCommand;
use Nwidart\Modules\Commands\Publish\PublishConfigurationCommand;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs'    => [
        'enabled'      => true,
        'path'         => base_path('stubs/light-weight-modules'),
        'files'        => [
            'scaffold/helpers' => 'Helpers/helpers.php',
            'composer'         => 'composer.json',
        ],
        'replacements' => [
            'routes/web'      => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/api'      => ['LOWER_NAME'],
            'vite'            => ['LOWER_NAME'],
            'json'            => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index'     => ['LOWER_NAME'],
            'views/master'    => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer'        => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
            ],
        ],
        'gitkeep'      => false,
    ],
    'paths'    => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),
        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key too false to not generate that folder
        */
        'generator' => [
            'config'          => ['path' => 'Config', 'generate' => false],
            'command'         => ['path' => 'Console', 'generate' => false],
            'migration'       => ['path' => 'Database/Migrations', 'generate' => false],
            'seeder'          => ['path' => 'Database/Seeders', 'generate' => true],
            'factory'         => ['path' => 'Database/factories', 'generate' => false],
            'model'           => ['path' => 'Entities', 'generate' => false],
            'routes'          => ['path' => 'Routes', 'generate' => false],
            'controller'      => ['path' => 'Http/Controllers', 'generate' => false],
            'filter'          => ['path' => 'Http/Middleware', 'generate' => false],
            'request'         => ['path' => 'Http/Requests', 'generate' => false],
            'provider'        => ['path' => 'Providers', 'generate' => true],
            'assets'          => ['path' => 'Resources/assets', 'generate' => false],
            'lang'            => ['path' => 'Resources/lang', 'generate' => false],
            'views'           => ['path' => 'Resources/views', 'generate' => false],
            'test'            => ['path' => 'Tests/Unit', 'generate' => false],
            'test-feature'    => ['path' => 'Tests/Feature', 'generate' => false],
            'repository'      => ['path' => 'Repositories', 'generate' => false],
            'event'           => ['path' => 'Events', 'generate' => false],
            'listener'        => ['path' => 'Listeners', 'generate' => false],
            'policies'        => ['path' => 'Policies', 'generate' => false],
            'rules'           => ['path' => 'Rules', 'generate' => false],
            'jobs'            => ['path' => 'Jobs', 'generate' => false],
            'emails'          => ['path' => 'Emails', 'generate' => false],
            'notifications'   => ['path' => 'Notifications', 'generate' => false],
            'resource'        => ['path' => 'Transformers', 'generate' => false],
            'component-view'  => ['path' => 'Resources/views/components', 'generate' => false],
            'component-class' => ['path' => 'View/components', 'generate' => false],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some of the commands provided
    | you can simply comment them out.
    |
    */
    'commands' => [
         CommandMakeCommand::class,
         ComponentClassMakeCommand::class,
         ComponentViewMakeCommand::class,
         ControllerMakeCommand::class,
         DisableCommand::class,
         DumpCommand::class,
         EnableCommand::class,
         EventMakeCommand::class,
         JobMakeCommand::class,
         ListenerMakeCommand::class,
         MailMakeCommand::class,
         MiddlewareMakeCommand::class,
         NotificationMakeCommand::class,
         ProviderMakeCommand::class,
         RouteProviderMakeCommand::class,
         InstallCommand::class,
         ListCommand::class,
         ModuleDeleteCommand::class,
         ModuleMakeCommand::class,
         FactoryMakeCommand::class,
         PolicyMakeCommand::class,
         RequestMakeCommand::class,
         RuleMakeCommand::class,
         MigrateCommand::class,
         MigrateFreshCommand::class,
         MigrateRefreshCommand::class,
         MigrateResetCommand::class,
         MigrateRollbackCommand::class,
         MigrateStatusCommand::class,
         MigrationMakeCommand::class,
         ModelMakeCommand::class,
         PublishCommand::class,
         PublishConfigurationCommand::class,
         PublishMigrationCommand::class,
         PublishTranslationCommand::class,
         SeedCommand::class,
         SeedMakeCommand::class,
         UnUseCommand::class,
         UpdateCommand::class,
         UseCommand::class,
         ResourceMakeCommand::class,
         TestMakeCommand::class,
         SetupCommand::class,
         LaravelModulesV6Migrator::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths'   => [
            base_path('vendor/*/*'),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer'   => [
        'vendor'          => 'saeedth1214',
        'author'          => [
            'name'  => 'saeed soltani',
            'email' => 'm.h.soltani1214@gmail.com',
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */
    'cache'      => [
        'enabled'  => false,
        'driver'   => 'file',
        'key'      => 'laravel-modules',
        'lifetime' => 60,
    ],
    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register'   => [
        'translations' => true,
        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files'        => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class'          => FileActivator::class,
            'statuses-file'  => base_path('modules_statuses.json'),
            'cache-key'      => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];