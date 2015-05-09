<?php

namespace NabCommerce;

use NabCommerce\Service;
use NabCommerce\Transaction;

/**
 * Class Api
 *
 * LICENSE: This source file is subject to version 4.0 of the CC BY 4.0 license
 * that is available through the world-wide-web at the following URI:
 * http://creativecommons.org/licenses/by/4.0/.  If you did not receive a copy of
 * the CC BY 4.0 License and are unable to obtain it through the web, please
 * send a note to daniel.boorn@gmail.com so we can mail you a copy immediately.
 *
 * @author Daniel Boorn <daniel.boorn@gmail.com>
 * @license http://creativecommons.org/licenses/by/4.0/ CC BY 4.0
 * @package NabCommerce
 */
class Api
{
    /**
     * @var
     */
    protected $sessionToken;
    /**
     * @var
     */
    protected $identityToken;
    /**
     * @var
     */
    protected $applicationProfileId;
    /**
     * @var
     */
    protected $merchantProfileId;
    /**
     * @var
     */
    protected $workflowId;

    /**
     * @param $identityToken
     * @param $applicationProfileId
     * @param $workflowId
     * @param $merchantProfileId
     * @return Api
     */
    public static function forge($identityToken, $applicationProfileId, $workflowId, $merchantProfileId)
    {
        return new self($identityToken, $applicationProfileId, $workflowId, $merchantProfileId);
    }

    /**
     * @param $identityToken
     * @param $applicationProfileId
     * @param $workflowId
     * @param $merchantProfileId
     */
    public function __construct($identityToken, $applicationProfileId, $workflowId, $merchantProfileId)
    {
        $this->setIdentityToken($identityToken);
        $this->setApplicationProfileId($applicationProfileId);
        $this->setWorkflowId($workflowId);
        $this->setSessionToken($this->fetchSessionToken());
        $this->setMerchantProfileId($merchantProfileId);
    }

    /**
     * @return string
     */
    public function fetchSessionToken()
    {
        return $this->service()
            ->SignOnWithToken(new Service\SignOnWithToken($this->getIdentityToken()))
            ->getSignOnWithTokenResult();
    }

    /**
     * @return mixed
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @param mixed $sessionToken
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
    }

    /**
     * @return mixed
     */
    public function getIdentityToken()
    {
        return $this->identityToken;
    }

    /**
     * @param mixed $identityToken
     */
    public function setIdentityToken($identityToken)
    {
        $this->identityToken = $identityToken;
    }

    /**
     * @return mixed
     */
    public function getApplicationProfileId()
    {
        return $this->applicationProfileId;
    }

    /**
     * @param mixed $applicationProfileId
     */
    public function setApplicationProfileId($applicationProfileId)
    {
        $this->applicationProfileId = $applicationProfileId;
    }

    /**
     * @return mixed
     */
    public function getMerchantProfileId()
    {
        return $this->merchantProfileId;
    }

    /**
     * @param mixed $merchantProfileId
     */
    public function setMerchantProfileId($merchantProfileId)
    {
        $this->merchantProfileId = $merchantProfileId;
    }

    /**
     * @return mixed
     */
    public function getWorkflowId()
    {
        return $this->workflowId;
    }

    /**
     * @param mixed $workflowId
     */
    public function setWorkflowId($workflowId)
    {
        $this->workflowId = $workflowId;
    }

    /**
     * @return Service\SIS
     */
    public function service()
    {
        return new Service\SIS();
    }

    /**
     * @return Transaction\TPS
     */
    public function transaction()
    {
        return new Transaction\TPS();
    }

}