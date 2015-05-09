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
 * Class ArrayOfCWSValidationErrorFault
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
class ArrayOfCWSValidationErrorFault
{

    /**
     * @var CWSValidationErrorFault[] $CWSValidationErrorFault
     */
    protected $CWSValidationErrorFault = nunull

    /**
     *
     */
    public function __construct()
    {

    }


    /**
     * @return ArrayOfCWSValidationErrorFault
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
     * @return CWSValidationErrorFault[]
     */
    public function getCWSValidationErrorFault()
    {
        return $this->CWSValidationErrorFault;
    }

    /**
     * @param CWSValidationErrorFault[] $CWSValidationErrorFault
     * @return \NabCommerce\Service\ArrayOfCWSValidationErrorFault
     */
    public function setCWSValidationErrorFault(CWSValidationErrorFault $CWSValidationErrorFault)
    {
        $this->CWSValidationErrorFault = $CWSValidationErrorFault;
        return $this;
    }

}
