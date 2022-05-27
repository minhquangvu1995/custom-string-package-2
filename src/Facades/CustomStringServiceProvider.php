<?php

namespace MinhVuQuang\Facades;

use Illuminate\Support\ServiceProvider;

class CustomStringServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function register()
    {
        $this->app->bind('customString', function($app) {
            return new \MinhVuQuang\CustomString();
        });
    }
}
