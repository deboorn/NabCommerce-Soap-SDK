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

class NameInfo
{

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $First
     */
    protected $First = null;

    /**
     * @var string $Middle
     */
    protected $Middle = null;

    /**
     * @var string $Last
     */
    protected $Last = null;

    /**
     * @var string $Suffix
     */
    protected $Suffix = null;


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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return \NabCommerce\Transaction\NameInfo
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirst()
    {
        return $this->First;
    }

    /**
     * @param string $First
     * @return \NabCommerce\Transaction\NameInfo
     */
    public function setFirst($First)
    {
        $this->First = $First;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
        return $this->Middle;
    }

    /**
     * @param string $Middle
     * @return \NabCommerce\Transaction\NameInfo
     */
    public function setMiddle($Middle)
    {
        $this->Middle = $Middle;
        return $this;
    }

    /**
     * @return string
     */
    public function getLast()
    {
        return $this->Last;
    }

    /**
     * @param string $Last
     * @return \NabCommerce\Transaction\NameInfo
     */
    public function setLast($Last)
    {
        $this->Last = $Last;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }

    /**
     * @param string $Suffix
     * @return \NabCommerce\Transaction\NameInfo
     */
    public function setSuffix($Suffix)
    {
        $this->Suffix = $Suffix;
        return $this;
    }

}
