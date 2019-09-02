<?php

namespace Grafite\FormMaker;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Grafite\FormMaker\Providers\RouteProvider;
use Grafite\FormMaker\Commands\MakeFieldCommand;
use Grafite\FormMaker\Commands\MakeBaseFormCommand;
use Grafite\FormMaker\Commands\MakeModelFormCommand;

class FormMakerProvider extends ServiceProvider
{
    /**
     * Boot method.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/form-maker.php' => base_path('config/form-maker.php'),
        ]);

        /*
        |--------------------------------------------------------------------------
        | Commands
        |--------------------------------------------------------------------------
        */

        $this->commands([
            MakeFieldCommand::class,
            MakeModelFormCommand::class,
            MakeBaseFormCommand::class,
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteProvider::class);
    }
}
