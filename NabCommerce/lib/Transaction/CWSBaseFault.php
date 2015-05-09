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

class CWSBaseFault
{

    /**
     * @var string $BatchId
     */
    protected $BatchId = null;

    /**
     * @var int $ErrorID
     */
    protected $ErrorID = null;

    /**
     * @var string $HelpURL
     */
    protected $HelpURL = null;

    /**
     * @var string $Operation
     */
    protected $Operation = null;

    /**
     * @var string $ProblemType
     */
    protected $ProblemType = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var TransactionState $TransactionState
     */
    protected $TransactionState = null;

    /**
     * @param int $ErrorID
     * @param TransactionState $TransactionState
     */
    public function __construct($ErrorID, $TransactionState)
    {
        $this->ErrorID = $ErrorID;
        $this->TransactionState = $TransactionState;
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
    public function getBatchId()
    {
        return $this->BatchId;
    }

    /**
     * @param string $BatchId
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setBatchId($BatchId)
    {
        $this->BatchId = $BatchId;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorID()
    {
        return $this->ErrorID;
    }

    /**
     * @param int $ErrorID
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setErrorID($ErrorID)
    {
        $this->ErrorID = $ErrorID;
        return $this;
    }

    /**
     * @return string
     */
    public function getHelpURL()
    {
        return $this->HelpURL;
    }

    /**
     * @param string $HelpURL
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setHelpURL($HelpURL)
    {
        $this->HelpURL = $HelpURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * @param string $Operation
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setOperation($Operation)
    {
        $this->Operation = $Operation;
        return $this;
    }

    /**
     * @return string
     */
    public function getProblemType()
    {
        return $this->ProblemType;
    }

    /**
     * @param string $ProblemType
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setProblemType($ProblemType)
    {
        $this->ProblemType = $ProblemType;
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
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;
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
     * @return \NabCommerce\Transaction\CWSBaseFault
     */
    public function setTransactionState(TransactionState $TransactionState)
    {
        $this->TransactionState = $TransactionState;
        return $this;
    }

}
