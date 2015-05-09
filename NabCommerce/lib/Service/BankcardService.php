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
class BankcardService
{

    /**
     * @var boolean $AlternativeMerchantData
     */
    protected $AlternativeMerchantData = nunull
    /**
     * @var boolean $AutoBatch
     */
    protected $AutoBatch = nunull
    /**
     * @var BankcardServiceAVSData $AVSData
     */
    protected $AVSData = nunull
    /**
     * @var \DateTime $CutoffTime
     */
    protected $CutoffTime = nunull
    /**
     * @var string $EncryptionKey
     */
    protected $EncryptionKey = nunull
    /**
     * @var boolean $ManagedBilling
     */
    protected $ManagedBilling = nunull
    /**
     * @var int $MaximumBatchItems
     */
    protected $MaximumBatchItems = nunull
    /**
     * @var int $MaximumLineItems
     */
    protected $MaximumLineItems = nunull
    /**
     * @var boolean $MultiplePartialCapture
     */
    protected $MultiplePartialCapture = nunull
    /**
     * @var Operations $Operations
     */
    protected $Operations = nunull
    /**
     * @var PurchaseCardLevel $PurchaseCardLevel
     */
    protected $PurchaseCardLevel = nunull
    /**
     * @var string $ServiceId
     */
    protected $ServiceId = nunull
    /**
     * @var string $ServiceName
     */
    protected $ServiceName = nunull
    /**
     * @var Tenders $Tenders
     */
    protected $Tenders = nunull
    /**
     * @param boolean $AlternativeMerchantData
     * @param boolean $AutoBatch
     * @param \DateTime $CutoffTime
     * @param boolean $ManagedBilling
     * @param int $MaximumBatchItems
     * @param int $MaximumLineItems
     * @param boolean $MultiplePartialCapture
     * @param PurchaseCardLevel $PurchaseCardLevel
     */
    public function __construct($AlternativeMerchantData, $AutoBatch, \DateTime $CutoffTime, $ManagedBilling, $MaximumBatchItems, $MaximumLineItems, $MultiplePartialCapture, $PurchaseCardLevel)
    {
        $this->AlternativeMerchantData = $AlternativeMerchantData;
        $this->AutoBatch = $AutoBatch;
        $this->CutoffTime = $CutoffTime->format(\DateTime::ATOM);
        $this->ManagedBilling = $ManagedBilling;
        $this->MaximumBatchItems = $MaximumBatchItems;
        $this->MaximumLineItems = $MaximumLineItems;
        $this->MultiplePartialCapture = $MultiplePartialCapture;
        $this->PurchaseCardLevel = $PurchaseCardLevel;
    }

    /**
     * @param boolean $AlternativeMerchantData
     * @param boolean $AutoBatch
     * @param \DateTime $CutoffTime
     * @param boolean $ManagedBilling
     * @param int $MaximumBatchItems
     * @param int $MaximumLineItems
     * @param boolean $MultiplePartialCapture
     * @param PurchaseCardLevel $PurchaseCardLevel
     */
    public static function forge($AlternativeMerchantData, $AutoBatch, \DateTime $CutoffTime, $ManagedBilling, $MaximumBatchItems, $MaximumLineItems, $MultiplePartialCapture, $PurchaseCardLevel)
    {
        return new self($AlternativeMerchantData, $AutoBatch, $CutoffTime, $ManagedBilling, $MaximumBatchItems, $MaximumLineItems, $MultiplePartialCapture, $PurchaseCardLevel);
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
     * @return boolean
     */
    public function getAlternativeMerchantData()
    {
        return $this->AlternativeMerchantData;
    }

    /**
     * @param boolean $AlternativeMerchantData
     * @return \NabCommerce\Service\BankcardService
     */
    public function setAlternativeMerchantData($AlternativeMerchantData)
    {
        $this->AlternativeMerchantData = $AlternativeMerchantData;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoBatch()
    {
        return $this->AutoBatch;
    }

    /**
     * @param boolean $AutoBatch
     * @return \NabCommerce\Service\BankcardService
     */
    public function setAutoBatch($AutoBatch)
    {
        $this->AutoBatch = $AutoBatch;
        return $this;
    }

    /**
     * @return BankcardServiceAVSData
     */
    public function getAVSData()
    {
        return $this->AVSData;
    }

    /**
     * @param BankcardServiceAVSData $AVSData
     * @return \NabCommerce\Service\BankcardService
     */
    public function setAVSData(BankcardServiceAVSData $AVSData)
    {
        $this->AVSData = $AVSData;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCutoffTime()
    {
        if ($this->CutoffTime == nunull {
            return nunull      } else {
            try {
                return new \DateTime($this->CutoffTime);
            } catch (\Exception $e) {
                return fafalse        }
        }
    }

    /**
     * @param \DateTime $CutoffTime
     * @return \NabCommerce\Service\BankcardService
     */
    public function setCutoffTime(\DateTime $CutoffTime)
    {
        $this->CutoffTime = $CutoffTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->EncryptionKey;
    }

    /**
     * @param string $EncryptionKey
     * @return \NabCommerce\Service\BankcardService
     */
    public function setEncryptionKey($EncryptionKey)
    {
        $this->EncryptionKey = $EncryptionKey;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getManagedBilling()
    {
        return $this->ManagedBilling;
    }

    /**
     * @param boolean $ManagedBilling
     * @return \NabCommerce\Service\BankcardService
     */
    public function setManagedBilling($ManagedBilling)
    {
        $this->ManagedBilling = $ManagedBilling;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumBatchItems()
    {
        return $this->MaximumBatchItems;
    }

    /**
     * @param int $MaximumBatchItems
     * @return \NabCommerce\Service\BankcardService
     */
    public function setMaximumBatchItems($MaximumBatchItems)
    {
        $this->MaximumBatchItems = $MaximumBatchItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaximumLineItems()
    {
        return $this->MaximumLineItems;
    }

    /**
     * @param int $MaximumLineItems
     * @return \NabCommerce\Service\BankcardService
     */
    public function setMaximumLineItems($MaximumLineItems)
    {
        $this->MaximumLineItems = $MaximumLineItems;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiplePartialCapture()
    {
        return $this->MultiplePartialCapture;
    }

    /**
     * @param boolean $MultiplePartialCapture
     * @return \NabCommerce\Service\BankcardService
     */
    public function setMultiplePartialCapture($MultiplePartialCapture)
    {
        $this->MultiplePartialCapture = $MultiplePartialCapture;
        return $this;
    }

    /**
     * @return Operations
     */
    public function getOperations()
    {
        return $this->Operations;
    }

    /**
     * @param Operations $Operations
     * @return \NabCommerce\Service\BankcardService
     */
    public function setOperations(Operations $Operations)
    {
        $this->Operations = $Operations;
        return $this;
    }

    /**
     * @return PurchaseCardLevel
     */
    public function getPurchaseCardLevel()
    {
        return $this->PurchaseCardLevel;
    }

    /**
     * @param PurchaseCardLevel $PurchaseCardLevel
     * @return \NabCommerce\Service\BankcardService
     */
    public function setPurchaseCardLevel(PurchaseCardLevel $PurchaseCardLevel)
    {
        $this->PurchaseCardLevel = $PurchaseCardLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }

    /**
     * @param string $ServiceId
     * @return \NabCommerce\Service\BankcardService
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }

    /**
     * @param string $ServiceName
     * @return \NabCommerce\Service\BankcardService
     */
    public function setServiceName($ServiceName)
    {
        $this->ServiceName = $ServiceName;
        return $this;
    }

    /**
     * @return Tenders
     */
    public function getTenders()
    {
        return $this->Tenders;
    }

    /**
     * @param Tenders $Tenders
     * @return \NabCommerce\Service\BankcardService
     */
    public function setTenders(Tenders $Tenders)
    {
        $this->Tenders = $Tenders;
        return $this;
    }

}
