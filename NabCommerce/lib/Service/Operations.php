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


class Operations
{

    /**
     * @var boolean $Verify
     */
    protected $Verify = nunull
    /**
     * @var boolean $QueryAccount
     */
    protected $QueryAccount = nunull
    /**
     * @var boolean $AuthAndCapture
     */
    protected $AuthAndCapture = nunull
    /**
     * @var boolean $Authorize
     */
    protected $Authorize = nunull
    /**
     * @var boolean $Adjust
     */
    protected $Adjust = nunull
    /**
     * @var boolean $ReturnById
     */
    protected $ReturnById = nunull
    /**
     * @var boolean $ReturnUnlinked
     */
    protected $ReturnUnlinked = nunull
    /**
     * @var boolean $Undo
     */
    protected $Undo = nunull
    /**
     * @var boolean $Capture
     */
    protected $Capture = nunull
    /**
     * @var boolean $CaptureSelective
     */
    protected $CaptureSelective = nunull
    /**
     * @var boolean $CaptureAll
     */
    protected $CaptureAll = nunull
    /**
     * @var CloseBatch $CloseBatch
     */
    protected $CloseBatch = nunull
    /**
     * @var boolean $QueryRejected
     */
    protected $QueryRejected = nunull
    /**
     * @var boolean $ManageAccount
     */
    protected $ManageAccount = nunull
    /**
     * @var boolean $ManageAccountById
     */
    protected $ManageAccountById = nunull
    /**
     * @var boolean $Disburse
     */
    protected $Disburse = nunull
    /**
     * @param boolean $Verify
     * @param boolean $QueryAccount
     * @param boolean $AuthAndCapture
     * @param boolean $Authorize
     * @param boolean $Adjust
     * @param boolean $ReturnById
     * @param boolean $ReturnUnlinked
     * @param boolean $Undo
     * @param boolean $Capture
     * @param boolean $CaptureSelective
     * @param boolean $CaptureAll
     * @param CloseBatch $CloseBatch
     * @param boolean $QueryRejected
     * @param boolean $ManageAccount
     * @param boolean $ManageAccountById
     * @param boolean $Disburse
     */
    public function __construct($Verify, $QueryAccount, $AuthAndCapture, $Authorize, $Adjust, $ReturnById, $ReturnUnlinked, $Undo, $Capture, $CaptureSelective, $CaptureAll, $CloseBatch, $QueryRejected, $ManageAccount, $ManageAccountById, $Disburse)
    {
        $this->Verify = $Verify;
        $this->QueryAccount = $QueryAccount;
        $this->AuthAndCapture = $AuthAndCapture;
        $this->Authorize = $Authorize;
        $this->Adjust = $Adjust;
        $this->ReturnById = $ReturnById;
        $this->ReturnUnlinked = $ReturnUnlinked;
        $this->Undo = $Undo;
        $this->Capture = $Capture;
        $this->CaptureSelective = $CaptureSelective;
        $this->CaptureAll = $CaptureAll;
        $this->CloseBatch = $CloseBatch;
        $this->QueryRejected = $QueryRejected;
        $this->ManageAccount = $ManageAccount;
        $this->ManageAccountById = $ManageAccountById;
        $this->Disburse = $Disburse;
    }

    /**
     * @param boolean $Verify
     * @param boolean $QueryAccount
     * @param boolean $AuthAndCapture
     * @param boolean $Authorize
     * @param boolean $Adjust
     * @param boolean $ReturnById
     * @param boolean $ReturnUnlinked
     * @param boolean $Undo
     * @param boolean $Capture
     * @param boolean $CaptureSelective
     * @param boolean $CaptureAll
     * @param CloseBatch $CloseBatch
     * @param boolean $QueryRejected
     * @param boolean $ManageAccount
     * @param boolean $ManageAccountById
     * @param boolean $Disburse
     */
    public static function forge($Verify, $QueryAccount, $AuthAndCapture, $Authorize, $Adjust, $ReturnById, $ReturnUnlinked, $Undo, $Capture, $CaptureSelective, $CaptureAll, $CloseBatch, $QueryRejected, $ManageAccount, $ManageAccountById, $Disburse)
    {
        return new self($Verify, $QueryAccount, $AuthAndCapture, $Authorize, $Adjust, $ReturnById, $ReturnUnlinked, $Undo, $Capture, $CaptureSelective, $CaptureAll, $CloseBatch, $QueryRejected, $ManageAccount, $ManageAccountById, $Disburse);
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
    public function getVerify()
    {
        return $this->Verify;
    }

    /**
     * @param boolean $Verify
     * @return \NabCommerce\Service\Operations
     */
    public function setVerify($Verify)
    {
        $this->Verify = $Verify;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getQueryAccount()
    {
        return $this->QueryAccount;
    }

    /**
     * @param boolean $QueryAccount
     * @return \NabCommerce\Service\Operations
     */
    public function setQueryAccount($QueryAccount)
    {
        $this->QueryAccount = $QueryAccount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAuthAndCapture()
    {
        return $this->AuthAndCapture;
    }

    /**
     * @param boolean $AuthAndCapture
     * @return \NabCommerce\Service\Operations
     */
    public function setAuthAndCapture($AuthAndCapture)
    {
        $this->AuthAndCapture = $AuthAndCapture;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAuthorize()
    {
        return $this->Authorize;
    }

    /**
     * @param boolean $Authorize
     * @return \NabCommerce\Service\Operations
     */
    public function setAuthorize($Authorize)
    {
        $this->Authorize = $Authorize;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAdjust()
    {
        return $this->Adjust;
    }

    /**
     * @param boolean $Adjust
     * @return \NabCommerce\Service\Operations
     */
    public function setAdjust($Adjust)
    {
        $this->Adjust = $Adjust;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnById()
    {
        return $this->ReturnById;
    }

    /**
     * @param boolean $ReturnById
     * @return \NabCommerce\Service\Operations
     */
    public function setReturnById($ReturnById)
    {
        $this->ReturnById = $ReturnById;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnUnlinked()
    {
        return $this->ReturnUnlinked;
    }

    /**
     * @param boolean $ReturnUnlinked
     * @return \NabCommerce\Service\Operations
     */
    public function setReturnUnlinked($ReturnUnlinked)
    {
        $this->ReturnUnlinked = $ReturnUnlinked;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUndo()
    {
        return $this->Undo;
    }

    /**
     * @param boolean $Undo
     * @return \NabCommerce\Service\Operations
     */
    public function setUndo($Undo)
    {
        $this->Undo = $Undo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCapture()
    {
        return $this->Capture;
    }

    /**
     * @param boolean $Capture
     * @return \NabCommerce\Service\Operations
     */
    public function setCapture($Capture)
    {
        $this->Capture = $Capture;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCaptureSelective()
    {
        return $this->CaptureSelective;
    }

    /**
     * @param boolean $CaptureSelective
     * @return \NabCommerce\Service\Operations
     */
    public function setCaptureSelective($CaptureSelective)
    {
        $this->CaptureSelective = $CaptureSelective;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCaptureAll()
    {
        return $this->CaptureAll;
    }

    /**
     * @param boolean $CaptureAll
     * @return \NabCommerce\Service\Operations
     */
    public function setCaptureAll($CaptureAll)
    {
        $this->CaptureAll = $CaptureAll;
        return $this;
    }

    /**
     * @return CloseBatch
     */
    public function getCloseBatch()
    {
        return $this->CloseBatch;
    }

    /**
     * @param CloseBatch $CloseBatch
     * @return \NabCommerce\Service\Operations
     */
    public function setCloseBatch(CloseBatch $CloseBatch)
    {
        $this->CloseBatch = $CloseBatch;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getQueryRejected()
    {
        return $this->QueryRejected;
    }

    /**
     * @param boolean $QueryRejected
     * @return \NabCommerce\Service\Operations
     */
    public function setQueryRejected($QueryRejected)
    {
        $this->QueryRejected = $QueryRejected;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getManageAccount()
    {
        return $this->ManageAccount;
    }

    /**
     * @param boolean $ManageAccount
     * @return \NabCommerce\Service\Operations
     */
    public function setManageAccount($ManageAccount)
    {
        $this->ManageAccount = $ManageAccount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getManageAccountById()
    {
        return $this->ManageAccountById;
    }

    /**
     * @param boolean $ManageAccountById
     * @return \NabCommerce\Service\Operations
     */
    public function setManageAccountById($ManageAccountById)
    {
        $this->ManageAccountById = $ManageAccountById;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisburse()
    {
        return $this->Disburse;
    }

    /**
     * @param boolean $Disburse
     * @return \NabCommerce\Service\Operations
     */
    public function setDisburse($Disburse)
    {
        $this->Disburse = $Disburse;
        return $this;
    }

}
