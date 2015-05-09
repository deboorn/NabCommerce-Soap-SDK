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

class BankcardTransactionData extends TransactionData
{

    /**
     * @var AccountType $AccountType
     */
    protected $AccountType = null;

    /**
     * @var AlternativeMerchantData $AlternativeMerchantData
     */
    protected $AlternativeMerchantData = null;

    /**
     * @var string $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var float $CashBackAmount
     */
    protected $CashBackAmount = null;

    /**
     * @var CustomerPresent $CustomerPresent
     */
    protected $CustomerPresent = null;

    /**
     * @var string $EmployeeId
     */
    protected $EmployeeId = null;

    /**
     * @var EntryMode $EntryMode
     */
    protected $EntryMode = null;

    /**
     * @var GoodsType $GoodsType
     */
    protected $GoodsType = null;

    /**
     * @var IndustryType $IndustryType
     */
    protected $IndustryType = null;

    /**
     * @var InternetTransactionData $InternetTransactionData
     */
    protected $InternetTransactionData = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var boolean $IsPartialShipment
     */
    protected $IsPartialShipment = null;

    /**
     * @var boolean $SignatureCaptured
     */
    protected $SignatureCaptured = null;

    /**
     * @var float $FeeAmount
     */
    protected $FeeAmount = null;

    /**
     * @var string $TerminalId
     */
    protected $TerminalId = null;

    /**
     * @var string $LaneId
     */
    protected $LaneId = null;

    /**
     * @var float $TipAmount
     */
    protected $TipAmount = null;

    /**
     * @var string $BatchAssignment
     */
    protected $BatchAssignment = null;

    /**
     * @var PartialApprovalSupportType $PartialApprovalCapable
     */
    protected $PartialApprovalCapable = null;

    /**
     * @var string $ScoreThreshold
     */
    protected $ScoreThreshold = null;

    /**
     * @var boolean $IsQuasiCash
     */
    protected $IsQuasiCash = null;

    /**
     * @var TypeEBTType $EBTType
     */
    protected $EBTType = null;

    /**
     * @param float $Amount
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param boolean $IgnoreDuplicateCheck
     * @param AccountType $AccountType
     * @param float $CashBackAmount
     * @param CustomerPresent $CustomerPresent
     * @param EntryMode $EntryMode
     * @param GoodsType $GoodsType
     * @param IndustryType $IndustryType
     * @param boolean $IsPartialShipment
     * @param boolean $SignatureCaptured
     * @param float $FeeAmount
     * @param float $TipAmount
     * @param PartialApprovalSupportType $PartialApprovalCapable
     * @param boolean $IsQuasiCash
     * @param TypeEBTType $EBTType
     */
    public function __construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck, $AccountType, $CashBackAmount, $CustomerPresent, $EntryMode, $GoodsType, $IndustryType, $IsPartialShipment, $SignatureCaptured, $FeeAmount, $TipAmount, $PartialApprovalCapable, $IsQuasiCash, $EBTType)
    {
        parent::__construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck);
        $this->AccountType = $AccountType;
        $this->CashBackAmount = $CashBackAmount;
        $this->CustomerPresent = $CustomerPresent;
        $this->EntryMode = $EntryMode;
        $this->GoodsType = $GoodsType;
        $this->IndustryType = $IndustryType;
        $this->IsPartialShipment = $IsPartialShipment;
        $this->SignatureCaptured = $SignatureCaptured;
        $this->FeeAmount = $FeeAmount;
        $this->TipAmount = $TipAmount;
        $this->PartialApprovalCapable = $PartialApprovalCapable;
        $this->IsQuasiCash = $IsQuasiCash;
        $this->EBTType = $EBTType;
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
     * @return AccountType
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }

    /**
     * @param AccountType $AccountType
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setAccountType(AccountType $AccountType)
    {
        $this->AccountType = $AccountType;
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
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setAlternativeMerchantData(AlternativeMerchantData $AlternativeMerchantData)
    {
        $this->AlternativeMerchantData = $AlternativeMerchantData;
        return $this;
    }

    /**
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }

    /**
     * @param string $ApprovalCode
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setApprovalCode($ApprovalCode)
    {
        $this->ApprovalCode = $ApprovalCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashBackAmount()
    {
        return $this->CashBackAmount;
    }

    /**
     * @param float $CashBackAmount
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setCashBackAmount($CashBackAmount)
    {
        $this->CashBackAmount = $CashBackAmount;
        return $this;
    }

    /**
     * @return CustomerPresent
     */
    public function getCustomerPresent()
    {
        return $this->CustomerPresent;
    }

    /**
     * @param CustomerPresent $CustomerPresent
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setCustomerPresent(CustomerPresent $CustomerPresent)
    {
        $this->CustomerPresent = $CustomerPresent;
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
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setEmployeeId($EmployeeId)
    {
        $this->EmployeeId = $EmployeeId;
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
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setEntryMode(EntryMode $EntryMode)
    {
        $this->EntryMode = $EntryMode;
        return $this;
    }

    /**
     * @return GoodsType
     */
    public function getGoodsType()
    {
        return $this->GoodsType;
    }

    /**
     * @param GoodsType $GoodsType
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setGoodsType(GoodsType $GoodsType)
    {
        $this->GoodsType = $GoodsType;
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
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setIndustryType(IndustryType $IndustryType)
    {
        $this->IndustryType = $IndustryType;
        return $this;
    }

    /**
     * @return InternetTransactionData
     */
    public function getInternetTransactionData()
    {
        return $this->InternetTransactionData;
    }

    /**
     * @param InternetTransactionData $InternetTransactionData
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setInternetTransactionData(InternetTransactionData $InternetTransactionData)
    {
        $this->InternetTransactionData = $InternetTransactionData;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
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
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartialShipment()
    {
        return $this->IsPartialShipment;
    }

    /**
     * @param boolean $IsPartialShipment
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setIsPartialShipment($IsPartialShipment)
    {
        $this->IsPartialShipment = $IsPartialShipment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSignatureCaptured()
    {
        return $this->SignatureCaptured;
    }

    /**
     * @param boolean $SignatureCaptured
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setSignatureCaptured($SignatureCaptured)
    {
        $this->SignatureCaptured = $SignatureCaptured;
        return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }

    /**
     * @param float $FeeAmount
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setFeeAmount($FeeAmount)
    {
        $this->FeeAmount = $FeeAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->TerminalId;
    }

    /**
     * @param string $TerminalId
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setTerminalId($TerminalId)
    {
        $this->TerminalId = $TerminalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLaneId()
    {
        return $this->LaneId;
    }

    /**
     * @param string $LaneId
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setLaneId($LaneId)
    {
        $this->LaneId = $LaneId;
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
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setTipAmount($TipAmount)
    {
        $this->TipAmount = $TipAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBatchAssignment()
    {
        return $this->BatchAssignment;
    }

    /**
     * @param string $BatchAssignment
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setBatchAssignment($BatchAssignment)
    {
        $this->BatchAssignment = $BatchAssignment;
        return $this;
    }

    /**
     * @return PartialApprovalSupportType
     */
    public function getPartialApprovalCapable()
    {
        return $this->PartialApprovalCapable;
    }

    /**
     * @param PartialApprovalSupportType $PartialApprovalCapable
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setPartialApprovalCapable(PartialApprovalSupportType $PartialApprovalCapable)
    {
        $this->PartialApprovalCapable = $PartialApprovalCapable;
        return $this;
    }

    /**
     * @return string
     */
    public function getScoreThreshold()
    {
        return $this->ScoreThreshold;
    }

    /**
     * @param string $ScoreThreshold
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setScoreThreshold($ScoreThreshold)
    {
        $this->ScoreThreshold = $ScoreThreshold;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsQuasiCash()
    {
        return $this->IsQuasiCash;
    }

    /**
     * @param boolean $IsQuasiCash
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setIsQuasiCash($IsQuasiCash)
    {
        $this->IsQuasiCash = $IsQuasiCash;
        return $this;
    }

    /**
     * @return TypeEBTType
     */
    public function getEBTType()
    {
        return $this->EBTType;
    }

    /**
     * @param TypeEBTType $EBTType
     * @return \NabCommerce\Transaction\BankcardTransactionData
     */
    public function setEBTType(TypeEBTType $EBTType)
    {
        $this->EBTType = $EBTType;
        return $this;
    }

}
