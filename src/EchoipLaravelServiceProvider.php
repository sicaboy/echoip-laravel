<?php

namespace Sicaboy\EchoipLaravel;

use Illuminate\Support\ServiceProvider;

class EchoipLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // echoip-laravel-config

        $this->publishes([
            __DIR__.'/../config/echoip.php' => config_path('echoip.php'),
        ], 'echoip-laravel-config');

    }
}
