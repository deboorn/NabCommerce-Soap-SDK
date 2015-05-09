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



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

require('NabCommerce/autoload.php');

use NabCommerce\Api;
use NabCommerce\Transaction;
use NabCommerce\Service;


/**
 * Example of ACH Auth Request
 */

$config = array(
    'identityToken'        => "",
    'applicationProfileId' => "",
    'merchantProfileId'    => "",
    'workflowId'           => "",
);

$nab = new \NabCommerce\Api($config['identityToken'], $config['applicationProfileId'], $config['workflowId'], $config['merchantProfileId']);


$transaction = new NabCommerce\Transaction\ElectronicCheckingTransaction();

$name = new NabCommerce\Transaction\NameInfo();
$name->setFirst('John')->setLast('Doe');

$address = new NabCommerce\Transaction\AddressInfo('USA');
$address->setStreet1('123 Someplace Dr');
$address->setCity('Myrtle Beach');
$address->setPostalCode('29579');

$billingData = new NabCommerce\Transaction\CustomerInfo();
$billingData->setName($name);
$billingData->setAddress($address);

$customerData = new NabCommerce\Transaction\ElectronicCheckingCustomerData();
$customerData->setBillingData($billingData);
$transaction->setCustomerData($customerData);

$tenderData = new Transaction\ElectronicCheckingTenderData();
$checkData = new Transaction\CheckData(Transaction\CheckCountryCode::US, Transaction\OwnerType::Personal, Transaction\UseType::Checking);
$checkData->setAccountNumber('3213213219')->setRoutingNumber('490000018');
$tenderData->setCheckData($checkData);
$transaction->setTenderData($tenderData);

$transData = new Transaction\ElectronicCheckingTransactionData(
    '10.25', // amount
    Transaction\TypeISOCurrencyCodeA3::USD,
    false, // ignore duplicate check
    new DateTime(), // effective date
    0, // is recurring
    Transaction\SECCode::WEB,
    Transaction\ServiceType::ACH,
    Transaction\TransactionType::Debit,
    Transaction\TxnCodeType::Conversion
);
$transaction->setTransactionData($transData);


$request = new \NabCommerce\Transaction\Authorize(
    $nab->getSessionToken(),
    $transaction,
    $nab->getApplicationProfileId(),
    $nab->getMerchantProfileId(),
    $nab->getWorkflowId()
);
$request->setTransaction($transaction);

$soap = $nab->transaction();
try{
    $r = $soap->Authorize($request);
    var_dump($r);
}catch (SoapFault $e){
    var_dump(
        $soap->__getLastRequestHeaders(),
        $soap->__getLastRequest(),
        $soap->__getLastResponse(),
        $soap->__getLastResponseHeaders()
    );
    var_dump($e);
    die();
}

