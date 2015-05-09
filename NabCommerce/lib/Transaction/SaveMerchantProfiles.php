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

 

namespace NabCommerce\Transaction;

class SaveMerchantProfiles
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @var string $serviceId
     */
    protected $serviceId = null;

    /**
     * @var TenderType $tenderType
     */
    protected $tenderType = null;

    /**
     * @var ArrayOfMerchantProfile $merchantProfiles
     */
    protected $merchantProfiles = null;

    /**
     * @param string $sessionToken
     * @param string $serviceId
     * @param TenderType $tenderType
     * @param ArrayOfMerchantProfile $merchantProfiles
     */
    public function __construct($sessionToken, $serviceId, $tenderType, $merchantProfiles)
    {
        $this->sessionToken = $sessionToken;
        $this->serviceId = $serviceId;
        $this->tenderType = $tenderType;
        $this->merchantProfiles = $merchantProfiles;
    }

    /**
     * @param string $sessionToken
     * @param string $serviceId
     * @param TenderType $tenderType
     * @param ArrayOfMerchantProfile $merchantProfiles
     */
    public static function forge($sessionToken, $serviceId, $tenderType, $merchantProfiles)
    {
        return new self($sessionToken, $serviceId, $tenderType, $merchantProfiles);
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
     * @return \NabCommerce\Service\SaveMerchantProfiles
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
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
     * @return \NabCommerce\Service\SaveMerchantProfiles
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
     * @return \NabCommerce\Service\SaveMerchantProfiles
     */
    public function setTenderType(TenderType $tenderType)
    {
        $this->tenderType = $tenderType;
        return $this;
    }

    /**
     * @return ArrayOfMerchantProfile
     */
    public function getMerchantProfiles()
    {
        return $this->merchantProfiles;
    }

    /**
     * @param ArrayOfMerchantProfile $merchantProfiles
     * @return \NabCommerce\Service\SaveMerchantProfiles
     */
    public function setMerchantProfiles(ArrayOfMerchantProfile $merchantProfiles)
    {
        $this->merchantProfiles = $merchantProfiles;
        return $this;
    }

}
