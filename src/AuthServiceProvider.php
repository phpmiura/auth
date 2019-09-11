<?php
namespace PHPMiura\Auth;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    public function register()
    {

    }
}