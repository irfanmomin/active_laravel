<?php

namespace Irfan\ActiveLaravelTest\Http;

class Kernel extends \Orchestra\Testbench\Http\Kernel
{
    protected $routeMiddleware = [
        'dump' => DumpMiddleware::class,
    ];
}
