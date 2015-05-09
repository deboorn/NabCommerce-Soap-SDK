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

class StoredValueTenderData extends TransactionTenderData
{

    /**
     * @var AcctType $AcctType
     */
    protected $AcctType = null;

    /**
     * @var CardData $CardData
     */
    protected $CardData = null;

    /**
     * @var CardSecurityData $CardSecurityData
     */
    protected $CardSecurityData = null;

    /**
     * @var string $CardholderId
     */
    protected $CardholderId = null;

    /**
     * @var ArrayOfConsumerIdentification $ConsumerIdentifications
     */
    protected $ConsumerIdentifications = null;

    /**
     * @param AcctType $AcctType
     */
    public function __construct($AcctType)
    {
        parent::__construct();
        $this->AcctType = $AcctType;
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
     * @return AcctType
     */
    public function getAcctType()
    {
        return $this->AcctType;
    }

    /**
     * @param AcctType $AcctType
     * @return \NabCommerce\Transaction\StoredValueTenderData
     */
    public function setAcctType(AcctType $AcctType)
    {
        $this->AcctType = $AcctType;
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
     * @return \NabCommerce\Transaction\StoredValueTenderData
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
     * @return \NabCommerce\Transaction\StoredValueTenderData
     */
    public function setCardSecurityData(CardSecurityData $CardSecurityData)
    {
        $this->CardSecurityData = $CardSecurityData;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardholderId()
    {
        return $this->CardholderId;
    }

    /**
     * @param string $CardholderId
     * @return \NabCommerce\Transaction\StoredValueTenderData
     */
    public function setCardholderId($CardholderId)
    {
        $this->CardholderId = $CardholderId;
        return $this;
    }

    /**
     * @return ArrayOfConsumerIdentification
     */
    public function getConsumerIdentifications()
    {
        return $this->ConsumerIdentifications;
    }

    /**
     * @param ArrayOfConsumerIdentification $ConsumerIdentifications
     * @return \NabCommerce\Transaction\StoredValueTenderData
     */
    public function setConsumerIdentifications(ArrayOfConsumerIdentification $ConsumerIdentifications)
    {
        $this->ConsumerIdentifications = $ConsumerIdentifications;
        return $this;
    }

}
