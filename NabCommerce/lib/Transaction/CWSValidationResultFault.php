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

class CWSValidationResultFault extends CWSBaseFault
{

    /**
     * @var ArrayOfCWSValidationErrorFault $Errors
     */
    protected $Errors = null;

    /**
     * @param int $ErrorID
     * @param TransactionState $TransactionState
     */
    public function __construct($ErrorID, $TransactionState)
    {
        parent::__construct($ErrorID, $TransactionState);
    }

    /**
     * @param int $ErrorID
     * @param TransactionState $TransactionState
     */
    public static function forge($ErrorID, $TransactionState)
    {
        return new self($ErrorID, $TransactionState);
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
     * @return ArrayOfCWSValidationErrorFault
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * @param ArrayOfCWSValidationErrorFault $Errors
     * @return \NabCommerce\Transaction\CWSValidationResultFault
     */
    public function setErrors(ArrayOfCWSValidationErrorFault $Errors)
    {
        $this->Errors = $Errors;
        return $this;
    }

}
