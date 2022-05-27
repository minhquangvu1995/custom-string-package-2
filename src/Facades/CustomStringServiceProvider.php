<?php

namespace MinhVuQuang\Facades;

use Illuminate\Support\ServiceProvider;

class CustomStringServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('customString', function($app) {
            return new \MinhVuQuang\CustomString();
        });
    }

    public function isDeferred()
    {
        return true;
    }
}
