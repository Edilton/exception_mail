<?php

namespace ExceptionMail;

use Illuminate\Support\ServiceProvider;


class ExceptionMailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . "/resources/exceptionmailconfig.php" => config_path('exeptionmailconfig.php')]);
        $this->loadViewsFrom(__DIR__.'/resources/views', 'exceptionmail');

    }

    public function register()
    {

    }
}