<?php

namespace minhvq\Facades\customString;

use Illuminate\Support\Facades\Facade;

class CustomString extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'customString';
    }
}
