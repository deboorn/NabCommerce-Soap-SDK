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
    

/**
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
class CWSValidationErrorFault
{

    /**
     * @var CWSValidationErrorFaultEErrorType $ErrorType
     */
    protected $ErrorType = nunull
    /**
     * @var string $RuleKey
     */
    protected $RuleKey = nunull
    /**
     * @var string $RuleLocationKey
     */
    protected $RuleLocationKey = nunull
    /**
     * @var string $RuleMessage
     */
    protected $RuleMessage = nunull
    /**
     * @var string $TransactionId
     */
    protected $TransactionId = nunull
    /**
     * @param CWSValidationErrorFaultEErrorType $ErrorType
     */
    public function __construct($ErrorType)
    {
        $this->ErrorType = $ErrorType;
    }

    /**
     * @param CWSValidationErrorFaultEErrorType $ErrorType
     */
    public static function forge($ErrorType)
    {
        return new self($ErrorType);
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
     * @return CWSValidationErrorFaultEErrorType
     */
    public function getErrorType()
    {
        return $this->ErrorType;
    }

    /**
     * @param CWSValidationErrorFaultEErrorType $ErrorType
     * @return \NabCommerce\Service\CWSValidationErrorFault
     */
    public function setErrorType(CWSValidationErrorFaultEErrorType $ErrorType)
    {
        $this->ErrorType = $ErrorType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRuleKey()
    {
        return $this->RuleKey;
    }

    /**
     * @param string $RuleKey
     * @return \NabCommerce\Service\CWSValidationErrorFault
     */
    public function setRuleKey($RuleKey)
    {
        $this->RuleKey = $RuleKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getRuleLocationKey()
    {
        return $this->RuleLocationKey;
    }

    /**
     * @param string $RuleLocationKey
     * @return \NabCommerce\Service\CWSValidationErrorFault
     */
    public function setRuleLocationKey($RuleLocationKey)
    {
        $this->RuleLocationKey = $RuleLocationKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getRuleMessage()
    {
        return $this->RuleMessage;
    }

    /**
     * @param string $RuleMessage
     * @return \NabCommerce\Service\CWSValidationErrorFault
     */
    public function setRuleMessage($RuleMessage)
    {
        $this->RuleMessage = $RuleMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \NabCommerce\Service\CWSValidationErrorFault
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;
        return $this;
    }

}
