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

class ElectronicCheckingTransactionData extends TransactionData
{

    /**
     * @var AlternativeMerchantData $AlternativeMerchantData
     */
    protected $AlternativeMerchantData = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var boolean $IsRecurring
     */
    protected $IsRecurring = null;

    /**
     * @var string $PayeeEmail
     */
    protected $PayeeEmail = null;

    /**
     * @var string $PayeeId
     */
    protected $PayeeId = null;

    /**
     * @var SECCode $SECCode
     */
    protected $SECCode = null;

    /**
     * @var ServiceType $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var TransactionType $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var TxnCodeType $TxnCodeType
     */
    protected $TxnCodeType = null;

    /**
     * @param float $Amount
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param boolean $IgnoreDuplicateCheck
     * @param \DateTime $EffectiveDate
     * @param boolean $IsRecurring
     * @param SECCode $SECCode
     * @param ServiceType $ServiceType
     * @param TransactionType $TransactionType
     * @param TxnCodeType $TxnCodeType
     */
    public function __construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck, \DateTime $EffectiveDate, $IsRecurring, $SECCode, $ServiceType, $TransactionType, $TxnCodeType)
    {
        parent::__construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck);
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
        $this->IsRecurring = $IsRecurring;
        $this->SECCode = $SECCode;
        $this->ServiceType = $ServiceType;
        $this->TransactionType = $TransactionType;
        $this->TxnCodeType = $TxnCodeType;
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
     * @return AlternativeMerchantData
     */
    public function getAlternativeMerchantData()
    {
        return $this->AlternativeMerchantData;
    }

    /**
     * @param AlternativeMerchantData $AlternativeMerchantData
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setAlternativeMerchantData(AlternativeMerchantData $AlternativeMerchantData)
    {
        $this->AlternativeMerchantData = $AlternativeMerchantData;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        if ($this->EffectiveDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EffectiveDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setEffectiveDate(\DateTime $EffectiveDate)
    {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }

    /**
     * @param boolean $IsRecurring
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setIsRecurring($IsRecurring)
    {
        $this->IsRecurring = $IsRecurring;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayeeEmail()
    {
        return $this->PayeeEmail;
    }

    /**
     * @param string $PayeeEmail
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setPayeeEmail($PayeeEmail)
    {
        $this->PayeeEmail = $PayeeEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayeeId()
    {
        return $this->PayeeId;
    }

    /**
     * @param string $PayeeId
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setPayeeId($PayeeId)
    {
        $this->PayeeId = $PayeeId;
        return $this;
    }

    /**
     * @return SECCode
     */
    public function getSECCode()
    {
        return $this->SECCode;
    }

    /**
     * @param SECCode $SECCode
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setSECCode(SECCode $SECCode)
    {
        $this->SECCode = $SECCode;
        return $this;
    }

    /**
     * @return ServiceType
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param ServiceType $ServiceType
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setServiceType(ServiceType $ServiceType)
    {
        $this->ServiceType = $ServiceType;
        return $this;
    }

    /**
     * @return TransactionType
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }

    /**
     * @param TransactionType $TransactionType
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setTransactionType(TransactionType $TransactionType)
    {
        $this->TransactionType = $TransactionType;
        return $this;
    }

    /**
     * @return TxnCodeType
     */
    public function getTxnCodeType()
    {
        return $this->TxnCodeType;
    }

    /**
     * @param TxnCodeType $TxnCodeType
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionData
     */
    public function setTxnCodeType(TxnCodeType $TxnCodeType)
    {
        $this->TxnCodeType = $TxnCodeType;
        return $this;
    }

}
