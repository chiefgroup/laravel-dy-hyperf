<?php

namespace ChiefGroup\LaravelDy;

use Illuminate\Support\Facades\Facade;

/**
 * Class EsignService
 * @package App\Facade
 *
 * @method static array|string getToken(string $appId, string $secret)
 * @method static mixed request(string $methods, string $uri, string $code, array $options = [])
 */
class EsignServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'EsignService';
    }
}
