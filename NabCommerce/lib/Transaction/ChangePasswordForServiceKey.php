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

class ChangePasswordForServiceKey
{

    /**
     * @var string $serviceKey
     */
    protected $serviceKey = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param string $serviceKey
     * @param string $userName
     * @param string $password
     * @param string $newPassword
     */
    public function __construct($serviceKey, $userName, $password, $newPassword)
    {
        $this->serviceKey = $serviceKey;
        $this->userName = $userName;
        $this->password = $password;
        $this->newPassword = $newPassword;
    }

    /**
     * @param string $serviceKey
     * @param string $userName
     * @param string $password
     * @param string $newPassword
     */
    public static function forge($serviceKey, $userName, $password, $newPassword)
    {
        return new self($serviceKey, $userName, $password, $newPassword);
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
     * @return \NabCommerce\Service\ChangePasswordForServiceKey
     */
    public function setServiceKey($serviceKey)
    {
        $this->serviceKey = $serviceKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return \NabCommerce\Service\ChangePasswordForServiceKey
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
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
     * @return \NabCommerce\Service\ChangePasswordForServiceKey
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \NabCommerce\Service\ChangePasswordForServiceKey
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }

}
