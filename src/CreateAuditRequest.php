<?php

namespace JimChen\AliyunVod;

use JimChen\AliyunCore\RpcAcsRequest;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAudit
 *
 * @method string getAuditContent()
 */
class CreateAuditRequest extends RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'vod',
            '2017-03-21',
            'CreateAudit',
            'vod'
        );
    }

    /**
     * @param string $auditContent
     *
     * @return $this
     */
    public function setAuditContent($auditContent)
    {
        $this->requestParameters['AuditContent'] = $auditContent;
        $this->queryParameters['AuditContent'] = $auditContent;

        return $this;
    }
}
