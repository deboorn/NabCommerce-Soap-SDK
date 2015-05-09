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

class TransactionState
{
    const __default = 'NotSet';
    const NotSet = 'NotSet';
    const Declined = 'Declined';
    const Verified = 'Verified';
    const Authorized = 'Authorized';
    const Adjusted = 'Adjusted';
    const Captured = 'Captured';
    const CaptureDeclined = 'CaptureDeclined';
    const PartiallyCaptured = 'PartiallyCaptured';
    const Undone = 'Undone';
    const ReturnRequested = 'ReturnRequested';
    const PartialReturnRequested = 'PartialReturnRequested';
    const ReturnUndone = 'ReturnUndone';
    const Returned = 'Returned';
    const PartiallyReturned = 'PartiallyReturned';
    const InProcess = 'InProcess';
    const ErrorValidation = 'ErrorValidation';
    const ErrorUnknown = 'ErrorUnknown';
    const ErrorConnecting = 'ErrorConnecting';
    const FundsRequested = 'FundsRequested';
    const FundsTransferred = 'FundsTransferred';


}
