<?php

namespace Urielon\LaravelVimeo;

use Illuminate\Support\ServiceProvider;

class LaravelVimeoServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('urielon/laravel-vimeo');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        $app = $this->app;
        $app['vimeo'] = $app->share(function($app) {
            $config = $app['config']->get('laravel-vimeo::config');
            
            return new Vimeo($config);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array("vimeo");
    }

}
