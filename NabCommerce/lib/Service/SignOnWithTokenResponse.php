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


class SignOnWithTokenResponse
{

    /**
     * @var string $SignOnWithTokenResult
     */
    protected $SignOnWithTokenResult = null;

    /**
     * @param string $SignOnWithTokenResult
     */
    public function __construct($SignOnWithTokenResult)
    {
        $this->SignOnWithTokenResult = $SignOnWithTokenResult;
    }

    /**
     * @param string $SignOnWithTokenResult
     */
    public static function forge($SignOnWithTokenResult)
    {
        return new self($SignOnWithTokenResult);
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
    public function getSignOnWithTokenResult()
    {
        return $this->SignOnWithTokenResult;
    }

    /**
     * @param string $SignOnWithTokenResult
     * @return \NabCommerce\Service\SignOnWithTokenResponse
     */
    public function setSignOnWithTokenResult($SignOnWithTokenResult)
    {
        $this->SignOnWithTokenResult = $SignOnWithTokenResult;
        return $this;
    }

}
