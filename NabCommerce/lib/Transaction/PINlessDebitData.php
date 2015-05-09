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

class PINlessDebitData
{

    /**
     * @var BillPayServiceData $BillPayServiceData
     */
    protected $BillPayServiceData = null;

    /**
     * @var PayeeData $PayeeData
     */
    protected $PayeeData = null;


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
     * @return BillPayServiceData
     */
    public function getBillPayServiceData()
    {
        return $this->BillPayServiceData;
    }

    /**
     * @param BillPayServiceData $BillPayServiceData
     * @return \NabCommerce\Transaction\PINlessDebitData
     */
    public function setBillPayServiceData(BillPayServiceData $BillPayServiceData)
    {
        $this->BillPayServiceData = $BillPayServiceData;
        return $this;
    }

    /**
     * @return PayeeData
     */
    public function getPayeeData()
    {
        return $this->PayeeData;
    }

    /**
     * @param PayeeData $PayeeData
     * @return \NabCommerce\Transaction\PINlessDebitData
     */
    public function setPayeeData(PayeeData $PayeeData)
    {
        $this->PayeeData = $PayeeData;
        return $this;
    }

}
