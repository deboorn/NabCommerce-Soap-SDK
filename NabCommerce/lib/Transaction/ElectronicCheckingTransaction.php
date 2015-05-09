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

class ElectronicCheckingTransaction extends Transaction
{

    /**
     * @var ElectronicCheckingTenderData $TenderData
     */
    protected $TenderData = null;

    /**
     * @var ElectronicCheckingTransactionData $TransactionData
     */
    protected $TransactionData = null;


    public function __construct()
    {
        parent::__construct();
    }


    public static function forge()
    {
        return new self();
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
     * @return ElectronicCheckingTenderData
     */
    public function getTenderData()
    {
        return $this->TenderData;
    }

    /**
     * @param ElectronicCheckingTenderData $TenderData
     * @return \NabCommerce\Transaction\ElectronicCheckingTransaction
     */
    public function setTenderData(ElectronicCheckingTenderData $TenderData)
    {
        $this->TenderData = $TenderData;
        return $this;
    }

    /**
     * @return ElectronicCheckingTransactionData
     */
    public function getTransactionData()
    {
        return $this->TransactionData;
    }

    /**
     * @param ElectronicCheckingTransactionData $TransactionData
     * @return \NabCommerce\Transaction\ElectronicCheckingTransaction
     */
    public function setTransactionData(ElectronicCheckingTransactionData $TransactionData)
    {
        $this->TransactionData = $TransactionData;
        return $this;
    }

}
