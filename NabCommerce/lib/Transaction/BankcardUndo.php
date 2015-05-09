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

class BankcardUndo extends Undo
{

    /**
     * @var PINDebitUndoReason $PINDebitReason
     */
    protected $PINDebitReason = null;

    /**
     * @var BankcardTenderData $TenderData
     */
    protected $TenderData = null;

    /**
     * @var boolean $ForceVoid
     */
    protected $ForceVoid = null;

    /**
     * @param string $sessionToken
     * @param Undo $differenceData
     * @param string $applicationProfileId
     * @param string $workflowId
     * @param PINDebitUndoReason $PINDebitReason
     * @param boolean $ForceVoid
     */
    public function __construct($sessionToken, $differenceData, $applicationProfileId, $workflowId, $PINDebitReason, $ForceVoid)
    {
        parent::__construct($sessionToken, $differenceData, $applicationProfileId, $workflowId);
        $this->PINDebitReason = $PINDebitReason;
        $this->ForceVoid = $ForceVoid;
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
     * @return PINDebitUndoReason
     */
    public function getPINDebitReason()
    {
        return $this->PINDebitReason;
    }

    /**
     * @param PINDebitUndoReason $PINDebitReason
     * @return \NabCommerce\Transaction\BankcardUndo
     */
    public function setPINDebitReason(PINDebitUndoReason $PINDebitReason)
    {
        $this->PINDebitReason = $PINDebitReason;
        return $this;
    }

    /**
     * @return BankcardTenderData
     */
    public function getTenderData()
    {
        return $this->TenderData;
    }

    /**
     * @param BankcardTenderData $TenderData
     * @return \NabCommerce\Transaction\BankcardUndo
     */
    public function setTenderData(BankcardTenderData $TenderData)
    {
        $this->TenderData = $TenderData;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getForceVoid()
    {
        return $this->ForceVoid;
    }

    /**
     * @param boolean $ForceVoid
     * @return \NabCommerce\Transaction\BankcardUndo
     */
    public function setForceVoid($ForceVoid)
    {
        $this->ForceVoid = $ForceVoid;
        return $this;
    }

}
