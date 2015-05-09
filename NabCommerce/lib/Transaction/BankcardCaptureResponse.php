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

class BankcardCaptureResponse extends Response
{

    /**
     * @var string $BatchId
     */
    protected $BatchId = null;

    /**
     * @var IndustryType $IndustryType
     */
    protected $IndustryType = null;

    /**
     * @var TransactionSummaryData $TransactionSummaryData
     */
    protected $TransactionSummaryData = null;

    /**
     * @var PrepaidCard $PrepaidCard
     */
    protected $PrepaidCard = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     * @param IndustryType $IndustryType
     * @param PrepaidCard $PrepaidCard
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged, $IndustryType, $PrepaidCard)
    {
        parent::__construct($Status, $CaptureState, $TransactionState, $IsAcknowledged);
        $this->IndustryType = $IndustryType;
        $this->PrepaidCard = $PrepaidCard;
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
     * @return \NabCommerce\Transaction\BankcardCaptureResponse
     */
    public function setBatchId($BatchId)
    {
        $this->BatchId = $BatchId;
        return $this;
    }

    /**
     * @return IndustryType
     */
    public function getIndustryType()
    {
        return $this->IndustryType;
    }

    /**
     * @param IndustryType $IndustryType
     * @return \NabCommerce\Transaction\BankcardCaptureResponse
     */
    public function setIndustryType(IndustryType $IndustryType)
    {
        $this->IndustryType = $IndustryType;
        return $this;
    }

    /**
     * @return TransactionSummaryData
     */
    public function getTransactionSummaryData()
    {
        return $this->TransactionSummaryData;
    }

    /**
     * @param TransactionSummaryData $TransactionSummaryData
     * @return \NabCommerce\Transaction\BankcardCaptureResponse
     */
    public function setTransactionSummaryData(TransactionSummaryData $TransactionSummaryData)
    {
        $this->TransactionSummaryData = $TransactionSummaryData;
        return $this;
    }

    /**
     * @return PrepaidCard
     */
    public function getPrepaidCard()
    {
        return $this->PrepaidCard;
    }

    /**
     * @param PrepaidCard $PrepaidCard
     * @return \NabCommerce\Transaction\BankcardCaptureResponse
     */
    public function setPrepaidCard(PrepaidCard $PrepaidCard)
    {
        $this->PrepaidCard = $PrepaidCard;
        return $this;
    }

}
