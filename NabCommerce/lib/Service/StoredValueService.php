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


class StoredValueService
{

    /**
     * @var Operations $Operations
     */
    protected $Operations = null;

    /**
     * @var string $ServiceId
     */
    protected $ServiceId = null;

    /**
     * @var string $ServiceName
     */
    protected $ServiceName = null;

    /**
     * @var Tenders $Tenders
     */
    protected $Tenders = null;

    /**
     * @var boolean $SecureMSRAllowed
     */
    protected $SecureMSRAllowed = null;

    /**
     * @param boolean $SecureMSRAllowed
     */
    public function __construct($SecureMSRAllowed)
    {
        $this->SecureMSRAllowed = $SecureMSRAllowed;
    }

    /**
     * @param boolean $SecureMSRAllowed
     */
    public static function forge($SecureMSRAllowed)
    {
        return new self($SecureMSRAllowed);
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
     * @return Operations
     */
    public function getOperations()
    {
        return $this->Operations;
    }

    /**
     * @param Operations $Operations
     * @return \NabCommerce\Service\StoredValueService
     */
    public function setOperations(Operations $Operations)
    {
        $this->Operations = $Operations;
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
     * @return \NabCommerce\Service\StoredValueService
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
     * @return \NabCommerce\Service\StoredValueService
     */
    public function setServiceName($ServiceName)
    {
        $this->ServiceName = $ServiceName;
        return $this;
    }

    /**
     * @return Tenders
     */
    public function getTenders()
    {
        return $this->Tenders;
    }

    /**
     * @param Tenders $Tenders
     * @return \NabCommerce\Service\StoredValueService
     */
    public function setTenders(Tenders $Tenders)
    {
        $this->Tenders = $Tenders;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSecureMSRAllowed()
    {
        return $this->SecureMSRAllowed;
    }

    /**
     * @param boolean $SecureMSRAllowed
     * @return \NabCommerce\Service\StoredValueService
     */
    public function setSecureMSRAllowed($SecureMSRAllowed)
    {
        $this->SecureMSRAllowed = $SecureMSRAllowed;
        return $this;
    }

}
