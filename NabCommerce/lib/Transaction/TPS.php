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

class TPS extends \NabCommerce\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Ping'                                            => 'NabCommerce\\Transaction\\Ping',
        'PingResponse'                                    => 'NabCommerce\\Transaction\\PingResponse',
        'SignOnWithToken'                                 => 'NabCommerce\\Transaction\\SignOnWithToken',
        'SignOnWithTokenResponse'                         => 'NabCommerce\\Transaction\\SignOnWithTokenResponse',
        'GetServiceInformation'                           => 'NabCommerce\\Transaction\\GetServiceInformation',
        'GetServiceInformationResponse'                   => 'NabCommerce\\Transaction\\GetServiceInformationResponse',
        'ServiceInformation'                              => 'NabCommerce\\Transaction\\ServiceInformation',
        'ArrayOfBankcardService'                          => 'NabCommerce\\Transaction\\ArrayOfBankcardService',
        'BankcardService'                                 => 'NabCommerce\\Transaction\\BankcardService',
        'BankcardServiceAVSData'                          => 'NabCommerce\\Transaction\\BankcardServiceAVSData',
        'Operations'                                      => 'NabCommerce\\Transaction\\Operations',
        'Tenders'                                         => 'NabCommerce\\Transaction\\Tenders',
        'ArrayOfElectronicCheckingService'                => 'NabCommerce\\Transaction\\ArrayOfElectronicCheckingService',
        'ElectronicCheckingService'                       => 'NabCommerce\\Transaction\\ElectronicCheckingService',
        'ArrayOfStoredValueService'                       => 'NabCommerce\\Transaction\\ArrayOfStoredValueService',
        'StoredValueService'                              => 'NabCommerce\\Transaction\\StoredValueService',
        'ArrayOfWorkflow'                                 => 'NabCommerce\\Transaction\\ArrayOfWorkflow',
        'Workflow'                                        => 'NabCommerce\\Transaction\\Workflow',
        'ArrayOfWorkflowService'                          => 'NabCommerce\\Transaction\\ArrayOfWorkflowService',
        'WorkflowService'                                 => 'NabCommerce\\Transaction\\WorkflowService',
        'SaveApplicationData'                             => 'NabCommerce\\Transaction\\SaveApplicationData',
        'ApplicationData'                                 => 'NabCommerce\\Transaction\\ApplicationData',
        'SaveApplicationDataResponse'                     => 'NabCommerce\\Transaction\\SaveApplicationDataResponse',
        'GetApplicationData'                              => 'NabCommerce\\Transaction\\GetApplicationData',
        'GetApplicationDataResponse'                      => 'NabCommerce\\Transaction\\GetApplicationDataResponse',
        'DeleteApplicationData'                           => 'NabCommerce\\Transaction\\DeleteApplicationData',
        'DeleteApplicationDataResponse'                   => 'NabCommerce\\Transaction\\DeleteApplicationDataResponse',
        'IsMerchantProfileInitialized'                    => 'NabCommerce\\Transaction\\IsMerchantProfileInitialized',
        'IsMerchantProfileInitializedResponse'            => 'NabCommerce\\Transaction\\IsMerchantProfileInitializedResponse',
        'GetMerchantProfiles'                             => 'NabCommerce\\Transaction\\GetMerchantProfiles',
        'GetMerchantProfilesResponse'                     => 'NabCommerce\\Transaction\\GetMerchantProfilesResponse',
        'ArrayOfMerchantProfile'                          => 'NabCommerce\\Transaction\\ArrayOfMerchantProfile',
        'MerchantProfile'                                 => 'NabCommerce\\Transaction\\MerchantProfile',
        'MerchantProfileMerchantData'                     => 'NabCommerce\\Transaction\\MerchantProfileMerchantData',
        'AddressInfo'                                     => 'NabCommerce\\Transaction\\AddressInfo',
        'BankcardMerchantData'                            => 'NabCommerce\\Transaction\\BankcardMerchantData',
        'ElectronicCheckingMerchantData'                  => 'NabCommerce\\Transaction\\ElectronicCheckingMerchantData',
        'StoredValueMerchantData'                         => 'NabCommerce\\Transaction\\StoredValueMerchantData',
        'MerchantProfileTransactionData'                  => 'NabCommerce\\Transaction\\MerchantProfileTransactionData',
        'BankcardTransactionDataDefaults'                 => 'NabCommerce\\Transaction\\BankcardTransactionDataDefaults',
        'AutoSettlement'                                  => 'NabCommerce\\Transaction\\AutoSettlement',
        'DuplicateCheck'                                  => 'NabCommerce\\Transaction\\DuplicateCheck',
        'RecurringBilling'                                => 'NabCommerce\\Transaction\\RecurringBilling',
        'GetMerchantProfileIds'                           => 'NabCommerce\\Transaction\\GetMerchantProfileIds',
        'GetMerchantProfileIdsResponse'                   => 'NabCommerce\\Transaction\\GetMerchantProfileIdsResponse',
        'GetMerchantProfilesByProfileId'                  => 'NabCommerce\\Transaction\\GetMerchantProfilesByProfileId',
        'GetMerchantProfilesByProfileIdResponse'          => 'NabCommerce\\Transaction\\GetMerchantProfilesByProfileIdResponse',
        'GetMerchantProfile'                              => 'NabCommerce\\Transaction\\GetMerchantProfile',
        'GetMerchantProfileResponse'                      => 'NabCommerce\\Transaction\\GetMerchantProfileResponse',
        'DeleteMerchantProfile'                           => 'NabCommerce\\Transaction\\DeleteMerchantProfile',
        'DeleteMerchantProfileResponse'                   => 'NabCommerce\\Transaction\\DeleteMerchantProfileResponse',
        'SaveMerchantProfiles'                            => 'NabCommerce\\Transaction\\SaveMerchantProfiles',
        'SaveMerchantProfilesResponse'                    => 'NabCommerce\\Transaction\\SaveMerchantProfilesResponse',
        'SignOnWithUsernamePasswordForServiceKey'         => 'NabCommerce\\Transaction\\SignOnWithUsernamePasswordForServiceKey',
        'SignOnWithUsernamePasswordForServiceKeyResponse' => 'NabCommerce\\Transaction\\SignOnWithUsernamePasswordForServiceKeyResponse',
        'ResetPasswordForServiceKey'                      => 'NabCommerce\\Transaction\\ResetPasswordForServiceKey',
        'ResetPasswordForServiceKeyResponse'              => 'NabCommerce\\Transaction\\ResetPasswordForServiceKeyResponse',
        'ChangePasswordForServiceKey'                     => 'NabCommerce\\Transaction\\ChangePasswordForServiceKey',
        'ChangePasswordForServiceKeyResponse'             => 'NabCommerce\\Transaction\\ChangePasswordForServiceKeyResponse',
        'ChangeUsernameForServiceKey'                     => 'NabCommerce\\Transaction\\ChangeUsernameForServiceKey',
        'ChangeUsernameForServiceKeyResponse'             => 'NabCommerce\\Transaction\\ChangeUsernameForServiceKeyResponse',
        'ChangeEmailForServiceKey'                        => 'NabCommerce\\Transaction\\ChangeEmailForServiceKey',
        'ChangeEmailForServiceKeyResponse'                => 'NabCommerce\\Transaction\\ChangeEmailForServiceKeyResponse',
        'GetPasswordExpirationForServiceKey'              => 'NabCommerce\\Transaction\\GetPasswordExpirationForServiceKey',
        'GetPasswordExpirationForServiceKeyResponse'      => 'NabCommerce\\Transaction\\GetPasswordExpirationForServiceKeyResponse',
        'ValidateMerchantProfile'                         => 'NabCommerce\\Transaction\\ValidateMerchantProfile',
        'ValidateMerchantProfileResponse'                 => 'NabCommerce\\Transaction\\ValidateMerchantProfileResponse',
        'GetAllClaims'                                    => 'NabCommerce\\Transaction\\GetAllClaims',
        'GetAllClaimsResponse'                            => 'NabCommerce\\Transaction\\GetAllClaimsResponse',
        'GetClaims'                                       => 'NabCommerce\\Transaction\\GetClaims',
        'GetClaimsResponse'                               => 'NabCommerce\\Transaction\\GetClaimsResponse',
        'Renew'                                           => 'NabCommerce\\Transaction\\Renew',
        'RenewResponse'                                   => 'NabCommerce\\Transaction\\RenewResponse',
        'SignOnAndAddClaims'                              => 'NabCommerce\\Transaction\\SignOnAndAddClaims',
        'SignOnAndAddClaimsResponse'                      => 'NabCommerce\\Transaction\\SignOnAndAddClaimsResponse',
        'DelegatedSignOn'                                 => 'NabCommerce\\Transaction\\DelegatedSignOn',
        'DelegatedSignOnResponse'                         => 'NabCommerce\\Transaction\\DelegatedSignOnResponse',
        'FederatedSignOn'                                 => 'NabCommerce\\Transaction\\FederatedSignOn',
        'FederatedSignOnResponse'                         => 'NabCommerce\\Transaction\\FederatedSignOnResponse',
        'FederatedSignOnAndAddClaims'                     => 'NabCommerce\\Transaction\\FederatedSignOnAndAddClaims',
        'FederatedSignOnAndAddClaimsResponse'             => 'NabCommerce\\Transaction\\FederatedSignOnAndAddClaimsResponse',
        'STSUnavailableFault'                             => 'NabCommerce\\Transaction\\STSUnavailableFault',
        'BaseFault'                                       => 'NabCommerce\\Transaction\\BaseFault',
        'ExpiredTokenFault'                               => 'NabCommerce\\Transaction\\ExpiredTokenFault',
        'InvalidTokenFault'                               => 'NabCommerce\\Transaction\\InvalidTokenFault',
        'AuthenticationFault'                             => 'NabCommerce\\Transaction\\AuthenticationFault',
        'LockedByAdminFault'                              => 'NabCommerce\\Transaction\\LockedByAdminFault',
        'PasswordExpiredFault'                            => 'NabCommerce\\Transaction\\PasswordExpiredFault',
        'OneTimePasswordFault'                            => 'NabCommerce\\Transaction\\OneTimePasswordFault',
        'BadAttemptThresholdExceededFault'                => 'NabCommerce\\Transaction\\BadAttemptThresholdExceededFault',
        'SendEmailFault'                                  => 'NabCommerce\\Transaction\\SendEmailFault',
        'GeneratePasswordFault'                           => 'NabCommerce\\Transaction\\GeneratePasswordFault',
        'PasswordInvalidFault'                            => 'NabCommerce\\Transaction\\PasswordInvalidFault',
        'UserNotFoundFault'                               => 'NabCommerce\\Transaction\\UserNotFoundFault',
        'InvalidEmailFault'                               => 'NabCommerce\\Transaction\\InvalidEmailFault',
        'ArrayOfClaimMetaData'                            => 'NabCommerce\\Transaction\\ArrayOfClaimMetaData',
        'ClaimMetaData'                                   => 'NabCommerce\\Transaction\\ClaimMetaData',
        'RelyingPartyNotAssociatedToSecurityDomainFault'  => 'NabCommerce\\Transaction\\RelyingPartyNotAssociatedToSecurityDomainFault',
        'ClaimNotFoundFault'                              => 'NabCommerce\\Transaction\\ClaimNotFoundFault',
        'AuthorizationFault'                              => 'NabCommerce\\Transaction\\AuthorizationFault',
        'SystemFault'                                     => 'NabCommerce\\Transaction\\SystemFault',
        'NonRenewableTokenFault'                          => 'NabCommerce\\Transaction\\NonRenewableTokenFault',
        'ClaimMappingsNotFoundFault'                      => 'NabCommerce\\Transaction\\ClaimMappingsNotFoundFault',
        'CWSFault'                                        => 'NabCommerce\\Transaction\\CWSFault',
        'CWSBaseFault'                                    => 'NabCommerce\\Transaction\\CWSBaseFault',
        'CWSServiceInformationUnavailableFault'           => 'NabCommerce\\Transaction\\CWSServiceInformationUnavailableFault',
        'CWSValidationResultFault'                        => 'NabCommerce\\Transaction\\CWSValidationResultFault',
        'ArrayOfCWSValidationErrorFault'                  => 'NabCommerce\\Transaction\\ArrayOfCWSValidationErrorFault',
        'CWSValidationErrorFault'                         => 'NabCommerce\\Transaction\\CWSValidationErrorFault',
        'ArrayOfstring'                                   => 'NabCommerce\\Transaction\\ArrayOfstring',
        'BankcardTransactionResponsePro'                  => 'NabCommerce\\Transaction\\BankcardTransactionResponsePro',
        'BankcardTransactionDataPro'                      => 'NabCommerce\\Transaction\\BankcardTransactionDataPro',
        'BankcardTransactionPro'                          => 'NabCommerce\\Transaction\\BankcardTransactionPro',
        'BankcardInterchangeData'                         => 'NabCommerce\\Transaction\\BankcardInterchangeData',
        'BankcardCaptureResponsePro'                      => 'NabCommerce\\Transaction\\BankcardCaptureResponsePro',
        'BankcardReturnPro'                               => 'NabCommerce\\Transaction\\BankcardReturnPro',
        'BankcardCapturePro'                              => 'NabCommerce\\Transaction\\BankcardCapturePro',
        'BankcardTransactionResponse'                     => 'NabCommerce\\Transaction\\BankcardTransactionResponse',
        'BankcardCaptureResponse'                         => 'NabCommerce\\Transaction\\BankcardCaptureResponse',
        'TransactionSummaryData'                          => 'NabCommerce\\Transaction\\TransactionSummaryData',
        'Totals'                                          => 'NabCommerce\\Transaction\\Totals',
        'AVSResult'                                       => 'NabCommerce\\Transaction\\AVSResult',
        'BankcardTransactionData'                         => 'NabCommerce\\Transaction\\BankcardTransactionData',
        'InternetTransactionData'                         => 'NabCommerce\\Transaction\\InternetTransactionData',
        'BankcardTransaction'                             => 'NabCommerce\\Transaction\\BankcardTransaction',
        'BankcardTenderData'                              => 'NabCommerce\\Transaction\\BankcardTenderData',
        'CardData'                                        => 'NabCommerce\\Transaction\\CardData',
        'CardSecurityData'                                => 'NabCommerce\\Transaction\\CardSecurityData',
        'AVSData'                                         => 'NabCommerce\\Transaction\\AVSData',
        'EcommerceSecurityData'                           => 'NabCommerce\\Transaction\\EcommerceSecurityData',
        'BankcardApplicationConfigurationData'            => 'NabCommerce\\Transaction\\BankcardApplicationConfigurationData',
        'ManagedBilling'                                  => 'NabCommerce\\Transaction\\ManagedBilling',
        'ManagedBillingInstallments'                      => 'NabCommerce\\Transaction\\ManagedBillingInstallments',
        'Level2Data'                                      => 'NabCommerce\\Transaction\\Level2Data',
        'TaxExempt'                                       => 'NabCommerce\\Transaction\\TaxExempt',
        'Tax'                                             => 'NabCommerce\\Transaction\\Tax',
        'ArrayOfItemizedTax'                              => 'NabCommerce\\Transaction\\ArrayOfItemizedTax',
        'ItemizedTax'                                     => 'NabCommerce\\Transaction\\ItemizedTax',
        'ArrayOfLineItemDetail'                           => 'NabCommerce\\Transaction\\ArrayOfLineItemDetail',
        'LineItemDetail'                                  => 'NabCommerce\\Transaction\\LineItemDetail',
        'IIASData'                                        => 'NabCommerce\\Transaction\\IIASData',
        'BankcardUndo'                                    => 'NabCommerce\\Transaction\\BankcardUndo',
        'BankcardReturn'                                  => 'NabCommerce\\Transaction\\BankcardReturn',
        'BankcardCapture'                                 => 'NabCommerce\\Transaction\\BankcardCapture',
        'Response'                                        => 'NabCommerce\\Transaction\\Response',
        'ServiceTransactionDateTime'                      => 'NabCommerce\\Transaction\\ServiceTransactionDateTime',
        'Addendum'                                        => 'NabCommerce\\Transaction\\Addendum',
        'Unmanaged'                                       => 'NabCommerce\\Transaction\\Unmanaged',
        'SummaryData'                                     => 'NabCommerce\\Transaction\\SummaryData',
        'SummaryTotals'                                   => 'NabCommerce\\Transaction\\SummaryTotals',
        'TransactionData'                                 => 'NabCommerce\\Transaction\\TransactionData',
        'AlternativeMerchantData'                         => 'NabCommerce\\Transaction\\AlternativeMerchantData',
        'Transaction'                                     => 'NabCommerce\\Transaction\\Transaction',
        'TransactionCustomerData'                         => 'NabCommerce\\Transaction\\TransactionCustomerData',
        'CustomerInfo'                                    => 'NabCommerce\\Transaction\\CustomerInfo',
        'NameInfo'                                        => 'NabCommerce\\Transaction\\NameInfo',
        'PersonalInfo'                                    => 'NabCommerce\\Transaction\\PersonalInfo',
        'DriversLicense'                                  => 'NabCommerce\\Transaction\\DriversLicense',
        'TransactionReportingData'                        => 'NabCommerce\\Transaction\\TransactionReportingData',
        'TransactionTenderData'                           => 'NabCommerce\\Transaction\\TransactionTenderData',
        'PINlessDebitData'                                => 'NabCommerce\\Transaction\\PINlessDebitData',
        'BillPayServiceData'                              => 'NabCommerce\\Transaction\\BillPayServiceData',
        'PayeeData'                                       => 'NabCommerce\\Transaction\\PayeeData',
        'Undo'                                            => 'NabCommerce\\Transaction\\Undo',
        'Return'                                          => 'NabCommerce\\Transaction\\ReturnCustom',
        'Capture'                                         => 'NabCommerce\\Transaction\\Capture',
        'Manage'                                          => 'NabCommerce\\Transaction\\Manage',
        'Adjust'                                          => 'NabCommerce\\Transaction\\Adjust',
        'ArrayOfCapture'                                  => 'NabCommerce\\Transaction\\ArrayOfCapture',
        'ArrayOfResponse'                                 => 'NabCommerce\\Transaction\\ArrayOfResponse',
        'ElectronicCheckingTransactionResponse'           => 'NabCommerce\\Transaction\\ElectronicCheckingTransactionResponse',
        'ReturnInformation'                               => 'NabCommerce\\Transaction\\ReturnInformation',
        'ElectronicCheckingCaptureResponse'               => 'NabCommerce\\Transaction\\ElectronicCheckingCaptureResponse',
        'ElectronicCheckingTransactionData'               => 'NabCommerce\\Transaction\\ElectronicCheckingTransactionData',
        'ElectronicCheckingCustomerData'                  => 'NabCommerce\\Transaction\\ElectronicCheckingCustomerData',
        'ElectronicCheckingTransaction'                   => 'NabCommerce\\Transaction\\ElectronicCheckingTransaction',
        'ElectronicCheckingTenderData'                    => 'NabCommerce\\Transaction\\ElectronicCheckingTenderData',
        'CheckImage'                                      => 'NabCommerce\\Transaction\\CheckImage',
        'CheckData'                                       => 'NabCommerce\\Transaction\\CheckData',
        'SocketLocation'                                  => 'NabCommerce\\Transaction\\SocketLocation',
        'ElectronicCheckingUndo'                          => 'NabCommerce\\Transaction\\ElectronicCheckingUndo',
        'StoredValueTransaction'                          => 'NabCommerce\\Transaction\\StoredValueTransaction',
        'StoredValueTenderData'                           => 'NabCommerce\\Transaction\\StoredValueTenderData',
        'ArrayOfConsumerIdentification'                   => 'NabCommerce\\Transaction\\ArrayOfConsumerIdentification',
        'ConsumerIdentification'                          => 'NabCommerce\\Transaction\\ConsumerIdentification',
        'StoredValueTransactionData'                      => 'NabCommerce\\Transaction\\StoredValueTransactionData',
        'StoredValueBalanceTransferTenderData'            => 'NabCommerce\\Transaction\\StoredValueBalanceTransferTenderData',
        'StoredValueActivateTenderData'                   => 'NabCommerce\\Transaction\\StoredValueActivateTenderData',
        'VirtualCardData'                                 => 'NabCommerce\\Transaction\\VirtualCardData',
        'StoredValueTransactionResponse'                  => 'NabCommerce\\Transaction\\StoredValueTransactionResponse',
        'StoredValueCaptureResponse'                      => 'NabCommerce\\Transaction\\StoredValueCaptureResponse',
        'StoredValueReturn'                               => 'NabCommerce\\Transaction\\StoredValueReturn',
        'StoredValueCapture'                              => 'NabCommerce\\Transaction\\StoredValueCapture',
        'StoredValueManage'                               => 'NabCommerce\\Transaction\\StoredValueManage',
        'QueryAccount'                                    => 'NabCommerce\\Transaction\\QueryAccount',
        'QueryAccountResponse'                            => 'NabCommerce\\Transaction\\QueryAccountResponse',
        'Verify'                                          => 'NabCommerce\\Transaction\\Verify',
        'VerifyResponse'                                  => 'NabCommerce\\Transaction\\VerifyResponse',
        'Authorize'                                       => 'NabCommerce\\Transaction\\Authorize',
        'AuthorizeResponse'                               => 'NabCommerce\\Transaction\\AuthorizeResponse',
        'AdjustResponse'                                  => 'NabCommerce\\Transaction\\AdjustResponse',
        'AuthorizeAndCapture'                             => 'NabCommerce\\Transaction\\AuthorizeAndCapture',
        'AuthorizeAndCaptureResponse'                     => 'NabCommerce\\Transaction\\AuthorizeAndCaptureResponse',
        'ReturnUnlinked'                                  => 'NabCommerce\\Transaction\\ReturnUnlinked',
        'ReturnUnlinkedResponse'                          => 'NabCommerce\\Transaction\\ReturnUnlinkedResponse',
        'ReturnById'                                      => 'NabCommerce\\Transaction\\ReturnById',
        'ReturnByIdResponse'                              => 'NabCommerce\\Transaction\\ReturnByIdResponse',
        'UndoResponse'                                    => 'NabCommerce\\Transaction\\UndoResponse',
        'CaptureResponse'                                 => 'NabCommerce\\Transaction\\CaptureResponse',
        'CaptureAll'                                      => 'NabCommerce\\Transaction\\CaptureAll',
        'CaptureAllResponse'                              => 'NabCommerce\\Transaction\\CaptureAllResponse',
        'CaptureAllAsync'                                 => 'NabCommerce\\Transaction\\CaptureAllAsync',
        'CaptureAllAsyncResponse'                         => 'NabCommerce\\Transaction\\CaptureAllAsyncResponse',
        'CaptureSelective'                                => 'NabCommerce\\Transaction\\CaptureSelective',
        'CaptureSelectiveResponse'                        => 'NabCommerce\\Transaction\\CaptureSelectiveResponse',
        'CaptureSelectiveAsync'                           => 'NabCommerce\\Transaction\\CaptureSelectiveAsync',
        'CaptureSelectiveAsyncResponse'                   => 'NabCommerce\\Transaction\\CaptureSelectiveAsyncResponse',
        'Acknowledge'                                     => 'NabCommerce\\Transaction\\Acknowledge',
        'AcknowledgeResponse'                             => 'NabCommerce\\Transaction\\AcknowledgeResponse',
        'RequestTransaction'                              => 'NabCommerce\\Transaction\\RequestTransaction',
        'RequestTransactionResponse'                      => 'NabCommerce\\Transaction\\RequestTransactionResponse',
        'ManageAccount'                                   => 'NabCommerce\\Transaction\\ManageAccount',
        'ManageAccountResponse'                           => 'NabCommerce\\Transaction\\ManageAccountResponse',
        'ManageAccountById'                               => 'NabCommerce\\Transaction\\ManageAccountById',
        'ManageAccountByIdResponse'                       => 'NabCommerce\\Transaction\\ManageAccountByIdResponse',
        'Disburse'                                        => 'NabCommerce\\Transaction\\Disburse',
        'DisburseResponse'                                => 'NabCommerce\\Transaction\\DisburseResponse',
        'CWSConnectionFault'                              => 'NabCommerce\\Transaction\\CWSConnectionFault',
        'CWSTransactionServiceUnavailableFault'           => 'NabCommerce\\Transaction\\CWSTransactionServiceUnavailableFault',
        'CWSTransactionAlreadySettledFault'               => 'NabCommerce\\Transaction\\CWSTransactionAlreadySettledFault',
        'CWSTransactionFailedFault'                       => 'NabCommerce\\Transaction\\CWSTransactionFailedFault',
        'CWSExtendedDataNotSupportedFault'                => 'NabCommerce\\Transaction\\CWSExtendedDataNotSupportedFault',
        'CWSInvalidMessageFormatFault'                    => 'NabCommerce\\Transaction\\CWSInvalidMessageFormatFault',
        'CWSOperationNotSupportedFault'                   => 'NabCommerce\\Transaction\\CWSOperationNotSupportedFault',
        'CWSInvalidOperationFault'                        => 'NabCommerce\\Transaction\\CWSInvalidOperationFault',
        'CWSDeserializationFault'                         => 'NabCommerce\\Transaction\\CWSDeserializationFault',
        'CWSInvalidServiceInformationFault'               => 'NabCommerce\\Transaction\\CWSInvalidServiceInformationFault',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://api.cert.nabcommerce.com/CWS/1.0/SOAP/TPS.svc?singleWsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public static function forge(array $options = array(), $wsdl = 'https://api.cert.nabcommerce.com/CWS/1.0/SOAP/TPS.svc?singleWsdl')
    {
        return new self($options, $wsdl);
    }

    /**
     * @param Ping $parameters
     * @return PingResponse
     */
    public function Ping(Ping $parameters)
    {
        return $this->__soapCall('Ping', array($parameters));
    }

    /**
     * <summary>
     *             Performs a balance inquiry on the cardholder's account to determine the current account balance.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param QueryAccount $parameters
     * @return QueryAccountResponse
     */
    public function QueryAccount(QueryAccount $parameters)
    {
        return $this->__soapCall('QueryAccount', array($parameters));
    }

    /**
     * <summary>
     *             Performs a check on the cardholder's account without reserving any funds.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Verify $parameters
     * @return VerifyResponse
     */
    public function Verify(Verify $parameters)
    {
        return $this->__soapCall('Verify', array($parameters));
    }

    /**
     * <summary>
     *             Performs a check on cardholder's funds and reserves the queried amount if sufficient funds are available. Transaction must be captured before funds transfer will occur.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Authorize $parameters
     * @return AuthorizeResponse
     */
    public function Authorize(Authorize $parameters)
    {
        return $this->__soapCall('Authorize', array($parameters));
    }

    /**
     * <summary>
     *             Performs an incremental or reversal authorization to increase or decrease the amount of an existing authorization.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Adjustment details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Adjust $parameters
     * @return AdjustResponse
     */
    public function Adjust(Adjust $parameters)
    {
        return $this->__soapCall('Adjust', array($parameters));
    }

    /**
     * <summary>
     *             Performs a check on cardholder's funds and reserves the queried amount if sufficient funds are available, then marks the transaction for capture.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param AuthorizeAndCapture $parameters
     * @return AuthorizeAndCaptureResponse
     */
    public function AuthorizeAndCapture(AuthorizeAndCapture $parameters)
    {
        return $this->__soapCall('AuthorizeAndCapture', array($parameters));
    }

    /**
     * <summary>
     *             Performs an unlinked or 'standalone' credit to a cardholder's account from a merchant's account.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param ReturnUnlinked $parameters
     * @return ReturnUnlinkedResponse
     */
    public function ReturnUnlinked(ReturnUnlinked $parameters)
    {
        return $this->__soapCall('ReturnUnlinked', array($parameters));
    }

    /**
     * <summary>
     *             Performs a linked credit to a cardholder's account from a merchant's account using data from the authorization.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Return details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param ReturnById $parameters
     * @return ReturnByIdResponse
     */
    public function ReturnById(ReturnById $parameters)
    {
        return $this->__soapCall('ReturnById', array($parameters));
    }

    /**
     * <summary>
     *             Void or reverse an authorization in order to release cardholder funds. If transaction to be Undone is in an ErrorUnknown state, the TenderData must be set on the BankcardUndo.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Undo details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Undo $parameters
     * @return UndoResponse
     */
    public function Undo(Undo $parameters)
    {
        return $this->__soapCall('Undo', array($parameters));
    }

    /**
     * <summary>
     *             Mark a succesfully authorized transaction for settlement by the processor.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Capture details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Capture $parameters
     * @return CaptureResponse
     */
    public function Capture(Capture $parameters)
    {
        return $this->__soapCall('Capture', array($parameters));
    }

    /**
     * <summary>
     *             Mark all succesfully authorized transactions for settlement by the processor.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Capture details</param>
     *             <param name="batchIds">A list of batch ids.</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param CaptureAll $parameters
     * @return CaptureAllResponse
     */
    public function CaptureAll(CaptureAll $parameters)
    {
        return $this->__soapCall('CaptureAll', array($parameters));
    }

    /**
     * <summary>
     *             Mark all succesfully authorized transactions for settlement by the processor without waiting for
     *             the settlement to complete. The Response object will indicate a successful receipt of the settlement request.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Capture details</param>
     *             <param name="batchIds">A list of batch ids.</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns>Single Response object.</returns>
     *
     * @param CaptureAllAsync $parameters
     * @return CaptureAllAsyncResponse
     */
    public function CaptureAllAsync(CaptureAllAsync $parameters)
    {
        return $this->__soapCall('CaptureAllAsync', array($parameters));
    }

    /**
     * <summary>
     *             Mark one or more specific succesfully authorized transactions for settlement by the processor.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transactionIds">Transaction IDs to capture</param>
     *             <param name="differenceData">Capture details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param CaptureSelective $parameters
     * @return CaptureSelectiveResponse
     */
    public function CaptureSelective(CaptureSelective $parameters)
    {
        return $this->__soapCall('CaptureSelective', array($parameters));
    }

    /**
     * <summary>
     *             Mark one or more specific succesfully authorized transactions for settlement by the processor without waiting for
     *             the settlement to complete. The Response object will indicate a successful receipt of the settlement request.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transactionIds">Transaction IDs to capture</param>
     *             <param name="differenceData">Capture details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns>Single Response object.</returns>
     *
     * @param CaptureSelectiveAsync $parameters
     * @return CaptureSelectiveAsyncResponse
     */
    public function CaptureSelectiveAsync(CaptureSelectiveAsync $parameters)
    {
        return $this->__soapCall('CaptureSelectiveAsync', array($parameters));
    }

    /**
     * <summary>
     *             Mark a transaction acknowledged after successfully receiving a response. This is helpful for later reporting.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transactionId">Transaction ID to acknowledge</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Acknowledge $parameters
     * @return AcknowledgeResponse
     */
    public function Acknowledge(Acknowledge $parameters)
    {
        return $this->__soapCall('Acknowledge', array($parameters));
    }

    /**
     * <summary>
     *             Provides the mechanism to request any transactions that match given tender data.
     *             </summary>
     *             <param name="tenderData">The tender data tro match.</param>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="merchantProfileId">Aids in the distinction of the transaction(s) located.</param>
     *             <returns>One or more transaction instances that match the supplied tender data.</returns>
     *
     * @param RequestTransaction $parameters
     * @return RequestTransactionResponse
     */
    public function RequestTransaction(RequestTransaction $parameters)
    {
        return $this->__soapCall('RequestTransaction', array($parameters));
    }

    /**
     * <summary>
     *             Used to activate, reload, deactivate an account or to transfer the balance from another card.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param ManageAccount $parameters
     * @return ManageAccountResponse
     */
    public function ManageAccount(ManageAccount $parameters)
    {
        return $this->__soapCall('ManageAccount', array($parameters));
    }

    /**
     * <summary>
     *             Used to update an existing account.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="differenceData">Manage details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param ManageAccountById $parameters
     * @return ManageAccountByIdResponse
     */
    public function ManageAccountById(ManageAccountById $parameters)
    {
        return $this->__soapCall('ManageAccountById', array($parameters));
    }

    /**
     * <summary>
     *             Disburse is used to submit a disbursement request to the Service Provider who then electronically disburses funds from the Payers bank account to the Payee.
     *             </summary>
     *             <param name="sessionToken">Session token obtained from SignOn()</param>
     *             <param name="transaction">Transaction details</param>
     *             <param name="applicationProfileId">Application profile ID obtained from SaveApplicationData()</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="workflowId">Workflow ID</param>
     *             <returns></returns>
     *
     * @param Disburse $parameters
     * @return DisburseResponse
     */
    public function Disburse(Disburse $parameters)
    {
        return $this->__soapCall('Disburse', array($parameters));
    }

}
