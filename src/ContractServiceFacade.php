<?php

namespace ChiefGroup\LaravelDy;

use Illuminate\Support\Facades\Facade;

/**
 * Class ContractService
 * @package App\Facade
 *
 * @method static mixed accountSearch(array $params = [])
 * @method static mixed queryAccount(array $params = [])
 * @method static mixed accountStore(array $params = [])
 * @method static mixed accountUpdate(array $params, int $id)
 * @method static int accountCancel(array $params = [])
 * @method static mixed accountContracts(array $params = [])
 * @method static mixed contractSearch(array $params = [])
 * @method static mixed contractStore(array $params = [])
 * @method static mixed contractUpdate(array $params, int $id)
 * @method static int contractDelete(array $params)
 * @method static mixed contractDownload(array $params)
 */
class ContractServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ContractService';
    }
}
