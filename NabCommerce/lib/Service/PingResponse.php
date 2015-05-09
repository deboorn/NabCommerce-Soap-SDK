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

 

namespace NabCommerce\Service;


class PingResponse
{

    /**
     * @var boolean $IsSuccess
     */
    protected $IsSuccess = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param boolean $IsSuccess
     */
    public function __construct($IsSuccess)
    {
        $this->IsSuccess = $IsSuccess;
    }

    /**
     * @param boolean $IsSuccess
     */
    public static function forge($IsSuccess)
    {
        return new self($IsSuccess);
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
     * @return boolean
     */
    public function getIsSuccess()
    {
        return $this->IsSuccess;
    }

    /**
     * @param boolean $IsSuccess
     * @return \NabCommerce\Service\PingResponse
     */
    public function setIsSuccess($IsSuccess)
    {
        $this->IsSuccess = $IsSuccess;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \NabCommerce\Service\PingResponse
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

}
