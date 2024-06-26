<?php

namespace Irfan\ActiveLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Active facade class.
 *
 * @author Kamlesh Gupta
 */
class Active extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'active';
    }
}
