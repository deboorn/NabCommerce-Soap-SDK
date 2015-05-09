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

class TaxExempt
{

    /**
     * @var IsTaxExempt $IsTaxExempt
     */
    protected $IsTaxExempt = null;

    /**
     * @var string $TaxExemptNumber
     */
    protected $TaxExemptNumber = null;

    /**
     * @param IsTaxExempt $IsTaxExempt
     */
    public function __construct($IsTaxExempt)
    {
        $this->IsTaxExempt = $IsTaxExempt;
    }

    /**
     * @param IsTaxExempt $IsTaxExempt
     */
    public static function forge($IsTaxExempt)
    {
        return new self($IsTaxExempt);
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
     * @return IsTaxExempt
     */
    public function getIsTaxExempt()
    {
        return $this->IsTaxExempt;
    }

    /**
     * @param IsTaxExempt $IsTaxExempt
     * @return \NabCommerce\Transaction\TaxExempt
     */
    public function setIsTaxExempt(IsTaxExempt $IsTaxExempt)
    {
        $this->IsTaxExempt = $IsTaxExempt;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxExemptNumber()
    {
        return $this->TaxExemptNumber;
    }

    /**
     * @param string $TaxExemptNumber
     * @return \NabCommerce\Transaction\TaxExempt
     */
    public function setTaxExemptNumber($TaxExemptNumber)
    {
        $this->TaxExemptNumber = $TaxExemptNumber;
        return $this;
    }

}
