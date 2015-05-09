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

class AVSData
{

    /**
     * @var string $CardholderName
     */
    protected $CardholderName = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

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
     * @var TypeISOCountryCodeA3 $Country
     */
    protected $Country = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @param TypeISOCountryCodeA3 $Country
     */
    public function __construct($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @param TypeISOCountryCodeA3 $Country
     */
    public static function forge($Country)
    {
        return new self($Country);
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
    public function getCardholderName()
    {
        return $this->CardholderName;
    }

    /**
     * @param string $CardholderName
     * @return \NabCommerce\Transaction\AVSData
     */
    public function setCardholderName($CardholderName)
    {
        $this->CardholderName = $CardholderName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return \NabCommerce\Transaction\AVSData
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
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
     * @return \NabCommerce\Transaction\AVSData
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
     * @return \NabCommerce\Transaction\AVSData
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
     * @return \NabCommerce\Transaction\AVSData
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return TypeISOCountryCodeA3
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param TypeISOCountryCodeA3 $Country
     * @return \NabCommerce\Transaction\AVSData
     */
    public function setCountry(TypeISOCountryCodeA3 $Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \NabCommerce\Transaction\AVSData
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return \NabCommerce\Transaction\AVSData
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

}
