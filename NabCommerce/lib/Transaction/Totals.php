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

class Totals
{

    /**
     * @var float $NetAmount
     */
    protected $NetAmount = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param float $NetAmount
     * @param int $Count
     */
    public function __construct($NetAmount, $Count)
    {
        $this->NetAmount = $NetAmount;
        $this->Count = $Count;
    }

    /**
     * @param float $NetAmount
     * @param int $Count
     */
    public static function forge($NetAmount, $Count)
    {
        return new self($NetAmount, $Count);
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
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param float $NetAmount
     * @return \NabCommerce\Transaction\Totals
     */
    public function setNetAmount($NetAmount)
    {
        $this->NetAmount = $NetAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param int $Count
     * @return \NabCommerce\Transaction\Totals
     */
    public function setCount($Count)
    {
        $this->Count = $Count;
        return $this;
    }

}
