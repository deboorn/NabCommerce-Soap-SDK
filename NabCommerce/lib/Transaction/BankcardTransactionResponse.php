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

class BankcardTransactionResponse extends Response
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var TypeCardType $CardType
     */
    protected $CardType = null;

    /**
     * @var float $FeeAmount
     */
    protected $FeeAmount = null;

    /**
     * @var string $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var AVSResult $AVSResult
     */
    protected $AVSResult = null;

    /**
     * @var string $BatchId
     */
    protected $BatchId = null;

    /**
     * @var CVResult $CVResult
     */
    protected $CVResult = null;

    /**
     * @var string $CardLevel
     */
    protected $CardLevel = null;

    /**
     * @var string $DowngradeCode
     */
    protected $DowngradeCode = null;

    /**
     * @var string $MaskedPAN
     */
    protected $MaskedPAN = null;

    /**
     * @var string $PaymentAccountDataToken
     */
    protected $PaymentAccountDataToken = null;

    /**
     * @var string $RetrievalReferenceNumber
     */
    protected $RetrievalReferenceNumber = null;

    /**
     * @var Resubmit $Resubmit
     */
    protected $Resubmit = null;

    /**
     * @var \DateTime $SettlementDate
     */
    protected $SettlementDate = null;

    /**
     * @var float $FinalBalance
     */
    protected $FinalBalance = null;

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    /**
     * @var float $CashBackAmount
     */
    protected $CashBackAmount = null;

    /**
     * @var PrepaidCard $PrepaidCard
     */
    protected $PrepaidCard = null;

    /**
     * @var float $EBTCashBalanceAvailable
     */
    protected $EBTCashBalanceAvailable = null;

    /**
     * @var float $EBTFnsBalanceAvailable
     */
    protected $EBTFnsBalanceAvailable = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     * @param float $Amount
     * @param TypeCardType $CardType
     * @param float $FeeAmount
     * @param CVResult $CVResult
     * @param Resubmit $Resubmit
     * @param \DateTime $SettlementDate
     * @param float $FinalBalance
     * @param float $CashBackAmount
     * @param PrepaidCard $PrepaidCard
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged, $Amount, $CardType, $FeeAmount, $CVResult, $Resubmit, \DateTime $SettlementDate, $FinalBalance, $CashBackAmount, $PrepaidCard)
    {
        parent::__construct($Status, $CaptureState, $TransactionState, $IsAcknowledged);
        $this->Amount = $Amount;
        $this->CardType = $CardType;
        $this->FeeAmount = $FeeAmount;
        $this->CVResult = $CVResult;
        $this->Resubmit = $Resubmit;
        $this->SettlementDate = $SettlementDate->format(\DateTime::ATOM);
        $this->FinalBalance = $FinalBalance;
        $this->CashBackAmount = $CashBackAmount;
        $this->PrepaidCard = $PrepaidCard;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return TypeCardType
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * @param TypeCardType $CardType
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setCardType(TypeCardType $CardType)
    {
        $this->CardType = $CardType;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setApprovalCode($ApprovalCode)
    {
        $this->ApprovalCode = $ApprovalCode;
        return $this;
    }

    /**
     * @return AVSResult
     */
    public function getAVSResult()
    {
        return $this->AVSResult;
    }

    /**
     * @param AVSResult $AVSResult
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setAVSResult(AVSResult $AVSResult)
    {
        $this->AVSResult = $AVSResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }

    /**
     * @param string $BatchId
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setBatchId($BatchId)
    {
        $this->BatchId = $BatchId;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setCVResult(CVResult $CVResult)
    {
        $this->CVResult = $CVResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardLevel()
    {
        return $this->CardLevel;
    }

    /**
     * @param string $CardLevel
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setCardLevel($CardLevel)
    {
        $this->CardLevel = $CardLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getDowngradeCode()
    {
        return $this->DowngradeCode;
    }

    /**
     * @param string $DowngradeCode
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setDowngradeCode($DowngradeCode)
    {
        $this->DowngradeCode = $DowngradeCode;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setMaskedPAN($MaskedPAN)
    {
        $this->MaskedPAN = $MaskedPAN;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setPaymentAccountDataToken($PaymentAccountDataToken)
    {
        $this->PaymentAccountDataToken = $PaymentAccountDataToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->RetrievalReferenceNumber;
    }

    /**
     * @param string $RetrievalReferenceNumber
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setRetrievalReferenceNumber($RetrievalReferenceNumber)
    {
        $this->RetrievalReferenceNumber = $RetrievalReferenceNumber;
        return $this;
    }

    /**
     * @return Resubmit
     */
    public function getResubmit()
    {
        return $this->Resubmit;
    }

    /**
     * @param Resubmit $Resubmit
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setResubmit(Resubmit $Resubmit)
    {
        $this->Resubmit = $Resubmit;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSettlementDate()
    {
        if ($this->SettlementDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SettlementDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SettlementDate
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setSettlementDate(\DateTime $SettlementDate)
    {
        $this->SettlementDate = $SettlementDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getFinalBalance()
    {
        return $this->FinalBalance;
    }

    /**
     * @param float $FinalBalance
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setFinalBalance($FinalBalance)
    {
        $this->FinalBalance = $FinalBalance;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
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
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setCashBackAmount($CashBackAmount)
    {
        $this->CashBackAmount = $CashBackAmount;
        return $this;
    }

    /**
     * @return PrepaidCard
     */
    public function getPrepaidCard()
    {
        return $this->PrepaidCard;
    }

    /**
     * @param PrepaidCard $PrepaidCard
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setPrepaidCard(PrepaidCard $PrepaidCard)
    {
        $this->PrepaidCard = $PrepaidCard;
        return $this;
    }

    /**
     * @return float
     */
    public function getEBTCashBalanceAvailable()
    {
        return $this->EBTCashBalanceAvailable;
    }

    /**
     * @param float $EBTCashBalanceAvailable
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setEBTCashBalanceAvailable($EBTCashBalanceAvailable)
    {
        $this->EBTCashBalanceAvailable = $EBTCashBalanceAvailable;
        return $this;
    }

    /**
     * @return float
     */
    public function getEBTFnsBalanceAvailable()
    {
        return $this->EBTFnsBalanceAvailable;
    }

    /**
     * @param float $EBTFnsBalanceAvailable
     * @return \NabCommerce\Transaction\BankcardTransactionResponse
     */
    public function setEBTFnsBalanceAvailable($EBTFnsBalanceAvailable)
    {
        $this->EBTFnsBalanceAvailable = $EBTFnsBalanceAvailable;
        return $this;
    }

}
