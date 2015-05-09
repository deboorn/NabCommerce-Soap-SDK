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

class BankcardTransaction extends Transaction
{

    /**
     * @var BankcardApplicationConfigurationData $ApplicationConfigurationData
     */
    protected $ApplicationConfigurationData = null;

    /**
     * @var BankcardTenderData $TenderData
     */
    protected $TenderData = null;

    /**
     * @var BankcardTransactionData $TransactionData
     */
    protected $TransactionData = null;


    public function __construct()
    {
        parent::__construct();
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
     * @return BankcardApplicationConfigurationData
     */
    public function getApplicationConfigurationData()
    {
        return $this->ApplicationConfigurationData;
    }

    /**
     * @param BankcardApplicationConfigurationData $ApplicationConfigurationData
     * @return \NabCommerce\Transaction\BankcardTransaction
     */
    public function setApplicationConfigurationData(BankcardApplicationConfigurationData $ApplicationConfigurationData)
    {
        $this->ApplicationConfigurationData = $ApplicationConfigurationData;
        return $this;
    }

    /**
     * @return BankcardTenderData
     */
    public function getTenderData()
    {
        return $this->TenderData;
    }

    /**
     * @param BankcardTenderData $TenderData
     * @return \NabCommerce\Transaction\BankcardTransaction
     */
    public function setTenderData(BankcardTenderData $TenderData)
    {
        $this->TenderData = $TenderData;
        return $this;
    }

    /**
     * @return BankcardTransactionData
     */
    public function getTransactionData()
    {
        return $this->TransactionData;
    }

    /**
     * @param BankcardTransactionData $TransactionData
     * @return \NabCommerce\Transaction\BankcardTransaction
     */
    public function setTransactionData(BankcardTransactionData $TransactionData)
    {
        $this->TransactionData = $TransactionData;
        return $this;
    }

}
