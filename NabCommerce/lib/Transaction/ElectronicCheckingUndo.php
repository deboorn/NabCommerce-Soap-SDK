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

class ElectronicCheckingUndo extends Undo
{

    /**
     * @var UndoType $UndoType
     */
    protected $UndoType = null;

    /**
     * @param string $sessionToken
     * @param Undo $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param UndoType $UndoType
     */
    public function __construct($sessionToken, $differenceData, $applicationProfileId, $workflowId, $UndoType)
    {
        parent::__construct($sessionToken, $differenceData, $applicationProfileId, $workflowId);
        $this->UndoType = $UndoType;
    }

    /**
     * @param string $sessionToken
     * @param Undo $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param UndoType $UndoType
     */
    public static function forge($sessionToken, $differenceData, $applicationProfileId, $workflowId, $UndoType)
    {
        return new self($sessionToken, $differenceData, $applicationProfileId, $workflowId, $UndoType);
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
     * @return UndoType
     */
    public function getUndoType()
    {
        return $this->UndoType;
    }

    /**
     * @param UndoType $UndoType
     * @return \NabCommerce\Transaction\ElectronicCheckingUndo
     */
    public function setUndoType(UndoType $UndoType)
    {
        $this->UndoType = $UndoType;
        return $this;
    }

}
