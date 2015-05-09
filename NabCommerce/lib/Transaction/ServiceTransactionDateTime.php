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

class ServiceTransactionDateTime
{

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var string $TimeZone
     */
    protected $TimeZone = null;


    public function __construct()
    {

    }


    public static function forge()
    {
        return new self();
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
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return \NabCommerce\Transaction\ServiceTransactionDateTime
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * @param string $Time
     * @return \NabCommerce\Transaction\ServiceTransactionDateTime
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return \NabCommerce\Transaction\ServiceTransactionDateTime
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;
        return $this;
    }

}
