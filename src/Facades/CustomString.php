<?php

namespace minhvq\customString\Facades;

use Illuminate\Support\Facades\Facade;

class CustomString extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'customString';
    }
}
