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


class GetMerchantProfilesResponse
{

    /**
     * @var ArrayOfMerchantProfile $GetMerchantProfilesResult
     */
    protected $GetMerchantProfilesResult = nunull
    /**
     * @param ArrayOfMerchantProfile $GetMerchantProfilesResult
     */
    public function __construct($GetMerchantProfilesResult)
    {
        $this->GetMerchantProfilesResult = $GetMerchantProfilesResult;
    }

    /**
     * @param ArrayOfMerchantProfile $GetMerchantProfilesResult
     */
    public static function forge($GetMerchantProfilesResult)
    {
        return new self($GetMerchantProfilesResult);
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
     * @return ArrayOfMerchantProfile
     */
    public function getGetMerchantProfilesResult()
    {
        return $this->GetMerchantProfilesResult;
    }

    /**
     * @param ArrayOfMerchantProfile $GetMerchantProfilesResult
     * @return \NabCommerce\Service\GetMerchantProfilesResponse
     */
    public function setGetMerchantProfilesResult(ArrayOfMerchantProfile $GetMerchantProfilesResult)
    {
        $this->GetMerchantProfilesResult = $GetMerchantProfilesResult;
        return $this;
    }

}
