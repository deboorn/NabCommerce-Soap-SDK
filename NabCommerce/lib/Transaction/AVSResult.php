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

class AVSResult
{

    /**
     * @var string $ActualResult
     */
    protected $ActualResult = null;

    /**
     * @var AddressResult $AddressResult
     */
    protected $AddressResult = null;

    /**
     * @var CountryResult $CountryResult
     */
    protected $CountryResult = null;

    /**
     * @var StateResult $StateResult
     */
    protected $StateResult = null;

    /**
     * @var PostalCodeResult $PostalCodeResult
     */
    protected $PostalCodeResult = null;

    /**
     * @var PhoneResult $PhoneResult
     */
    protected $PhoneResult = null;

    /**
     * @var CardholderNameResult $CardholderNameResult
     */
    protected $CardholderNameResult = null;

    /**
     * @var CityResult $CityResult
     */
    protected $CityResult = null;

    /**
     * @param AddressResult $AddressResult
     * @param CountryResult $CountryResult
     * @param StateResult $StateResult
     * @param PostalCodeResult $PostalCodeResult
     * @param PhoneResult $PhoneResult
     * @param CardholderNameResult $CardholderNameResult
     * @param CityResult $CityResult
     */
    public function __construct($AddressResult, $CountryResult, $StateResult, $PostalCodeResult, $PhoneResult, $CardholderNameResult, $CityResult)
    {
        $this->AddressResult = $AddressResult;
        $this->CountryResult = $CountryResult;
        $this->StateResult = $StateResult;
        $this->PostalCodeResult = $PostalCodeResult;
        $this->PhoneResult = $PhoneResult;
        $this->CardholderNameResult = $CardholderNameResult;
        $this->CityResult = $CityResult;
    }

    /**
     * @param AddressResult $AddressResult
     * @param CountryResult $CountryResult
     * @param StateResult $StateResult
     * @param PostalCodeResult $PostalCodeResult
     * @param PhoneResult $PhoneResult
     * @param CardholderNameResult $CardholderNameResult
     * @param CityResult $CityResult
     */
    public static function forge($AddressResult, $CountryResult, $StateResult, $PostalCodeResult, $PhoneResult, $CardholderNameResult, $CityResult)
    {
        return new self($AddressResult, $CountryResult, $StateResult, $PostalCodeResult, $PhoneResult, $CardholderNameResult, $CityResult);
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
    public function getActualResult()
    {
        return $this->ActualResult;
    }

    /**
     * @param string $ActualResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setActualResult($ActualResult)
    {
        $this->ActualResult = $ActualResult;
        return $this;
    }

    /**
     * @return AddressResult
     */
    public function getAddressResult()
    {
        return $this->AddressResult;
    }

    /**
     * @param AddressResult $AddressResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setAddressResult(AddressResult $AddressResult)
    {
        $this->AddressResult = $AddressResult;
        return $this;
    }

    /**
     * @return CountryResult
     */
    public function getCountryResult()
    {
        return $this->CountryResult;
    }

    /**
     * @param CountryResult $CountryResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setCountryResult(CountryResult $CountryResult)
    {
        $this->CountryResult = $CountryResult;
        return $this;
    }

    /**
     * @return StateResult
     */
    public function getStateResult()
    {
        return $this->StateResult;
    }

    /**
     * @param StateResult $StateResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setStateResult(StateResult $StateResult)
    {
        $this->StateResult = $StateResult;
        return $this;
    }

    /**
     * @return PostalCodeResult
     */
    public function getPostalCodeResult()
    {
        return $this->PostalCodeResult;
    }

    /**
     * @param PostalCodeResult $PostalCodeResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setPostalCodeResult(PostalCodeResult $PostalCodeResult)
    {
        $this->PostalCodeResult = $PostalCodeResult;
        return $this;
    }

    /**
     * @return PhoneResult
     */
    public function getPhoneResult()
    {
        return $this->PhoneResult;
    }

    /**
     * @param PhoneResult $PhoneResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setPhoneResult(PhoneResult $PhoneResult)
    {
        $this->PhoneResult = $PhoneResult;
        return $this;
    }

    /**
     * @return CardholderNameResult
     */
    public function getCardholderNameResult()
    {
        return $this->CardholderNameResult;
    }

    /**
     * @param CardholderNameResult $CardholderNameResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setCardholderNameResult(CardholderNameResult $CardholderNameResult)
    {
        $this->CardholderNameResult = $CardholderNameResult;
        return $this;
    }

    /**
     * @return CityResult
     */
    public function getCityResult()
    {
        return $this->CityResult;
    }

    /**
     * @param CityResult $CityResult
     * @return \NabCommerce\Transaction\AVSResult
     */
    public function setCityResult(CityResult $CityResult)
    {
        $this->CityResult = $CityResult;
        return $this;
    }

}
