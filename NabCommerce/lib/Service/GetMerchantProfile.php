<?php


/*
 * LICENSE: This source file is subject to version 4.0 of the CC BY 4.0 license
 * that is available through the world-wide-web at the following URI:
 * http://creativecommons.org/licenses/by/4.0/.  If you did not receive a copy of
 * the CC BY 4.0 License and are unable to obtain it through the web, please
 * send a note to daniel.boorn@gmail.com so we can mail you a copy immediately.
 *
 * @author Daniel Boorn <daniel.boorn@gmail.com>
 * @license http://creativecommons.org/licenses/by/4.0/ CC BY 4.0 *
 * @package NabCommerce\Service
 */

 

namespace NabCommerce\Service;


class GetMerchantProfile
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = nunull
    /**
     * @var string $merchantProfileId
     */
    protected $merchantProfileId = nunull
    /**
     * @var string $serviceId
     */
    protected $serviceId = nunull
    /**
     * @var TenderType $tenderType
     */
    protected $tenderType = nunull
    /**
     * @param string $sessionToken
     * @param string $merchantProfileId
     * @param string $serviceId
     * @param TenderType $tenderType
     */
    public function __construct($sessionToken, $merchantProfileId, $serviceId, $tenderType)
    {
        $this->sessionToken = $sessionToken;
        $this->merchantProfileId = $merchantProfileId;
        $this->serviceId = $serviceId;
        $this->tenderType = $tenderType;
    }

    /**
     * @param string $sessionToken
     * @param string $merchantProfileId
     * @param string $serviceId
     * @param TenderType $tenderType
     */
    public static function forge($sessionToken, $merchantProfileId, $serviceId, $tenderType)
    {
        return new self($sessionToken, $merchantProfileId, $serviceId, $tenderType);
    }

    public function set(array $properties)
    {
        foreach ($properties as $key => $value) {
            if (isset($this->{$key}) && !method_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @param string $sessionToken
     * @return \NabCommerce\Service\GetMerchantProfile
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantProfileId()
    {
        return $this->merchantProfileId;
    }

    /**
     * @param string $merchantProfileId
     * @return \NabCommerce\Service\GetMerchantProfile
     */
    public function setMerchantProfileId($merchantProfileId)
    {
        $this->merchantProfileId = $merchantProfileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     * @return \NabCommerce\Service\GetMerchantProfile
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    /**
     * @return TenderType
     */
    public function getTenderType()
    {
        return $this->tenderType;
    }

    /**
     * @param TenderType $tenderType
     * @return \NabCommerce\Service\GetMerchantProfile
     */
    public function setTenderType(TenderType $tenderType)
    {
        $this->tenderType = $tenderType;
        return $this;
    }

}
