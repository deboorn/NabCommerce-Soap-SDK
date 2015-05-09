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

class CaptureSelective
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @var ArrayOfstring $transactionIds
     */
    protected $transactionIds = null;

    /**
     * @var ArrayOfCapture $differenceData
     */
    protected $differenceData = null;

    /**
     * @var string $applicationProfileId
     */
    protected $applicationProfileId = null;

    /**
     * @var string $workflowId
     */
    protected $workflowId = null;

    /**
     * @param string $sessionToken
     * @param ArrayOfstring $transactionIds
     * @param ArrayOfCapture $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     */
    public function __construct($sessionToken, $transactionIds, $differenceData, $applicationProfileId, $workflowId)
    {
        $this->sessionToken = $sessionToken;
        $this->transactionIds = $transactionIds;
        $this->differenceData = $differenceData;
        $this->applicationProfileId = $applicationProfileId;
        $this->workflowId = $workflowId;
    }

    /**
     * @param string $sessionToken
     * @param ArrayOfstring $transactionIds
     * @param ArrayOfCapture $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     */
    public static function forge($sessionToken, $transactionIds, $differenceData, $applicationProfileId, $workflowId)
    {
        return new self($sessionToken, $transactionIds, $differenceData, $applicationProfileId, $workflowId);
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
     * @return \NabCommerce\Transaction\CaptureSelective
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTransactionIds()
    {
        return $this->transactionIds;
    }

    /**
     * @param ArrayOfstring $transactionIds
     * @return \NabCommerce\Transaction\CaptureSelective
     */
    public function setTransactionIds(ArrayOfstring $transactionIds)
    {
        $this->transactionIds = $transactionIds;
        return $this;
    }

    /**
     * @return ArrayOfCapture
     */
    public function getDifferenceData()
    {
        return $this->differenceData;
    }

    /**
     * @param ArrayOfCapture $differenceData
     * @return \NabCommerce\Transaction\CaptureSelective
     */
    public function setDifferenceData(ArrayOfCapture $differenceData)
    {
        $this->differenceData = $differenceData;
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
     * @return \NabCommerce\Transaction\CaptureSelective
     */
    public function setApplicationProfileId($applicationProfileId)
    {
        $this->applicationProfileId = $applicationProfileId;
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
     * @return \NabCommerce\Transaction\CaptureSelective
     */
    public function setWorkflowId($workflowId)
    {
        $this->workflowId = $workflowId;
        return $this;
    }

}
