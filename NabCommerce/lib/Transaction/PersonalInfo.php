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

class PersonalInfo
{

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var DriversLicense $DriversLicense
     */
    protected $DriversLicense = null;

    /**
     * @var string $EmployeeIdNumber
     */
    protected $EmployeeIdNumber = null;

    /**
     * @var string $Gender
     */
    protected $Gender = null;

    /**
     * @var string $GovernmentIdNumber
     */
    protected $GovernmentIdNumber = null;

    /**
     * @var string $MilitaryIdNumber
     */
    protected $MilitaryIdNumber = null;

    /**
     * @var string $SocialSecurityNumber
     */
    protected $SocialSecurityNumber = null;

    /**
     * @var string $TaxId
     */
    protected $TaxId = null;

    /**
     * @param \DateTime $DateOfBirth
     */
    public function __construct(\DateTime $DateOfBirth)
    {
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
    }

    /**
     * @param \DateTime $DateOfBirth
     */
    public static function forge(\DateTime $DateOfBirth)
    {
        return new self($DateOfBirth);
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
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        if ($this->DateOfBirth == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateOfBirth);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setDateOfBirth(\DateTime $DateOfBirth)
    {
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return DriversLicense
     */
    public function getDriversLicense()
    {
        return $this->DriversLicense;
    }

    /**
     * @param DriversLicense $DriversLicense
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setDriversLicense(DriversLicense $DriversLicense)
    {
        $this->DriversLicense = $DriversLicense;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeIdNumber()
    {
        return $this->EmployeeIdNumber;
    }

    /**
     * @param string $EmployeeIdNumber
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setEmployeeIdNumber($EmployeeIdNumber)
    {
        $this->EmployeeIdNumber = $EmployeeIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param string $Gender
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getGovernmentIdNumber()
    {
        return $this->GovernmentIdNumber;
    }

    /**
     * @param string $GovernmentIdNumber
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setGovernmentIdNumber($GovernmentIdNumber)
    {
        $this->GovernmentIdNumber = $GovernmentIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilitaryIdNumber()
    {
        return $this->MilitaryIdNumber;
    }

    /**
     * @param string $MilitaryIdNumber
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setMilitaryIdNumber($MilitaryIdNumber)
    {
        $this->MilitaryIdNumber = $MilitaryIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->SocialSecurityNumber;
    }

    /**
     * @param string $SocialSecurityNumber
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setSocialSecurityNumber($SocialSecurityNumber)
    {
        $this->SocialSecurityNumber = $SocialSecurityNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->TaxId;
    }

    /**
     * @param string $TaxId
     * @return \NabCommerce\Transaction\PersonalInfo
     */
    public function setTaxId($TaxId)
    {
        $this->TaxId = $TaxId;
        return $this;
    }

}
