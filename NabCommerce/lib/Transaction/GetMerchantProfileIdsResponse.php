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

class GetMerchantProfileIdsResponse
{

    /**
     * @var ArrayOfstring $GetMerchantProfileIdsResult
     */
    protected $GetMerchantProfileIdsResult = null;

    /**
     * @param ArrayOfstring $GetMerchantProfileIdsResult
     */
    public function __construct($GetMerchantProfileIdsResult)
    {
        $this->GetMerchantProfileIdsResult = $GetMerchantProfileIdsResult;
    }

    /**
     * @param ArrayOfstring $GetMerchantProfileIdsResult
     */
    public static function forge($GetMerchantProfileIdsResult)
    {
        return new self($GetMerchantProfileIdsResult);
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
     * @return ArrayOfstring
     */
    public function getGetMerchantProfileIdsResult()
    {
        return $this->GetMerchantProfileIdsResult;
    }

    /**
     * @param ArrayOfstring $GetMerchantProfileIdsResult
     * @return \NabCommerce\Service\GetMerchantProfileIdsResponse
     */
    public function setGetMerchantProfileIdsResult(ArrayOfstring $GetMerchantProfileIdsResult)
    {
        $this->GetMerchantProfileIdsResult = $GetMerchantProfileIdsResult;
        return $this;
    }

}
