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

class VirtualCardData
{

    /**
     * @var int $AccountNumberLength
     */
    protected $AccountNumberLength = null;

    /**
     * @var string $BIN
     */
    protected $BIN = null;

    /**
     * @param int $AccountNumberLength
     */
    public function __construct($AccountNumberLength)
    {
        $this->AccountNumberLength = $AccountNumberLength;
    }

    /**
     * @param int $AccountNumberLength
     */
    public static function forge($AccountNumberLength)
    {
        return new self($AccountNumberLength);
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
     * @return int
     */
    public function getAccountNumberLength()
    {
        return $this->AccountNumberLength;
    }

    /**
     * @param int $AccountNumberLength
     * @return \NabCommerce\Transaction\VirtualCardData
     */
    public function setAccountNumberLength($AccountNumberLength)
    {
        $this->AccountNumberLength = $AccountNumberLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getBIN()
    {
        return $this->BIN;
    }

    /**
     * @param string $BIN
     * @return \NabCommerce\Transaction\VirtualCardData
     */
    public function setBIN($BIN)
    {
        $this->BIN = $BIN;
        return $this;
    }

}
