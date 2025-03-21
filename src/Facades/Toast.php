<?php

namespace Hafizulislamhfz\DyToast\Facades;

use Illuminate\Support\Facades\Facade;

class Toast extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'toast';
    }
}
