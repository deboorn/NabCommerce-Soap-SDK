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

class BankcardApplicationConfigurationData
{

    /**
     * @var boolean $ApplicationAttended
     */
    protected $ApplicationAttended = null;

    /**
     * @var ApplicationLocation $ApplicationLocation
     */
    protected $ApplicationLocation = null;

    /**
     * @var HardwareType $HardwareType
     */
    protected $HardwareType = null;

    /**
     * @var PINCapability $PINCapability
     */
    protected $PINCapability = null;

    /**
     * @var ReadCapability $ReadCapability
     */
    protected $ReadCapability = null;

    /**
     * @param boolean $ApplicationAttended
     * @param ApplicationLocation $ApplicationLocation
     * @param HardwareType $HardwareType
     * @param PINCapability $PINCapability
     * @param ReadCapability $ReadCapability
     */
    public function __construct($ApplicationAttended, $ApplicationLocation, $HardwareType, $PINCapability, $ReadCapability)
    {
        $this->ApplicationAttended = $ApplicationAttended;
        $this->ApplicationLocation = $ApplicationLocation;
        $this->HardwareType = $HardwareType;
        $this->PINCapability = $PINCapability;
        $this->ReadCapability = $ReadCapability;
    }

    /**
     * @param boolean $ApplicationAttended
     * @param ApplicationLocation $ApplicationLocation
     * @param HardwareType $HardwareType
     * @param PINCapability $PINCapability
     * @param ReadCapability $ReadCapability
     */
    public static function forge($ApplicationAttended, $ApplicationLocation, $HardwareType, $PINCapability, $ReadCapability)
    {
        return new self($ApplicationAttended, $ApplicationLocation, $HardwareType, $PINCapability, $ReadCapability);
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
    public function getApplicationAttended()
    {
        return $this->ApplicationAttended;
    }

    /**
     * @param boolean $ApplicationAttended
     * @return \NabCommerce\Transaction\BankcardApplicationConfigurationData
     */
    public function setApplicationAttended($ApplicationAttended)
    {
        $this->ApplicationAttended = $ApplicationAttended;
        return $this;
    }

    /**
     * @return ApplicationLocation
     */
    public function getApplicationLocation()
    {
        return $this->ApplicationLocation;
    }

    /**
     * @param ApplicationLocation $ApplicationLocation
     * @return \NabCommerce\Transaction\BankcardApplicationConfigurationData
     */
    public function setApplicationLocation(ApplicationLocation $ApplicationLocation)
    {
        $this->ApplicationLocation = $ApplicationLocation;
        return $this;
    }

    /**
     * @return HardwareType
     */
    public function getHardwareType()
    {
        return $this->HardwareType;
    }

    /**
     * @param HardwareType $HardwareType
     * @return \NabCommerce\Transaction\BankcardApplicationConfigurationData
     */
    public function setHardwareType(HardwareType $HardwareType)
    {
        $this->HardwareType = $HardwareType;
        return $this;
    }

    /**
     * @return PINCapability
     */
    public function getPINCapability()
    {
        return $this->PINCapability;
    }

    /**
     * @param PINCapability $PINCapability
     * @return \NabCommerce\Transaction\BankcardApplicationConfigurationData
     */
    public function setPINCapability(PINCapability $PINCapability)
    {
        $this->PINCapability = $PINCapability;
        return $this;
    }

    /**
     * @return ReadCapability
     */
    public function getReadCapability()
    {
        return $this->ReadCapability;
    }

    /**
     * @param ReadCapability $ReadCapability
     * @return \NabCommerce\Transaction\BankcardApplicationConfigurationData
     */
    public function setReadCapability(ReadCapability $ReadCapability)
    {
        $this->ReadCapability = $ReadCapability;
        return $this;
    }

}
