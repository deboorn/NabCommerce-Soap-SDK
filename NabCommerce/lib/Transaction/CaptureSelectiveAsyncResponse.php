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

class CaptureSelectiveAsyncResponse
{

    /**
     * @var Response $CaptureSelectiveAsyncResult
     */
    protected $CaptureSelectiveAsyncResult = null;

    /**
     * @param Response $CaptureSelectiveAsyncResult
     */
    public function __construct($CaptureSelectiveAsyncResult)
    {
        $this->CaptureSelectiveAsyncResult = $CaptureSelectiveAsyncResult;
    }

    /**
     * @param Response $CaptureSelectiveAsyncResult
     */
    public static function forge($CaptureSelectiveAsyncResult)
    {
        return new self($CaptureSelectiveAsyncResult);
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
    public function getCaptureSelectiveAsyncResult()
    {
        return $this->CaptureSelectiveAsyncResult;
    }

    /**
     * @param Response $CaptureSelectiveAsyncResult
     * @return \NabCommerce\Transaction\CaptureSelectiveAsyncResponse
     */
    public function setCaptureSelectiveAsyncResult(Response $CaptureSelectiveAsyncResult)
    {
        $this->CaptureSelectiveAsyncResult = $CaptureSelectiveAsyncResult;
        return $this;
    }

}
