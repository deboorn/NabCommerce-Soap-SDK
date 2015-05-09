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

class BankcardCapturePro extends BankcardCapture
{

    /**
     * @var boolean $MultiplePartialCapture
     */
    protected $MultiplePartialCapture = null;

    /**
     * @var Level2Data $Level2Data
     */
    protected $Level2Data = null;

    /**
     * @var ArrayOfLineItemDetail $LineItemDetails
     */
    protected $LineItemDetails = null;

    /**
     * @var CustomerInfo $ShippingData
     */
    protected $ShippingData = null;

    /**
     * @param string $sessionToken
     * @param Capture $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param float $Amount
     * @param ChargeType $ChargeType
     * @param \DateTime $ShipDate
     * @param float $TipAmount
     * @param boolean $MultiplePartialCapture
     */
    public function __construct($sessionToken, $differenceData, $applicationProfileId, $workflowId, $Amount, $ChargeType, \DateTime $ShipDate, $TipAmount, $MultiplePartialCapture)
    {
        parent::__construct($sessionToken, $differenceData, $applicationProfileId, $workflowId, $Amount, $ChargeType, $ShipDate, $TipAmount);
        $this->MultiplePartialCapture = $MultiplePartialCapture;
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
    public function getMultiplePartialCapture()
    {
        return $this->MultiplePartialCapture;
    }

    /**
     * @param boolean $MultiplePartialCapture
     * @return \NabCommerce\Transaction\BankcardCapturePro
     */
    public function setMultiplePartialCapture($MultiplePartialCapture)
    {
        $this->MultiplePartialCapture = $MultiplePartialCapture;
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
     * @return \NabCommerce\Transaction\BankcardCapturePro
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
     * @return \NabCommerce\Transaction\BankcardCapturePro
     */
    public function setLineItemDetails(ArrayOfLineItemDetail $LineItemDetails)
    {
        $this->LineItemDetails = $LineItemDetails;
        return $this;
    }

    /**
     * @return CustomerInfo
     */
    public function getShippingData()
    {
        return $this->ShippingData;
    }

    /**
     * @param CustomerInfo $ShippingData
     * @return \NabCommerce\Transaction\BankcardCapturePro
     */
    public function setShippingData(CustomerInfo $ShippingData)
    {
        $this->ShippingData = $ShippingData;
        return $this;
    }

}
