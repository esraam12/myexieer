<?php

namespace App\Modules\ThisIsMyFirstModule\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('this is my first module', 'Resources/Lang', 'app'), 'this is my first module');
        $this->loadViewsFrom(module_path('this is my first module', 'Resources/Views', 'app'), 'this is my first module');
        $this->loadMigrationsFrom(module_path('this is my first module', 'Database/Migrations', 'app'), 'this is my first module');
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('this is my first module', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('this is my first module', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
