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
    
/**
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
class BankcardServiceAVSData
{

    /**
     * @var boolean $CardholderName
     */
    protected $CardholderName = nunull
    /**
     * @var boolean $Street
     */
    protected $Street = nunull
    /**
     * @var boolean $City
     */
    protected $City = nunull
    /**
     * @var boolean $StateProvince
     */
    protected $StateProvince = nunull
    /**
     * @var boolean $PostalCode
     */
    protected $PostalCode = nunull
    /**
     * @var boolean $Country
     */
    protected $Country = nunull
    /**
     * @var boolean $Phone
     */
    protected $Phone = nunull
    /**
     * @param boolean $CardholderName
     * @param boolean $Street
     * @param boolean $City
     * @param boolean $StateProvince
     * @param boolean $PostalCode
     * @param boolean $Country
     * @param boolean $Phone
     */
    public function __construct($CardholderName, $Street, $City, $StateProvince, $PostalCode, $Country, $Phone)
    {
        $this->CardholderName = $CardholderName;
        $this->Street = $Street;
        $this->City = $City;
        $this->StateProvince = $StateProvince;
        $this->PostalCode = $PostalCode;
        $this->Country = $Country;
        $this->Phone = $Phone;
    }

    /**
     * @param boolean $CardholderName
     * @param boolean $Street
     * @param boolean $City
     * @param boolean $StateProvince
     * @param boolean $PostalCode
     * @param boolean $Country
     * @param boolean $Phone
     */
    public static function forge($CardholderName, $Street, $City, $StateProvince, $PostalCode, $Country, $Phone)
    {
        return new self($CardholderName, $Street, $City, $StateProvince, $PostalCode, $Country, $Phone);
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
     * @return boolean
     */
    public function getCardholderName()
    {
        return $this->CardholderName;
    }

    /**
     * @param boolean $CardholderName
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setCardholderName($CardholderName)
    {
        $this->CardholderName = $CardholderName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param boolean $Street
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param boolean $City
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getStateProvince()
    {
        return $this->StateProvince;
    }

    /**
     * @param boolean $StateProvince
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setStateProvince($StateProvince)
    {
        $this->StateProvince = $StateProvince;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param boolean $PostalCode
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param boolean $Country
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param boolean $Phone
     * @return \NabCommerce\Service\BankcardServiceAVSData
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

}
