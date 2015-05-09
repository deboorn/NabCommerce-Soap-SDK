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

 

namespace NabCommerce\Service;;

class ElectronicCheckingMerchantData
{

    /**
     * @var string $OrginatorId
     */
    protected $OrginatorId = null;

    /**
     * @var string $ProductId
     */
    protected $ProductId = null;

    /**
     * @var string $SiteId
     */
    protected $SiteId = null;

    /**
     * @var string $ClientNum
     */
    protected $ClientNum = null;

    /**
     * @var string $MerchLocation
     */
    protected $MerchLocation = null;


    public function __construct()
    {

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
     * @return string
     */
    public function getOrginatorId()
    {
        return $this->OrginatorId;
    }

    /**
     * @param string $OrginatorId
     * @return \NabCommerce\Service\ElectronicCheckingMerchantData
     */
    public function setOrginatorId($OrginatorId)
    {
        $this->OrginatorId = $OrginatorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param string $ProductId
     * @return \NabCommerce\Service\ElectronicCheckingMerchantData
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param string $SiteId
     * @return \NabCommerce\Service\ElectronicCheckingMerchantData
     */
    public function setSiteId($SiteId)
    {
        $this->SiteId = $SiteId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientNum()
    {
        return $this->ClientNum;
    }

    /**
     * @param string $ClientNum
     * @return \NabCommerce\Service\ElectronicCheckingMerchantData
     */
    public function setClientNum($ClientNum)
    {
        $this->ClientNum = $ClientNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchLocation()
    {
        return $this->MerchLocation;
    }

    /**
     * @param string $MerchLocation
     * @return \NabCommerce\Service\ElectronicCheckingMerchantData
     */
    public function setMerchLocation($MerchLocation)
    {
        $this->MerchLocation = $MerchLocation;
        return $this;
    }

}
