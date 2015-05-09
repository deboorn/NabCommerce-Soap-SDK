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

class LineItemDetail
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $CommodityCode
     */
    protected $CommodityCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var boolean $DiscountIncluded
     */
    protected $DiscountIncluded = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var Tax $Tax
     */
    protected $Tax = null;

    /**
     * @var boolean $TaxIncluded
     */
    protected $TaxIncluded = null;

    /**
     * @var TypeUnitOfMeasure $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var string $UPC
     */
    protected $UPC = null;

    /**
     * @param float $Amount
     * @param float $DiscountAmount
     * @param boolean $DiscountIncluded
     * @param float $Quantity
     * @param boolean $TaxIncluded
     * @param TypeUnitOfMeasure $UnitOfMeasure
     * @param float $UnitPrice
     */
    public function __construct($Amount, $DiscountAmount, $DiscountIncluded, $Quantity, $TaxIncluded, $UnitOfMeasure, $UnitPrice)
    {
        $this->Amount = $Amount;
        $this->DiscountAmount = $DiscountAmount;
        $this->DiscountIncluded = $DiscountIncluded;
        $this->Quantity = $Quantity;
        $this->TaxIncluded = $TaxIncluded;
        $this->UnitOfMeasure = $UnitOfMeasure;
        $this->UnitPrice = $UnitPrice;
    }

    /**
     * @param float $Amount
     * @param float $DiscountAmount
     * @param boolean $DiscountIncluded
     * @param float $Quantity
     * @param boolean $TaxIncluded
     * @param TypeUnitOfMeasure $UnitOfMeasure
     * @param float $UnitPrice
     */
    public static function forge($Amount, $DiscountAmount, $DiscountIncluded, $Quantity, $TaxIncluded, $UnitOfMeasure, $UnitPrice)
    {
        return new self($Amount, $DiscountAmount, $DiscountIncluded, $Quantity, $TaxIncluded, $UnitOfMeasure, $UnitPrice);
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
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
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
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setCommodityCode($CommodityCode)
    {
        $this->CommodityCode = $CommodityCode;
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
     * @return \NabCommerce\Transaction\LineItemDetail
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
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setDiscountAmount($DiscountAmount)
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscountIncluded()
    {
        return $this->DiscountIncluded;
    }

    /**
     * @param boolean $DiscountIncluded
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setDiscountIncluded($DiscountIncluded)
    {
        $this->DiscountIncluded = $DiscountIncluded;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
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
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setTax(Tax $Tax)
    {
        $this->Tax = $Tax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxIncluded()
    {
        return $this->TaxIncluded;
    }

    /**
     * @param boolean $TaxIncluded
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setTaxIncluded($TaxIncluded)
    {
        $this->TaxIncluded = $TaxIncluded;
        return $this;
    }

    /**
     * @return TypeUnitOfMeasure
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }

    /**
     * @param TypeUnitOfMeasure $UnitOfMeasure
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setUnitOfMeasure(TypeUnitOfMeasure $UnitOfMeasure)
    {
        $this->UnitOfMeasure = $UnitOfMeasure;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getUPC()
    {
        return $this->UPC;
    }

    /**
     * @param string $UPC
     * @return \NabCommerce\Transaction\LineItemDetail
     */
    public function setUPC($UPC)
    {
        $this->UPC = $UPC;
        return $this;
    }

}
