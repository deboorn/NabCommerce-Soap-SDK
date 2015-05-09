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

class BankcardTransactionPro extends BankcardTransaction
{

    /**
     * @var BankcardInterchangeData $InterchangeData
     */
    protected $InterchangeData = null;


    public function __construct()
    {
        parent::__construct();
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
     * @return BankcardInterchangeData
     */
    public function getInterchangeData()
    {
        return $this->InterchangeData;
    }

    /**
     * @param BankcardInterchangeData $InterchangeData
     * @return \NabCommerce\Transaction\BankcardTransactionPro
     */
    public function setInterchangeData(BankcardInterchangeData $InterchangeData)
    {
        $this->InterchangeData = $InterchangeData;
        return $this;
    }

}
