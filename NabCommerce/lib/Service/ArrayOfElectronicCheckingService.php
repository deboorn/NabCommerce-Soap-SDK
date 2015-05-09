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

 

namespace NabCommerceService;

/**
 * Class ArrayOfElectronicCheckingService
 *
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
class ArrayOfElectronicCheckingService
{

    /**
     * @var ElectronicCheckingService[] $ElectronicCheckingService
     */
    protected $ElectronicCheckingService = null;


    /**
     *
     */
    public function __construct()
    {

    }


    /**
     * @return ArrayOfElectronicCheckingService
     */
    public static function forge()
    {
        return new self();
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
     * @return ElectronicCheckingService[]
     */
    public function getElectronicCheckingService()
    {
        return $this->ElectronicCheckingService;
    }

    /**
     * @param ElectronicCheckingService[] $ElectronicCheckingService
     * @return \NabCommerce\Service\ArrayOfElectronicCheckingService
     */
    public function setElectronicCheckingService(ElectronicCheckingService $ElectronicCheckingService)
    {
        $this->ElectronicCheckingService = $ElectronicCheckingService;
        return $this;
    }

}
