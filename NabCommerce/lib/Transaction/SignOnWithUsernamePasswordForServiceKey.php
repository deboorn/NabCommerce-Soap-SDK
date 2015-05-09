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

class SignOnWithUsernamePasswordForServiceKey
{

    /**
     * @var string $serviceKey
     */
    protected $serviceKey = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $serviceKey
     * @param string $username
     * @param string $password
     */
    public function __construct($serviceKey, $username, $password)
    {
        $this->serviceKey = $serviceKey;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @param string $serviceKey
     * @param string $username
     * @param string $password
     */
    public static function forge($serviceKey, $username, $password)
    {
        return new self($serviceKey, $username, $password);
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
    public function getServiceKey()
    {
        return $this->serviceKey;
    }

    /**
     * @param string $serviceKey
     * @return \NabCommerce\Service\SignOnWithUsernamePasswordForServiceKey
     */
    public function setServiceKey($serviceKey)
    {
        $this->serviceKey = $serviceKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return \NabCommerce\Service\SignOnWithUsernamePasswordForServiceKey
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \NabCommerce\Service\SignOnWithUsernamePasswordForServiceKey
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}
