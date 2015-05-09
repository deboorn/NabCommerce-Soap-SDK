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

class TransactionSummaryData
{

    /**
     * @var Totals $CashBackTotals
     */
    protected $CashBackTotals = null;

    /**
     * @var Totals $NetTotals
     */
    protected $NetTotals = null;

    /**
     * @var Totals $ReturnTotals
     */
    protected $ReturnTotals = null;

    /**
     * @var Totals $SaleTotals
     */
    protected $SaleTotals = null;

    /**
     * @var Totals $VoidTotals
     */
    protected $VoidTotals = null;

    /**
     * @var Totals $PINDebitReturnTotals
     */
    protected $PINDebitReturnTotals = null;

    /**
     * @var Totals $PINDebitSaleTotals
     */
    protected $PINDebitSaleTotals = null;


    public function __construct()
    {

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
     * @return Totals
     */
    public function getCashBackTotals()
    {
        return $this->CashBackTotals;
    }

    /**
     * @param Totals $CashBackTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setCashBackTotals(Totals $CashBackTotals)
    {
        $this->CashBackTotals = $CashBackTotals;
        return $this;
    }

    /**
     * @return Totals
     */
    public function getNetTotals()
    {
        return $this->NetTotals;
    }

    /**
     * @param Totals $NetTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setNetTotals(Totals $NetTotals)
    {
        $this->NetTotals = $NetTotals;
        return $this;
    }

    /**
     * @return Totals
     */
    public function getReturnTotals()
    {
        return $this->ReturnTotals;
    }

    /**
     * @param Totals $ReturnTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setReturnTotals(Totals $ReturnTotals)
    {
        $this->ReturnTotals = $ReturnTotals;
        return $this;
    }

    /**
     * @return Totals
     */
    public function getSaleTotals()
    {
        return $this->SaleTotals;
    }

    /**
     * @param Totals $SaleTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setSaleTotals(Totals $SaleTotals)
    {
        $this->SaleTotals = $SaleTotals;
        return $this;
    }

    /**
     * @return Totals
     */
    public function getVoidTotals()
    {
        return $this->VoidTotals;
    }

    /**
     * @param Totals $VoidTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setVoidTotals(Totals $VoidTotals)
    {
        $this->VoidTotals = $VoidTotals;
        return $this;
    }

    /**
     * @return Totals
     */
    public function getPINDebitReturnTotals()
    {
        return $this->PINDebitReturnTotals;
    }

    /**
     * @param Totals $PINDebitReturnTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setPINDebitReturnTotals(Totals $PINDebitReturnTotals)
    {
        $this->PINDebitReturnTotals = $PINDebitReturnTotals;
        return $this;
    }

    /**
     * @return Totals
     */
    public function getPINDebitSaleTotals()
    {
        return $this->PINDebitSaleTotals;
    }

    /**
     * @param Totals $PINDebitSaleTotals
     * @return \NabCommerce\Transaction\TransactionSummaryData
     */
    public function setPINDebitSaleTotals(Totals $PINDebitSaleTotals)
    {
        $this->PINDebitSaleTotals = $PINDebitSaleTotals;
        return $this;
    }

}
