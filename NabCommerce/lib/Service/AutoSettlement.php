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
    

/**
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

class AutoSettlement
{

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var string $ApplicationProfileId
     */
    protected $ApplicationProfileId = null;

    /**
     * @var string $NotificationEmail
     */
    protected $NotificationEmail = null;

    /**
     * @var int $SettlementHour
     */
    protected $SettlementHour = null;

    /**
     * @param boolean $Active
     * @param int $SettlementHour
     */
    public function __construct($Active, $SettlementHour)
    {
        $this->Active = $Active;
        $this->SettlementHour = $SettlementHour;
    }

    /**
     * @param boolean $Active
     * @param int $SettlementHour
     */
    public static function forge($Active, $SettlementHour)
    {
        return new self($Active, $SettlementHour);
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
     * @return \NabCommerce\Service\AutoSettlement
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationProfileId()
    {
        return $this->ApplicationProfileId;
    }

    /**
     * @param string $ApplicationProfileId
     * @return \NabCommerce\Service\AutoSettlement
     */
    public function setApplicationProfileId($ApplicationProfileId)
    {
        $this->ApplicationProfileId = $ApplicationProfileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->NotificationEmail;
    }

    /**
     * @param string $NotificationEmail
     * @return \NabCommerce\Service\AutoSettlement
     */
    public function setNotificationEmail($NotificationEmail)
    {
        $this->NotificationEmail = $NotificationEmail;
        return $this;
    }

    /**
     * @return int
     */
    public function getSettlementHour()
    {
        return $this->SettlementHour;
    }

    /**
     * @param int $SettlementHour
     * @return \NabCommerce\Service\AutoSettlement
     */
    public function setSettlementHour($SettlementHour)
    {
        $this->SettlementHour = $SettlementHour;
        return $this;
    }

}
