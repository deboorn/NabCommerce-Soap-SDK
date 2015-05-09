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

class ConsumerIdentification
{

    /**
     * @var IdType $IdType
     */
    protected $IdType = null;

    /**
     * @var string $IdData
     */
    protected $IdData = null;

    /**
     * @var IdEntryMode $IdEntryMode
     */
    protected $IdEntryMode = null;

    /**
     * @param IdType $IdType
     * @param IdEntryMode $IdEntryMode
     */
    public function __construct($IdType, $IdEntryMode)
    {
        $this->IdType = $IdType;
        $this->IdEntryMode = $IdEntryMode;
    }

    /**
     * @param IdType $IdType
     * @param IdEntryMode $IdEntryMode
     */
    public static function forge($IdType, $IdEntryMode)
    {
        return new self($IdType, $IdEntryMode);
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
     * @return IdType
     */
    public function getIdType()
    {
        return $this->IdType;
    }

    /**
     * @param IdType $IdType
     * @return \NabCommerce\Transaction\ConsumerIdentification
     */
    public function setIdType(IdType $IdType)
    {
        $this->IdType = $IdType;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdData()
    {
        return $this->IdData;
    }

    /**
     * @param string $IdData
     * @return \NabCommerce\Transaction\ConsumerIdentification
     */
    public function setIdData($IdData)
    {
        $this->IdData = $IdData;
        return $this;
    }

    /**
     * @return IdEntryMode
     */
    public function getIdEntryMode()
    {
        return $this->IdEntryMode;
    }

    /**
     * @param IdEntryMode $IdEntryMode
     * @return \NabCommerce\Transaction\ConsumerIdentification
     */
    public function setIdEntryMode(IdEntryMode $IdEntryMode)
    {
        $this->IdEntryMode = $IdEntryMode;
        return $this;
    }

}
