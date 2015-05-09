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

/**
 * Class CardData
 * @package NabCommerce\Transaction
 */
class CardData
{

    /**
     * @var
     */
    protected $CardholderName;
    /**
     * @var
     */
    protected $CardType;
    /**
     * @var
     */
    protected $PAN;

    /**
     * @return mixed
     */
    public function getCardholderName()
    {
        return $this->CardholderName;
    }

    /**
     * @param mixed $CardholderName
     */
    public function setCardholderName($CardholderName)
    {
        $this->CardholderName = $CardholderName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * @param mixed $CardType
     */
    public function setCardType($CardType)
    {
        $this->CardType = $CardType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPAN()
    {
        return $this->PAN;
    }

    /**
     * @param mixed $PAN
     */
    public function setPAN($PAN)
    {
        $this->PAN = $PAN;
        return $this;
    }

    /**
     * @var string $TrackData
     */
    protected $TrackData = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $Expire
     */
    protected $Expire = null;

    /**
     * @var string $Track1Data
     */
    protected $Track1Data = null;

    /**
     * @var string $Track2Data
     */
    protected $Track2Data = null;

    /**
     * @param string $TrackData
     * @param string $AccountNumber
     */
    public function __construct($TrackData, $AccountNumber)
    {
        $this->TrackData = $TrackData;
        $this->AccountNumber = $AccountNumber;
    }

    /**
     * @param string $TrackData
     * @param string $AccountNumber
     */
    public static function forge($TrackData, $AccountNumber)
    {
        return new self($TrackData, $AccountNumber);
    }

    /**
     * @param array $properties
     * @return $this
     */
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
    public function getTrackData()
    {
        return $this->TrackData;
    }

    /**
     * @param string $TrackData
     * @return \NabCommerce\Transaction\CardData
     */
    public function setTrackData($TrackData)
    {
        $this->TrackData = $TrackData;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \NabCommerce\Transaction\CardData
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpire()
    {
        return $this->Expire;
    }

    /**
     * @param string $Expire
     * @return \NabCommerce\Transaction\CardData
     */
    public function setExpire($Expire)
    {
        $this->Expire = $Expire;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrack1Data()
    {
        return $this->Track1Data;
    }

    /**
     * @param string $Track1Data
     * @return \NabCommerce\Transaction\CardData
     */
    public function setTrack1Data($Track1Data)
    {
        $this->Track1Data = $Track1Data;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrack2Data()
    {
        return $this->Track2Data;
    }

    /**
     * @param string $Track2Data
     * @return \NabCommerce\Transaction\CardData
     */
    public function setTrack2Data($Track2Data)
    {
        $this->Track2Data = $Track2Data;
        return $this;
    }

}
