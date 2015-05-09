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

class CommercialCardResponse
{
    const __default = 'NotSet';
    const NotSet = 'NotSet';
    const NotImplemented = 'NotImplemented';
    const PurchaseCard = 'PurchaseCard';
    const CorporateCard = 'CorporateCard';
    const BusinessCard = 'BusinessCard';
    const NonCommercialCard = 'NonCommercialCard';
    const PurchaseCardDataUnsupported = 'PurchaseCardDataUnsupported';
    const Unknown = 'Unknown';


}
