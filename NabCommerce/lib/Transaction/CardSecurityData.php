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

class CardSecurityData
{

    /**
     * @var CVDataProvided $CVDataProvided
     */
    protected $CVDataProvided = null;

    /**
     * @var string $CVData
     */
    protected $CVData = null;

    /**
     * @param CVDataProvided $CVDataProvided
     */
    public function __construct($CVDataProvided)
    {
        $this->CVDataProvided = $CVDataProvided;
    }

    /**
     * @param CVDataProvided $CVDataProvided
     */
    public static function forge($CVDataProvided)
    {
        return new self($CVDataProvided);
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
     * @return CVDataProvided
     */
    public function getCVDataProvided()
    {
        return $this->CVDataProvided;
    }

    /**
     * @param CVDataProvided $CVDataProvided
     * @return \NabCommerce\Transaction\CardSecurityData
     */
    public function setCVDataProvided(CVDataProvided $CVDataProvided)
    {
        $this->CVDataProvided = $CVDataProvided;
        return $this;
    }

    /**
     * @return string
     */
    public function getCVData()
    {
        return $this->CVData;
    }

    /**
     * @param string $CVData
     * @return \NabCommerce\Transaction\CardSecurityData
     */
    public function setCVData($CVData)
    {
        $this->CVData = $CVData;
        return $this;
    }

}
