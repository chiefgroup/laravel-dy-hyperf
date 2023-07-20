<?php

namespace ChiefGroup\LaravelDy;

use Illuminate\Support\Facades\Facade;

/**
 * Class ContractService
 * @package App\Facade
 *
 * @method static array accountSearch(array $params = [])
 * @method static array queryAccount(array $params = [])
 * @method static array accountStore(array $params = [])
 * @method static array accountUpdate(array $params, int $id)
 * @method static int accountCancel(array $params = [])
 * @method static array accountContracts(array $params = [])
 * @method static array contractSearch(array $params = [])
 * @method static array contractStore(array $params = [])
 * @method static array contractUpdate(array $params, int $id)
 * @method static int contractDelete(array $params)
 * @method static mixed contractDownload(array $params)
 * @method static array companys(array $params)
 * @method static array companyStore(array $params)
 * @method static array companyUpdate(array $params, int $id)
 * @method static array companyDelete(array $params)
 * @method static array companyShow(array $params)
 */
class ContractServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ContractService';
    }
}
