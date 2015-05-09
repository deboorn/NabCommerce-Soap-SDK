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


class GetApplicationDataResponse
{

    /**
     * @var ApplicationData $GetApplicationDataResult
     */
    protected $GetApplicationDataResult = null;

    /**
     * @param ApplicationData $GetApplicationDataResult
     */
    public function __construct($GetApplicationDataResult)
    {
        $this->GetApplicationDataResult = $GetApplicationDataResult;
    }

    /**
     * @param ApplicationData $GetApplicationDataResult
     */
    public static function forge($GetApplicationDataResult)
    {
        return new self($GetApplicationDataResult);
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
     * @return ApplicationData
     */
    public function getGetApplicationDataResult()
    {
        return $this->GetApplicationDataResult;
    }

    /**
     * @param ApplicationData $GetApplicationDataResult
     * @return \NabCommerce\Service\GetApplicationDataResponse
     */
    public function setGetApplicationDataResult(ApplicationData $GetApplicationDataResult)
    {
        $this->GetApplicationDataResult = $GetApplicationDataResult;
        return $this;
    }

}
