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

class SummaryData
{

    /**
     * @var SummaryTotals $CashBackTotals
     */
    protected $CashBackTotals = null;

    /**
     * @var SummaryTotals $CreditReturnTotals
     */
    protected $CreditReturnTotals = null;

    /**
     * @var SummaryTotals $CreditTotals
     */
    protected $CreditTotals = null;

    /**
     * @var SummaryTotals $DebitReturnTotals
     */
    protected $DebitReturnTotals = null;

    /**
     * @var SummaryTotals $DebitTotals
     */
    protected $DebitTotals = null;

    /**
     * @var SummaryTotals $NetTotals
     */
    protected $NetTotals = null;

    /**
     * @var SummaryTotals $VoidTotals
     */
    protected $VoidTotals = null;


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
     * @return SummaryTotals
     */
    public function getCashBackTotals()
    {
        return $this->CashBackTotals;
    }

    /**
     * @param SummaryTotals $CashBackTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setCashBackTotals(SummaryTotals $CashBackTotals)
    {
        $this->CashBackTotals = $CashBackTotals;
        return $this;
    }

    /**
     * @return SummaryTotals
     */
    public function getCreditReturnTotals()
    {
        return $this->CreditReturnTotals;
    }

    /**
     * @param SummaryTotals $CreditReturnTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setCreditReturnTotals(SummaryTotals $CreditReturnTotals)
    {
        $this->CreditReturnTotals = $CreditReturnTotals;
        return $this;
    }

    /**
     * @return SummaryTotals
     */
    public function getCreditTotals()
    {
        return $this->CreditTotals;
    }

    /**
     * @param SummaryTotals $CreditTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setCreditTotals(SummaryTotals $CreditTotals)
    {
        $this->CreditTotals = $CreditTotals;
        return $this;
    }

    /**
     * @return SummaryTotals
     */
    public function getDebitReturnTotals()
    {
        return $this->DebitReturnTotals;
    }

    /**
     * @param SummaryTotals $DebitReturnTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setDebitReturnTotals(SummaryTotals $DebitReturnTotals)
    {
        $this->DebitReturnTotals = $DebitReturnTotals;
        return $this;
    }

    /**
     * @return SummaryTotals
     */
    public function getDebitTotals()
    {
        return $this->DebitTotals;
    }

    /**
     * @param SummaryTotals $DebitTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setDebitTotals(SummaryTotals $DebitTotals)
    {
        $this->DebitTotals = $DebitTotals;
        return $this;
    }

    /**
     * @return SummaryTotals
     */
    public function getNetTotals()
    {
        return $this->NetTotals;
    }

    /**
     * @param SummaryTotals $NetTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setNetTotals(SummaryTotals $NetTotals)
    {
        $this->NetTotals = $NetTotals;
        return $this;
    }

    /**
     * @return SummaryTotals
     */
    public function getVoidTotals()
    {
        return $this->VoidTotals;
    }

    /**
     * @param SummaryTotals $VoidTotals
     * @return \NabCommerce\Transaction\SummaryData
     */
    public function setVoidTotals(SummaryTotals $VoidTotals)
    {
        $this->VoidTotals = $VoidTotals;
        return $this;
    }

}
