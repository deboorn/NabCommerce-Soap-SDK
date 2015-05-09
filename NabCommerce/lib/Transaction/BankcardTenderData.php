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

class BankcardTenderData extends TransactionTenderData
{

    /**
     * @var CardData $CardData
     */
    protected $CardData = null;

    /**
     * @var CardSecurityData $CardSecurityData
     */
    protected $CardSecurityData = null;

    /**
     * @var EcommerceSecurityData $EcommerceSecurityData
     */
    protected $EcommerceSecurityData = null;

    /**
     * @var string $EBTVoucherApprovalCode
     */
    protected $EBTVoucherApprovalCode = null;

    /**
     * @var string $EBTVoucherNumber
     */
    protected $EBTVoucherNumber = null;


    public function __construct()
    {
        parent::__construct();
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
     * @return CardData
     */
    public function getCardData()
    {
        return $this->CardData;
    }

    /**
     * @param CardData $CardData
     * @return \NabCommerce\Transaction\BankcardTenderData
     */
    public function setCardData(CardData $CardData)
    {
        $this->CardData = $CardData;
        return $this;
    }

    /**
     * @return CardSecurityData
     */
    public function getCardSecurityData()
    {
        return $this->CardSecurityData;
    }

    /**
     * @param CardSecurityData $CardSecurityData
     * @return \NabCommerce\Transaction\BankcardTenderData
     */
    public function setCardSecurityData(CardSecurityData $CardSecurityData)
    {
        $this->CardSecurityData = $CardSecurityData;
        return $this;
    }

    /**
     * @return EcommerceSecurityData
     */
    public function getEcommerceSecurityData()
    {
        return $this->EcommerceSecurityData;
    }

    /**
     * @param EcommerceSecurityData $EcommerceSecurityData
     * @return \NabCommerce\Transaction\BankcardTenderData
     */
    public function setEcommerceSecurityData(EcommerceSecurityData $EcommerceSecurityData)
    {
        $this->EcommerceSecurityData = $EcommerceSecurityData;
        return $this;
    }

    /**
     * @return string
     */
    public function getEBTVoucherApprovalCode()
    {
        return $this->EBTVoucherApprovalCode;
    }

    /**
     * @param string $EBTVoucherApprovalCode
     * @return \NabCommerce\Transaction\BankcardTenderData
     */
    public function setEBTVoucherApprovalCode($EBTVoucherApprovalCode)
    {
        $this->EBTVoucherApprovalCode = $EBTVoucherApprovalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEBTVoucherNumber()
    {
        return $this->EBTVoucherNumber;
    }

    /**
     * @param string $EBTVoucherNumber
     * @return \NabCommerce\Transaction\BankcardTenderData
     */
    public function setEBTVoucherNumber($EBTVoucherNumber)
    {
        $this->EBTVoucherNumber = $EBTVoucherNumber;
        return $this;
    }

}
