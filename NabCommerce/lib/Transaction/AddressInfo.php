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

class AddressInfo
{

    /**
     * @var string $Street1
     */
    protected $Street1 = null;

    /**
     * @var string $Street2
     */
    protected $Street2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $StateProvince
     */
    protected $StateProvince = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var TypeISOCountryCodeA3 $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param TypeISOCountryCodeA3 $CountryCode
     */
    public function __construct($CountryCode)
    {
        $this->CountryCode = $CountryCode;
    }

    /**
     * @param TypeISOCountryCodeA3 $CountryCode
     */
    public static function forge($CountryCode)
    {
        return new self($CountryCode);
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
    public function getStreet1()
    {
        return $this->Street1;
    }

    /**
     * @param string $Street1
     * @return \NabCommerce\Transaction\AddressInfo
     */
    public function setStreet1($Street1)
    {
        $this->Street1 = $Street1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->Street2;
    }

    /**
     * @param string $Street2
     * @return \NabCommerce\Transaction\AddressInfo
     */
    public function setStreet2($Street2)
    {
        $this->Street2 = $Street2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \NabCommerce\Transaction\AddressInfo
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateProvince()
    {
        return $this->StateProvince;
    }

    /**
     * @param string $StateProvince
     * @return \NabCommerce\Transaction\AddressInfo
     */
    public function setStateProvince($StateProvince)
    {
        $this->StateProvince = $StateProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \NabCommerce\Transaction\AddressInfo
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return TypeISOCountryCodeA3
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param TypeISOCountryCodeA3 $CountryCode
     * @return \NabCommerce\Transaction\AddressInfo
     */
    public function setCountryCode(TypeISOCountryCodeA3 $CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

}
