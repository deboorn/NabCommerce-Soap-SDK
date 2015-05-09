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

class BankcardTransactionResponsePro extends BankcardTransactionResponse
{

    /**
     * @var AdviceResponse $AdviceResponse
     */
    protected $AdviceResponse = null;

    /**
     * @var CommercialCardResponse $CommercialCardResponse
     */
    protected $CommercialCardResponse = null;

    /**
     * @var string $ReturnedACI
     */
    protected $ReturnedACI = null;

    /**
     * @param Status $Status
     * @param CaptureState $CaptureState
     * @param TransactionState $TransactionState
     * @param boolean $IsAcknowledged
     * @param float $Amount
     * @param TypeCardType $CardType
     * @param float $FeeAmount
     * @param CVResult $CVResult
     * @param Resubmit $Resubmit
     * @param \DateTime $SettlementDate
     * @param float $FinalBalance
     * @param float $CashBackAmount
     * @param PrepaidCard $PrepaidCard
     * @param AdviceResponse $AdviceResponse
     * @param CommercialCardResponse $CommercialCardResponse
     */
    public function __construct($Status, $CaptureState, $TransactionState, $IsAcknowledged, $Amount, $CardType, $FeeAmount, $CVResult, $Resubmit, \DateTime $SettlementDate, $FinalBalance, $CashBackAmount, $PrepaidCard, $AdviceResponse, $CommercialCardResponse)
    {
        parent::__construct($Status, $CaptureState, $TransactionState, $IsAcknowledged, $Amount, $CardType, $FeeAmount, $CVResult, $Resubmit, $SettlementDate, $FinalBalance, $CashBackAmount, $PrepaidCard);
        $this->AdviceResponse = $AdviceResponse;
        $this->CommercialCardResponse = $CommercialCardResponse;
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
     * @return AdviceResponse
     */
    public function getAdviceResponse()
    {
        return $this->AdviceResponse;
    }

    /**
     * @param AdviceResponse $AdviceResponse
     * @return \NabCommerce\Transaction\BankcardTransactionResponsePro
     */
    public function setAdviceResponse(AdviceResponse $AdviceResponse)
    {
        $this->AdviceResponse = $AdviceResponse;
        return $this;
    }

    /**
     * @return CommercialCardResponse
     */
    public function getCommercialCardResponse()
    {
        return $this->CommercialCardResponse;
    }

    /**
     * @param CommercialCardResponse $CommercialCardResponse
     * @return \NabCommerce\Transaction\BankcardTransactionResponsePro
     */
    public function setCommercialCardResponse(CommercialCardResponse $CommercialCardResponse)
    {
        $this->CommercialCardResponse = $CommercialCardResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnedACI()
    {
        return $this->ReturnedACI;
    }

    /**
     * @param string $ReturnedACI
     * @return \NabCommerce\Transaction\BankcardTransactionResponsePro
     */
    public function setReturnedACI($ReturnedACI)
    {
        $this->ReturnedACI = $ReturnedACI;
        return $this;
    }

}
