<?php

namespace ChiefGroup\LaravelDy;

use Illuminate\Support\Facades\Facade;

/**
 * Class YunkeServiceFacade
 * @package App\Facade
 *
 * @method static mixed request(string $code, string $methods, string $path, array $options = [])
 */
class YunkeServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'YunkeService';
    }
}
