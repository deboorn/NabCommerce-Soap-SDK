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

class CaptureAllAsync
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @var ArrayOfCapture $differenceData
     */
    protected $differenceData = null;

    /**
     * @var ArrayOfstring $batchIds
     */
    protected $batchIds = null;

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
     * @param ArrayOfCapture $differenceData
     * @param ArrayOfstring $batchIds
     * @param string $applicationProfileId
     * @param string $merchantProfileId
     * @param string $workflowId
     */
    public function __construct($sessionToken, $differenceData, $batchIds, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->sessionToken = $sessionToken;
        $this->differenceData = $differenceData;
        $this->batchIds = $batchIds;
        $this->applicationProfileId = $applicationProfileId;
        $this->merchantProfileId = $merchantProfileId;
        $this->workflowId = $workflowId;
    }

    /**
     * @param string $sessionToken
     * @param ArrayOfCapture $differenceData
     * @param ArrayOfstring $batchIds
     * @param string $applicationProfileId
     * @param string $merchantProfileId
     * @param string $workflowId
     */
    public static function forge($sessionToken, $differenceData, $batchIds, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        return new self($sessionToken, $differenceData, $batchIds, $applicationProfileId, $merchantProfileId, $workflowId);
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
     * @return \NabCommerce\Transaction\CaptureAllAsync
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
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
     * @return \NabCommerce\Transaction\CaptureAllAsync
     */
    public function setDifferenceData(ArrayOfCapture $differenceData)
    {
        $this->differenceData = $differenceData;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getBatchIds()
    {
        return $this->batchIds;
    }

    /**
     * @param ArrayOfstring $batchIds
     * @return \NabCommerce\Transaction\CaptureAllAsync
     */
    public function setBatchIds(ArrayOfstring $batchIds)
    {
        $this->batchIds = $batchIds;
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
     * @return \NabCommerce\Transaction\CaptureAllAsync
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
     * @return \NabCommerce\Transaction\CaptureAllAsync
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
     * @return \NabCommerce\Transaction\CaptureAllAsync
     */
    public function setWorkflowId($workflowId)
    {
        $this->workflowId = $workflowId;
        return $this;
    }

}
