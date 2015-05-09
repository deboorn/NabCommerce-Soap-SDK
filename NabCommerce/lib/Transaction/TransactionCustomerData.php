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

class TransactionCustomerData
{

    /**
     * @var CustomerInfo $BillingData
     */
    protected $BillingData = null;

    /**
     * @var string $CustomerId
     */
    protected $CustomerId = null;

    /**
     * @var string $CustomerTaxId
     */
    protected $CustomerTaxId = null;

    /**
     * @var CustomerInfo $ShippingData
     */
    protected $ShippingData = null;


    public function __construct()
    {

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
     * @return CustomerInfo
     */
    public function getBillingData()
    {
        return $this->BillingData;
    }

    /**
     * @param CustomerInfo $BillingData
     * @return \NabCommerce\Transaction\TransactionCustomerData
     */
    public function setBillingData(CustomerInfo $BillingData)
    {
        $this->BillingData = $BillingData;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param string $CustomerId
     * @return \NabCommerce\Transaction\TransactionCustomerData
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerTaxId()
    {
        return $this->CustomerTaxId;
    }

    /**
     * @param string $CustomerTaxId
     * @return \NabCommerce\Transaction\TransactionCustomerData
     */
    public function setCustomerTaxId($CustomerTaxId)
    {
        $this->CustomerTaxId = $CustomerTaxId;
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
     * @return \NabCommerce\Transaction\TransactionCustomerData
     */
    public function setShippingData(CustomerInfo $ShippingData)
    {
        $this->ShippingData = $ShippingData;
        return $this;
    }

}
