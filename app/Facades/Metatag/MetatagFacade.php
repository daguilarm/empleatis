<?php

namespace App\Facades\Metatag;

use Illuminate\Support\Facades\Facade;

class MetatagFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'metatag';
    }
}
