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

class WorkflowService
{

    /**
     * @var string $ServiceId
     */
    protected $ServiceId = null;

    /**
     * @var string $ServiceName
     */
    protected $ServiceName = null;

    /**
     * @var string $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var int $Ordinal
     */
    protected $Ordinal = null;

    /**
     * @param int $Ordinal
     */
    public function __construct($Ordinal)
    {
        $this->Ordinal = $Ordinal;
    }

    /**
     * @param int $Ordinal
     */
    public static function forge($Ordinal)
    {
        return new self($Ordinal);
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
    public function getServiceId()
    {
        return $this->ServiceId;
    }

    /**
     * @param string $ServiceId
     * @return \NabCommerce\Service\WorkflowService
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
     * @return \NabCommerce\Service\WorkflowService
     */
    public function setServiceName($ServiceName)
    {
        $this->ServiceName = $ServiceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return \NabCommerce\Service\WorkflowService
     */
    public function setServiceType($ServiceType)
    {
        $this->ServiceType = $ServiceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrdinal()
    {
        return $this->Ordinal;
    }

    /**
     * @param int $Ordinal
     * @return \NabCommerce\Service\WorkflowService
     */
    public function setOrdinal($Ordinal)
    {
        $this->Ordinal = $Ordinal;
        return $this;
    }

}
