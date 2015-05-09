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

class DriversLicense
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var TypeStateProvince $State
     */
    protected $State = null;

    /**
     * @var string $Track1
     */
    protected $Track1 = null;

    /**
     * @var string $Track2
     */
    protected $Track2 = null;

    /**
     * @param TypeStateProvince $State
     */
    public function __construct($State)
    {
        $this->State = $State;
    }

    /**
     * @param TypeStateProvince $State
     */
    public static function forge($State)
    {
        return new self($State);
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
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return \NabCommerce\Transaction\DriversLicense
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }

    /**
     * @return TypeStateProvince
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param TypeStateProvince $State
     * @return \NabCommerce\Transaction\DriversLicense
     */
    public function setState(TypeStateProvince $State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrack1()
    {
        return $this->Track1;
    }

    /**
     * @param string $Track1
     * @return \NabCommerce\Transaction\DriversLicense
     */
    public function setTrack1($Track1)
    {
        $this->Track1 = $Track1;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrack2()
    {
        return $this->Track2;
    }

    /**
     * @param string $Track2
     * @return \NabCommerce\Transaction\DriversLicense
     */
    public function setTrack2($Track2)
    {
        $this->Track2 = $Track2;
        return $this;
    }

}
