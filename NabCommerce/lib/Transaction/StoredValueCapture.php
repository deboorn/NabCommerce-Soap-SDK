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

class StoredValueCapture extends Capture
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param string $sessionToken
     * @param Capture $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param float $Amount
     */
    public function __construct($sessionToken, $differenceData, $applicationProfileId, $workflowId, $Amount)
    {
        parent::__construct($sessionToken, $differenceData, $applicationProfileId, $workflowId);
        $this->Amount = $Amount;
    }

    /**
     * @param string $sessionToken
     * @param Capture $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param float $Amount
     */
    public static function forge($sessionToken, $differenceData, $applicationProfileId, $workflowId, $Amount)
    {
        return new self($sessionToken, $differenceData, $applicationProfileId, $workflowId, $Amount);
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
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \NabCommerce\Transaction\StoredValueCapture
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

}
