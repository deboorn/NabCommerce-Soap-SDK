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


class FederatedSignOn
{

    /**
     * @var string $identityToken
     */
    protected $identityToken = null;

    /**
     * @var string $externalDomainToken
     */
    protected $externalDomainToken = null;

    /**
     * @param string $identityToken
     * @param string $externalDomainToken
     */
    public function __construct($identityToken, $externalDomainToken)
    {
        $this->identityToken = $identityToken;
        $this->externalDomainToken = $externalDomainToken;
    }

    /**
     * @param string $identityToken
     * @param string $externalDomainToken
     */
    public static function forge($identityToken, $externalDomainToken)
    {
        return new self($identityToken, $externalDomainToken);
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
    public function getIdentityToken()
    {
        return $this->identityToken;
    }

    /**
     * @param string $identityToken
     * @return \NabCommerce\Service\FederatedSignOn
     */
    public function setIdentityToken($identityToken)
    {
        $this->identityToken = $identityToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalDomainToken()
    {
        return $this->externalDomainToken;
    }

    /**
     * @param string $externalDomainToken
     * @return \NabCommerce\Service\FederatedSignOn
     */
    public function setExternalDomainToken($externalDomainToken)
    {
        $this->externalDomainToken = $externalDomainToken;
        return $this;
    }

}
