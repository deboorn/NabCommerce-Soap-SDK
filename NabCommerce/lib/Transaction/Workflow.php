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

class Workflow
{

    /**
     * @var string $WorkflowId
     */
    protected $WorkflowId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ServiceId
     */
    protected $ServiceId = null;

    /**
     * @var ArrayOfWorkflowService $WorkflowServices
     */
    protected $WorkflowServices = null;


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
    public function getWorkflowId()
    {
        return $this->WorkflowId;
    }

    /**
     * @param string $WorkflowId
     * @return \NabCommerce\Service\Workflow
     */
    public function setWorkflowId($WorkflowId)
    {
        $this->WorkflowId = $WorkflowId;
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
     * @return \NabCommerce\Service\Workflow
     */
    public function setName($Name)
    {
        $this->Name = $Name;
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
     * @return \NabCommerce\Service\Workflow
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;
        return $this;
    }

    /**
     * @return ArrayOfWorkflowService
     */
    public function getWorkflowServices()
    {
        return $this->WorkflowServices;
    }

    /**
     * @param ArrayOfWorkflowService $WorkflowServices
     * @return \NabCommerce\Service\Workflow
     */
    public function setWorkflowServices(ArrayOfWorkflowService $WorkflowServices)
    {
        $this->WorkflowServices = $WorkflowServices;
        return $this;
    }

}
