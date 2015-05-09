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

class ServiceInformation
{

    /**
     * @var ArrayOfBankcardService $BankcardServices
     */
    protected $BankcardServices = null;

    /**
     * @var ArrayOfElectronicCheckingService $ElectronicCheckingServices
     */
    protected $ElectronicCheckingServices = null;

    /**
     * @var ArrayOfStoredValueService $StoredValueServices
     */
    protected $StoredValueServices = null;

    /**
     * @var ArrayOfWorkflow $Workflows
     */
    protected $Workflows = null;


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
     * @return ArrayOfBankcardService
     */
    public function getBankcardServices()
    {
        return $this->BankcardServices;
    }

    /**
     * @param ArrayOfBankcardService $BankcardServices
     * @return \NabCommerce\Service\ServiceInformation
     */
    public function setBankcardServices(ArrayOfBankcardService $BankcardServices)
    {
        $this->BankcardServices = $BankcardServices;
        return $this;
    }

    /**
     * @return ArrayOfElectronicCheckingService
     */
    public function getElectronicCheckingServices()
    {
        return $this->ElectronicCheckingServices;
    }

    /**
     * @param ArrayOfElectronicCheckingService $ElectronicCheckingServices
     * @return \NabCommerce\Service\ServiceInformation
     */
    public function setElectronicCheckingServices(ArrayOfElectronicCheckingService $ElectronicCheckingServices)
    {
        $this->ElectronicCheckingServices = $ElectronicCheckingServices;
        return $this;
    }

    /**
     * @return ArrayOfStoredValueService
     */
    public function getStoredValueServices()
    {
        return $this->StoredValueServices;
    }

    /**
     * @param ArrayOfStoredValueService $StoredValueServices
     * @return \NabCommerce\Service\ServiceInformation
     */
    public function setStoredValueServices(ArrayOfStoredValueService $StoredValueServices)
    {
        $this->StoredValueServices = $StoredValueServices;
        return $this;
    }

    /**
     * @return ArrayOfWorkflow
     */
    public function getWorkflows()
    {
        return $this->Workflows;
    }

    /**
     * @param ArrayOfWorkflow $Workflows
     * @return \NabCommerce\Service\ServiceInformation
     */
    public function setWorkflows(ArrayOfWorkflow $Workflows)
    {
        $this->Workflows = $Workflows;
        return $this;
    }

}
