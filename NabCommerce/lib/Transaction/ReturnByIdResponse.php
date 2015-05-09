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

class ReturnByIdResponse
{

    /**
     * @var Response $ReturnByIdResult
     */
    protected $ReturnByIdResult = null;

    /**
     * @param Response $ReturnByIdResult
     */
    public function __construct($ReturnByIdResult)
    {
        $this->ReturnByIdResult = $ReturnByIdResult;
    }

    /**
     * @param Response $ReturnByIdResult
     */
    public static function forge($ReturnByIdResult)
    {
        return new self($ReturnByIdResult);
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
     * @return Response
     */
    public function getReturnByIdResult()
    {
        return $this->ReturnByIdResult;
    }

    /**
     * @param Response $ReturnByIdResult
     * @return \NabCommerce\Transaction\ReturnByIdResponse
     */
    public function setReturnByIdResult(Response $ReturnByIdResult)
    {
        $this->ReturnByIdResult = $ReturnByIdResult;
        return $this;
    }

}
