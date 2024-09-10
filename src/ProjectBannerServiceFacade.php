<?php

namespace ChiefGroup\LaravelDy;

use Illuminate\Support\Facades\Facade;

/**
 * Class ProjectBannerService
 * @package App\Facade
 *
 * @method static array search(array $params)
 * @method static array store(array $params)
 * @method static array update(array $params, int $id)
 * @method static array delete(array $params)
 */
class ProjectBannerServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ProjectBannerService';
    }
}
