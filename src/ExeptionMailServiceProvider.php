<?php

namespace ExeptionMail;

use Illuminate\Support\ServiceProvider;


class ExeptionMailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . "/resources/exeptionmailconfig.php" => config_path('exeptionmailconfig.php')]);
        $this->loadViewsFrom(__DIR__.'/resources/views', 'exceptionmail');

    }

    public function register()
    {

    }
}