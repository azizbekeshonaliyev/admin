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
        include __DIR__ . '/routes/routes.php';
        $this->loadViewsFrom(__DIR__ . '/resources/views','admin');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'admin');

        $this->publishFiles();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function publishFiles(){

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/bek96/admin'),
        ], 'bek96/admin assets');

        $this->publishes([
            __DIR__.'/resources/lang' => resource_path('lang/vendor/admin'),
        ],'bek96/admin  lang');

    }
}