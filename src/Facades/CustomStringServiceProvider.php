<?php

namespace MinhVuQuang\Facades;

use Illuminate\Support\ServiceProvider;

class CustomStringServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->app->bind('customString', function($app) {
//            return new \MinhVuQuang\CustomString();
//        });

        $this->app->bind('customString', '\MinhVuQuang\CustomString');
    }
}
