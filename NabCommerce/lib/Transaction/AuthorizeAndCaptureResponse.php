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

class AuthorizeAndCaptureResponse
{

    /**
     * @var Response $AuthorizeAndCaptureResult
     */
    protected $AuthorizeAndCaptureResult = null;

    /**
     * @param Response $AuthorizeAndCaptureResult
     */
    public function __construct($AuthorizeAndCaptureResult)
    {
        $this->AuthorizeAndCaptureResult = $AuthorizeAndCaptureResult;
    }

    /**
     * @param Response $AuthorizeAndCaptureResult
     */
    public static function forge($AuthorizeAndCaptureResult)
    {
        return new self($AuthorizeAndCaptureResult);
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
    public function getAuthorizeAndCaptureResult()
    {
        return $this->AuthorizeAndCaptureResult;
    }

    /**
     * @param Response $AuthorizeAndCaptureResult
     * @return \NabCommerce\Transaction\AuthorizeAndCaptureResponse
     */
    public function setAuthorizeAndCaptureResult(Response $AuthorizeAndCaptureResult)
    {
        $this->AuthorizeAndCaptureResult = $AuthorizeAndCaptureResult;
        return $this;
    }

}
