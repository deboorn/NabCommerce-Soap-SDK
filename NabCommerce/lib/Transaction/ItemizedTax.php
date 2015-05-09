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

class ItemizedTax
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var TypeTaxType $Type
     */
    protected $Type = null;

    /**
     * @param float $Amount
     * @param float $Rate
     * @param TypeTaxType $Type
     */
    public function __construct($Amount, $Rate, $Type)
    {
        $this->Amount = $Amount;
        $this->Rate = $Rate;
        $this->Type = $Type;
    }

    /**
     * @param float $Amount
     * @param float $Rate
     * @param TypeTaxType $Type
     */
    public static function forge($Amount, $Rate, $Type)
    {
        return new self($Amount, $Rate, $Type);
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
     * @return \NabCommerce\Transaction\ItemizedTax
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \NabCommerce\Transaction\ItemizedTax
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
        return $this;
    }

    /**
     * @return TypeTaxType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param TypeTaxType $Type
     * @return \NabCommerce\Transaction\ItemizedTax
     */
    public function setType(TypeTaxType $Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
