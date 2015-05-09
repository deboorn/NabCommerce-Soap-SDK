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

class StoredValueTransactionResponse extends Response
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $FeeAmount
     */
    protected $FeeAmount = null;

    /**
     * @var string $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var CVResult $CVResult
     */
    protected $CVResult = null;

    /**
     * @var float $CashBackAmount
     */
    protected $CashBackAmount = null;

    /**
     * @var float $LockAmount
     */
    protected $LockAmount = null;

    /**
     * @var float $NewBalance
     */
    protected $NewBalance = null;

    /**
     * @var float $PreviousBalance
     */
    protected $PreviousBalance = null;

    /**
     * @var CardStatus $CardStatus
     */
    protected $CardStatus = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $CVData
     */
    protected $CVData = null;

    /**
     * @var string $CardRestrictionValue
     */
    protected $CardRestrictionValue = null;

    /**
     * @var string $PaymentAccountDataToken
     */
    protected $PaymentAccountDataToken = null;

    /**
     * @var string $MaskedPAN
     */
    protected $MaskedPAN = null;

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $Expire
     */
    protected $Expire = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     * @param float $Amount
     * @param float $FeeAmount
     * @param CVResult $CVResult
     * @param float $CashBackAmount
     * @param float $LockAmount
     * @param float $NewBalance
     * @param float $PreviousBalance
     * @param CardStatus $CardStatus
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged, $Amount, $FeeAmount, $CVResult, $CashBackAmount, $LockAmount, $NewBalance, $PreviousBalance, $CardStatus)
    {
        parent::__construct($Status, $CaptureState, $TransactionState, $IsAcknowledged);
        $this->Amount = $Amount;
        $this->FeeAmount = $FeeAmount;
        $this->CVResult = $CVResult;
        $this->CashBackAmount = $CashBackAmount;
        $this->LockAmount = $LockAmount;
        $this->NewBalance = $NewBalance;
        $this->PreviousBalance = $PreviousBalance;
        $this->CardStatus = $CardStatus;
    }

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     * @param float $Amount
     * @param float $FeeAmount
     * @param CVResult $CVResult
     * @param float $CashBackAmount
     * @param float $LockAmount
     * @param float $NewBalance
     * @param float $PreviousBalance
     * @param CardStatus $CardStatus
     */
    public static function forge($Status, $CaptureState, $TransactionState, $IsAcknowledged, $Amount, $FeeAmount, $CVResult, $CashBackAmount, $LockAmount, $NewBalance, $PreviousBalance, $CardStatus)
    {
        return new self($Status, $CaptureState, $TransactionState, $IsAcknowledged, $Amount, $FeeAmount, $CVResult, $CashBackAmount, $LockAmount, $NewBalance, $PreviousBalance, $CardStatus);
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setFeeAmount($FeeAmount)
    {
        $this->FeeAmount = $FeeAmount;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setApprovalCode($ApprovalCode)
    {
        $this->ApprovalCode = $ApprovalCode;
        return $this;
    }

    /**
     * @return CVResult
     */
    public function getCVResult()
    {
        return $this->CVResult;
    }

    /**
     * @param CVResult $CVResult
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setCVResult(CVResult $CVResult)
    {
        $this->CVResult = $CVResult;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setCashBackAmount($CashBackAmount)
    {
        $this->CashBackAmount = $CashBackAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLockAmount()
    {
        return $this->LockAmount;
    }

    /**
     * @param float $LockAmount
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setLockAmount($LockAmount)
    {
        $this->LockAmount = $LockAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNewBalance()
    {
        return $this->NewBalance;
    }

    /**
     * @param float $NewBalance
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setNewBalance($NewBalance)
    {
        $this->NewBalance = $NewBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreviousBalance()
    {
        return $this->PreviousBalance;
    }

    /**
     * @param float $PreviousBalance
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setPreviousBalance($PreviousBalance)
    {
        $this->PreviousBalance = $PreviousBalance;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setCardStatus(CardStatus $CardStatus)
    {
        $this->CardStatus = $CardStatus;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCVData()
    {
        return $this->CVData;
    }

    /**
     * @param string $CVData
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setCVData($CVData)
    {
        $this->CVData = $CVData;
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
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setCardRestrictionValue($CardRestrictionValue)
    {
        $this->CardRestrictionValue = $CardRestrictionValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAccountDataToken()
    {
        return $this->PaymentAccountDataToken;
    }

    /**
     * @param string $PaymentAccountDataToken
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setPaymentAccountDataToken($PaymentAccountDataToken)
    {
        $this->PaymentAccountDataToken = $PaymentAccountDataToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaskedPAN()
    {
        return $this->MaskedPAN;
    }

    /**
     * @param string $MaskedPAN
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setMaskedPAN($MaskedPAN)
    {
        $this->MaskedPAN = $MaskedPAN;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param string $OrderId
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpire()
    {
        return $this->Expire;
    }

    /**
     * @param string $Expire
     * @return \NabCommerce\Transaction\StoredValueTransactionResponse
     */
    public function setExpire($Expire)
    {
        $this->Expire = $Expire;
        return $this;
    }

}
