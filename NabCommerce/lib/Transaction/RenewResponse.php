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

class RenewResponse
{

    /**
     * @var string $RenewResult
     */
    protected $RenewResult = null;

    /**
     * @param string $RenewResult
     */
    public function __construct($RenewResult)
    {
        $this->RenewResult = $RenewResult;
    }

    /**
     * @param string $RenewResult
     */
    public static function forge($RenewResult)
    {
        return new self($RenewResult);
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
    public function getRenewResult()
    {
        return $this->RenewResult;
    }

    /**
     * @param string $RenewResult
     * @return \NabCommerce\Service\RenewResponse
     */
    public function setRenewResult($RenewResult)
    {
        $this->RenewResult = $RenewResult;
        return $this;
    }

}
