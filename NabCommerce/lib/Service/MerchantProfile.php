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

 

namespace NabCommerce\Service;


class MerchantProfile
{

    /**
     * @var string $ProfileId
     */
    protected $ProfileId = null;

    /**
     * @var string $ServiceId
     */
    protected $ServiceId = null;

    /**
     * @var string $ServiceName
     */
    protected $ServiceName = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var MerchantProfileMerchantData $MerchantData
     */
    protected $MerchantData = null;

    /**
     * @var MerchantProfileTransactionData $TransactionData
     */
    protected $TransactionData = null;

    /**
     * @var AutoSettlement $AutoSettlement
     */
    protected $AutoSettlement = null;

    /**
     * @var DuplicateCheck $DuplicateCheck
     */
    protected $DuplicateCheck = null;

    /**
     * @var RecurringBilling $RecurringBilling
     */
    protected $RecurringBilling = null;

    /**
     * @param \DateTime $LastUpdated
     */
    public function __construct(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
    }

    /**
     * @param \DateTime $LastUpdated
     */
    public static function forge(\DateTime $LastUpdated)
    {
        return new self($LastUpdated);
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
    public function getProfileId()
    {
        return $this->ProfileId;
    }

    /**
     * @param string $ProfileId
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setProfileId($ProfileId)
    {
        $this->ProfileId = $ProfileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }

    /**
     * @param string $ServiceId
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }

    /**
     * @param string $ServiceName
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setServiceName($ServiceName)
    {
        $this->ServiceName = $ServiceName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        if ($this->LastUpdated == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return MerchantProfileMerchantData
     */
    public function getMerchantData()
    {
        return $this->MerchantData;
    }

    /**
     * @param MerchantProfileMerchantData $MerchantData
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setMerchantData(MerchantProfileMerchantData $MerchantData)
    {
        $this->MerchantData = $MerchantData;
        return $this;
    }

    /**
     * @return MerchantProfileTransactionData
     */
    public function getTransactionData()
    {
        return $this->TransactionData;
    }

    /**
     * @param MerchantProfileTransactionData $TransactionData
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setTransactionData(MerchantProfileTransactionData $TransactionData)
    {
        $this->TransactionData = $TransactionData;
        return $this;
    }

    /**
     * @return AutoSettlement
     */
    public function getAutoSettlement()
    {
        return $this->AutoSettlement;
    }

    /**
     * @param AutoSettlement $AutoSettlement
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setAutoSettlement(AutoSettlement $AutoSettlement)
    {
        $this->AutoSettlement = $AutoSettlement;
        return $this;
    }

    /**
     * @return DuplicateCheck
     */
    public function getDuplicateCheck()
    {
        return $this->DuplicateCheck;
    }

    /**
     * @param DuplicateCheck $DuplicateCheck
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setDuplicateCheck(DuplicateCheck $DuplicateCheck)
    {
        $this->DuplicateCheck = $DuplicateCheck;
        return $this;
    }

    /**
     * @return RecurringBilling
     */
    public function getRecurringBilling()
    {
        return $this->RecurringBilling;
    }

    /**
     * @param RecurringBilling $RecurringBilling
     * @return \NabCommerce\Service\MerchantProfile
     */
    public function setRecurringBilling(RecurringBilling $RecurringBilling)
    {
        $this->RecurringBilling = $RecurringBilling;
        return $this;
    }

}
