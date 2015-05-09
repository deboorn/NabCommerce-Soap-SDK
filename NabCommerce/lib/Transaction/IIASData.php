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

class IIASData
{

    /**
     * @var float $HealthcareAmount
     */
    protected $HealthcareAmount = null;

    /**
     * @var float $ClinicOtherAmount
     */
    protected $ClinicOtherAmount = null;

    /**
     * @var float $DentalAmount
     */
    protected $DentalAmount = null;

    /**
     * @var float $PrescriptionAmount
     */
    protected $PrescriptionAmount = null;

    /**
     * @var float $VisionAmount
     */
    protected $VisionAmount = null;

    /**
     * @var IIASDesignation $IIASDesignation
     */
    protected $IIASDesignation = null;

    /**
     * @param float $HealthcareAmount
     * @param float $ClinicOtherAmount
     * @param float $DentalAmount
     * @param float $PrescriptionAmount
     * @param float $VisionAmount
     * @param IIASDesignation $IIASDesignation
     */
    public function __construct($HealthcareAmount, $ClinicOtherAmount, $DentalAmount, $PrescriptionAmount, $VisionAmount, $IIASDesignation)
    {
        $this->HealthcareAmount = $HealthcareAmount;
        $this->ClinicOtherAmount = $ClinicOtherAmount;
        $this->DentalAmount = $DentalAmount;
        $this->PrescriptionAmount = $PrescriptionAmount;
        $this->VisionAmount = $VisionAmount;
        $this->IIASDesignation = $IIASDesignation;
    }

    /**
     * @param float $HealthcareAmount
     * @param float $ClinicOtherAmount
     * @param float $DentalAmount
     * @param float $PrescriptionAmount
     * @param float $VisionAmount
     * @param IIASDesignation $IIASDesignation
     */
    public static function forge($HealthcareAmount, $ClinicOtherAmount, $DentalAmount, $PrescriptionAmount, $VisionAmount, $IIASDesignation)
    {
        return new self($HealthcareAmount, $ClinicOtherAmount, $DentalAmount, $PrescriptionAmount, $VisionAmount, $IIASDesignation);
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
    public function getHealthcareAmount()
    {
        return $this->HealthcareAmount;
    }

    /**
     * @param float $HealthcareAmount
     * @return \NabCommerce\Transaction\IIASData
     */
    public function setHealthcareAmount($HealthcareAmount)
    {
        $this->HealthcareAmount = $HealthcareAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getClinicOtherAmount()
    {
        return $this->ClinicOtherAmount;
    }

    /**
     * @param float $ClinicOtherAmount
     * @return \NabCommerce\Transaction\IIASData
     */
    public function setClinicOtherAmount($ClinicOtherAmount)
    {
        $this->ClinicOtherAmount = $ClinicOtherAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDentalAmount()
    {
        return $this->DentalAmount;
    }

    /**
     * @param float $DentalAmount
     * @return \NabCommerce\Transaction\IIASData
     */
    public function setDentalAmount($DentalAmount)
    {
        $this->DentalAmount = $DentalAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrescriptionAmount()
    {
        return $this->PrescriptionAmount;
    }

    /**
     * @param float $PrescriptionAmount
     * @return \NabCommerce\Transaction\IIASData
     */
    public function setPrescriptionAmount($PrescriptionAmount)
    {
        $this->PrescriptionAmount = $PrescriptionAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getVisionAmount()
    {
        return $this->VisionAmount;
    }

    /**
     * @param float $VisionAmount
     * @return \NabCommerce\Transaction\IIASData
     */
    public function setVisionAmount($VisionAmount)
    {
        $this->VisionAmount = $VisionAmount;
        return $this;
    }

    /**
     * @return IIASDesignation
     */
    public function getIIASDesignation()
    {
        return $this->IIASDesignation;
    }

    /**
     * @param IIASDesignation $IIASDesignation
     * @return \NabCommerce\Transaction\IIASData
     */
    public function setIIASDesignation(IIASDesignation $IIASDesignation)
    {
        $this->IIASDesignation = $IIASDesignation;
        return $this;
    }

}
