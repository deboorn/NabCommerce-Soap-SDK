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

class BankcardMerchantData
{

    /**
     * @var string $ABANumber
     */
    protected $ABANumber = null;

    /**
     * @var string $AcquirerBIN
     */
    protected $AcquirerBIN = null;

    /**
     * @var string $AgentBank
     */
    protected $AgentBank = null;

    /**
     * @var string $AgentChain
     */
    protected $AgentChain = null;

    /**
     * @var boolean $Aggregator
     */
    protected $Aggregator = null;

    /**
     * @var string $ClientNumber
     */
    protected $ClientNumber = null;

    /**
     * @var IndustryType $IndustryType
     */
    protected $IndustryType = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $MerchantType
     */
    protected $MerchantType = null;

    /**
     * @var boolean $PrintCustomerServicePhone
     */
    protected $PrintCustomerServicePhone = null;

    /**
     * @var string $QualificationCodes
     */
    protected $QualificationCodes = null;

    /**
     * @var string $ReimbursementAttribute
     */
    protected $ReimbursementAttribute = null;

    /**
     * @var string $SIC
     */
    protected $SIC = null;

    /**
     * @var string $SecondaryTerminalId
     */
    protected $SecondaryTerminalId = null;

    /**
     * @var string $SettlementAgent
     */
    protected $SettlementAgent = null;

    /**
     * @var string $SharingGroup
     */
    protected $SharingGroup = null;

    /**
     * @var string $StoreId
     */
    protected $StoreId = null;

    /**
     * @var string $TerminalId
     */
    protected $TerminalId = null;

    /**
     * @var string $TimeZoneDifferential
     */
    protected $TimeZoneDifferential = null;

    /**
     * @param boolean $Aggregator
     * @param IndustryType $IndustryType
     * @param boolean $PrintCustomerServicePhone
     */
    public function __construct($Aggregator, $IndustryType, $PrintCustomerServicePhone)
    {
        $this->Aggregator = $Aggregator;
        $this->IndustryType = $IndustryType;
        $this->PrintCustomerServicePhone = $PrintCustomerServicePhone;
    }

    /**
     * @param boolean $Aggregator
     * @param IndustryType $IndustryType
     * @param boolean $PrintCustomerServicePhone
     */
    public static function forge($Aggregator, $IndustryType, $PrintCustomerServicePhone)
    {
        return new self($Aggregator, $IndustryType, $PrintCustomerServicePhone);
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
    public function getABANumber()
    {
        return $this->ABANumber;
    }

    /**
     * @param string $ABANumber
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setABANumber($ABANumber)
    {
        $this->ABANumber = $ABANumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcquirerBIN()
    {
        return $this->AcquirerBIN;
    }

    /**
     * @param string $AcquirerBIN
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setAcquirerBIN($AcquirerBIN)
    {
        $this->AcquirerBIN = $AcquirerBIN;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgentBank()
    {
        return $this->AgentBank;
    }

    /**
     * @param string $AgentBank
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setAgentBank($AgentBank)
    {
        $this->AgentBank = $AgentBank;
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
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setAgentChain($AgentChain)
    {
        $this->AgentChain = $AgentChain;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAggregator()
    {
        return $this->Aggregator;
    }

    /**
     * @param boolean $Aggregator
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setAggregator($Aggregator)
    {
        $this->Aggregator = $Aggregator;
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
     * @return \NabCommerce\Service\BankcardMerchantData
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
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setIndustryType(IndustryType $IndustryType)
    {
        $this->IndustryType = $IndustryType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantType()
    {
        return $this->MerchantType;
    }

    /**
     * @param string $MerchantType
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setMerchantType($MerchantType)
    {
        $this->MerchantType = $MerchantType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPrintCustomerServicePhone()
    {
        return $this->PrintCustomerServicePhone;
    }

    /**
     * @param boolean $PrintCustomerServicePhone
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setPrintCustomerServicePhone($PrintCustomerServicePhone)
    {
        $this->PrintCustomerServicePhone = $PrintCustomerServicePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getQualificationCodes()
    {
        return $this->QualificationCodes;
    }

    /**
     * @param string $QualificationCodes
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setQualificationCodes($QualificationCodes)
    {
        $this->QualificationCodes = $QualificationCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getReimbursementAttribute()
    {
        return $this->ReimbursementAttribute;
    }

    /**
     * @param string $ReimbursementAttribute
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setReimbursementAttribute($ReimbursementAttribute)
    {
        $this->ReimbursementAttribute = $ReimbursementAttribute;
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
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setSIC($SIC)
    {
        $this->SIC = $SIC;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryTerminalId()
    {
        return $this->SecondaryTerminalId;
    }

    /**
     * @param string $SecondaryTerminalId
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setSecondaryTerminalId($SecondaryTerminalId)
    {
        $this->SecondaryTerminalId = $SecondaryTerminalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementAgent()
    {
        return $this->SettlementAgent;
    }

    /**
     * @param string $SettlementAgent
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setSettlementAgent($SettlementAgent)
    {
        $this->SettlementAgent = $SettlementAgent;
        return $this;
    }

    /**
     * @return string
     */
    public function getSharingGroup()
    {
        return $this->SharingGroup;
    }

    /**
     * @param string $SharingGroup
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setSharingGroup($SharingGroup)
    {
        $this->SharingGroup = $SharingGroup;
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
     * @return \NabCommerce\Service\BankcardMerchantData
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
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setTerminalId($TerminalId)
    {
        $this->TerminalId = $TerminalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZoneDifferential()
    {
        return $this->TimeZoneDifferential;
    }

    /**
     * @param string $TimeZoneDifferential
     * @return \NabCommerce\Service\BankcardMerchantData
     */
    public function setTimeZoneDifferential($TimeZoneDifferential)
    {
        $this->TimeZoneDifferential = $TimeZoneDifferential;
        return $this;
    }

}
