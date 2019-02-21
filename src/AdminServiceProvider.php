<?php
/**
 * Created by PhpStorm.
 * User: Azizbek Eshonaliyev
 * Date: 1/31/2019
 * Time: 3:31 PM
 */
namespace Bek96\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'bek96');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bek96');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        if ($this->app->runningInConsole()) {
            /*
            $this->publishes([
                __DIR__.'/config/config.php' => config_path('bek96.php'),
            ], 'config');
            */

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/pay-uz'),
            ], 'views');*/

            // Publishing assets.
            $this->publishes([
                __DIR__.'/resources/assets' => public_path('vendor/bek96/admin/'),
            ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/pay-uz'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'bek96');

    }

    public function publishFiles(){

    }
}