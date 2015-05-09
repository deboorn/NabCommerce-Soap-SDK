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

class Response
{

    /**
     * @var Status $Status
     */
    protected $Status = null;

    /**
     * @var string $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var string $OriginatorTransactionId
     */
    protected $OriginatorTransactionId = null;

    /**
     * @var string $ServiceTransactionId
     */
    protected $ServiceTransactionId = null;

    /**
     * @var ServiceTransactionDateTime $ServiceTransactionDateTime
     */
    protected $ServiceTransactionDateTime = null;

    /**
     * @var Addendum $Addendum
     */
    protected $Addendum = null;

    /**
     * @var CaptureState $CaptureState
     */
    protected $CaptureState = null;

    /**
     * @var TransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @var boolean $IsAcknowledged
     */
    protected $IsAcknowledged = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged)
    {
        $this->Status = $Status;
        $this->CaptureState = $CaptureState;
        $this->TransactionState = $TransactionState;
        $this->IsAcknowledged = $IsAcknowledged;
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
     * @return Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param Status $Status
     * @return \NabCommerce\Transaction\Response
     */
    public function setStatus(Status $Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return \NabCommerce\Transaction\Response
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \NabCommerce\Transaction\Response
     */
    public function setStatusMessage($StatusMessage)
    {
        $this->StatusMessage = $StatusMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \NabCommerce\Transaction\Response
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginatorTransactionId()
    {
        return $this->OriginatorTransactionId;
    }

    /**
     * @param string $OriginatorTransactionId
     * @return \NabCommerce\Transaction\Response
     */
    public function setOriginatorTransactionId($OriginatorTransactionId)
    {
        $this->OriginatorTransactionId = $OriginatorTransactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceTransactionId()
    {
        return $this->ServiceTransactionId;
    }

    /**
     * @param string $ServiceTransactionId
     * @return \NabCommerce\Transaction\Response
     */
    public function setServiceTransactionId($ServiceTransactionId)
    {
        $this->ServiceTransactionId = $ServiceTransactionId;
        return $this;
    }

    /**
     * @return ServiceTransactionDateTime
     */
    public function getServiceTransactionDateTime()
    {
        return $this->ServiceTransactionDateTime;
    }

    /**
     * @param ServiceTransactionDateTime $ServiceTransactionDateTime
     * @return \NabCommerce\Transaction\Response
     */
    public function setServiceTransactionDateTime(ServiceTransactionDateTime $ServiceTransactionDateTime)
    {
        $this->ServiceTransactionDateTime = $ServiceTransactionDateTime;
        return $this;
    }

    /**
     * @return Addendum
     */
    public function getAddendum()
    {
        return $this->Addendum;
    }

    /**
     * @param Addendum $Addendum
     * @return \NabCommerce\Transaction\Response
     */
    public function setAddendum(Addendum $Addendum)
    {
        $this->Addendum = $Addendum;
        return $this;
    }

    /**
     * @return CaptureState
     */
    public function getCaptureState()
    {
        return $this->CaptureState;
    }

    /**
     * @param CaptureState $CaptureState
     * @return \NabCommerce\Transaction\Response
     */
    public function setCaptureState(CaptureState $CaptureState)
    {
        $this->CaptureState = $CaptureState;
        return $this;
    }

    /**
     * @return TransactionState
     */
    public function getTransactionState()
    {
        return $this->TransactionState;
    }

    /**
     * @param TransactionState $TransactionState
     * @return \NabCommerce\Transaction\Response
     */
    public function setTransactionState(TransactionState $TransactionState)
    {
        $this->TransactionState = $TransactionState;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAcknowledged()
    {
        return $this->IsAcknowledged;
    }

    /**
     * @param boolean $IsAcknowledged
     * @return \NabCommerce\Transaction\Response
     */
    public function setIsAcknowledged($IsAcknowledged)
    {
        $this->IsAcknowledged = $IsAcknowledged;
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
     * @return \NabCommerce\Transaction\Response
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

}
