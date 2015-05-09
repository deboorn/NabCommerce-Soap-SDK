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

class ElectronicCheckingTransactionResponse extends Response
{

    /**
     * @var boolean $ACHCapable
     */
    protected $ACHCapable = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @var string $ModifiedAccountNumber
     */
    protected $ModifiedAccountNumber = null;

    /**
     * @var string $ModifiedRoutingNumber
     */
    protected $ModifiedRoutingNumber = null;

    /**
     * @var string $PaymentAccountDataToken
     */
    protected $PaymentAccountDataToken = null;

    /**
     * @var ReturnInformation $ReturnInformation
     */
    protected $ReturnInformation = null;

    /**
     * @var string $RspTxnCode
     */
    protected $RspTxnCode = null;

    /**
     * @var \DateTime $SubmitDate
     */
    protected $SubmitDate = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     * @param boolean $ACHCapable
     * @param float $Amount
     * @param \DateTime $SubmitDate
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged, $ACHCapable, $Amount, \DateTime $SubmitDate)
    {
        parent::__construct($Status, $CaptureState, $TransactionState, $IsAcknowledged);
        $this->ACHCapable = $ACHCapable;
        $this->Amount = $Amount;
        $this->SubmitDate = $SubmitDate->format(\DateTime::ATOM);
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
     * @return boolean
     */
    public function getACHCapable()
    {
        return $this->ACHCapable;
    }

    /**
     * @param boolean $ACHCapable
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setACHCapable($ACHCapable)
    {
        $this->ACHCapable = $ACHCapable;
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
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
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
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setApprovalCode($ApprovalCode)
    {
        $this->ApprovalCode = $ApprovalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedAccountNumber()
    {
        return $this->ModifiedAccountNumber;
    }

    /**
     * @param string $ModifiedAccountNumber
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setModifiedAccountNumber($ModifiedAccountNumber)
    {
        $this->ModifiedAccountNumber = $ModifiedAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedRoutingNumber()
    {
        return $this->ModifiedRoutingNumber;
    }

    /**
     * @param string $ModifiedRoutingNumber
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setModifiedRoutingNumber($ModifiedRoutingNumber)
    {
        $this->ModifiedRoutingNumber = $ModifiedRoutingNumber;
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
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setPaymentAccountDataToken($PaymentAccountDataToken)
    {
        $this->PaymentAccountDataToken = $PaymentAccountDataToken;
        return $this;
    }

    /**
     * @return ReturnInformation
     */
    public function getReturnInformation()
    {
        return $this->ReturnInformation;
    }

    /**
     * @param ReturnInformation $ReturnInformation
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setReturnInformation(ReturnInformation $ReturnInformation)
    {
        $this->ReturnInformation = $ReturnInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getRspTxnCode()
    {
        return $this->RspTxnCode;
    }

    /**
     * @param string $RspTxnCode
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setRspTxnCode($RspTxnCode)
    {
        $this->RspTxnCode = $RspTxnCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubmitDate()
    {
        if ($this->SubmitDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SubmitDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SubmitDate
     * @return \NabCommerce\Transaction\ElectronicCheckingTransactionResponse
     */
    public function setSubmitDate(\DateTime $SubmitDate)
    {
        $this->SubmitDate = $SubmitDate->format(\DateTime::ATOM);
        return $this;
    }

}
