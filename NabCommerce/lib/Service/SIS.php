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


class SIS extends \NabCommerce\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'Ping'                                            => 'NabCommerce\\Service\\Ping',
        'PingResponse'                                    => 'NabCommerce\\Service\\PingResponse',
        'SignOnWithToken'                                 => 'NabCommerce\\Service\\SignOnWithToken',
        'SignOnWithTokenResponse'                         => 'NabCommerce\\Service\\SignOnWithTokenResponse',
        'GetServiceInformation'                           => 'NabCommerce\\Service\\GetServiceInformation',
        'GetServiceInformationResponse'                   => 'NabCommerce\\Service\\GetServiceInformationResponse',
        'ServiceInformation'                              => 'NabCommerce\\Service\\ServiceInformation',
        'ArrayOfBankcardService'                          => 'NabCommerce\\Service\\ArrayOfBankcardService',
        'BankcardService'                                 => 'NabCommerce\\Service\\BankcardService',
        'BankcardServiceAVSData'                          => 'NabCommerce\\Service\\BankcardServiceAVSData',
        'Operations'                                      => 'NabCommerce\\Service\\Operations',
        'Tenders'                                         => 'NabCommerce\\Service\\Tenders',
        'ArrayOfElectronicCheckingService'                => 'NabCommerce\\Service\\ArrayOfElectronicCheckingService',
        'ElectronicCheckingService'                       => 'NabCommerce\\Service\\ElectronicCheckingService',
        'ArrayOfStoredValueService'                       => 'NabCommerce\\Service\\ArrayOfStoredValueService',
        'StoredValueService'                              => 'NabCommerce\\Service\\StoredValueService',
        'ArrayOfWorkflow'                                 => 'NabCommerce\\Service\\ArrayOfWorkflow',
        'Workflow'                                        => 'NabCommerce\\Service\\Workflow',
        'ArrayOfWorkflowService'                          => 'NabCommerce\\Service\\ArrayOfWorkflowService',
        'WorkflowService'                                 => 'NabCommerce\\Service\\WorkflowService',
        'SaveApplicationData'                             => 'NabCommerce\\Service\\SaveApplicationData',
        'ApplicationData'                                 => 'NabCommerce\\Service\\ApplicationData',
        'SaveApplicationDataResponse'                     => 'NabCommerce\\Service\\SaveApplicationDataResponse',
        'GetApplicationData'                              => 'NabCommerce\\Service\\GetApplicationData',
        'GetApplicationDataResponse'                      => 'NabCommerce\\Service\\GetApplicationDataResponse',
        'DeleteApplicationData'                           => 'NabCommerce\\Service\\DeleteApplicationData',
        'DeleteApplicationDataResponse'                   => 'NabCommerce\\Service\\DeleteApplicationDataResponse',
        'IsMerchantProfileInitialized'                    => 'NabCommerce\\Service\\IsMerchantProfileInitialized',
        'IsMerchantProfileInitializedResponse'            => 'NabCommerce\\Service\\IsMerchantProfileInitializedResponse',
        'GetMerchantProfiles'                             => 'NabCommerce\\Service\\GetMerchantProfiles',
        'GetMerchantProfilesResponse'                     => 'NabCommerce\\Service\\GetMerchantProfilesResponse',
        'ArrayOfMerchantProfile'                          => 'NabCommerce\\Service\\ArrayOfMerchantProfile',
        'MerchantProfile'                                 => 'NabCommerce\\Service\\MerchantProfile',
        'MerchantProfileMerchantData'                     => 'NabCommerce\\Service\\MerchantProfileMerchantData',
        'AddressInfo'                                     => 'NabCommerce\\Service\\AddressInfo',
        'BankcardMerchantData'                            => 'NabCommerce\\Service\\BankcardMerchantData',
        'ElectronicCheckingMerchantData'                  => 'NabCommerce\\Service\\ElectronicCheckingMerchantData',
        'StoredValueMerchantData'                         => 'NabCommerce\\Service\\StoredValueMerchantData',
        'MerchantProfileTransactionData'                  => 'NabCommerce\\Service\\MerchantProfileTransactionData',
        'BankcardTransactionDataDefaults'                 => 'NabCommerce\\Service\\BankcardTransactionDataDefaults',
        'AutoSettlement'                                  => 'NabCommerce\\Service\\AutoSettlement',
        'DuplicateCheck'                                  => 'NabCommerce\\Service\\DuplicateCheck',
        'RecurringBilling'                                => 'NabCommerce\\Service\\RecurringBilling',
        'GetMerchantProfileIds'                           => 'NabCommerce\\Service\\GetMerchantProfileIds',
        'GetMerchantProfileIdsResponse'                   => 'NabCommerce\\Service\\GetMerchantProfileIdsResponse',
        'GetMerchantProfilesByProfileId'                  => 'NabCommerce\\Service\\GetMerchantProfilesByProfileId',
        'GetMerchantProfilesByProfileIdResponse'          => 'NabCommerce\\Service\\GetMerchantProfilesByProfileIdResponse',
        'GetMerchantProfile'                              => 'NabCommerce\\Service\\GetMerchantProfile',
        'GetMerchantProfileResponse'                      => 'NabCommerce\\Service\\GetMerchantProfileResponse',
        'DeleteMerchantProfile'                           => 'NabCommerce\\Service\\DeleteMerchantProfile',
        'DeleteMerchantProfileResponse'                   => 'NabCommerce\\Service\\DeleteMerchantProfileResponse',
        'SaveMerchantProfiles'                            => 'NabCommerce\\Service\\SaveMerchantProfiles',
        'SaveMerchantProfilesResponse'                    => 'NabCommerce\\Service\\SaveMerchantProfilesResponse',
        'SignOnWithUsernamePasswordForServiceKey'         => 'NabCommerce\\Service\\SignOnWithUsernamePasswordForServiceKey',
        'SignOnWithUsernamePasswordForServiceKeyResponse' => 'NabCommerce\\Service\\SignOnWithUsernamePasswordForServiceKeyResponse',
        'ResetPasswordForServiceKey'                      => 'NabCommerce\\Service\\ResetPasswordForServiceKey',
        'ResetPasswordForServiceKeyResponse'              => 'NabCommerce\\Service\\ResetPasswordForServiceKeyResponse',
        'ChangePasswordForServiceKey'                     => 'NabCommerce\\Service\\ChangePasswordForServiceKey',
        'ChangePasswordForServiceKeyResponse'             => 'NabCommerce\\Service\\ChangePasswordForServiceKeyResponse',
        'ChangeUsernameForServiceKey'                     => 'NabCommerce\\Service\\ChangeUsernameForServiceKey',
        'ChangeUsernameForServiceKeyResponse'             => 'NabCommerce\\Service\\ChangeUsernameForServiceKeyResponse',
        'ChangeEmailForServiceKey'                        => 'NabCommerce\\Service\\ChangeEmailForServiceKey',
        'ChangeEmailForServiceKeyResponse'                => 'NabCommerce\\Service\\ChangeEmailForServiceKeyResponse',
        'GetPasswordExpirationForServiceKey'              => 'NabCommerce\\Service\\GetPasswordExpirationForServiceKey',
        'GetPasswordExpirationForServiceKeyResponse'      => 'NabCommerce\\Service\\GetPasswordExpirationForServiceKeyResponse',
        'ValidateMerchantProfile'                         => 'NabCommerce\\Service\\ValidateMerchantProfile',
        'ValidateMerchantProfileResponse'                 => 'NabCommerce\\Service\\ValidateMerchantProfileResponse',
        'GetAllClaims'                                    => 'NabCommerce\\Service\\GetAllClaims',
        'GetAllClaimsResponse'                            => 'NabCommerce\\Service\\GetAllClaimsResponse',
        'GetClaims'                                       => 'NabCommerce\\Service\\GetClaims',
        'GetClaimsResponse'                               => 'NabCommerce\\Service\\GetClaimsResponse',
        'Renew'                                           => 'NabCommerce\\Service\\Renew',
        'RenewResponse'                                   => 'NabCommerce\\Service\\RenewResponse',
        'SignOnAndAddClaims'                              => 'NabCommerce\\Service\\SignOnAndAddClaims',
        'SignOnAndAddClaimsResponse'                      => 'NabCommerce\\Service\\SignOnAndAddClaimsResponse',
        'DelegatedSignOn'                                 => 'NabCommerce\\Service\\DelegatedSignOn',
        'DelegatedSignOnResponse'                         => 'NabCommerce\\Service\\DelegatedSignOnResponse',
        'FederatedSignOn'                                 => 'NabCommerce\\Service\\FederatedSignOn',
        'FederatedSignOnResponse'                         => 'NabCommerce\\Service\\FederatedSignOnResponse',
        'FederatedSignOnAndAddClaims'                     => 'NabCommerce\\Service\\FederatedSignOnAndAddClaims',
        'FederatedSignOnAndAddClaimsResponse'             => 'NabCommerce\\Service\\FederatedSignOnAndAddClaimsResponse',
        'STSUnavailableFault'                             => 'NabCommerce\\Service\\STSUnavailableFault',
        'BaseFault'                                       => 'NabCommerce\\Service\\BaseFault',
        'ExpiredTokenFault'                               => 'NabCommerce\\Service\\ExpiredTokenFault',
        'InvalidTokenFault'                               => 'NabCommerce\\Service\\InvalidTokenFault',
        'AuthenticationFault'                             => 'NabCommerce\\Service\\AuthenticationFault',
        'LockedByAdminFault'                              => 'NabCommerce\\Service\\LockedByAdminFault',
        'PasswordExpiredFault'                            => 'NabCommerce\\Service\\PasswordExpiredFault',
        'OneTimePasswordFault'                            => 'NabCommerce\\Service\\OneTimePasswordFault',
        'BadAttemptThresholdExceededFault'                => 'NabCommerce\\Service\\BadAttemptThresholdExceededFault',
        'SendEmailFault'                                  => 'NabCommerce\\Service\\SendEmailFault',
        'GeneratePasswordFault'                           => 'NabCommerce\\Service\\GeneratePasswordFault',
        'PasswordInvalidFault'                            => 'NabCommerce\\Service\\PasswordInvalidFault',
        'UserNotFoundFault'                               => 'NabCommerce\\Service\\UserNotFoundFault',
        'InvalidEmailFault'                               => 'NabCommerce\\Service\\InvalidEmailFault',
        'ArrayOfClaimMetaData'                            => 'NabCommerce\\Service\\ArrayOfClaimMetaData',
        'ClaimMetaData'                                   => 'NabCommerce\\Service\\ClaimMetaData',
        'RelyingPartyNotAssociatedToSecurityDomainFault'  => 'NabCommerce\\Service\\RelyingPartyNotAssociatedToSecurityDomainFault',
        'ClaimNotFoundFault'                              => 'NabCommerce\\Service\\ClaimNotFoundFault',
        'AuthorizationFault'                              => 'NabCommerce\\Service\\AuthorizationFault',
        'SystemFault'                                     => 'NabCommerce\\Service\\SystemFault',
        'NonRenewableTokenFault'                          => 'NabCommerce\\Service\\NonRenewableTokenFault',
        'ClaimMappingsNotFoundFault'                      => 'NabCommerce\\Service\\ClaimMappingsNotFoundFault',
        'CWSFault'                                        => 'NabCommerce\\Service\\CWSFault',
        'CWSBaseFault'                                    => 'NabCommerce\\Service\\CWSBaseFault',
        'CWSServiceInformationUnavailableFault'           => 'NabCommerce\\Service\\CWSServiceInformationUnavailableFault',
        'CWSValidationResultFault'                        => 'NabCommerce\\Service\\CWSValidationResultFault',
        'ArrayOfCWSValidationErrorFault'                  => 'NabCommerce\\Service\\ArrayOfCWSValidationErrorFault',
        'CWSValidationErrorFault'                         => 'NabCommerce\\Service\\CWSValidationErrorFault',
        'ArrayOfstring'                                   => 'NabCommerce\\Service\\ArrayOfstring',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://api.cert.nabcommerce.com/CWS/1.0/SOAP/SIS.svc?singleWsdl')
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
    public static function forge(array $options = array(), $wsdl = 'https://api.cert.nabcommerce.com/CWS/1.0/SOAP/SIS.svc?singleWsdl')
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
     *             Sign on using an identity token.
     *             </summary>
     *             <param name="identityToken">Identity token associated with your service key</param>
     *             <returns>Session token</returns>
     *
     * @param SignOnWithToken $parameters
     * @return SignOnWithTokenResponse
     */
    public function SignOnWithToken(SignOnWithToken $parameters)
    {
        return $this->__soapCall('SignOnWithToken', array($parameters));
    }

    /**
     * <summary>
     *             Retrieve service information.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <returns>Service information associated with the session token</returns>
     *
     * @param GetServiceInformation $parameters
     * @return GetServiceInformationResponse
     */
    public function GetServiceInformation(GetServiceInformation $parameters)
    {
        return $this->__soapCall('GetServiceInformation', array($parameters));
    }

    /**
     * <summary>
     *             Save application configuration data.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="applicationData">Application common configuration data</param>
     *             <returns>Application profile ID</returns>
     *
     * @param SaveApplicationData $parameters
     * @return SaveApplicationDataResponse
     */
    public function SaveApplicationData(SaveApplicationData $parameters)
    {
        return $this->__soapCall('SaveApplicationData', array($parameters));
    }

    /**
     * <summary>
     *             Retrieves all current application configuration data associated with the Service Key.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="applicationProfileId">Application profile ID returned from SaveApplicationData()</param>
     *             <returns>Application common configuration data associated with the session token</returns>
     *
     * @param GetApplicationData $parameters
     * @return GetApplicationDataResponse
     */
    public function GetApplicationData(GetApplicationData $parameters)
    {
        return $this->__soapCall('GetApplicationData', array($parameters));
    }

    /**
     * <summary>
     *             Deletes application configuration data.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="applicationProfileId">Application profile ID</param>
     *
     * @param DeleteApplicationData $parameters
     * @return DeleteApplicationDataResponse
     */
    public function DeleteApplicationData(DeleteApplicationData $parameters)
    {
        return $this->__soapCall('DeleteApplicationData', array($parameters));
    }

    /**
     * <summary>
     *             Tests whether merchant profile is initialized for a specific Tender Type.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="serviceId">Service ID</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="tenderType">Tender type</param>
     *             <returns><c>true</c> if the merchant profile has been initialized</returns>
     *
     * @param IsMerchantProfileInitialized $parameters
     * @return IsMerchantProfileInitializedResponse
     */
    public function IsMerchantProfileInitialized(IsMerchantProfileInitialized $parameters)
    {
        return $this->__soapCall('IsMerchantProfileInitialized', array($parameters));
    }

    /**
     * <summary>
     *             Retrieves all merchant profiles associated with a specific Service ID and Tender Type.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="serviceId">Service ID</param>
     *             <param name="tenderType">Tender type</param>
     *             <returns>Collection of merchant profiles</returns>
     *
     * @param GetMerchantProfiles $parameters
     * @return GetMerchantProfilesResponse
     */
    public function GetMerchantProfiles(GetMerchantProfiles $parameters)
    {
        return $this->__soapCall('GetMerchantProfiles', array($parameters));
    }

    /**
     * <summary>
     *             Retrieves all merchant profile IDs associated with a specific Service ID and Tender Type.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="serviceId">Service ID</param>
     *             <param name="tenderType">Tender type</param>
     *             <returns>Collection of merchant profile IDs</returns>
     *
     * @param GetMerchantProfileIds $parameters
     * @return GetMerchantProfileIdsResponse
     */
    public function GetMerchantProfileIds(GetMerchantProfileIds $parameters)
    {
        return $this->__soapCall('GetMerchantProfileIds', array($parameters));
    }

    /**
     * <summary>
     *             Retrieves a specific merchant's merchant profiles for all Service IDs and Tender Types.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <returns>Collection of merchant profiles</returns>
     *
     * @param GetMerchantProfilesByProfileId $parameters
     * @return GetMerchantProfilesByProfileIdResponse
     */
    public function GetMerchantProfilesByProfileId(GetMerchantProfilesByProfileId $parameters)
    {
        return $this->__soapCall('GetMerchantProfilesByProfileId', array($parameters));
    }

    /**
     * <summary>
     *             Retrieves the merchant profile associated with a specific Service ID and Tender Type.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="serviceId">Service ID</param>
     *             <param name="tenderType">Tender type</param>
     *             <returns>The requested merchant profile</returns>
     *
     * @param GetMerchantProfile $parameters
     * @return GetMerchantProfileResponse
     */
    public function GetMerchantProfile(GetMerchantProfile $parameters)
    {
        return $this->__soapCall('GetMerchantProfile', array($parameters));
    }

    /**
     * <summary>
     *             Deletes a specific merchant profile for a Tender Type.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="merchantProfileId">Merchant profile ID</param>
     *             <param name="serviceId">Service ID</param>
     *             <param name="tenderType">Tender type</param>
     *
     * @param DeleteMerchantProfile $parameters
     * @return DeleteMerchantProfileResponse
     */
    public function DeleteMerchantProfile(DeleteMerchantProfile $parameters)
    {
        return $this->__soapCall('DeleteMerchantProfile', array($parameters));
    }

    /**
     * <summary>
     *             Saves one or more merchant profiles for a Tender Type.
     *             </summary>
     *             <param name="sessionToken">Session token</param>
     *             <param name="serviceId">Service ID</param>
     *             <param name="tenderType">Tender type</param>
     *             <param name="merchantProfiles">Merchant profiles</param>
     *
     * @param SaveMerchantProfiles $parameters
     * @return SaveMerchantProfilesResponse
     */
    public function SaveMerchantProfiles(SaveMerchantProfiles $parameters)
    {
        return $this->__soapCall('SaveMerchantProfiles', array($parameters));
    }

    /**
     * <summary>
     *             Sign on using a username and password.
     *             </summary>
     *             <param name="serviceKey">Service key to sign on</param>
     *             <param name="username">Username associated with the specified service key</param>
     *             <param name="password">Password associated with the specified service key and username</param>
     *             <returns>Session token</returns>
     *
     * @param SignOnWithUsernamePasswordForServiceKey $parameters
     * @return SignOnWithUsernamePasswordForServiceKeyResponse
     */
    public function SignOnWithUsernamePasswordForServiceKey(SignOnWithUsernamePasswordForServiceKey $parameters)
    {
        return $this->__soapCall('SignOnWithUsernamePasswordForServiceKey', array($parameters));
    }

    /**
     * <summary>
     *             Reset the password for the specified service key and username.
     *             </summary>
     *             <param name="serviceKey">Service key</param>
     *             <param name="userName">User name associated with specified service key</param>
     *
     * @param ResetPasswordForServiceKey $parameters
     * @return ResetPasswordForServiceKeyResponse
     */
    public function ResetPasswordForServiceKey(ResetPasswordForServiceKey $parameters)
    {
        return $this->__soapCall('ResetPasswordForServiceKey', array($parameters));
    }

    /**
     * <summary>
     *             Change the password for the specified service key and username.
     *             </summary>
     *             <param name="serviceKey">Service key</param>
     *             <param name="userName">Username associated with specified service key</param>
     *             <param name="password">Password currently associated with specified service key and username</param>
     *             <param name="newPassword">New password to associate with specified service key and username</param>
     *
     * @param ChangePasswordForServiceKey $parameters
     * @return ChangePasswordForServiceKeyResponse
     */
    public function ChangePasswordForServiceKey(ChangePasswordForServiceKey $parameters)
    {
        return $this->__soapCall('ChangePasswordForServiceKey', array($parameters));
    }

    /**
     * <summary>
     *             Change the username for the specified service key and username.
     *             </summary>
     *             <param name="serviceKey">Service key</param>
     *             <param name="userName">Username associated with specified service key</param>
     *             <param name="password">Password associated with specified service key and username</param>
     *             <param name="newUsername">New username to associate with specified service key</param>
     *
     * @param ChangeUsernameForServiceKey $parameters
     * @return ChangeUsernameForServiceKeyResponse
     */
    public function ChangeUsernameForServiceKey(ChangeUsernameForServiceKey $parameters)
    {
        return $this->__soapCall('ChangeUsernameForServiceKey', array($parameters));
    }

    /**
     * <summary>
     *             Change the email address for the specified service key and username.
     *             </summary>
     *             <param name="serviceKey">Service key</param>
     *             <param name="userName">Username associated with specified service key</param>
     *             <param name="password">Password associated with specified service key and username</param>
     *             <param name="newEmail">New email to associate with specified service key and username</param>
     *
     * @param ChangeEmailForServiceKey $parameters
     * @return ChangeEmailForServiceKeyResponse
     */
    public function ChangeEmailForServiceKey(ChangeEmailForServiceKey $parameters)
    {
        return $this->__soapCall('ChangeEmailForServiceKey', array($parameters));
    }

    /**
     * <summary>
     *             Change the username for the specified service key and username.
     *             </summary>
     *             <param name="serviceKey">Service key</param>
     *             <param name="userName">Username associated with specified service key</param>
     *             <param name="password">Password associated with specified service key and username</param>
     *
     * @param GetPasswordExpirationForServiceKey $parameters
     * @return GetPasswordExpirationForServiceKeyResponse
     */
    public function GetPasswordExpirationForServiceKey(GetPasswordExpirationForServiceKey $parameters)
    {
        return $this->__soapCall('GetPasswordExpirationForServiceKey', array($parameters));
    }

    /**
     * <summary>
     *             Validates a provided merchant proifile. If the profile is invalid, the operation will throw a
     *             CWSValidationResultFault containing the details of the exception. If your application does not implement
     *             unmanaged merchant profiles – you do not need to call this method.  Your merchant profile will automatically
     *             be validated when you call SaveMerchantProfiles.
     *             </summary>
     *             <param name="sessionToken">The session token associated with this call.</param>
     *             <param name="serviceId">The service id of record for the profile.</param>
     *             <param name="tenderType">The tender type of record for the profile.</param>
     *             <param name="merchantProfile">The merchant profile.</param>
     *
     * @param ValidateMerchantProfile $parameters
     * @return ValidateMerchantProfileResponse
     */
    public function ValidateMerchantProfile(ValidateMerchantProfile $parameters)
    {
        return $this->__soapCall('ValidateMerchantProfile', array($parameters));
    }

    /**
     * <summary>
     *             Get a list of claims given a pair of security tokens. The claims returned are presented as a list of ClaimMetaData objects which is a pairing of the claim namespace and the claim value.
     *             </summary>
     *             <param name="authenticatingToken">This security token is used to authorize the request by verifying the 'verifiedToken' and extract claims data from it.</param>
     *             <param name="verifiedToken">The security token that will yield the claims data.</param>
     *             <returns>A list of claim namespace and value pairs.</returns>
     *
     * @param GetAllClaims $parameters
     * @return GetAllClaimsResponse
     */
    public function GetAllClaims(GetAllClaims $parameters)
    {
        return $this->__soapCall('GetAllClaims', array($parameters));
    }

    /**
     * <summary>
     *             Get a list of claims, within a specific list of claim namespaces, given a pair of security tokens. The claims returned are presented as a list of values that are sequenced to collate with the order of the
     *             list of namespaces passed in.
     *             </summary>
     *             <param name="authenticatingToken">This security token is used to authorize the request by verifying the 'verifiedToken' and extract claims data from it.</param>
     *             <param name="verifiedToken">The security token that will yield the claims data.</param>
     *             <param name="claimNSs">A list of claims namespaces to limit the list of claims returned. The returned list if claim values will be in the same order as specified in this list.</param>
     *             <returns>A list of claims values.</returns>
     *
     * @param GetClaims $parameters
     * @return GetClaimsResponse
     */
    public function GetClaims(GetClaims $parameters)
    {
        return $this->__soapCall('GetClaims', array($parameters));
    }

    /**
     * <summary>
     *             Uses an identity token to authorize the renewal of a another, lower-level security token.
     *             </summary>
     *             <param name="authenticatingToken">An identity token that is used to authorize the renewal of the 'toRenewToken' parameter.</param>
     *             <param name="toRenewToken">A security token that is to be renewed.</param>
     *             <returns>A renewed token.</returns>
     *
     * @param Renew $parameters
     * @return RenewResponse
     */
    public function Renew(Renew $parameters)
    {
        return $this->__soapCall('Renew', array($parameters));
    }

    /**
     * <summary>
     *              Allows a service key identity token holder to add dynamic claims as allowed for their service key
     *              to the resultant session token
     *             </summary>
     *              <param name="identityToken">Identity token associated with your service key</param>
     *             <param name="claims">claims to add to the generated session token</param>
     *             <returns>session token</returns>
     *
     * @param SignOnAndAddClaims $parameters
     * @return SignOnAndAddClaimsResponse
     */
    public function SignOnAndAddClaims(SignOnAndAddClaims $parameters)
    {
        return $this->__soapCall('SignOnAndAddClaims', array($parameters));
    }

    /**
     * <summary>
     *              Allows an initiator (IDT) to receive a session token for onBehalf SK and add dynamic claims as
     *              allowed for their service key
     *             </summary>
     *              <param name="identityToken">Identity token associated with your service key</param>
     *             <param name="onBehalfOfSk">service key to generate session token for.</param>
     *             <param name="claims">claims to add to the generated session token</param>
     *             <returns>session token</returns>
     *
     * @param DelegatedSignOn $parameters
     * @return DelegatedSignOnResponse
     */
    public function DelegatedSignOn(DelegatedSignOn $parameters)
    {
        return $this->__soapCall('DelegatedSignOn', array($parameters));
    }

    /**
     * <summary>
     *              Allow a service key identity token holder to receive a session token with some claims sourced from an external domain token
     *             </summary>
     *              <param name="identityToken">Identity token associated with your service key</param>
     *             <param name="externalDomainToken">external domain token containing claims to add to session token</param>
     *             <returns>session token</returns>
     *
     * @param FederatedSignOn $parameters
     * @return FederatedSignOnResponse
     */
    public function FederatedSignOn(FederatedSignOn $parameters)
    {
        return $this->__soapCall('FederatedSignOn', array($parameters));
    }

    /**
     * <summary>
     *              Allow a service key identity token holder to receive a session token with some claims sourced from an
     *              external domain token and add dynamic claims as allowed for their service key
     *             </summary>
     *              <param name="identityToken">Identity token associated with your service key</param>
     *             <param name="externalDomainToken">external domain token containing claims to add to session token</param>
     *             <param name="claims">claims to add to the generated session token</param>
     *             <returns>session token</returns>
     *
     * @param FederatedSignOnAndAddClaims $parameters
     * @return FederatedSignOnAndAddClaimsResponse
     */
    public function FederatedSignOnAndAddClaims(FederatedSignOnAndAddClaims $parameters)
    {
        return $this->__soapCall('FederatedSignOnAndAddClaims', array($parameters));
    }

}
