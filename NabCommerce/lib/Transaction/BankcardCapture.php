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

class BankcardCapture extends Capture
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var ChargeType $ChargeType
     */
    protected $ChargeType = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var float $TipAmount
     */
    protected $TipAmount = null;

    /**
     * @param string $sessionToken
     * @param Capture $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param float $Amount
     * @param ChargeType $ChargeType
     * @param \DateTime $ShipDate
     * @param float $TipAmount
     */
    public function __construct($sessionToken, $differenceData, $applicationProfileId, $workflowId, $Amount, $ChargeType, \DateTime $ShipDate, $TipAmount)
    {
        parent::__construct($sessionToken, $differenceData, $applicationProfileId, $workflowId);
        $this->Amount = $Amount;
        $this->ChargeType = $ChargeType;
        $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
        $this->TipAmount = $TipAmount;
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
     * @return \NabCommerce\Transaction\BankcardCapture
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return ChargeType
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }

    /**
     * @param ChargeType $ChargeType
     * @return \NabCommerce\Transaction\BankcardCapture
     */
    public function setChargeType(ChargeType $ChargeType)
    {
        $this->ChargeType = $ChargeType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
        if ($this->ShipDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ShipDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ShipDate
     * @return \NabCommerce\Transaction\BankcardCapture
     */
    public function setShipDate(\DateTime $ShipDate)
    {
        $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
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
     * @return \NabCommerce\Transaction\BankcardCapture
     */
    public function setTipAmount($TipAmount)
    {
        $this->TipAmount = $TipAmount;
        return $this;
    }

}
