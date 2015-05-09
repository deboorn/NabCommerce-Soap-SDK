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

class TransactionTenderData
{

    /**
     * @var string $PaymentAccountDataToken
     */
    protected $PaymentAccountDataToken = null;

    /**
     * @var string $SecurePaymentAccountData
     */
    protected $SecurePaymentAccountData = null;

    /**
     * @var string $EncryptionKeyId
     */
    protected $EncryptionKeyId = null;

    /**
     * @var string $SwipeStatus
     */
    protected $SwipeStatus = null;


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
    public function getPaymentAccountDataToken()
    {
        return $this->PaymentAccountDataToken;
    }

    /**
     * @param string $PaymentAccountDataToken
     * @return \NabCommerce\Transaction\TransactionTenderData
     */
    public function setPaymentAccountDataToken($PaymentAccountDataToken)
    {
        $this->PaymentAccountDataToken = $PaymentAccountDataToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurePaymentAccountData()
    {
        return $this->SecurePaymentAccountData;
    }

    /**
     * @param string $SecurePaymentAccountData
     * @return \NabCommerce\Transaction\TransactionTenderData
     */
    public function setSecurePaymentAccountData($SecurePaymentAccountData)
    {
        $this->SecurePaymentAccountData = $SecurePaymentAccountData;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptionKeyId()
    {
        return $this->EncryptionKeyId;
    }

    /**
     * @param string $EncryptionKeyId
     * @return \NabCommerce\Transaction\TransactionTenderData
     */
    public function setEncryptionKeyId($EncryptionKeyId)
    {
        $this->EncryptionKeyId = $EncryptionKeyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwipeStatus()
    {
        return $this->SwipeStatus;
    }

    /**
     * @param string $SwipeStatus
     * @return \NabCommerce\Transaction\TransactionTenderData
     */
    public function setSwipeStatus($SwipeStatus)
    {
        $this->SwipeStatus = $SwipeStatus;
        return $this;
    }

}
