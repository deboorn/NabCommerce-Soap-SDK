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

class ElectronicCheckingTenderData extends TransactionTenderData
{

    /**
     * @var CheckImage $BackCheckImage
     */
    protected $BackCheckImage = null;

    /**
     * @var CheckData $CheckData
     */
    protected $CheckData = null;

    /**
     * @var CheckImage $FrontCheckImage
     */
    protected $FrontCheckImage = null;

    /**
     * @var SocketLocation $SocketLocation
     */
    protected $SocketLocation = null;


    public function __construct()
    {
        parent::__construct();
    }


    public static function forge()
    {
        return new self();
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
     * @return CheckImage
     */
    public function getBackCheckImage()
    {
        return $this->BackCheckImage;
    }

    /**
     * @param CheckImage $BackCheckImage
     * @return \NabCommerce\Transaction\ElectronicCheckingTenderData
     */
    public function setBackCheckImage(CheckImage $BackCheckImage)
    {
        $this->BackCheckImage = $BackCheckImage;
        return $this;
    }

    /**
     * @return CheckData
     */
    public function getCheckData()
    {
        return $this->CheckData;
    }

    /**
     * @param CheckData $CheckData
     * @return \NabCommerce\Transaction\ElectronicCheckingTenderData
     */
    public function setCheckData(CheckData $CheckData)
    {
        $this->CheckData = $CheckData;
        return $this;
    }

    /**
     * @return CheckImage
     */
    public function getFrontCheckImage()
    {
        return $this->FrontCheckImage;
    }

    /**
     * @param CheckImage $FrontCheckImage
     * @return \NabCommerce\Transaction\ElectronicCheckingTenderData
     */
    public function setFrontCheckImage(CheckImage $FrontCheckImage)
    {
        $this->FrontCheckImage = $FrontCheckImage;
        return $this;
    }

    /**
     * @return SocketLocation
     */
    public function getSocketLocation()
    {
        return $this->SocketLocation;
    }

    /**
     * @param SocketLocation $SocketLocation
     * @return \NabCommerce\Transaction\ElectronicCheckingTenderData
     */
    public function setSocketLocation(SocketLocation $SocketLocation)
    {
        $this->SocketLocation = $SocketLocation;
        return $this;
    }

}
