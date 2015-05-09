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

class ClaimMetaData
{

    /**
     * @var string $ClaimDescription
     */
    protected $ClaimDescription = null;

    /**
     * @var string $ClaimGuid
     */
    protected $ClaimGuid = null;

    /**
     * @var string $ClaimNs
     */
    protected $ClaimNs = null;

    /**
     * @var string $ClaimType
     */
    protected $ClaimType = null;

    /**
     * @var string $ClaimValue
     */
    protected $ClaimValue = null;

    /**
     * @var boolean $Confidential
     */
    protected $Confidential = null;

    /**
     * @param boolean $Confidential
     */
    public function __construct($Confidential)
    {
        $this->Confidential = $Confidential;
    }

    /**
     * @param boolean $Confidential
     */
    public static function forge($Confidential)
    {
        return new self($Confidential);
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
    public function getClaimDescription()
    {
        return $this->ClaimDescription;
    }

    /**
     * @param string $ClaimDescription
     * @return \NabCommerce\Service\ClaimMetaData
     */
    public function setClaimDescription($ClaimDescription)
    {
        $this->ClaimDescription = $ClaimDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getClaimGuid()
    {
        return $this->ClaimGuid;
    }

    /**
     * @param string $ClaimGuid
     * @return \NabCommerce\Service\ClaimMetaData
     */
    public function setClaimGuid($ClaimGuid)
    {
        $this->ClaimGuid = $ClaimGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getClaimNs()
    {
        return $this->ClaimNs;
    }

    /**
     * @param string $ClaimNs
     * @return \NabCommerce\Service\ClaimMetaData
     */
    public function setClaimNs($ClaimNs)
    {
        $this->ClaimNs = $ClaimNs;
        return $this;
    }

    /**
     * @return string
     */
    public function getClaimType()
    {
        return $this->ClaimType;
    }

    /**
     * @param string $ClaimType
     * @return \NabCommerce\Service\ClaimMetaData
     */
    public function setClaimType($ClaimType)
    {
        $this->ClaimType = $ClaimType;
        return $this;
    }

    /**
     * @return string
     */
    public function getClaimValue()
    {
        return $this->ClaimValue;
    }

    /**
     * @param string $ClaimValue
     * @return \NabCommerce\Service\ClaimMetaData
     */
    public function setClaimValue($ClaimValue)
    {
        $this->ClaimValue = $ClaimValue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getConfidential()
    {
        return $this->Confidential;
    }

    /**
     * @param boolean $Confidential
     * @return \NabCommerce\Service\ClaimMetaData
     */
    public function setConfidential($Confidential)
    {
        $this->Confidential = $Confidential;
        return $this;
    }

}
