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

class CustomerInfo
{

    /**
     * @var NameInfo $Name
     */
    protected $Name = null;

    /**
     * @var AddressInfo $Address
     */
    protected $Address = null;

    /**
     * @var string $BusinessName
     */
    protected $BusinessName = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $Email
     */
    protected $Email = null;


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
     * @return NameInfo
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param NameInfo $Name
     * @return \NabCommerce\Transaction\CustomerInfo
     */
    public function setName(NameInfo $Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return AddressInfo
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param AddressInfo $Address
     * @return \NabCommerce\Transaction\CustomerInfo
     */
    public function setAddress(AddressInfo $Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->BusinessName;
    }

    /**
     * @param string $BusinessName
     * @return \NabCommerce\Transaction\CustomerInfo
     */
    public function setBusinessName($BusinessName)
    {
        $this->BusinessName = $BusinessName;
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
     * @return \NabCommerce\Transaction\CustomerInfo
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \NabCommerce\Transaction\CustomerInfo
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
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
     * @return \NabCommerce\Transaction\CustomerInfo
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

}
