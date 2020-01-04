<?php

namespace Freee\Accounting\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Freee\Accounting\Laravel\Contracts\Factory;

/**
 * @method static Factory config(\Freee\Accounting\Configuration $config)
 * @method static array refreshToken(string $token)
 *
 * @see \Freee\Accounting\Laravel\FreeeClient
 */
class Freee extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
