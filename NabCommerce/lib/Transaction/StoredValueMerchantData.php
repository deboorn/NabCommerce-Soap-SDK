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

class StoredValueMerchantData
{

    /**
     * @var string $AgentChain
     */
    protected $AgentChain = null;

    /**
     * @var string $ClientNumber
     */
    protected $ClientNumber = null;

    /**
     * @var IndustryType $IndustryType
     */
    protected $IndustryType = null;

    /**
     * @var string $SIC
     */
    protected $SIC = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var string $TerminalId
     */
    protected $TerminalId = null;

    /**
     * @param IndustryType $IndustryType
     */
    public function __construct($IndustryType)
    {
        $this->IndustryType = $IndustryType;
    }

    /**
     * @param IndustryType $IndustryType
     */
    public static function forge($IndustryType)
    {
        return new self($IndustryType);
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
    public function getAgentChain()
    {
        return $this->AgentChain;
    }

    /**
     * @param string $AgentChain
     * @return \NabCommerce\Service\StoredValueMerchantData
     */
    public function setAgentChain($AgentChain)
    {
        $this->AgentChain = $AgentChain;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientNumber()
    {
        return $this->ClientNumber;
    }

    /**
     * @param string $ClientNumber
     * @return \NabCommerce\Service\StoredValueMerchantData
     */
    public function setClientNumber($ClientNumber)
    {
        $this->ClientNumber = $ClientNumber;
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
     * @return \NabCommerce\Service\StoredValueMerchantData
     */
    public function setIndustryType(IndustryType $IndustryType)
    {
        $this->IndustryType = $IndustryType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIC()
    {
        return $this->SIC;
    }

    /**
     * @param string $SIC
     * @return \NabCommerce\Service\StoredValueMerchantData
     */
    public function setSIC($SIC)
    {
        $this->SIC = $SIC;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param string $StoreId
     * @return \NabCommerce\Service\StoredValueMerchantData
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->TerminalId;
    }

    /**
     * @param string $TerminalId
     * @return \NabCommerce\Service\StoredValueMerchantData
     */
    public function setTerminalId($TerminalId)
    {
        $this->TerminalId = $TerminalId;
        return $this;
    }

}
