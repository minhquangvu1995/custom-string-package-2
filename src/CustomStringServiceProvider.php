<?php

namespace MinhVuQuang;

use Illuminate\Support\ServiceProvider;

class CustomStringServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('customString', function($app) {
            return new CustomString();
        });
    }
}
