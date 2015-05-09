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

class BankcardTransactionDataDefaults
{

    /**
     * @var TypeISOCurrencyCodeA3 $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var CustomerPresent $CustomerPresent
     */
    protected $CustomerPresent = null;

    /**
     * @var EntryMode $EntryMode
     */
    protected $EntryMode = null;

    /**
     * @var RequestACI $RequestACI
     */
    protected $RequestACI = null;

    /**
     * @var RequestAdvice $RequestAdvice
     */
    protected $RequestAdvice = null;

    /**
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param CustomerPresent $CustomerPresent
     * @param EntryMode $EntryMode
     * @param RequestACI $RequestACI
     * @param RequestAdvice $RequestAdvice
     */
    public function __construct($CurrencyCode, $CustomerPresent, $EntryMode, $RequestACI, $RequestAdvice)
    {
        $this->CurrencyCode = $CurrencyCode;
        $this->CustomerPresent = $CustomerPresent;
        $this->EntryMode = $EntryMode;
        $this->RequestACI = $RequestACI;
        $this->RequestAdvice = $RequestAdvice;
    }

    /**
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @param CustomerPresent $CustomerPresent
     * @param EntryMode $EntryMode
     * @param RequestACI $RequestACI
     * @param RequestAdvice $RequestAdvice
     */
    public static function forge($CurrencyCode, $CustomerPresent, $EntryMode, $RequestACI, $RequestAdvice)
    {
        return new self($CurrencyCode, $CustomerPresent, $EntryMode, $RequestACI, $RequestAdvice);
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
     * @return TypeISOCurrencyCodeA3
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param TypeISOCurrencyCodeA3 $CurrencyCode
     * @return \NabCommerce\Service\BankcardTransactionDataDefaults
     */
    public function setCurrencyCode(TypeISOCurrencyCodeA3 $CurrencyCode)
    {
        $this->CurrencyCode = $CurrencyCode;
        return $this;
    }

    /**
     * @return CustomerPresent
     */
    public function getCustomerPresent()
    {
        return $this->CustomerPresent;
    }

    /**
     * @param CustomerPresent $CustomerPresent
     * @return \NabCommerce\Service\BankcardTransactionDataDefaults
     */
    public function setCustomerPresent(CustomerPresent $CustomerPresent)
    {
        $this->CustomerPresent = $CustomerPresent;
        return $this;
    }

    /**
     * @return EntryMode
     */
    public function getEntryMode()
    {
        return $this->EntryMode;
    }

    /**
     * @param EntryMode $EntryMode
     * @return \NabCommerce\Service\BankcardTransactionDataDefaults
     */
    public function setEntryMode(EntryMode $EntryMode)
    {
        $this->EntryMode = $EntryMode;
        return $this;
    }

    /**
     * @return RequestACI
     */
    public function getRequestACI()
    {
        return $this->RequestACI;
    }

    /**
     * @param RequestACI $RequestACI
     * @return \NabCommerce\Service\BankcardTransactionDataDefaults
     */
    public function setRequestACI(RequestACI $RequestACI)
    {
        $this->RequestACI = $RequestACI;
        return $this;
    }

    /**
     * @return RequestAdvice
     */
    public function getRequestAdvice()
    {
        return $this->RequestAdvice;
    }

    /**
     * @param RequestAdvice $RequestAdvice
     * @return \NabCommerce\Service\BankcardTransactionDataDefaults
     */
    public function setRequestAdvice(RequestAdvice $RequestAdvice)
    {
        $this->RequestAdvice = $RequestAdvice;
        return $this;
    }

}
