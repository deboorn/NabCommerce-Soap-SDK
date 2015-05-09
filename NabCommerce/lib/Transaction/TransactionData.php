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

class TransactionData
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var TypeISOCurrencyCodeA3 $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $TransactionDateTime
     */
    protected $TransactionDateTime = null;

    /**
     * @var string $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var boolean $IgnoreDuplicateCheck
     */
    protected $IgnoreDuplicateCheck = null;

    /**
     * @param float $Amount
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param boolean $IgnoreDuplicateCheck
     */
    public function __construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck)
    {
        $this->Amount = $Amount;
        $this->CurrencyCode = $CurrencyCode;
        $this->IgnoreDuplicateCheck = $IgnoreDuplicateCheck;
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
     * @return \NabCommerce\Transaction\TransactionData
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return TypeISOCurrencyCodeA3
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @return \NabCommerce\Transaction\TransactionData
     */
    public function setCurrencyCode(TypeISOCurrencyCodeA3 $CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDateTime()
    {
        return $this->TransactionDateTime;
    }

    /**
     * @param string $TransactionDateTime
     * @return \NabCommerce\Transaction\TransactionData
     */
    public function setTransactionDateTime($TransactionDateTime)
    {
        $this->TransactionDateTime = $TransactionDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param string $CampaignId
     * @return \NabCommerce\Transaction\TransactionData
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \NabCommerce\Transaction\TransactionData
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreDuplicateCheck()
    {
        return $this->IgnoreDuplicateCheck;
    }

    /**
     * @param boolean $IgnoreDuplicateCheck
     * @return \NabCommerce\Transaction\TransactionData
     */
    public function setIgnoreDuplicateCheck($IgnoreDuplicateCheck)
    {
        $this->IgnoreDuplicateCheck = $IgnoreDuplicateCheck;
        return $this;
    }

}
