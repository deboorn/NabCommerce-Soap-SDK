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

class RecurringBilling
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $ApplicationId
     */
    protected $ApplicationId = null;

    /**
     * @var boolean $AutomaticRetries
     */
    protected $AutomaticRetries = null;

    /**
     * @var int $DaysTillRetry
     */
    protected $DaysTillRetry = null;

    /**
     * @var boolean $EmailNotificationToCustomer
     */
    protected $EmailNotificationToCustomer = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var boolean $Proration_Downgrades
     */
    protected $Proration_Downgrades = null;

    /**
     * @var string $ServiceId_CC
     */
    protected $ServiceId_CC = null;

    /**
     * @var string $ServiceId_ECK
     */
    protected $ServiceId_ECK = null;

    /**
     * @param boolean $Active
     */
    public function __construct($Active)
    {
        $this->Active = $Active;
    }

    /**
     * @param boolean $Active
     */
    public static function forge($Active)
    {
        return new self($Active);
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
     * @return boolean
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationId()
    {
        return $this->ApplicationId;
    }

    /**
     * @param string $ApplicationId
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setApplicationId($ApplicationId)
    {
        $this->ApplicationId = $ApplicationId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutomaticRetries()
    {
        return $this->AutomaticRetries;
    }

    /**
     * @param boolean $AutomaticRetries
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setAutomaticRetries($AutomaticRetries)
    {
        $this->AutomaticRetries = $AutomaticRetries;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysTillRetry()
    {
        return $this->DaysTillRetry;
    }

    /**
     * @param int $DaysTillRetry
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setDaysTillRetry($DaysTillRetry)
    {
        $this->DaysTillRetry = $DaysTillRetry;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEmailNotificationToCustomer()
    {
        return $this->EmailNotificationToCustomer;
    }

    /**
     * @param boolean $EmailNotificationToCustomer
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setEmailNotificationToCustomer($EmailNotificationToCustomer)
    {
        $this->EmailNotificationToCustomer = $EmailNotificationToCustomer;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setModifiedBy($ModifiedBy)
    {
        $this->ModifiedBy = $ModifiedBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getProration_Downgrades()
    {
        return $this->Proration_Downgrades;
    }

    /**
     * @param boolean $Proration_Downgrades
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setProration_Downgrades($Proration_Downgrades)
    {
        $this->Proration_Downgrades = $Proration_Downgrades;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId_CC()
    {
        return $this->ServiceId_CC;
    }

    /**
     * @param string $ServiceId_CC
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setServiceId_CC($ServiceId_CC)
    {
        $this->ServiceId_CC = $ServiceId_CC;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId_ECK()
    {
        return $this->ServiceId_ECK;
    }

    /**
     * @param string $ServiceId_ECK
     * @return \NabCommerce\Service\RecurringBilling
     */
    public function setServiceId_ECK($ServiceId_ECK)
    {
        $this->ServiceId_ECK = $ServiceId_ECK;
        return $this;
    }

}
