<?php

namespace Vultr\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Vultr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vultr';
    }
}
