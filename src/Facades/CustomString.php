<?php

namespace MinhVuQuang\Facades;

use Illuminate\Support\Facades\Facade;

class CustomString extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MinhVuQuang\CustomString::class;
    }
}
