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
 * Class ApplicationData
 *
 * LICENSE: This source file is subject to version 4.0 of the CC BY 4.0 license
 * that is available through the world-wide-web at the following URI:
 * http://creativecommons.org/licenses/by/4.0/.  If you did not receive a copy of
 * the CC BY 4.0 License and are unable to obtain it through the web, please
 * send a note to daniel.boorn@gmail.com so we can mail you a copy immediately.
 *
 * @author Daniel Boorn <daniel.boorn@gmail.com>
 * @license http://creativecommons.org/licenses/by/4.0/ CC BY 4.0
 *
 * @package NabCommerce\Service
 */
class ApplicationData
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
     * @var string $ApplicationName
     */
    protected $ApplicationName = null;

    /**
     * @var string $DeveloperId
     */
    protected $DeveloperId = null;

    /**
     * @var HardwareType $HardwareType
     */
    protected $HardwareType = null;

    /**
     * @var PINCapability $PINCapability
     */
    protected $PINCapability = null;

    /**
     * @var string $PTLSSocketId
     */
    protected $PTLSSocketId = null;

    /**
     * @var ReadCapability $ReadCapability
     */
    protected $ReadCapability = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $SoftwareVersion
     */
    protected $SoftwareVersion = null;

    /**
     * @var \DateTime $SoftwareVersionDate
     */
    protected $SoftwareVersionDate = null;

    /**
     * @var string $VendorId
     */
    protected $VendorId = null;

    /**
     * @var EncryptionType $EncryptionType
     */
    protected $EncryptionType = null;

    /**
     * @var string $DeviceSerialNumber
     */
    protected $DeviceSerialNumber = null;

    /**
     * @param boolean $ApplicationAttended
     * @param ApplicationLocation $ApplicationLocation
     * @param HardwareType $HardwareType
     * @param PINCapability $PINCapability
     * @param ReadCapability $ReadCapability
     * @param \DateTime $SoftwareVersionDate
     * @param EncryptionType $EncryptionType
     */
    public function __construct($ApplicationAttended, $ApplicationLocation, $HardwareType, $PINCapability, $ReadCapability, \DateTime $SoftwareVersionDate, $EncryptionType)
    {
        $this->ApplicationAttended = $ApplicationAttended;
        $this->ApplicationLocation = $ApplicationLocation;
        $this->HardwareType = $HardwareType;
        $this->PINCapability = $PINCapability;
        $this->ReadCapability = $ReadCapability;
        $this->SoftwareVersionDate = $SoftwareVersionDate->format(\DateTime::ATOM);
        $this->EncryptionType = $EncryptionType;
    }

    /**
     * @param boolean $ApplicationAttended
     * @param ApplicationLocation $ApplicationLocation
     * @param HardwareType $HardwareType
     * @param PINCapability $PINCapability
     * @param ReadCapability $ReadCapability
     * @param \DateTime $SoftwareVersionDate
     * @param EncryptionType $EncryptionType
     */
    public static function forge($ApplicationAttended, $ApplicationLocation, $HardwareType, $PINCapability, $ReadCapability, \DateTime $SoftwareVersionDate, $EncryptionType)
    {
        return new self($ApplicationAttended, $ApplicationLocation, $HardwareType, $PINCapability, $ReadCapability, $SoftwareVersionDate, $EncryptionType);
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
     * @return \NabCommerce\Service\ApplicationData
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
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setApplicationLocation(ApplicationLocation $ApplicationLocation)
    {
        $this->ApplicationLocation = $ApplicationLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationName()
    {
        return $this->ApplicationName;
    }

    /**
     * @param string $ApplicationName
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setApplicationName($ApplicationName)
    {
        $this->ApplicationName = $ApplicationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperId()
    {
        return $this->DeveloperId;
    }

    /**
     * @param string $DeveloperId
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setDeveloperId($DeveloperId)
    {
        $this->DeveloperId = $DeveloperId;
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
     * @return \NabCommerce\Service\ApplicationData
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
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setPINCapability(PINCapability $PINCapability)
    {
        $this->PINCapability = $PINCapability;
        return $this;
    }

    /**
     * @return string
     */
    public function getPTLSSocketId()
    {
        return $this->PTLSSocketId;
    }

    /**
     * @param string $PTLSSocketId
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setPTLSSocketId($PTLSSocketId)
    {
        $this->PTLSSocketId = $PTLSSocketId;
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
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setReadCapability(ReadCapability $ReadCapability)
    {
        $this->ReadCapability = $ReadCapability;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->SoftwareVersion;
    }

    /**
     * @param string $SoftwareVersion
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setSoftwareVersion($SoftwareVersion)
    {
        $this->SoftwareVersion = $SoftwareVersion;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSoftwareVersionDate()
    {
        if ($this->SoftwareVersionDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SoftwareVersionDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SoftwareVersionDate
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setSoftwareVersionDate(\DateTime $SoftwareVersionDate)
    {
        $this->SoftwareVersionDate = $SoftwareVersionDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param string $VendorId
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setVendorId($VendorId)
    {
        $this->VendorId = $VendorId;
        return $this;
    }

    /**
     * @return EncryptionType
     */
    public function getEncryptionType()
    {
        return $this->EncryptionType;
    }

    /**
     * @param EncryptionType $EncryptionType
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setEncryptionType(EncryptionType $EncryptionType)
    {
        $this->EncryptionType = $EncryptionType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceSerialNumber()
    {
        return $this->DeviceSerialNumber;
    }

    /**
     * @param string $DeviceSerialNumber
     * @return \NabCommerce\Service\ApplicationData
     */
    public function setDeviceSerialNumber($DeviceSerialNumber)
    {
        $this->DeviceSerialNumber = $DeviceSerialNumber;
        return $this;
    }

}
