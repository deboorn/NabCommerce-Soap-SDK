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

class BankcardInterchangeData
{

    /**
     * @var BillPayment $BillPayment
     */
    protected $BillPayment = null;

    /**
     * @var RequestCommercialCard $RequestCommercialCard
     */
    protected $RequestCommercialCard = null;

    /**
     * @var ExistingDebt $ExistingDebt
     */
    protected $ExistingDebt = null;

    /**
     * @var RequestACI $RequestACI
     */
    protected $RequestACI = null;

    /**
     * @var int $TotalNumberOfInstallments
     */
    protected $TotalNumberOfInstallments = null;

    /**
     * @var int $CurrentInstallmentNumber
     */
    protected $CurrentInstallmentNumber = null;

    /**
     * @var RequestAdvice $RequestAdvice
     */
    protected $RequestAdvice = null;

    /**
     * @param BillPayment $BillPayment
     * @param RequestCommercialCard $RequestCommercialCard
     * @param ExistingDebt $ExistingDebt
     * @param RequestACI $RequestACI
     * @param int $TotalNumberOfInstallments
     * @param int $CurrentInstallmentNumber
     * @param RequestAdvice $RequestAdvice
     */
    public function __construct($BillPayment, $RequestCommercialCard, $ExistingDebt, $RequestACI, $TotalNumberOfInstallments, $CurrentInstallmentNumber, $RequestAdvice)
    {
        $this->BillPayment = $BillPayment;
        $this->RequestCommercialCard = $RequestCommercialCard;
        $this->ExistingDebt = $ExistingDebt;
        $this->RequestACI = $RequestACI;
        $this->TotalNumberOfInstallments = $TotalNumberOfInstallments;
        $this->CurrentInstallmentNumber = $CurrentInstallmentNumber;
        $this->RequestAdvice = $RequestAdvice;
    }

    /**
     * @param BillPayment $BillPayment
     * @param RequestCommercialCard $RequestCommercialCard
     * @param ExistingDebt $ExistingDebt
     * @param RequestACI $RequestACI
     * @param int $TotalNumberOfInstallments
     * @param int $CurrentInstallmentNumber
     * @param RequestAdvice $RequestAdvice
     */
    public static function forge($BillPayment, $RequestCommercialCard, $ExistingDebt, $RequestACI, $TotalNumberOfInstallments, $CurrentInstallmentNumber, $RequestAdvice)
    {
        return new self($BillPayment, $RequestCommercialCard, $ExistingDebt, $RequestACI, $TotalNumberOfInstallments, $CurrentInstallmentNumber, $RequestAdvice);
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
     * @return BillPayment
     */
    public function getBillPayment()
    {
        return $this->BillPayment;
    }

    /**
     * @param BillPayment $BillPayment
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setBillPayment(BillPayment $BillPayment)
    {
        $this->BillPayment = $BillPayment;
        return $this;
    }

    /**
     * @return RequestCommercialCard
     */
    public function getRequestCommercialCard()
    {
        return $this->RequestCommercialCard;
    }

    /**
     * @param RequestCommercialCard $RequestCommercialCard
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setRequestCommercialCard(RequestCommercialCard $RequestCommercialCard)
    {
        $this->RequestCommercialCard = $RequestCommercialCard;
        return $this;
    }

    /**
     * @return ExistingDebt
     */
    public function getExistingDebt()
    {
        return $this->ExistingDebt;
    }

    /**
     * @param ExistingDebt $ExistingDebt
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setExistingDebt(ExistingDebt $ExistingDebt)
    {
        $this->ExistingDebt = $ExistingDebt;
        return $this;
    }

    /**
     * @return RequestACI
     */
    public function getRequestACI()
    {
        return $this->RequestACI;
    }

    /**
     * @param RequestACI $RequestACI
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setRequestACI(RequestACI $RequestACI)
    {
        $this->RequestACI = $RequestACI;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfInstallments()
    {
        return $this->TotalNumberOfInstallments;
    }

    /**
     * @param int $TotalNumberOfInstallments
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setTotalNumberOfInstallments($TotalNumberOfInstallments)
    {
        $this->TotalNumberOfInstallments = $TotalNumberOfInstallments;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentInstallmentNumber()
    {
        return $this->CurrentInstallmentNumber;
    }

    /**
     * @param int $CurrentInstallmentNumber
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setCurrentInstallmentNumber($CurrentInstallmentNumber)
    {
        $this->CurrentInstallmentNumber = $CurrentInstallmentNumber;
        return $this;
    }

    /**
     * @return RequestAdvice
     */
    public function getRequestAdvice()
    {
        return $this->RequestAdvice;
    }

    /**
     * @param RequestAdvice $RequestAdvice
     * @return \NabCommerce\Transaction\BankcardInterchangeData
     */
    public function setRequestAdvice(RequestAdvice $RequestAdvice)
    {
        $this->RequestAdvice = $RequestAdvice;
        return $this;
    }

}
