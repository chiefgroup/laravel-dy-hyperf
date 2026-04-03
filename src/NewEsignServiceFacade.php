<?php

namespace ChiefGroup\LaravelDy;

use Illuminate\Support\Facades\Facade;

/**
 * Class NewEsignServiceFacade
 * @package App\Facade
 *
 * @method static array getConfig(string $appName = null)
 * @method static array request(string $method, string $uri, string $projectCode, array $options = [])
 * @method static bool validationResponseArr(array $result)
 * @method static array getFileUploadUrl(array $params, string $projectCode)
 * @method static bool uploadFile(string $uploadUrl, string $contentMd5, string $fileContent, string $contentType = 'application/pdf', int $retryTimes = 3)
 * @method static array createByTemplate(array $params, string $projectCode)
 * @method static array getFileInfo(string $fileId, string $projectCode)
 * @method static array createSignFlow(array $payload, string $projectCode)
 * @method static array getSignFlowDetail(string $flowId, string $projectCode)
 * @method static array buildContractFlowPayload(array $params)
 * @method static array getSignUrl(string $flowId, string $projectCode, array $payload)
 * @method static array getContractSignUrl(array $params, string $projectCode)
 * @method static array downloadSignedFile(string $flowId, string $projectCode)
 * @method static array revokeSignFlow(string $flowId, string $projectCode, array $payload = [])
 * @method static array getOrganizationIdentityInfo(array|string $params, string $projectCode)
 * @method static array getOrganizationAuthorizedInfo(string $orgId, string $projectCode)
 * @method static array getOrganizationAuthUrl(array $params, string $projectCode)
 * @method static array getPersonIdentityInfo(array|string $params, string $projectCode)
 * @method static array getPersonAuthorizedInfo(string $psnId, string $projectCode)
 * @method static array getPersonAuthUrl(array $params, string $projectCode)
 * @method static array listOrganizationMembers(string $orgId, string $projectCode, int $pageNum = 1, int $pageSize = 100)
 * @method static array addOrganizationMembers(string $orgId, string $projectCode, array $members)
 * @method static array deleteOrganizationMembers(string $orgId, string $projectCode, array $psnIds)
 */
class NewEsignServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'NewEsignService';
    }
}
