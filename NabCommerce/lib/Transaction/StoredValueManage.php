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

class StoredValueManage extends Manage
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var CardData $SourceCardData
     */
    protected $SourceCardData = null;

    /**
     * @var CardStatus $CardStatus
     */
    protected $CardStatus = null;

    /**
     * @var boolean $IsCashOut
     */
    protected $IsCashOut = null;

    /**
     * @var OperationType $OperationType
     */
    protected $OperationType = null;

    /**
     * @param float $Amount
     * @param CardStatus $CardStatus
     * @param boolean $IsCashOut
     * @param OperationType $OperationType
     */
    public function __construct($Amount, $CardStatus, $IsCashOut, $OperationType)
    {
        parent::__construct();
        $this->Amount = $Amount;
        $this->CardStatus = $CardStatus;
        $this->IsCashOut = $IsCashOut;
        $this->OperationType = $OperationType;
    }

    /**
     * @param float $Amount
     * @param CardStatus $CardStatus
     * @param boolean $IsCashOut
     * @param OperationType $OperationType
     */
    public static function forge($Amount, $CardStatus, $IsCashOut, $OperationType)
    {
        return new self($Amount, $CardStatus, $IsCashOut, $OperationType);
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
     * @return \NabCommerce\Transaction\StoredValueManage
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return CardData
     */
    public function getSourceCardData()
    {
        return $this->SourceCardData;
    }

    /**
     * @param CardData $SourceCardData
     * @return \NabCommerce\Transaction\StoredValueManage
     */
    public function setSourceCardData(CardData $SourceCardData)
    {
        $this->SourceCardData = $SourceCardData;
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
     * @return \NabCommerce\Transaction\StoredValueManage
     */
    public function setCardStatus(CardStatus $CardStatus)
    {
        $this->CardStatus = $CardStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCashOut()
    {
        return $this->IsCashOut;
    }

    /**
     * @param boolean $IsCashOut
     * @return \NabCommerce\Transaction\StoredValueManage
     */
    public function setIsCashOut($IsCashOut)
    {
        $this->IsCashOut = $IsCashOut;
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
     * @return \NabCommerce\Transaction\StoredValueManage
     */
    public function setOperationType(OperationType $OperationType)
    {
        $this->OperationType = $OperationType;
        return $this;
    }

}
