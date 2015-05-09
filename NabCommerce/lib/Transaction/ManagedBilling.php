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

class ManagedBilling
{

    /**
     * @var float $DownPayment
     */
    protected $DownPayment = null;

    /**
     * @var ManagedBillingInstallments $Installments
     */
    protected $Installments = null;

    /**
     * @var Interval $Interval
     */
    protected $Interval = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @param float $DownPayment
     * @param Interval $Interval
     * @param int $Period
     * @param \DateTime $StartDate
     */
    public function __construct($DownPayment, $Interval, $Period, \DateTime $StartDate)
    {
        $this->DownPayment = $DownPayment;
        $this->Interval = $Interval;
        $this->Period = $Period;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
    }

    /**
     * @param float $DownPayment
     * @param Interval $Interval
     * @param int $Period
     * @param \DateTime $StartDate
     */
    public static function forge($DownPayment, $Interval, $Period, \DateTime $StartDate)
    {
        return new self($DownPayment, $Interval, $Period, $StartDate);
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
    public function getDownPayment()
    {
        return $this->DownPayment;
    }

    /**
     * @param float $DownPayment
     * @return \NabCommerce\Transaction\ManagedBilling
     */
    public function setDownPayment($DownPayment)
    {
        $this->DownPayment = $DownPayment;
        return $this;
    }

    /**
     * @return ManagedBillingInstallments
     */
    public function getInstallments()
    {
        return $this->Installments;
    }

    /**
     * @param ManagedBillingInstallments $Installments
     * @return \NabCommerce\Transaction\ManagedBilling
     */
    public function setInstallments(ManagedBillingInstallments $Installments)
    {
        $this->Installments = $Installments;
        return $this;
    }

    /**
     * @return Interval
     */
    public function getInterval()
    {
        return $this->Interval;
    }

    /**
     * @param Interval $Interval
     * @return \NabCommerce\Transaction\ManagedBilling
     */
    public function setInterval(Interval $Interval)
    {
        $this->Interval = $Interval;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param int $Period
     * @return \NabCommerce\Transaction\ManagedBilling
     */
    public function setPeriod($Period)
    {
        $this->Period = $Period;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \NabCommerce\Transaction\ManagedBilling
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

}
