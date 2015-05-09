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

$customerData = (new Transaction\TransactionCustomerData())
    ->setBillingData($billingData);

$cardData = (new Transaction\CardData(null, null))
    ->setPAN('4012888812348882')
    ->setExpire('1215')
    ->setCardType(Transaction\TypeCardType::Visa);

$tenderData = (new Transaction\BankcardTenderData())
    ->setCardData($cardData);

$transData = new Transaction\BankcardTransactionData(
    '10.25', // amount
    Transaction\TypeISOCurrencyCodeA3::USD,
    0, // ignore duplicate check
    Transaction\AccountType::NotSet,
    0, // cash back amount
    Transaction\CustomerPresent::Ecommerce, // customer present
    Transaction\EntryMode::Keyed,
    Transaction\GoodsType::NotSet,
    Transaction\IndustryType::Ecommerce,
    0, // is partial shipment
    0, // signature capture
    0, // fee amount
    0, // tip amount
    Transaction\PartialApprovalSupportType::NotSet, // partial approval capable
    0, // is quasi cash
    Transaction\TypeEBTType::NotEBT // ebt type
);
$transData->setOrderNumber(uniqid());

$transaction = new Transaction\BankcardTransaction();
$transaction->setCustomerData($customerData);
$transaction->setTenderData($tenderData);
$transaction->setTransactionData($transData);

$request = (new Transaction\AuthorizeAndCapture(
    $nab->getSessionToken(),
    $transaction,
    $nab->getApplicationProfileId(),
    $nab->getMerchantProfileId(),
    $nab->getWorkflowId()
))->setTransaction($transaction);


try {
    $result = $nab->transaction()->AuthorizeAndCapture($request);
    var_dump($result);
} catch (Exception $e) {
    var_dump($e);
}