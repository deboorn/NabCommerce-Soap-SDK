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

class QueryAccount
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @var Transaction $transaction
     */
    protected $transaction = null;

    /**
     * @var string $applicationProfileId
     */
    protected $applicationProfileId = null;

    /**
     * @var string $merchantProfileId
     */
    protected $merchantProfileId = null;

    /**
     * @var string $workflowId
     */
    protected $workflowId = null;

    /**
     * @param string $sessionToken
     * @param Transaction $transaction
     * @param string $applicationProfileId
     * @param string $merchantProfileId
     * @param string $workflowId
     */
    public function __construct($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->sessionToken = $sessionToken;
        $this->transaction = $transaction;
        $this->applicationProfileId = $applicationProfileId;
        $this->merchantProfileId = $merchantProfileId;
        $this->workflowId = $workflowId;
    }

    /**
     * @param string $sessionToken
     * @param Transaction $transaction
     * @param string $applicationProfileId
     * @param string $merchantProfileId
     * @param string $workflowId
     */
    public static function forge($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        return new self($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId);
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
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @param string $sessionToken
     * @return \NabCommerce\Transaction\QueryAccount
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Transaction $transaction
     * @return \NabCommerce\Transaction\QueryAccount
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationProfileId()
    {
        return $this->applicationProfileId;
    }

    /**
     * @param string $applicationProfileId
     * @return \NabCommerce\Transaction\QueryAccount
     */
    public function setApplicationProfileId($applicationProfileId)
    {
        $this->applicationProfileId = $applicationProfileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantProfileId()
    {
        return $this->merchantProfileId;
    }

    /**
     * @param string $merchantProfileId
     * @return \NabCommerce\Transaction\QueryAccount
     */
    public function setMerchantProfileId($merchantProfileId)
    {
        $this->merchantProfileId = $merchantProfileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflowId;
    }

    /**
     * @param string $workflowId
     * @return \NabCommerce\Transaction\QueryAccount
     */
    public function setWorkflowId($workflowId)
    {
        $this->workflowId = $workflowId;
        return $this;
    }

}
