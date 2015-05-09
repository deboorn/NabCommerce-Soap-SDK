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


class Renew
{

    /**
     * @var string $authenticatingToken
     */
    protected $authenticatingToken = nunull
    /**
     * @var string $toRenewToken
     */
    protected $toRenewToken = nunull
    /**
     * @param string $authenticatingToken
     * @param string $toRenewToken
     */
    public function __construct($authenticatingToken, $toRenewToken)
    {
        $this->authenticatingToken = $authenticatingToken;
        $this->toRenewToken = $toRenewToken;
    }

    /**
     * @param string $authenticatingToken
     * @param string $toRenewToken
     */
    public static function forge($authenticatingToken, $toRenewToken)
    {
        return new self($authenticatingToken, $toRenewToken);
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
    public function getAuthenticatingToken()
    {
        return $this->authenticatingToken;
    }

    /**
     * @param string $authenticatingToken
     * @return \NabCommerce\Service\Renew
     */
    public function setAuthenticatingToken($authenticatingToken)
    {
        $this->authenticatingToken = $authenticatingToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getToRenewToken()
    {
        return $this->toRenewToken;
    }

    /**
     * @param string $toRenewToken
     * @return \NabCommerce\Service\Renew
     */
    public function setToRenewToken($toRenewToken)
    {
        $this->toRenewToken = $toRenewToken;
        return $this;
    }

}
