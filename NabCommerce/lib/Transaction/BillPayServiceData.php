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

class BillPayServiceData
{

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var AddressInfo $CompanyAddress
     */
    protected $CompanyAddress = null;


    public function __construct()
    {

    }


    public static function forge()
    {
        return new self();
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
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \NabCommerce\Transaction\BillPayServiceData
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return AddressInfo
     */
    public function getCompanyAddress()
    {
        return $this->CompanyAddress;
    }

    /**
     * @param AddressInfo $CompanyAddress
     * @return \NabCommerce\Transaction\BillPayServiceData
     */
    public function setCompanyAddress(AddressInfo $CompanyAddress)
    {
        $this->CompanyAddress = $CompanyAddress;
        return $this;
    }

}
