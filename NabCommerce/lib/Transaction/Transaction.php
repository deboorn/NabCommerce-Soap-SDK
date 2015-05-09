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

class Transaction
{

    /**
     * @var string $RelayResponseUrl
     */
    protected $RelayResponseUrl = null;

    /**
     * @var TransactionCustomerData $CustomerData
     */
    protected $CustomerData = null;

    /**
     * @var TransactionReportingData $ReportingData
     */
    protected $ReportingData = null;

    /**
     * @var Addendum $Addendum
     */
    protected $Addendum = null;


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
     * @return string
     */
    public function getRelayResponseUrl()
    {
        return $this->RelayResponseUrl;
    }

    /**
     * @param string $RelayResponseUrl
     * @return \NabCommerce\Transaction\Transaction
     */
    public function setRelayResponseUrl($RelayResponseUrl)
    {
        $this->RelayResponseUrl = $RelayResponseUrl;
        return $this;
    }

    /**
     * @return TransactionCustomerData
     */
    public function getCustomerData()
    {
        return $this->CustomerData;
    }

    /**
     * @param TransactionCustomerData $CustomerData
     * @return \NabCommerce\Transaction\Transaction
     */
    public function setCustomerData(TransactionCustomerData $CustomerData)
    {
        $this->CustomerData = $CustomerData;
        return $this;
    }

    /**
     * @return TransactionReportingData
     */
    public function getReportingData()
    {
        return $this->ReportingData;
    }

    /**
     * @param TransactionReportingData $ReportingData
     * @return \NabCommerce\Transaction\Transaction
     */
    public function setReportingData(TransactionReportingData $ReportingData)
    {
        $this->ReportingData = $ReportingData;
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
     * @return \NabCommerce\Transaction\Transaction
     */
    public function setAddendum(Addendum $Addendum)
    {
        $this->Addendum = $Addendum;
        return $this;
    }

}
