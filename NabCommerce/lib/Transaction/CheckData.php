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

class CheckData
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var CheckCountryCode $CheckCountryCode
     */
    protected $CheckCountryCode = null;

    /**
     * @var string $CheckNumber
     */
    protected $CheckNumber = null;

    /**
     * @var OwnerType $OwnerType
     */
    protected $OwnerType = null;

    /**
     * @var string $RawMICRLine
     */
    protected $RawMICRLine = null;

    /**
     * @var string $RoutingNumber
     */
    protected $RoutingNumber = null;

    /**
     * @var UseType $UseType
     */
    protected $UseType = null;

    /**
     * @param CheckCountryCode $CheckCountryCode
     * @param OwnerType $OwnerType
     * @param UseType $UseType
     */
    public function __construct($CheckCountryCode, $OwnerType, $UseType)
    {
        $this->CheckCountryCode = $CheckCountryCode;
        $this->OwnerType = $OwnerType;
        $this->UseType = $UseType;
    }

    /**
     * @param CheckCountryCode $CheckCountryCode
     * @param OwnerType $OwnerType
     * @param UseType $UseType
     */
    public static function forge($CheckCountryCode, $OwnerType, $UseType)
    {
        return new self($CheckCountryCode, $OwnerType, $UseType);
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
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * @return CheckCountryCode
     */
    public function getCheckCountryCode()
    {
        return $this->CheckCountryCode;
    }

    /**
     * @param CheckCountryCode $CheckCountryCode
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setCheckCountryCode(CheckCountryCode $CheckCountryCode)
    {
        $this->CheckCountryCode = $CheckCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->CheckNumber;
    }

    /**
     * @param string $CheckNumber
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setCheckNumber($CheckNumber)
    {
        $this->CheckNumber = $CheckNumber;
        return $this;
    }

    /**
     * @return OwnerType
     */
    public function getOwnerType()
    {
        return $this->OwnerType;
    }

    /**
     * @param OwnerType $OwnerType
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setOwnerType(OwnerType $OwnerType)
    {
        $this->OwnerType = $OwnerType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRawMICRLine()
    {
        return $this->RawMICRLine;
    }

    /**
     * @param string $RawMICRLine
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setRawMICRLine($RawMICRLine)
    {
        $this->RawMICRLine = $RawMICRLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }

    /**
     * @param string $RoutingNumber
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setRoutingNumber($RoutingNumber)
    {
        $this->RoutingNumber = $RoutingNumber;
        return $this;
    }

    /**
     * @return UseType
     */
    public function getUseType()
    {
        return $this->UseType;
    }

    /**
     * @param UseType $UseType
     * @return \NabCommerce\Transaction\CheckData
     */
    public function setUseType(UseType $UseType)
    {
        $this->UseType = $UseType;
        return $this;
    }

}
