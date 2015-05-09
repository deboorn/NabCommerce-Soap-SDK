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

class StoredValueCaptureResponse extends Response
{

    /**
     * @var string $BatchId
     */
    protected $BatchId = null;

    /**
     * @var SummaryData $SummaryData
     */
    protected $SummaryData = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged)
    {
        parent::__construct($Status, $CaptureState, $TransactionState, $IsAcknowledged);
    }

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     */
    public static function forge($Status, $CaptureState, $TransactionState, $IsAcknowledged)
    {
        return new self($Status, $CaptureState, $TransactionState, $IsAcknowledged);
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
    public function getBatchId()
    {
        return $this->BatchId;
    }

    /**
     * @param string $BatchId
     * @return \NabCommerce\Transaction\StoredValueCaptureResponse
     */
    public function setBatchId($BatchId)
    {
        $this->BatchId = $BatchId;
        return $this;
    }

    /**
     * @return SummaryData
     */
    public function getSummaryData()
    {
        return $this->SummaryData;
    }

    /**
     * @param SummaryData $SummaryData
     * @return \NabCommerce\Transaction\StoredValueCaptureResponse
     */
    public function setSummaryData(SummaryData $SummaryData)
    {
        $this->SummaryData = $SummaryData;
        return $this;
    }

}
