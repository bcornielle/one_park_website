<?php
namespace Aws\Organizations;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Organizations** service.
 * @method \Aws\Result acceptHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptHandshakeAsync(array $args = [])
 * @method \Aws\Result attachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPolicyAsync(array $args = [])
 * @method \Aws\Result cancelHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelHandshakeAsync(array $args = [])
 * @method \Aws\Result createAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountAsync(array $args = [])
 * @method \Aws\Result createGovCloudAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGovCloudAccountAsync(array $args = [])
 * @method \Aws\Result createOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrganizationAsync(array $args = [])
 * @method \Aws\Result createOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrganizationalUnitAsync(array $args = [])
 * @method \Aws\Result createPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPolicyAsync(array $args = [])
 * @method \Aws\Result declineHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise declineHandshakeAsync(array $args = [])
 * @method \Aws\Result deleteOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOrganizationAsync(array $args = [])
 * @method \Aws\Result deleteOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOrganizationalUnitAsync(array $args = [])
 * @method \Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \Aws\Result describeAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAsync(array $args = [])
 * @method \Aws\Result describeCreateAccountStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCreateAccountStatusAsync(array $args = [])
 * @method \Aws\Result describeHandshake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHandshakeAsync(array $args = [])
 * @method \Aws\Result describeOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationAsync(array $args = [])
 * @method \Aws\Result describeOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationalUnitAsync(array $args = [])
 * @method \Aws\Result describePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePolicyAsync(array $args = [])
 * @method \Aws\Result detachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPolicyAsync(array $args = [])
 * @method \Aws\Result disableAWSServiceAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAWSServiceAccessAsync(array $args = [])
 * @method \Aws\Result disablePolicyType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disablePolicyTypeAsync(array $args = [])
 * @method \Aws\Result enableAWSServiceAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAWSServiceAccessAsync(array $args = [])
 * @method \Aws\Result enableAllFeatures(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAllFeaturesAsync(array $args = [])
 * @method \Aws\Result enablePolicyType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enablePolicyTypeAsync(array $args = [])
 * @method \Aws\Result inviteAccountToOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise inviteAccountToOrganizationAsync(array $args = [])
 * @method \Aws\Result leaveOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise leaveOrganizationAsync(array $args = [])
 * @method \Aws\Result listAWSServiceAccessForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAWSServiceAccessForOrganizationAsync(array $args = [])
 * @method \Aws\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \Aws\Result listAccountsForParent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsForParentAsync(array $args = [])
 * @method \Aws\Result listChildren(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChildrenAsync(array $args = [])
 * @method \Aws\Result listCreateAccountStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCreateAccountStatusAsync(array $args = [])
 * @method \Aws\Result listHandshakesForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHandshakesForAccountAsync(array $args = [])
 * @method \Aws\Result listHandshakesForOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHandshakesForOrganizationAsync(array $args = [])
 * @method \Aws\Result listOrganizationalUnitsForParent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationalUnitsForParentAsync(array $args = [])
 * @method \Aws\Result listParents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listParentsAsync(array $args = [])
 * @method \Aws\Result listPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesAsync(array $args = [])
 * @method \Aws\Result listPoliciesForTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPoliciesForTargetAsync(array $args = [])
 * @method \Aws\Result listRoots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRootsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTargetsForPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsForPolicyAsync(array $args = [])
 * @method \Aws\Result moveAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moveAccountAsync(array $args = [])
 * @method \Aws\Result removeAccountFromOrganization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAccountFromOrganizationAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateOrganizationalUnit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrganizationalUnitAsync(array $args = [])
 * @method \Aws\Result updatePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePolicyAsync(array $args = [])
 */
class OrganizationsClient extends AwsClient {}
