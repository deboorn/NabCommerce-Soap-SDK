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

class BankcardTransactionDataPro extends BankcardTransactionData
{

    /**
     * @var ManagedBilling $ManagedBilling
     */
    protected $ManagedBilling = null;

    /**
     * @var Level2Data $Level2Data
     */
    protected $Level2Data = null;

    /**
     * @var ArrayOfLineItemDetail $LineItemDetails
     */
    protected $LineItemDetails = null;

    /**
     * @var PINlessDebitData $PINlessDebitData
     */
    protected $PINlessDebitData = null;

    /**
     * @var IIASData $IIASData
     */
    protected $IIASData = null;

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
        parent::__construct($Amount, $CurrencyCode, $IgnoreDuplicateCheck, $AccountType, $CashBackAmount, $CustomerPresent, $EntryMode, $GoodsType, $IndustryType, $IsPartialShipment, $SignatureCaptured, $FeeAmount, $TipAmount, $PartialApprovalCapable, $IsQuasiCash, $EBTType);
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
     * @return ManagedBilling
     */
    public function getManagedBilling()
    {
        return $this->ManagedBilling;
    }

    /**
     * @param ManagedBilling $ManagedBilling
     * @return \NabCommerce\Transaction\BankcardTransactionDataPro
     */
    public function setManagedBilling(ManagedBilling $ManagedBilling)
    {
        $this->ManagedBilling = $ManagedBilling;
        return $this;
    }

    /**
     * @return Level2Data
     */
    public function getLevel2Data()
    {
        return $this->Level2Data;
    }

    /**
     * @param Level2Data $Level2Data
     * @return \NabCommerce\Transaction\BankcardTransactionDataPro
     */
    public function setLevel2Data(Level2Data $Level2Data)
    {
        $this->Level2Data = $Level2Data;
        return $this;
    }

    /**
     * @return ArrayOfLineItemDetail
     */
    public function getLineItemDetails()
    {
        return $this->LineItemDetails;
    }

    /**
     * @param ArrayOfLineItemDetail $LineItemDetails
     * @return \NabCommerce\Transaction\BankcardTransactionDataPro
     */
    public function setLineItemDetails(ArrayOfLineItemDetail $LineItemDetails)
    {
        $this->LineItemDetails = $LineItemDetails;
        return $this;
    }

    /**
     * @return PINlessDebitData
     */
    public function getPINlessDebitData()
    {
        return $this->PINlessDebitData;
    }

    /**
     * @param PINlessDebitData $PINlessDebitData
     * @return \NabCommerce\Transaction\BankcardTransactionDataPro
     */
    public function setPINlessDebitData(PINlessDebitData $PINlessDebitData)
    {
        $this->PINlessDebitData = $PINlessDebitData;
        return $this;
    }

    /**
     * @return IIASData
     */
    public function getIIASData()
    {
        return $this->IIASData;
    }

    /**
     * @param IIASData $IIASData
     * @return \NabCommerce\Transaction\BankcardTransactionDataPro
     */
    public function setIIASData(IIASData $IIASData)
    {
        $this->IIASData = $IIASData;
        return $this;
    }

}
