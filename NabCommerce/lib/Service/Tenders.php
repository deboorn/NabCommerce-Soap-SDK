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


class Tenders
{

    /**
     * @var boolean $Credit
     */
    protected $Credit = nunull
    /**
     * @var boolean $PINDebit
     */
    protected $PINDebit = nunull
    /**
     * @var boolean $PINlessDebit
     */
    protected $PINlessDebit = nunull
    /**
     * @var PINDebitReturnSupportType $PINDebitReturnSupportType
     */
    protected $PINDebitReturnSupportType = nunull
    /**
     * @var boolean $PINDebitUndoTenderDataRequired
     */
    protected $PINDebitUndoTenderDataRequired = nunull
    /**
     * @var CreditAuthorizeSupportType $CreditAuthorizeSupport
     */
    protected $CreditAuthorizeSupport = nunull
    /**
     * @var QueryRejectedSupportType $QueryRejectedSupport
     */
    protected $QueryRejectedSupport = nunull
    /**
     * @var PinDebitUndoSupportType $PinDebitUndoSupport
     */
    protected $PinDebitUndoSupport = nunull
    /**
     * @var BatchAssignmentSupport $BatchAssignmentSupport
     */
    protected $BatchAssignmentSupport = nunull
    /**
     * @var CreditReturnSupportType $CreditReturnSupportType
     */
    protected $CreditReturnSupportType = nunull
    /**
     * @var TrackDataSupportType $TrackDataSupport
     */
    protected $TrackDataSupport = nunull
    /**
     * @var boolean $CredentialsRequired
     */
    protected $CredentialsRequired = nunull
    /**
     * @var CreditReversalSupportType $CreditReversalSupportType
     */
    protected $CreditReversalSupportType = nunull
    /**
     * @var PartialApprovalSupportType $PartialApprovalSupportType
     */
    protected $PartialApprovalSupportType = nunull
    /**
     * @param boolean $Credit
     * @param boolean $PINDebit
     * @param boolean $PINlessDebit
     * @param PINDebitReturnSupportType $PINDebitReturnSupportType
     * @param boolean $PINDebitUndoTenderDataRequired
     * @param CreditAuthorizeSupportType $CreditAuthorizeSupport
     * @param QueryRejectedSupportType $QueryRejectedSupport
     * @param PinDebitUndoSupportType $PinDebitUndoSupport
     * @param BatchAssignmentSupport $BatchAssignmentSupport
     * @param CreditReturnSupportType $CreditReturnSupportType
     * @param TrackDataSupportType $TrackDataSupport
     * @param boolean $CredentialsRequired
     * @param CreditReversalSupportType $CreditReversalSupportType
     * @param PartialApprovalSupportType $PartialApprovalSupportType
     */
    public function __construct($Credit, $PINDebit, $PINlessDebit, $PINDebitReturnSupportType, $PINDebitUndoTenderDataRequired, $CreditAuthorizeSupport, $QueryRejectedSupport, $PinDebitUndoSupport, $BatchAssignmentSupport, $CreditReturnSupportType, $TrackDataSupport, $CredentialsRequired, $CreditReversalSupportType, $PartialApprovalSupportType)
    {
        $this->Credit = $Credit;
        $this->PINDebit = $PINDebit;
        $this->PINlessDebit = $PINlessDebit;
        $this->PINDebitReturnSupportType = $PINDebitReturnSupportType;
        $this->PINDebitUndoTenderDataRequired = $PINDebitUndoTenderDataRequired;
        $this->CreditAuthorizeSupport = $CreditAuthorizeSupport;
        $this->QueryRejectedSupport = $QueryRejectedSupport;
        $this->PinDebitUndoSupport = $PinDebitUndoSupport;
        $this->BatchAssignmentSupport = $BatchAssignmentSupport;
        $this->CreditReturnSupportType = $CreditReturnSupportType;
        $this->TrackDataSupport = $TrackDataSupport;
        $this->CredentialsRequired = $CredentialsRequired;
        $this->CreditReversalSupportType = $CreditReversalSupportType;
        $this->PartialApprovalSupportType = $PartialApprovalSupportType;
    }

    /**
     * @param boolean $Credit
     * @param boolean $PINDebit
     * @param boolean $PINlessDebit
     * @param PINDebitReturnSupportType $PINDebitReturnSupportType
     * @param boolean $PINDebitUndoTenderDataRequired
     * @param CreditAuthorizeSupportType $CreditAuthorizeSupport
     * @param QueryRejectedSupportType $QueryRejectedSupport
     * @param PinDebitUndoSupportType $PinDebitUndoSupport
     * @param BatchAssignmentSupport $BatchAssignmentSupport
     * @param CreditReturnSupportType $CreditReturnSupportType
     * @param TrackDataSupportType $TrackDataSupport
     * @param boolean $CredentialsRequired
     * @param CreditReversalSupportType $CreditReversalSupportType
     * @param PartialApprovalSupportType $PartialApprovalSupportType
     */
    public static function forge($Credit, $PINDebit, $PINlessDebit, $PINDebitReturnSupportType, $PINDebitUndoTenderDataRequired, $CreditAuthorizeSupport, $QueryRejectedSupport, $PinDebitUndoSupport, $BatchAssignmentSupport, $CreditReturnSupportType, $TrackDataSupport, $CredentialsRequired, $CreditReversalSupportType, $PartialApprovalSupportType)
    {
        return new self($Credit, $PINDebit, $PINlessDebit, $PINDebitReturnSupportType, $PINDebitUndoTenderDataRequired, $CreditAuthorizeSupport, $QueryRejectedSupport, $PinDebitUndoSupport, $BatchAssignmentSupport, $CreditReturnSupportType, $TrackDataSupport, $CredentialsRequired, $CreditReversalSupportType, $PartialApprovalSupportType);
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
    public function getCredit()
    {
        return $this->Credit;
    }

    /**
     * @param boolean $Credit
     * @return \NabCommerce\Service\Tenders
     */
    public function setCredit($Credit)
    {
        $this->Credit = $Credit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPINDebit()
    {
        return $this->PINDebit;
    }

    /**
     * @param boolean $PINDebit
     * @return \NabCommerce\Service\Tenders
     */
    public function setPINDebit($PINDebit)
    {
        $this->PINDebit = $PINDebit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPINlessDebit()
    {
        return $this->PINlessDebit;
    }

    /**
     * @param boolean $PINlessDebit
     * @return \NabCommerce\Service\Tenders
     */
    public function setPINlessDebit($PINlessDebit)
    {
        $this->PINlessDebit = $PINlessDebit;
        return $this;
    }

    /**
     * @return PINDebitReturnSupportType
     */
    public function getPINDebitReturnSupportType()
    {
        return $this->PINDebitReturnSupportType;
    }

    /**
     * @param PINDebitReturnSupportType $PINDebitReturnSupportType
     * @return \NabCommerce\Service\Tenders
     */
    public function setPINDebitReturnSupportType(PINDebitReturnSupportType $PINDebitReturnSupportType)
    {
        $this->PINDebitReturnSupportType = $PINDebitReturnSupportType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPINDebitUndoTenderDataRequired()
    {
        return $this->PINDebitUndoTenderDataRequired;
    }

    /**
     * @param boolean $PINDebitUndoTenderDataRequired
     * @return \NabCommerce\Service\Tenders
     */
    public function setPINDebitUndoTenderDataRequired($PINDebitUndoTenderDataRequired)
    {
        $this->PINDebitUndoTenderDataRequired = $PINDebitUndoTenderDataRequired;
        return $this;
    }

    /**
     * @return CreditAuthorizeSupportType
     */
    public function getCreditAuthorizeSupport()
    {
        return $this->CreditAuthorizeSupport;
    }

    /**
     * @param CreditAuthorizeSupportType $CreditAuthorizeSupport
     * @return \NabCommerce\Service\Tenders
     */
    public function setCreditAuthorizeSupport(CreditAuthorizeSupportType $CreditAuthorizeSupport)
    {
        $this->CreditAuthorizeSupport = $CreditAuthorizeSupport;
        return $this;
    }

    /**
     * @return QueryRejectedSupportType
     */
    public function getQueryRejectedSupport()
    {
        return $this->QueryRejectedSupport;
    }

    /**
     * @param QueryRejectedSupportType $QueryRejectedSupport
     * @return \NabCommerce\Service\Tenders
     */
    public function setQueryRejectedSupport(QueryRejectedSupportType $QueryRejectedSupport)
    {
        $this->QueryRejectedSupport = $QueryRejectedSupport;
        return $this;
    }

    /**
     * @return PinDebitUndoSupportType
     */
    public function getPinDebitUndoSupport()
    {
        return $this->PinDebitUndoSupport;
    }

    /**
     * @param PinDebitUndoSupportType $PinDebitUndoSupport
     * @return \NabCommerce\Service\Tenders
     */
    public function setPinDebitUndoSupport(PinDebitUndoSupportType $PinDebitUndoSupport)
    {
        $this->PinDebitUndoSupport = $PinDebitUndoSupport;
        return $this;
    }

    /**
     * @return BatchAssignmentSupport
     */
    public function getBatchAssignmentSupport()
    {
        return $this->BatchAssignmentSupport;
    }

    /**
     * @param BatchAssignmentSupport $BatchAssignmentSupport
     * @return \NabCommerce\Service\Tenders
     */
    public function setBatchAssignmentSupport(BatchAssignmentSupport $BatchAssignmentSupport)
    {
        $this->BatchAssignmentSupport = $BatchAssignmentSupport;
        return $this;
    }

    /**
     * @return CreditReturnSupportType
     */
    public function getCreditReturnSupportType()
    {
        return $this->CreditReturnSupportType;
    }

    /**
     * @param CreditReturnSupportType $CreditReturnSupportType
     * @return \NabCommerce\Service\Tenders
     */
    public function setCreditReturnSupportType(CreditReturnSupportType $CreditReturnSupportType)
    {
        $this->CreditReturnSupportType = $CreditReturnSupportType;
        return $this;
    }

    /**
     * @return TrackDataSupportType
     */
    public function getTrackDataSupport()
    {
        return $this->TrackDataSupport;
    }

    /**
     * @param TrackDataSupportType $TrackDataSupport
     * @return \NabCommerce\Service\Tenders
     */
    public function setTrackDataSupport(TrackDataSupportType $TrackDataSupport)
    {
        $this->TrackDataSupport = $TrackDataSupport;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCredentialsRequired()
    {
        return $this->CredentialsRequired;
    }

    /**
     * @param boolean $CredentialsRequired
     * @return \NabCommerce\Service\Tenders
     */
    public function setCredentialsRequired($CredentialsRequired)
    {
        $this->CredentialsRequired = $CredentialsRequired;
        return $this;
    }

    /**
     * @return CreditReversalSupportType
     */
    public function getCreditReversalSupportType()
    {
        return $this->CreditReversalSupportType;
    }

    /**
     * @param CreditReversalSupportType $CreditReversalSupportType
     * @return \NabCommerce\Service\Tenders
     */
    public function setCreditReversalSupportType(CreditReversalSupportType $CreditReversalSupportType)
    {
        $this->CreditReversalSupportType = $CreditReversalSupportType;
        return $this;
    }

    /**
     * @return PartialApprovalSupportType
     */
    public function getPartialApprovalSupportType()
    {
        return $this->PartialApprovalSupportType;
    }

    /**
     * @param PartialApprovalSupportType $PartialApprovalSupportType
     * @return \NabCommerce\Service\Tenders
     */
    public function setPartialApprovalSupportType(PartialApprovalSupportType $PartialApprovalSupportType)
    {
        $this->PartialApprovalSupportType = $PartialApprovalSupportType;
        return $this;
    }

}
