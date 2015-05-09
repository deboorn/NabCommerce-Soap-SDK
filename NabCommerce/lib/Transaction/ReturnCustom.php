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

class ReturnCustom
{

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var Addendum $Addendum
     */
    protected $Addendum = null;

    /**
     * @var string $TransactionDateTime
     */
    protected $TransactionDateTime = null;


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
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \NabCommerce\Transaction\Return
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;
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
     * @return \NabCommerce\Transaction\Return
     */
    public function setAddendum(Addendum $Addendum)
    {
        $this->Addendum = $Addendum;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDateTime()
    {
        return $this->TransactionDateTime;
    }

    /**
     * @param string $TransactionDateTime
     * @return \NabCommerce\Transaction\Return
     */
    public function setTransactionDateTime($TransactionDateTime)
    {
        $this->TransactionDateTime = $TransactionDateTime;
        return $this;
    }

}
