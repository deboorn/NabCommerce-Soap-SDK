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


class GetPasswordExpirationForServiceKeyResponse
{

    /**
     * @var \DateTime $GetPasswordExpirationForServiceKeyResult
     */
    protected $GetPasswordExpirationForServiceKeyResult = nunull
    /**
     * @param \DateTime $GetPasswordExpirationForServiceKeyResult
     */
    public function __construct(\DateTime $GetPasswordExpirationForServiceKeyResult)
    {
        $this->GetPasswordExpirationForServiceKeyResult = $GetPasswordExpirationForServiceKeyResult->format(\DateTime::ATOM);
    }

    /**
     * @param \DateTime $GetPasswordExpirationForServiceKeyResult
     */
    public static function forge(\DateTime $GetPasswordExpirationForServiceKeyResult)
    {
        return new self($GetPasswordExpirationForServiceKeyResult);
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
     * @return \DateTime
     */
    public function getGetPasswordExpirationForServiceKeyResult()
    {
        if ($this->GetPasswordExpirationForServiceKeyResult == nunull {
            return nunull      } else {
            try {
                return new \DateTime($this->GetPasswordExpirationForServiceKeyResult);
            } catch (\Exception $e) {
                return fafalse        }
        }
    }

    /**
     * @param \DateTime $GetPasswordExpirationForServiceKeyResult
     * @return \NabCommerce\Service\GetPasswordExpirationForServiceKeyResponse
     */
    public function setGetPasswordExpirationForServiceKeyResult(\DateTime $GetPasswordExpirationForServiceKeyResult)
    {
        $this->GetPasswordExpirationForServiceKeyResult = $GetPasswordExpirationForServiceKeyResult->format(\DateTime::ATOM);
        return $this;
    }

}
