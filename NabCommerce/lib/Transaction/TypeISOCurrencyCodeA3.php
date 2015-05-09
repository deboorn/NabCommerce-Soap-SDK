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

class TypeISOCurrencyCodeA3
{
    const __default = 'NotSet';
    const NotSet = 'NotSet';
    const AFN = 'AFN';
    const ALL = 'ALL';
    const DZD = 'DZD';
    const USD = 'USD';
    const EUR = 'EUR';
    const AOA = 'AOA';
    const XCD = 'XCD';
    const ARS = 'ARS';
    const AMD = 'AMD';
    const AWG = 'AWG';
    const AUD = 'AUD';
    const AZN = 'AZN';
    const BSD = 'BSD';
    const BHD = 'BHD';
    const BDT = 'BDT';
    const BBD = 'BBD';
    const BYR = 'BYR';
    const BZD = 'BZD';
    const BMD = 'BMD';
    const BTN = 'BTN';
    const BOB = 'BOB';
    const BOV = 'BOV';
    const BAM = 'BAM';
    const BWP = 'BWP';
    const BRL = 'BRL';
    const BND = 'BND';
    const BGN = 'BGN';
    const XOF = 'XOF';
    const BIF = 'BIF';
    const KHR = 'KHR';
    const CAD = 'CAD';
    const CVE = 'CVE';
    const KYD = 'KYD';
    const CLP = 'CLP';
    const CLF = 'CLF';
    const CNY = 'CNY';
    const COP = 'COP';
    const COU = 'COU';
    const KMF = 'KMF';
    const XAF = 'XAF';
    const CDF = 'CDF';
    const CRC = 'CRC';
    const HRK = 'HRK';
    const CUP = 'CUP';
    const CYP = 'CYP';
    const CZK = 'CZK';
    const DKK = 'DKK';
    const DJF = 'DJF';
    const DOP = 'DOP';
    const EGP = 'EGP';
    const SVC = 'SVC';
    const ERN = 'ERN';
    const EEK = 'EEK';
    const ETB = 'ETB';
    const FKP = 'FKP';
    const FJD = 'FJD';
    const GMD = 'GMD';
    const GEL = 'GEL';
    const GHS = 'GHS';
    const GIP = 'GIP';
    const GTQ = 'GTQ';
    const GNF = 'GNF';
    const GWP = 'GWP';
    const GYD = 'GYD';
    const HTG = 'HTG';
    const HNL = 'HNL';
    const HKD = 'HKD';
    const HUF = 'HUF';
    const ISK = 'ISK';
    const INR = 'INR';
    const IDR = 'IDR';
    const XDR = 'XDR';
    const IRR = 'IRR';
    const IQD = 'IQD';
    const ILS = 'ILS';
    const JMD = 'JMD';
    const JPY = 'JPY';
    const JOD = 'JOD';
    const KZT = 'KZT';
    const KES = 'KES';
    const KPW = 'KPW';
    const KRW = 'KRW';
    const KWD = 'KWD';
    const KGS = 'KGS';
    const LAK = 'LAK';
    const LVL = 'LVL';
    const LBP = 'LBP';
    const LSL = 'LSL';
    const LRD = 'LRD';
    const LYD = 'LYD';
    const LTL = 'LTL';
    const MOP = 'MOP';
    const MKD = 'MKD';
    const MGA = 'MGA';
    const MWK = 'MWK';
    const MYR = 'MYR';
    const MVR = 'MVR';
    const MTL = 'MTL';
    const MRO = 'MRO';
    const MUR = 'MUR';
    const MXN = 'MXN';
    const MXV = 'MXV';
    const MDL = 'MDL';
    const MNT = 'MNT';
    const MAD = 'MAD';
    const MZN = 'MZN';
    const MMK = 'MMK';
    const NAD = 'NAD';
    const NPR = 'NPR';
    const ANG = 'ANG';
    const XPF = 'XPF';
    const NZD = 'NZD';
    const NIO = 'NIO';
    const NGN = 'NGN';
    const NOK = 'NOK';
    const OMR = 'OMR';
    const PKR = 'PKR';
    const PAB = 'PAB';
    const PGK = 'PGK';
    const PYG = 'PYG';
    const PEN = 'PEN';
    const PHP = 'PHP';
    const PLN = 'PLN';
    const QAR = 'QAR';
    const RON = 'RON';
    const RUB = 'RUB';
    const RWF = 'RWF';
    const SHP = 'SHP';
    const WST = 'WST';
    const STD = 'STD';
    const SAR = 'SAR';
    const RSD = 'RSD';
    const SCR = 'SCR';
    const SLL = 'SLL';
    const SGD = 'SGD';
    const SKK = 'SKK';
    const SBD = 'SBD';
    const SOS = 'SOS';
    const ZAR = 'ZAR';
    const LKR = 'LKR';
    const SDG = 'SDG';
    const SRD = 'SRD';
    const SZL = 'SZL';
    const SEK = 'SEK';
    const CHF = 'CHF';
    const CHW = 'CHW';
    const CHE = 'CHE';
    const SYP = 'SYP';
    const TWD = 'TWD';
    const TJS = 'TJS';
    const TZS = 'TZS';
    const THB = 'THB';
    const TOP = 'TOP';
    const TTD = 'TTD';
    const TND = 'TND';
    const aTRY = 'TRY';
    const TMM = 'TMM';
    const UGX = 'UGX';
    const UAH = 'UAH';
    const AED = 'AED';
    const GBP = 'GBP';
    const USS = 'USS';
    const USN = 'USN';
    const UYU = 'UYU';
    const UYI = 'UYI';
    const UZS = 'UZS';
    const VUV = 'VUV';
    const VEF = 'VEF';
    const VND = 'VND';
    const YER = 'YER';
    const ZMK = 'ZMK';
    const ZWD = 'ZWD';
    const XBA = 'XBA';
    const XBB = 'XBB';
    const XBC = 'XBC';
    const XBD = 'XBD';
    const XPD = 'XPD';
    const XPT = 'XPT';
    const XAG = 'XAG';
    const XAU = 'XAU';


}
