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
    

/**
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
class BaseFault
{

    /**
     * @var int $ErrorID
     */
    protected $ErrorID = null;

    /**
     * @var string $HelpURL
     */
    protected $HelpURL = null;

    /**
     * @var string $Operation
     */
    protected $Operation = null;

    /**
     * @var string $ProblemType
     */
    protected $ProblemType = null;

    /**
     * @param int $ErrorID
     */
    public function __construct($ErrorID)
    {
        $this->ErrorID = $ErrorID;
    }

    /**
     * @param int $ErrorID
     */
    public static function forge($ErrorID)
    {
        return new self($ErrorID);
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
     * @return int
     */
    public function getErrorID()
    {
        return $this->ErrorID;
    }

    /**
     * @param int $ErrorID
     * @return \NabCommerce\Service\BaseFault
     */
    public function setErrorID($ErrorID)
    {
        $this->ErrorID = $ErrorID;
        return $this;
    }

    /**
     * @return string
     */
    public function getHelpURL()
    {
        return $this->HelpURL;
    }

    /**
     * @param string $HelpURL
     * @return \NabCommerce\Service\BaseFault
     */
    public function setHelpURL($HelpURL)
    {
        $this->HelpURL = $HelpURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * @param string $Operation
     * @return \NabCommerce\Service\BaseFault
     */
    public function setOperation($Operation)
    {
        $this->Operation = $Operation;
        return $this;
    }

    /**
     * @return string
     */
    public function getProblemType()
    {
        return $this->ProblemType;
    }

    /**
     * @param string $ProblemType
     * @return \NabCommerce\Service\BaseFault
     */
    public function setProblemType($ProblemType)
    {
        $this->ProblemType = $ProblemType;
        return $this;
    }

}
