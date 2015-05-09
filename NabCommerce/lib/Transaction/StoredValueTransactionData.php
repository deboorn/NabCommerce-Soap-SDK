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

class StoredValueTransactionData extends TransactionData
{

    /**
     * @var string $EmployeeId
     */
    protected $EmployeeId = null;

    /**
     * @var IndustryType $IndustryType
     */
    protected $IndustryType = null;

    /**
     * @var float $TipAmount
     */
    protected $TipAmount = null;

    /**
     * @var TypeISOCurrencyCodeA3 $TenderCurrencyCode
     */
    protected $TenderCurrencyCode = null;

    /**
     * @var string $CardRestrictionValue
     */
    protected $CardRestrictionValue = null;

    /**
     * @var EntryMode $EntryMode
     */
    protected $EntryMode = null;

    /**
     * @var boolean $Unload
     */
    protected $Unload = null;

    /**
     * @var CardStatus $CardStatus
     */
    protected $CardStatus = null;

    /**
     * @var OperationType $OperationType
     */
    protected $OperationType = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @param float $Amount
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param boolean $IgnoreDuplicateCheck
     * @param IndustryType $IndustryType
     * @param float $TipAmount
     * @param TypeISOCurrencyCodeA3 $TenderCurrencyCode
     * @param EntryMode $EntryMode
     * @param boolean $Unload
     * @param CardStatus $CardStatus
     * @param OperationType $OperationType
     */
    public function __construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck, $IndustryType, $TipAmount, $TenderCurrencyCode, $EntryMode, $Unload, $CardStatus, $OperationType)
    {
        parent::__construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck);
        $this->IndustryType = $IndustryType;
        $this->TipAmount = $TipAmount;
        $this->TenderCurrencyCode = $TenderCurrencyCode;
        $this->EntryMode = $EntryMode;
        $this->Unload = $Unload;
        $this->CardStatus = $CardStatus;
        $this->OperationType = $OperationType;
    }

    /**
     * @param float $Amount
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param boolean $IgnoreDuplicateCheck
     * @param IndustryType $IndustryType
     * @param float $TipAmount
     * @param TypeISOCurrencyCodeA3 $TenderCurrencyCode
     * @param EntryMode $EntryMode
     * @param boolean $Unload
     * @param CardStatus $CardStatus
     * @param OperationType $OperationType
     */
    public static function forge($Amount, $CurrencyCode, $IgnoreDuplicateCheck, $IndustryType, $TipAmount, $TenderCurrencyCode, $EntryMode, $Unload, $CardStatus, $OperationType)
    {
        return new self($Amount, $CurrencyCode, $IgnoreDuplicateCheck, $IndustryType, $TipAmount, $TenderCurrencyCode, $EntryMode, $Unload, $CardStatus, $OperationType);
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
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param string $EmployeeId
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setEmployeeId($EmployeeId)
    {
        $this->EmployeeId = $EmployeeId;
        return $this;
    }

    /**
     * @return IndustryType
     */
    public function getIndustryType()
    {
        return $this->IndustryType;
    }

    /**
     * @param IndustryType $IndustryType
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setIndustryType(IndustryType $IndustryType)
    {
        $this->IndustryType = $IndustryType;
        return $this;
    }

    /**
     * @return float
     */
    public function getTipAmount()
    {
        return $this->TipAmount;
    }

    /**
     * @param float $TipAmount
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setTipAmount($TipAmount)
    {
        $this->TipAmount = $TipAmount;
        return $this;
    }

    /**
     * @return TypeISOCurrencyCodeA3
     */
    public function getTenderCurrencyCode()
    {
        return $this->TenderCurrencyCode;
    }

    /**
     * @param TypeISOCurrencyCodeA3 $TenderCurrencyCode
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setTenderCurrencyCode(TypeISOCurrencyCodeA3 $TenderCurrencyCode)
    {
        $this->TenderCurrencyCode = $TenderCurrencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardRestrictionValue()
    {
        return $this->CardRestrictionValue;
    }

    /**
     * @param string $CardRestrictionValue
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setCardRestrictionValue($CardRestrictionValue)
    {
        $this->CardRestrictionValue = $CardRestrictionValue;
        return $this;
    }

    /**
     * @return EntryMode
     */
    public function getEntryMode()
    {
        return $this->EntryMode;
    }

    /**
     * @param EntryMode $EntryMode
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setEntryMode(EntryMode $EntryMode)
    {
        $this->EntryMode = $EntryMode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUnload()
    {
        return $this->Unload;
    }

    /**
     * @param boolean $Unload
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setUnload($Unload)
    {
        $this->Unload = $Unload;
        return $this;
    }

    /**
     * @return CardStatus
     */
    public function getCardStatus()
    {
        return $this->CardStatus;
    }

    /**
     * @param CardStatus $CardStatus
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setCardStatus(CardStatus $CardStatus)
    {
        $this->CardStatus = $CardStatus;
        return $this;
    }

    /**
     * @return OperationType
     */
    public function getOperationType()
    {
        return $this->OperationType;
    }

    /**
     * @param OperationType $OperationType
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setOperationType(OperationType $OperationType)
    {
        $this->OperationType = $OperationType;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionData
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;
        return $this;
    }

}
