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
    

/**
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


class DeleteApplicationData
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @var string $applicationProfileId
     */
    protected $applicationProfileId = null;

    /**
     * @param string $sessionToken
     * @param string $applicationProfileId
     */
    public function __construct($sessionToken, $applicationProfileId)
    {
        $this->sessionToken = $sessionToken;
        $this->applicationProfileId = $applicationProfileId;
    }

    /**
     * @param string $sessionToken
     * @param string $applicationProfileId
     */
    public static function forge($sessionToken, $applicationProfileId)
    {
        return new self($sessionToken, $applicationProfileId);
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
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @param string $sessionToken
     * @return \NabCommerce\Service\DeleteApplicationData
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationProfileId()
    {
        return $this->applicationProfileId;
    }

    /**
     * @param string $applicationProfileId
     * @return \NabCommerce\Service\DeleteApplicationData
     */
    public function setApplicationProfileId($applicationProfileId)
    {
        $this->applicationProfileId = $applicationProfileId;
        return $this;
    }

}
