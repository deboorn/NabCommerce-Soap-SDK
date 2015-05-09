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

class EcommerceSecurityData
{

    /**
     * @var string $TokenData
     */
    protected $TokenData = null;

    /**
     * @var TokenIndicator $TokenIndicator
     */
    protected $TokenIndicator = null;

    /**
     * @var string $XID
     */
    protected $XID = null;

    /**
     * @param TokenIndicator $TokenIndicator
     */
    public function __construct($TokenIndicator)
    {
        $this->TokenIndicator = $TokenIndicator;
    }

    /**
     * @param TokenIndicator $TokenIndicator
     */
    public static function forge($TokenIndicator)
    {
        return new self($TokenIndicator);
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
    public function getTokenData()
    {
        return $this->TokenData;
    }

    /**
     * @param string $TokenData
     * @return \NabCommerce\Transaction\EcommerceSecurityData
     */
    public function setTokenData($TokenData)
    {
        $this->TokenData = $TokenData;
        return $this;
    }

    /**
     * @return TokenIndicator
     */
    public function getTokenIndicator()
    {
        return $this->TokenIndicator;
    }

    /**
     * @param TokenIndicator $TokenIndicator
     * @return \NabCommerce\Transaction\EcommerceSecurityData
     */
    public function setTokenIndicator(TokenIndicator $TokenIndicator)
    {
        $this->TokenIndicator = $TokenIndicator;
        return $this;
    }

    /**
     * @return string
     */
    public function getXID()
    {
        return $this->XID;
    }

    /**
     * @param string $XID
     * @return \NabCommerce\Transaction\EcommerceSecurityData
     */
    public function setXID($XID)
    {
        $this->XID = $XID;
        return $this;
    }

}
