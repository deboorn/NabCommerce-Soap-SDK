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

class DelegatedSignOn
{

    /**
     * @var string $identityToken
     */
    protected $identityToken = null;

    /**
     * @var string $onBehalfOfSk
     */
    protected $onBehalfOfSk = null;

    /**
     * @var ArrayOfClaimMetaData $claims
     */
    protected $claims = null;

    /**
     * @param string $identityToken
     * @param string $onBehalfOfSk
     * @param ArrayOfClaimMetaData $claims
     */
    public function __construct($identityToken, $onBehalfOfSk, $claims)
    {
        $this->identityToken = $identityToken;
        $this->onBehalfOfSk = $onBehalfOfSk;
        $this->claims = $claims;
    }

    /**
     * @param string $identityToken
     * @param string $onBehalfOfSk
     * @param ArrayOfClaimMetaData $claims
     */
    public static function forge($identityToken, $onBehalfOfSk, $claims)
    {
        return new self($identityToken, $onBehalfOfSk, $claims);
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
     * @return \NabCommerce\Service\DelegatedSignOn
     */
    public function setIdentityToken($identityToken)
    {
        $this->identityToken = $identityToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnBehalfOfSk()
    {
        return $this->onBehalfOfSk;
    }

    /**
     * @param string $onBehalfOfSk
     * @return \NabCommerce\Service\DelegatedSignOn
     */
    public function setOnBehalfOfSk($onBehalfOfSk)
    {
        $this->onBehalfOfSk = $onBehalfOfSk;
        return $this;
    }

    /**
     * @return ArrayOfClaimMetaData
     */
    public function getClaims()
    {
        return $this->claims;
    }

    /**
     * @param ArrayOfClaimMetaData $claims
     * @return \NabCommerce\Service\DelegatedSignOn
     */
    public function setClaims(ArrayOfClaimMetaData $claims)
    {
        $this->claims = $claims;
        return $this;
    }

}
