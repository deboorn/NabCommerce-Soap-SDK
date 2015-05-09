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

class Level2Data
{

    /**
     * @var float $BaseAmount
     */
    protected $BaseAmount = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var TypeISOCountryCodeA3 $DestinationCountryCode
     */
    protected $DestinationCountryCode = null;

    /**
     * @var string $DestinationPostal
     */
    protected $DestinationPostal = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var float $DutyAmount
     */
    protected $DutyAmount = null;

    /**
     * @var float $FreightAmount
     */
    protected $FreightAmount = null;

    /**
     * @var float $MiscHandlingAmount
     */
    protected $MiscHandlingAmount = null;

    /**
     * @var \DateTime $OrderDate
     */
    protected $OrderDate = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var string $RequesterName
     */
    protected $RequesterName = null;

    /**
     * @var string $ShipFromPostalCode
     */
    protected $ShipFromPostalCode = null;

    /**
     * @var string $ShipmentId
     */
    protected $ShipmentId = null;

    /**
     * @var TaxExempt $TaxExempt
     */
    protected $TaxExempt = null;

    /**
     * @var Tax $Tax
     */
    protected $Tax = null;

    /**
     * @param float $BaseAmount
     * @param TypeISOCountryCodeA3 $DestinationCountryCode
     * @param float $DiscountAmount
     * @param float $DutyAmount
     * @param float $FreightAmount
     * @param float $MiscHandlingAmount
     * @param \DateTime $OrderDate
     */
    public function __construct($BaseAmount, $DestinationCountryCode, $DiscountAmount, $DutyAmount, $FreightAmount, $MiscHandlingAmount, \DateTime $OrderDate)
    {
        $this->BaseAmount = $BaseAmount;
        $this->DestinationCountryCode = $DestinationCountryCode;
        $this->DiscountAmount = $DiscountAmount;
        $this->DutyAmount = $DutyAmount;
        $this->FreightAmount = $FreightAmount;
        $this->MiscHandlingAmount = $MiscHandlingAmount;
        $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
    }

    /**
     * @param float $BaseAmount
     * @param TypeISOCountryCodeA3 $DestinationCountryCode
     * @param float $DiscountAmount
     * @param float $DutyAmount
     * @param float $FreightAmount
     * @param float $MiscHandlingAmount
     * @param \DateTime $OrderDate
     */
    public static function forge($BaseAmount, $DestinationCountryCode, $DiscountAmount, $DutyAmount, $FreightAmount, $MiscHandlingAmount, \DateTime $OrderDate)
    {
        return new self($BaseAmount, $DestinationCountryCode, $DiscountAmount, $DutyAmount, $FreightAmount, $MiscHandlingAmount, $OrderDate);
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
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->BaseAmount;
    }

    /**
     * @param float $BaseAmount
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setBaseAmount($BaseAmount)
    {
        $this->BaseAmount = $BaseAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->CommodityCode;
    }

    /**
     * @param string $CommodityCode
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setCommodityCode($CommodityCode)
    {
        $this->CommodityCode = $CommodityCode;
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
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setCustomerCode($CustomerCode)
    {
        $this->CustomerCode = $CustomerCode;
        return $this;
    }

    /**
     * @return TypeISOCountryCodeA3
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }

    /**
     * @param TypeISOCountryCodeA3 $DestinationCountryCode
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setDestinationCountryCode(TypeISOCountryCodeA3 $DestinationCountryCode)
    {
        $this->DestinationCountryCode = $DestinationCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationPostal()
    {
        return $this->DestinationPostal;
    }

    /**
     * @param string $DestinationPostal
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setDestinationPostal($DestinationPostal)
    {
        $this->DestinationPostal = $DestinationPostal;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountAmount
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setDiscountAmount($DiscountAmount)
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDutyAmount()
    {
        return $this->DutyAmount;
    }

    /**
     * @param float $DutyAmount
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setDutyAmount($DutyAmount)
    {
        $this->DutyAmount = $DutyAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFreightAmount()
    {
        return $this->FreightAmount;
    }

    /**
     * @param float $FreightAmount
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setFreightAmount($FreightAmount)
    {
        $this->FreightAmount = $FreightAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMiscHandlingAmount()
    {
        return $this->MiscHandlingAmount;
    }

    /**
     * @param float $MiscHandlingAmount
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setMiscHandlingAmount($MiscHandlingAmount)
    {
        $this->MiscHandlingAmount = $MiscHandlingAmount;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        if ($this->OrderDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->OrderDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $OrderDate
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setOrderDate(\DateTime $OrderDate)
    {
        $this->OrderDate = $OrderDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequesterName()
    {
        return $this->RequesterName;
    }

    /**
     * @param string $RequesterName
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setRequesterName($RequesterName)
    {
        $this->RequesterName = $RequesterName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipFromPostalCode()
    {
        return $this->ShipFromPostalCode;
    }

    /**
     * @param string $ShipFromPostalCode
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setShipFromPostalCode($ShipFromPostalCode)
    {
        $this->ShipFromPostalCode = $ShipFromPostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
        return $this->ShipmentId;
    }

    /**
     * @param string $ShipmentId
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setShipmentId($ShipmentId)
    {
        $this->ShipmentId = $ShipmentId;
        return $this;
    }

    /**
     * @return TaxExempt
     */
    public function getTaxExempt()
    {
        return $this->TaxExempt;
    }

    /**
     * @param TaxExempt $TaxExempt
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setTaxExempt(TaxExempt $TaxExempt)
    {
        $this->TaxExempt = $TaxExempt;
        return $this;
    }

    /**
     * @return Tax
     */
    public function getTax()
    {
        return $this->Tax;
    }

    /**
     * @param Tax $Tax
     * @return \NabCommerce\Transaction\Level2Data
     */
    public function setTax(Tax $Tax)
    {
        $this->Tax = $Tax;
        return $this;
    }

}
