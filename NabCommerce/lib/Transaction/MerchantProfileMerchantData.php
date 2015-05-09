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

class MerchantProfileMerchantData
{

    /**
     * @var string $CustomerServiceInternet
     */
    protected $CustomerServiceInternet = null;

    /**
     * @var string $CustomerServicePhone
     */
    protected $CustomerServicePhone = null;

    /**
     * @var TypeISOLanguageCodeA3 $Language
     */
    protected $Language = null;

    /**
     * @var AddressInfo $Address
     */
    protected $Address = null;

    /**
     * @var string $MerchantId
     */
    protected $MerchantId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $TaxId
     */
    protected $TaxId = null;

    /**
     * @var BankcardMerchantData $BankcardMerchantData
     */
    protected $BankcardMerchantData = null;

    /**
     * @var ElectronicCheckingMerchantData $ElectronicCheckingMerchantData
     */
    protected $ElectronicCheckingMerchantData = null;

    /**
     * @var StoredValueMerchantData $StoredValueMerchantData
     */
    protected $StoredValueMerchantData = null;

    /**
     * @param TypeISOLanguageCodeA3 $Language
     */
    public function __construct($Language)
    {
        $this->Language = $Language;
    }

    /**
     * @param TypeISOLanguageCodeA3 $Language
     */
    public static function forge($Language)
    {
        return new self($Language);
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
    public function getCustomerServiceInternet()
    {
        return $this->CustomerServiceInternet;
    }

    /**
     * @param string $CustomerServiceInternet
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setCustomerServiceInternet($CustomerServiceInternet)
    {
        $this->CustomerServiceInternet = $CustomerServiceInternet;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerServicePhone()
    {
        return $this->CustomerServicePhone;
    }

    /**
     * @param string $CustomerServicePhone
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setCustomerServicePhone($CustomerServicePhone)
    {
        $this->CustomerServicePhone = $CustomerServicePhone;
        return $this;
    }

    /**
     * @return TypeISOLanguageCodeA3
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param TypeISOLanguageCodeA3 $Language
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setLanguage(TypeISOLanguageCodeA3 $Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return AddressInfo
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param AddressInfo $Address
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setAddress(AddressInfo $Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->MerchantId;
    }

    /**
     * @param string $MerchantId
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setMerchantId($MerchantId)
    {
        $this->MerchantId = $MerchantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->TaxId;
    }

    /**
     * @param string $TaxId
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setTaxId($TaxId)
    {
        $this->TaxId = $TaxId;
        return $this;
    }

    /**
     * @return BankcardMerchantData
     */
    public function getBankcardMerchantData()
    {
        return $this->BankcardMerchantData;
    }

    /**
     * @param BankcardMerchantData $BankcardMerchantData
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setBankcardMerchantData(BankcardMerchantData $BankcardMerchantData)
    {
        $this->BankcardMerchantData = $BankcardMerchantData;
        return $this;
    }

    /**
     * @return ElectronicCheckingMerchantData
     */
    public function getElectronicCheckingMerchantData()
    {
        return $this->ElectronicCheckingMerchantData;
    }

    /**
     * @param ElectronicCheckingMerchantData $ElectronicCheckingMerchantData
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setElectronicCheckingMerchantData(ElectronicCheckingMerchantData $ElectronicCheckingMerchantData)
    {
        $this->ElectronicCheckingMerchantData = $ElectronicCheckingMerchantData;
        return $this;
    }

    /**
     * @return StoredValueMerchantData
     */
    public function getStoredValueMerchantData()
    {
        return $this->StoredValueMerchantData;
    }

    /**
     * @param StoredValueMerchantData $StoredValueMerchantData
     * @return \NabCommerce\Service\MerchantProfileMerchantData
     */
    public function setStoredValueMerchantData(StoredValueMerchantData $StoredValueMerchantData)
    {
        $this->StoredValueMerchantData = $StoredValueMerchantData;
        return $this;
    }

}
