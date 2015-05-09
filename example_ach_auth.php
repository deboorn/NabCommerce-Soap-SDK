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

/**
 * Example of ACH Auth Request with Chain
 */

$config = array(
    'identityToken'        => "",
    'applicationProfileId' => "",
    'merchantProfileId'    => "",
    'workflowId'           => "",
);

$nab = new Api($config['identityToken'], $config['applicationProfileId'], $config['workflowId'], $config['merchantProfileId']);

$name = (new Transaction\NameInfo())
    ->setFirst('John')->setLast('Doe');

$address = (new Transaction\AddressInfo('USA'))
    ->setStreet1('123 Someplace Dr')
    ->setCity('Myrtle Beach')
    ->setPostalCode('29579');

$billingData = (new Transaction\CustomerInfo())
    ->setName($name)
    ->setAddress($address);

$customerData = (new Transaction\ElectronicCheckingCustomerData())
    ->setBillingData($billingData);

$checkData = (new Transaction\CheckData(Transaction\CheckCountryCode::US, Transaction\OwnerType::Personal, Transaction\UseType::Checking))
    ->setAccountNumber('3213213219')
    ->setRoutingNumber('490000018');

$tenderData = (new Transaction\ElectronicCheckingTenderData())
    ->setCheckData($checkData);

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

$transaction = new Transaction\ElectronicCheckingTransaction();
$transaction->setCustomerData($customerData);
$transaction->setTenderData($tenderData);
$transaction->setTransactionData($transData);

$request = (new Transaction\Authorize(
    $nab->getSessionToken(),
    $transaction,
    $nab->getApplicationProfileId(),
    $nab->getMerchantProfileId(),
    $nab->getWorkflowId()
))->setTransaction($transaction);


try {
    $result = $nab->transaction()->Authorize($request);
    var_dump($result);
} catch (Exception $e) {
    var_dump($e);
}