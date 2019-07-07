<?php
// This file was auto-generated from sdk-root/src/data/workmail/2017-10-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-10-01', 'endpointPrefix' => 'workmail', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon WorkMail', 'serviceId' => 'WorkMail', 'signatureVersion' => 'v4', 'targetPrefix' => 'WorkMailService', 'uid' => 'workmail-2017-10-01', ], 'operations' => [ 'AssociateDelegateToResource' => [ 'name' => 'AssociateDelegateToResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateDelegateToResourceRequest', ], 'output' => [ 'shape' => 'AssociateDelegateToResourceResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'AssociateMemberToGroup' => [ 'name' => 'AssociateMemberToGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateMemberToGroupRequest', ], 'output' => [ 'shape' => 'AssociateMemberToGroupResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'CreateAlias' => [ 'name' => 'CreateAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateAliasRequest', ], 'output' => [ 'shape' => 'CreateAliasResponse', ], 'errors' => [ [ 'shape' => 'EmailAddressInUseException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'MailDomainNotFoundException', ], [ 'shape' => 'MailDomainStateException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'CreateGroup' => [ 'name' => 'CreateGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateGroupRequest', ], 'output' => [ 'shape' => 'CreateGroupResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NameAvailabilityException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'ReservedNameException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'CreateResource' => [ 'name' => 'CreateResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateResourceRequest', ], 'output' => [ 'shape' => 'CreateResourceResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NameAvailabilityException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'ReservedNameException', ], ], 'idempotent' => true, ], 'CreateUser' => [ 'name' => 'CreateUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateUserRequest', ], 'output' => [ 'shape' => 'CreateUserResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidPasswordException', ], [ 'shape' => 'NameAvailabilityException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'ReservedNameException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'DeleteAlias' => [ 'name' => 'DeleteAlias', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAliasRequest', ], 'output' => [ 'shape' => 'DeleteAliasResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DeleteGroup' => [ 'name' => 'DeleteGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteGroupRequest', ], 'output' => [ 'shape' => 'DeleteGroupResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'DeleteMailboxPermissions' => [ 'name' => 'DeleteMailboxPermissions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteMailboxPermissionsRequest', ], 'output' => [ 'shape' => 'DeleteMailboxPermissionsResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DeleteResource' => [ 'name' => 'DeleteResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteResourceRequest', ], 'output' => [ 'shape' => 'DeleteResourceResponse', ], 'errors' => [ [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DeleteUser' => [ 'name' => 'DeleteUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteUserRequest', ], 'output' => [ 'shape' => 'DeleteUserResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'DeregisterFromWorkMail' => [ 'name' => 'DeregisterFromWorkMail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeregisterFromWorkMailRequest', ], 'output' => [ 'shape' => 'DeregisterFromWorkMailResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DescribeGroup' => [ 'name' => 'DescribeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeGroupRequest', ], 'output' => [ 'shape' => 'DescribeGroupResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DescribeOrganization' => [ 'name' => 'DescribeOrganization', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeOrganizationRequest', ], 'output' => [ 'shape' => 'DescribeOrganizationResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], ], 'idempotent' => true, ], 'DescribeResource' => [ 'name' => 'DescribeResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeResourceRequest', ], 'output' => [ 'shape' => 'DescribeResourceResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DescribeUser' => [ 'name' => 'DescribeUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeUserRequest', ], 'output' => [ 'shape' => 'DescribeUserResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DisassociateDelegateFromResource' => [ 'name' => 'DisassociateDelegateFromResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateDelegateFromResourceRequest', ], 'output' => [ 'shape' => 'DisassociateDelegateFromResourceResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'DisassociateMemberFromGroup' => [ 'name' => 'DisassociateMemberFromGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateMemberFromGroupRequest', ], 'output' => [ 'shape' => 'DisassociateMemberFromGroupResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'GetMailboxDetails' => [ 'name' => 'GetMailboxDetails', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMailboxDetailsRequest', ], 'output' => [ 'shape' => 'GetMailboxDetailsResponse', ], 'errors' => [ [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'EntityNotFoundException', ], ], 'idempotent' => true, ], 'ListAliases' => [ 'name' => 'ListAliases', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAliasesRequest', ], 'output' => [ 'shape' => 'ListAliasesResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ListGroupMembers' => [ 'name' => 'ListGroupMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListGroupMembersRequest', ], 'output' => [ 'shape' => 'ListGroupMembersResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ListGroups' => [ 'name' => 'ListGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListGroupsRequest', ], 'output' => [ 'shape' => 'ListGroupsResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ListMailboxPermissions' => [ 'name' => 'ListMailboxPermissions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMailboxPermissionsRequest', ], 'output' => [ 'shape' => 'ListMailboxPermissionsResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ListOrganizations' => [ 'name' => 'ListOrganizations', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListOrganizationsRequest', ], 'output' => [ 'shape' => 'ListOrganizationsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], ], 'idempotent' => true, ], 'ListResourceDelegates' => [ 'name' => 'ListResourceDelegates', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListResourceDelegatesRequest', ], 'output' => [ 'shape' => 'ListResourceDelegatesResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ListResources' => [ 'name' => 'ListResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListResourcesRequest', ], 'output' => [ 'shape' => 'ListResourcesResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ListUsers' => [ 'name' => 'ListUsers', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListUsersRequest', ], 'output' => [ 'shape' => 'ListUsersResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'PutMailboxPermissions' => [ 'name' => 'PutMailboxPermissions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutMailboxPermissionsRequest', ], 'output' => [ 'shape' => 'PutMailboxPermissionsResponse', ], 'errors' => [ [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'RegisterToWorkMail' => [ 'name' => 'RegisterToWorkMail', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RegisterToWorkMailRequest', ], 'output' => [ 'shape' => 'RegisterToWorkMailResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EmailAddressInUseException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'EntityAlreadyRegisteredException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'MailDomainNotFoundException', ], [ 'shape' => 'MailDomainStateException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], 'ResetPassword' => [ 'name' => 'ResetPassword', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ResetPasswordRequest', ], 'output' => [ 'shape' => 'ResetPasswordResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidPasswordException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'UpdateMailboxQuota' => [ 'name' => 'UpdateMailboxQuota', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateMailboxQuotaRequest', ], 'output' => [ 'shape' => 'UpdateMailboxQuotaResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], ], 'idempotent' => true, ], 'UpdatePrimaryEmailAddress' => [ 'name' => 'UpdatePrimaryEmailAddress', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdatePrimaryEmailAddressRequest', ], 'output' => [ 'shape' => 'UpdatePrimaryEmailAddressResponse', ], 'errors' => [ [ 'shape' => 'DirectoryServiceAuthenticationFailedException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EmailAddressInUseException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'MailDomainNotFoundException', ], [ 'shape' => 'MailDomainStateException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], [ 'shape' => 'UnsupportedOperationException', ], ], 'idempotent' => true, ], 'UpdateResource' => [ 'name' => 'UpdateResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateResourceRequest', ], 'output' => [ 'shape' => 'UpdateResourceResponse', ], 'errors' => [ [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'EntityNotFoundException', ], [ 'shape' => 'EntityStateException', ], [ 'shape' => 'InvalidConfigurationException', ], [ 'shape' => 'EmailAddressInUseException', ], [ 'shape' => 'MailDomainNotFoundException', ], [ 'shape' => 'MailDomainStateException', ], [ 'shape' => 'NameAvailabilityException', ], [ 'shape' => 'OrganizationNotFoundException', ], [ 'shape' => 'OrganizationStateException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'Aliases' => [ 'type' => 'list', 'member' => [ 'shape' => 'EmailAddress', ], ], 'AssociateDelegateToResourceRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'ResourceId', 'EntityId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'AssociateDelegateToResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'AssociateMemberToGroupRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'GroupId', 'MemberId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], 'MemberId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'AssociateMemberToGroupResponse' => [ 'type' => 'structure', 'members' => [], ], 'BookingOptions' => [ 'type' => 'structure', 'members' => [ 'AutoAcceptRequests' => [ 'shape' => 'Boolean', ], 'AutoDeclineRecurringRequests' => [ 'shape' => 'Boolean', ], 'AutoDeclineConflictingRequests' => [ 'shape' => 'Boolean', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'CreateAliasRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', 'Alias', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'Alias' => [ 'shape' => 'EmailAddress', ], ], ], 'CreateAliasResponse' => [ 'type' => 'structure', 'members' => [], ], 'CreateGroupRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'Name', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'Name' => [ 'shape' => 'GroupName', ], ], ], 'CreateGroupResponse' => [ 'type' => 'structure', 'members' => [ 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'CreateResourceRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'Name', 'Type', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'Name' => [ 'shape' => 'ResourceName', ], 'Type' => [ 'shape' => 'ResourceType', ], ], ], 'CreateResourceResponse' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'ResourceId', ], ], ], 'CreateUserRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'Name', 'DisplayName', 'Password', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'Name' => [ 'shape' => 'UserName', ], 'DisplayName' => [ 'shape' => 'String', ], 'Password' => [ 'shape' => 'Password', ], ], ], 'CreateUserResponse' => [ 'type' => 'structure', 'members' => [ 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'Delegate' => [ 'type' => 'structure', 'required' => [ 'Id', 'Type', ], 'members' => [ 'Id' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'MemberType', ], ], ], 'DeleteAliasRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', 'Alias', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'Alias' => [ 'shape' => 'EmailAddress', ], ], ], 'DeleteAliasResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteGroupRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'GroupId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DeleteGroupResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteMailboxPermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', 'GranteeId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'GranteeId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DeleteMailboxPermissionsResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteResourceRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'ResourceId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], ], ], 'DeleteResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteUserRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'UserId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DeleteUserResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeregisterFromWorkMailRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DeregisterFromWorkMailResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'GroupId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DescribeGroupResponse' => [ 'type' => 'structure', 'members' => [ 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], 'Name' => [ 'shape' => 'GroupName', ], 'Email' => [ 'shape' => 'EmailAddress', ], 'State' => [ 'shape' => 'EntityState', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'DescribeOrganizationRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], ], ], 'DescribeOrganizationResponse' => [ 'type' => 'structure', 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'Alias' => [ 'shape' => 'OrganizationName', ], 'State' => [ 'shape' => 'String', ], 'DirectoryId' => [ 'shape' => 'String', ], 'DirectoryType' => [ 'shape' => 'String', ], 'DefaultMailDomain' => [ 'shape' => 'String', ], 'CompletedDate' => [ 'shape' => 'Timestamp', ], 'ErrorMessage' => [ 'shape' => 'String', ], ], ], 'DescribeResourceRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'ResourceId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], ], ], 'DescribeResourceResponse' => [ 'type' => 'structure', 'members' => [ 'ResourceId' => [ 'shape' => 'ResourceId', ], 'Email' => [ 'shape' => 'EmailAddress', ], 'Name' => [ 'shape' => 'ResourceName', ], 'Type' => [ 'shape' => 'ResourceType', ], 'BookingOptions' => [ 'shape' => 'BookingOptions', ], 'State' => [ 'shape' => 'EntityState', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'DescribeUserRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'UserId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DescribeUserResponse' => [ 'type' => 'structure', 'members' => [ 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], 'Name' => [ 'shape' => 'UserName', ], 'Email' => [ 'shape' => 'EmailAddress', ], 'DisplayName' => [ 'shape' => 'String', ], 'State' => [ 'shape' => 'EntityState', ], 'UserRole' => [ 'shape' => 'UserRole', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'DirectoryServiceAuthenticationFailedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'DirectoryUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'DisassociateDelegateFromResourceRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'ResourceId', 'EntityId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DisassociateDelegateFromResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'DisassociateMemberFromGroupRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'GroupId', 'MemberId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], 'MemberId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'DisassociateMemberFromGroupResponse' => [ 'type' => 'structure', 'members' => [], ], 'EmailAddress' => [ 'type' => 'string', 'max' => 254, 'min' => 1, 'pattern' => '[a-zA-Z0-9._%+-]{1,64}@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}', ], 'EmailAddressInUseException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'EntityAlreadyRegisteredException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'EntityNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'EntityState' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', 'DELETED', ], ], 'EntityStateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'GetMailboxDetailsRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'UserId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], ], ], 'GetMailboxDetailsResponse' => [ 'type' => 'structure', 'members' => [ 'MailboxQuota' => [ 'shape' => 'MailboxQuota', ], 'MailboxSize' => [ 'shape' => 'MailboxSize', ], ], ], 'Group' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'WorkMailIdentifier', ], 'Email' => [ 'shape' => 'EmailAddress', ], 'Name' => [ 'shape' => 'GroupName', ], 'State' => [ 'shape' => 'EntityState', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'GroupName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[\\u0020-\\u00FF]+', ], 'Groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ], 'InvalidConfigurationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidPasswordException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ListAliasesRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListAliasesResponse' => [ 'type' => 'structure', 'members' => [ 'Aliases' => [ 'shape' => 'Aliases', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListGroupMembersRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'GroupId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'GroupId' => [ 'shape' => 'WorkMailIdentifier', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListGroupMembersResponse' => [ 'type' => 'structure', 'members' => [ 'Members' => [ 'shape' => 'Members', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListGroupsResponse' => [ 'type' => 'structure', 'members' => [ 'Groups' => [ 'shape' => 'Groups', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListMailboxPermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListMailboxPermissionsResponse' => [ 'type' => 'structure', 'members' => [ 'Permissions' => [ 'shape' => 'Permissions', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListOrganizationsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListOrganizationsResponse' => [ 'type' => 'structure', 'members' => [ 'OrganizationSummaries' => [ 'shape' => 'OrganizationSummaries', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListResourceDelegatesRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'ResourceId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'ResourceId' => [ 'shape' => 'WorkMailIdentifier', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListResourceDelegatesResponse' => [ 'type' => 'structure', 'members' => [ 'Delegates' => [ 'shape' => 'ResourceDelegates', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListResourcesResponse' => [ 'type' => 'structure', 'members' => [ 'Resources' => [ 'shape' => 'Resources', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListUsersRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListUsersResponse' => [ 'type' => 'structure', 'members' => [ 'Users' => [ 'shape' => 'Users', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MailDomainNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'MailDomainStateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'MailboxQuota' => [ 'type' => 'integer', 'box' => true, 'min' => 1, ], 'MailboxSize' => [ 'type' => 'double', 'min' => 0, ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'Member' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'MemberType', ], 'State' => [ 'shape' => 'EntityState', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'MemberType' => [ 'type' => 'string', 'enum' => [ 'GROUP', 'USER', ], ], 'Members' => [ 'type' => 'list', 'member' => [ 'shape' => 'Member', ], ], 'NameAvailabilityException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'NextToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'OrganizationId' => [ 'type' => 'string', 'pattern' => '^m-[0-9a-f]{32}$', ], 'OrganizationName' => [ 'type' => 'string', 'max' => 62, 'min' => 1, 'pattern' => '^(?!d-)([\\da-zA-Z]+)([-]*[\\da-zA-Z])*', ], 'OrganizationNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'OrganizationStateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'OrganizationSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrganizationSummary', ], ], 'OrganizationSummary' => [ 'type' => 'structure', 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'Alias' => [ 'shape' => 'OrganizationName', ], 'ErrorMessage' => [ 'shape' => 'String', ], 'State' => [ 'shape' => 'String', ], ], ], 'Password' => [ 'type' => 'string', 'max' => 256, 'pattern' => '[\\u0020-\\u00FF]+', 'sensitive' => true, ], 'Permission' => [ 'type' => 'structure', 'required' => [ 'GranteeId', 'GranteeType', 'PermissionValues', ], 'members' => [ 'GranteeId' => [ 'shape' => 'WorkMailIdentifier', ], 'GranteeType' => [ 'shape' => 'MemberType', ], 'PermissionValues' => [ 'shape' => 'PermissionValues', ], ], ], 'PermissionType' => [ 'type' => 'string', 'enum' => [ 'FULL_ACCESS', 'SEND_AS', 'SEND_ON_BEHALF', ], ], 'PermissionValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionType', ], ], 'Permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], ], 'PutMailboxPermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', 'GranteeId', 'PermissionValues', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'GranteeId' => [ 'shape' => 'WorkMailIdentifier', ], 'PermissionValues' => [ 'shape' => 'PermissionValues', ], ], ], 'PutMailboxPermissionsResponse' => [ 'type' => 'structure', 'members' => [], ], 'RegisterToWorkMailRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', 'Email', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'Email' => [ 'shape' => 'EmailAddress', ], ], ], 'RegisterToWorkMailResponse' => [ 'type' => 'structure', 'members' => [], ], 'ReservedNameException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResetPasswordRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'UserId', 'Password', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], 'Password' => [ 'shape' => 'Password', ], ], ], 'ResetPasswordResponse' => [ 'type' => 'structure', 'members' => [], ], 'Resource' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'WorkMailIdentifier', ], 'Email' => [ 'shape' => 'EmailAddress', ], 'Name' => [ 'shape' => 'ResourceName', ], 'Type' => [ 'shape' => 'ResourceType', ], 'State' => [ 'shape' => 'EntityState', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'ResourceDelegates' => [ 'type' => 'list', 'member' => [ 'shape' => 'Delegate', ], ], 'ResourceId' => [ 'type' => 'string', 'pattern' => '^r-[0-9a-f]{32}$', ], 'ResourceName' => [ 'type' => 'string', 'max' => 20, 'min' => 1, 'pattern' => '[\\w\\-.]+(@[a-zA-Z0-9.\\-]+\\.[a-zA-Z0-9]{2,})?', ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'ROOM', 'EQUIPMENT', ], ], 'Resources' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ], 'String' => [ 'type' => 'string', 'max' => 256, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UnsupportedOperationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'UpdateMailboxQuotaRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'UserId', 'MailboxQuota', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'UserId' => [ 'shape' => 'WorkMailIdentifier', ], 'MailboxQuota' => [ 'shape' => 'MailboxQuota', ], ], ], 'UpdateMailboxQuotaResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdatePrimaryEmailAddressRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'EntityId', 'Email', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'EntityId' => [ 'shape' => 'WorkMailIdentifier', ], 'Email' => [ 'shape' => 'EmailAddress', ], ], ], 'UpdatePrimaryEmailAddressResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateResourceRequest' => [ 'type' => 'structure', 'required' => [ 'OrganizationId', 'ResourceId', ], 'members' => [ 'OrganizationId' => [ 'shape' => 'OrganizationId', ], 'ResourceId' => [ 'shape' => 'ResourceId', ], 'Name' => [ 'shape' => 'ResourceName', ], 'BookingOptions' => [ 'shape' => 'BookingOptions', ], ], ], 'UpdateResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'User' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'WorkMailIdentifier', ], 'Email' => [ 'shape' => 'EmailAddress', ], 'Name' => [ 'shape' => 'UserName', ], 'DisplayName' => [ 'shape' => 'String', ], 'State' => [ 'shape' => 'EntityState', ], 'UserRole' => [ 'shape' => 'UserRole', ], 'EnabledDate' => [ 'shape' => 'Timestamp', ], 'DisabledDate' => [ 'shape' => 'Timestamp', ], ], ], 'UserName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[\\w\\-.]+(@[a-zA-Z0-9.\\-]+\\.[a-zA-Z0-9]{2,})?', ], 'UserRole' => [ 'type' => 'string', 'enum' => [ 'USER', 'RESOURCE', 'SYSTEM_USER', ], ], 'Users' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], ], 'WorkMailIdentifier' => [ 'type' => 'string', 'max' => 256, 'min' => 12, ], ],];
