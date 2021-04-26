<?php

namespace JimChen\AliyunVod;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Vod\Vod;

/**
 * @mixin \AlibabaCloud\Vod\V20170321\VodApiResolver
 */
class Client
{
    /**
     * @var \AlibabaCloud\Client\Clients\StsClient
     */
    protected $kernel;

    /**
     * Client constructor.
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @param string $securityToken
     * @param string $clientName
     * @param string $securityToken
     * @param false  $debug
     * @param int    $connectionTimeout
     * @param int    $timeout
     * @param array  $cert
     * @param array  $options
     * @throws \AlibabaCloud\Client\Exception\ClientException
     */
    public function __construct(
        $accessKeyId,
        $accessKeySecret,
        $regionId,
        $clientName,
        $securityToken = '',
        $debug = false,
        $connectionTimeout = 20,
        $timeout = 20,
        $cert = [],
        $options = []
    )
    {
        $this->kernel = AlibabaCloud::stsClient($accessKeyId, $accessKeySecret, $securityToken)
            ->regionId($regionId)
            ->connectTimeout($connectionTimeout)
            ->timeout($timeout)
            ->name($clientName)
            ->debug($debug)
            ->cert($cert)
            ->options($options);
    }

    /**
     * @return \AlibabaCloud\Client\Clients\StsClient
     */
    public function getKernel()
    {
        return $this->kernel;
    }

    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        return call_user_func_array([Vod::v20170321(), $method], $arguments);
    }
}
