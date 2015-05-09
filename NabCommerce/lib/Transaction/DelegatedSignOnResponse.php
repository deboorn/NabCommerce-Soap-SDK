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

class DelegatedSignOnResponse
{

    /**
     * @var string $DelegatedSignOnResult
     */
    protected $DelegatedSignOnResult = null;

    /**
     * @param string $DelegatedSignOnResult
     */
    public function __construct($DelegatedSignOnResult)
    {
        $this->DelegatedSignOnResult = $DelegatedSignOnResult;
    }

    /**
     * @param string $DelegatedSignOnResult
     */
    public static function forge($DelegatedSignOnResult)
    {
        return new self($DelegatedSignOnResult);
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
    public function getDelegatedSignOnResult()
    {
        return $this->DelegatedSignOnResult;
    }

    /**
     * @param string $DelegatedSignOnResult
     * @return \NabCommerce\Service\DelegatedSignOnResponse
     */
    public function setDelegatedSignOnResult($DelegatedSignOnResult)
    {
        $this->DelegatedSignOnResult = $DelegatedSignOnResult;
        return $this;
    }

}
