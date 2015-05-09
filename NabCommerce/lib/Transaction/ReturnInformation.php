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

class ReturnInformation
{

    /**
     * @var string $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var \DateTime $ReturnDate
     */
    protected $ReturnDate = null;

    /**
     * @var string $ReturnReason
     */
    protected $ReturnReason = null;

    /**
     * @param \DateTime $ReturnDate
     */
    public function __construct(\DateTime $ReturnDate)
    {
        $this->ReturnDate = $ReturnDate->format(\DateTime::ATOM);
    }

    /**
     * @param \DateTime $ReturnDate
     */
    public static function forge(\DateTime $ReturnDate)
    {
        return new self($ReturnDate);
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
    public function getReturnCode()
    {
        return $this->ReturnCode;
    }

    /**
     * @param string $ReturnCode
     * @return \NabCommerce\Transaction\ReturnInformation
     */
    public function setReturnCode($ReturnCode)
    {
        $this->ReturnCode = $ReturnCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReturnDate()
    {
        if ($this->ReturnDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ReturnDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ReturnDate
     * @return \NabCommerce\Transaction\ReturnInformation
     */
    public function setReturnDate(\DateTime $ReturnDate)
    {
        $this->ReturnDate = $ReturnDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnReason()
    {
        return $this->ReturnReason;
    }

    /**
     * @param string $ReturnReason
     * @return \NabCommerce\Transaction\ReturnInformation
     */
    public function setReturnReason($ReturnReason)
    {
        $this->ReturnReason = $ReturnReason;
        return $this;
    }

}
