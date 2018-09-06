<?php
// This file was auto-generated from sdk-root/src/data/config/2014-11-12/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2014-11-12', 'endpointPrefix' => 'config', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'Config Service', 'serviceFullName' => 'AWS Config', 'signatureVersion' => 'v4', 'targetPrefix' => 'StarlingDoveService', 'uid' => 'config-2014-11-12', ], 'operations' => [ 'DeleteConfigRule' => [ 'name' => 'DeleteConfigRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteConfigRuleRequest', ], 'errors' => [ [ 'shape' => 'NoSuchConfigRuleException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'DeleteConfigurationRecorder' => [ 'name' => 'DeleteConfigurationRecorder', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteConfigurationRecorderRequest', ], 'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ], ], 'DeleteDeliveryChannel' => [ 'name' => 'DeleteDeliveryChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteDeliveryChannelRequest', ], 'errors' => [ [ 'shape' => 'NoSuchDeliveryChannelException', ], [ 'shape' => 'LastDeliveryChannelDeleteFailedException', ], ], ], 'DeleteEvaluationResults' => [ 'name' => 'DeleteEvaluationResults', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteEvaluationResultsRequest', ], 'output' => [ 'shape' => 'DeleteEvaluationResultsResponse', ], 'errors' => [ [ 'shape' => 'NoSuchConfigRuleException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'DeliverConfigSnapshot' => [ 'name' => 'DeliverConfigSnapshot', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeliverConfigSnapshotRequest', ], 'output' => [ 'shape' => 'DeliverConfigSnapshotResponse', ], 'errors' => [ [ 'shape' => 'NoSuchDeliveryChannelException', ], [ 'shape' => 'NoAvailableConfigurationRecorderException', ], [ 'shape' => 'NoRunningConfigurationRecorderException', ], ], ], 'DescribeComplianceByConfigRule' => [ 'name' => 'DescribeComplianceByConfigRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeComplianceByConfigRuleRequest', ], 'output' => [ 'shape' => 'DescribeComplianceByConfigRuleResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'NoSuchConfigRuleException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeComplianceByResource' => [ 'name' => 'DescribeComplianceByResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeComplianceByResourceRequest', ], 'output' => [ 'shape' => 'DescribeComplianceByResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeConfigRuleEvaluationStatus' => [ 'name' => 'DescribeConfigRuleEvaluationStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeConfigRuleEvaluationStatusRequest', ], 'output' => [ 'shape' => 'DescribeConfigRuleEvaluationStatusResponse', ], 'errors' => [ [ 'shape' => 'NoSuchConfigRuleException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeConfigRules' => [ 'name' => 'DescribeConfigRules', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeConfigRulesRequest', ], 'output' => [ 'shape' => 'DescribeConfigRulesResponse', ], 'errors' => [ [ 'shape' => 'NoSuchConfigRuleException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeConfigurationRecorderStatus' => [ 'name' => 'DescribeConfigurationRecorderStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeConfigurationRecorderStatusRequest', ], 'output' => [ 'shape' => 'DescribeConfigurationRecorderStatusResponse', ], 'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ], ], 'DescribeConfigurationRecorders' => [ 'name' => 'DescribeConfigurationRecorders', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeConfigurationRecordersRequest', ], 'output' => [ 'shape' => 'DescribeConfigurationRecordersResponse', ], 'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ], ], 'DescribeDeliveryChannelStatus' => [ 'name' => 'DescribeDeliveryChannelStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDeliveryChannelStatusRequest', ], 'output' => [ 'shape' => 'DescribeDeliveryChannelStatusResponse', ], 'errors' => [ [ 'shape' => 'NoSuchDeliveryChannelException', ], ], ], 'DescribeDeliveryChannels' => [ 'name' => 'DescribeDeliveryChannels', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDeliveryChannelsRequest', ], 'output' => [ 'shape' => 'DescribeDeliveryChannelsResponse', ], 'errors' => [ [ 'shape' => 'NoSuchDeliveryChannelException', ], ], ], 'GetComplianceDetailsByConfigRule' => [ 'name' => 'GetComplianceDetailsByConfigRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetComplianceDetailsByConfigRuleRequest', ], 'output' => [ 'shape' => 'GetComplianceDetailsByConfigRuleResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'NoSuchConfigRuleException', ], ], ], 'GetComplianceDetailsByResource' => [ 'name' => 'GetComplianceDetailsByResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetComplianceDetailsByResourceRequest', ], 'output' => [ 'shape' => 'GetComplianceDetailsByResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ], ], 'GetComplianceSummaryByConfigRule' => [ 'name' => 'GetComplianceSummaryByConfigRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'output' => [ 'shape' => 'GetComplianceSummaryByConfigRuleResponse', ], ], 'GetComplianceSummaryByResourceType' => [ 'name' => 'GetComplianceSummaryByResourceType', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetComplianceSummaryByResourceTypeRequest', ], 'output' => [ 'shape' => 'GetComplianceSummaryByResourceTypeResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ], ], 'GetResourceConfigHistory' => [ 'name' => 'GetResourceConfigHistory', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourceConfigHistoryRequest', ], 'output' => [ 'shape' => 'GetResourceConfigHistoryResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidTimeRangeException', ], [ 'shape' => 'InvalidLimitException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'NoAvailableConfigurationRecorderException', ], [ 'shape' => 'ResourceNotDiscoveredException', ], ], ], 'ListDiscoveredResources' => [ 'name' => 'ListDiscoveredResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListDiscoveredResourcesRequest', ], 'output' => [ 'shape' => 'ListDiscoveredResourcesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidLimitException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'NoAvailableConfigurationRecorderException', ], ], ], 'PutConfigRule' => [ 'name' => 'PutConfigRule', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutConfigRuleRequest', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MaxNumberOfConfigRulesExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InsufficientPermissionsException', ], [ 'shape' => 'NoAvailableConfigurationRecorderException', ], ], ], 'PutConfigurationRecorder' => [ 'name' => 'PutConfigurationRecorder', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutConfigurationRecorderRequest', ], 'errors' => [ [ 'shape' => 'MaxNumberOfConfigurationRecordersExceededException', ], [ 'shape' => 'InvalidConfigurationRecorderNameException', ], [ 'shape' => 'InvalidRoleException', ], [ 'shape' => 'InvalidRecordingGroupException', ], ], ], 'PutDeliveryChannel' => [ 'name' => 'PutDeliveryChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutDeliveryChannelRequest', ], 'errors' => [ [ 'shape' => 'MaxNumberOfDeliveryChannelsExceededException', ], [ 'shape' => 'NoAvailableConfigurationRecorderException', ], [ 'shape' => 'InvalidDeliveryChannelNameException', ], [ 'shape' => 'NoSuchBucketException', ], [ 'shape' => 'InvalidS3KeyPrefixException', ], [ 'shape' => 'InvalidSNSTopicARNException', ], [ 'shape' => 'InsufficientDeliveryPolicyException', ], ], ], 'PutEvaluations' => [ 'name' => 'PutEvaluations', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutEvaluationsRequest', ], 'output' => [ 'shape' => 'PutEvaluationsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'InvalidResultTokenException', ], [ 'shape' => 'NoSuchConfigRuleException', ], ], ], 'StartConfigRulesEvaluation' => [ 'name' => 'StartConfigRulesEvaluation', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartConfigRulesEvaluationRequest', ], 'output' => [ 'shape' => 'StartConfigRulesEvaluationResponse', ], 'errors' => [ [ 'shape' => 'NoSuchConfigRuleException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidParameterValueException', ], ], ], 'StartConfigurationRecorder' => [ 'name' => 'StartConfigurationRecorder', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartConfigurationRecorderRequest', ], 'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], [ 'shape' => 'NoAvailableDeliveryChannelException', ], ], ], 'StopConfigurationRecorder' => [ 'name' => 'StopConfigurationRecorder', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopConfigurationRecorderRequest', ], 'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ], ], ], 'shapes' => [ 'ARN' => [ 'type' => 'string', ], 'AccountId' => [ 'type' => 'string', ], 'AllSupported' => [ 'type' => 'boolean', ], 'AvailabilityZone' => [ 'type' => 'string', ], 'AwsRegion' => [ 'type' => 'string', ], 'Boolean' => [ 'type' => 'boolean', ], 'ChannelName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ChronologicalOrder' => [ 'type' => 'string', 'enum' => [ 'Reverse', 'Forward', ], ], 'Compliance' => [ 'type' => 'structure', 'members' => [ 'ComplianceType' => [ 'shape' => 'ComplianceType', ], 'ComplianceContributorCount' => [ 'shape' => 'ComplianceContributorCount', ], ], ], 'ComplianceByConfigRule' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], 'Compliance' => [ 'shape' => 'Compliance', ], ], ], 'ComplianceByConfigRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComplianceByConfigRule', ], ], 'ComplianceByResource' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'StringWithCharLimit256', ], 'ResourceId' => [ 'shape' => 'StringWithCharLimit256', ], 'Compliance' => [ 'shape' => 'Compliance', ], ], ], 'ComplianceByResources' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComplianceByResource', ], ], 'ComplianceContributorCount' => [ 'type' => 'structure', 'members' => [ 'CappedCount' => [ 'shape' => 'Integer', ], 'CapExceeded' => [ 'shape' => 'Boolean', ], ], ], 'ComplianceResourceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringWithCharLimit256', ], 'max' => 100, 'min' => 0, ], 'ComplianceSummariesByResourceType' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComplianceSummaryByResourceType', ], ], 'ComplianceSummary' => [ 'type' => 'structure', 'members' => [ 'CompliantResourceCount' => [ 'shape' => 'ComplianceContributorCount', ], 'NonCompliantResourceCount' => [ 'shape' => 'ComplianceContributorCount', ], 'ComplianceSummaryTimestamp' => [ 'shape' => 'Date', ], ], ], 'ComplianceSummaryByResourceType' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'StringWithCharLimit256', ], 'ComplianceSummary' => [ 'shape' => 'ComplianceSummary', ], ], ], 'ComplianceType' => [ 'type' => 'string', 'enum' => [ 'COMPLIANT', 'NON_COMPLIANT', 'NOT_APPLICABLE', 'INSUFFICIENT_DATA', ], ], 'ComplianceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComplianceType', ], 'max' => 3, 'min' => 0, ], 'ConfigExportDeliveryInfo' => [ 'type' => 'structure', 'members' => [ 'lastStatus' => [ 'shape' => 'DeliveryStatus', ], 'lastErrorCode' => [ 'shape' => 'String', ], 'lastErrorMessage' => [ 'shape' => 'String', ], 'lastAttemptTime' => [ 'shape' => 'Date', ], 'lastSuccessfulTime' => [ 'shape' => 'Date', ], 'nextDeliveryTime' => [ 'shape' => 'Date', ], ], ], 'ConfigRule' => [ 'type' => 'structure', 'required' => [ 'Source', ], 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], 'ConfigRuleArn' => [ 'shape' => 'String', ], 'ConfigRuleId' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'EmptiableStringWithCharLimit256', ], 'Scope' => [ 'shape' => 'Scope', ], 'Source' => [ 'shape' => 'Source', ], 'InputParameters' => [ 'shape' => 'StringWithCharLimit1024', ], 'MaximumExecutionFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ], 'ConfigRuleState' => [ 'shape' => 'ConfigRuleState', ], ], ], 'ConfigRuleEvaluationStatus' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], 'ConfigRuleArn' => [ 'shape' => 'String', ], 'ConfigRuleId' => [ 'shape' => 'String', ], 'LastSuccessfulInvocationTime' => [ 'shape' => 'Date', ], 'LastFailedInvocationTime' => [ 'shape' => 'Date', ], 'LastSuccessfulEvaluationTime' => [ 'shape' => 'Date', ], 'LastFailedEvaluationTime' => [ 'shape' => 'Date', ], 'FirstActivatedTime' => [ 'shape' => 'Date', ], 'LastErrorCode' => [ 'shape' => 'String', ], 'LastErrorMessage' => [ 'shape' => 'String', ], 'FirstEvaluationStarted' => [ 'shape' => 'Boolean', ], ], ], 'ConfigRuleEvaluationStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigRuleEvaluationStatus', ], ], 'ConfigRuleNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringWithCharLimit64', ], 'max' => 25, 'min' => 0, ], 'ConfigRuleState' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETING', 'DELETING_RESULTS', 'EVALUATING', ], ], 'ConfigRules' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigRule', ], ], 'ConfigSnapshotDeliveryProperties' => [ 'type' => 'structure', 'members' => [ 'deliveryFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ], ], ], 'ConfigStreamDeliveryInfo' => [ 'type' => 'structure', 'members' => [ 'lastStatus' => [ 'shape' => 'DeliveryStatus', ], 'lastErrorCode' => [ 'shape' => 'String', ], 'lastErrorMessage' => [ 'shape' => 'String', ], 'lastStatusChangeTime' => [ 'shape' => 'Date', ], ], ], 'Configuration' => [ 'type' => 'string', ], 'ConfigurationItem' => [ 'type' => 'structure', 'members' => [ 'version' => [ 'shape' => 'Version', ], 'accountId' => [ 'shape' => 'AccountId', ], 'configurationItemCaptureTime' => [ 'shape' => 'ConfigurationItemCaptureTime', ], 'configurationItemStatus' => [ 'shape' => 'ConfigurationItemStatus', ], 'configurationStateId' => [ 'shape' => 'ConfigurationStateId', ], 'configurationItemMD5Hash' => [ 'shape' => 'ConfigurationItemMD5Hash', ], 'arn' => [ 'shape' => 'ARN', ], 'resourceType' => [ 'shape' => 'ResourceType', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'resourceName' => [ 'shape' => 'ResourceName', ], 'awsRegion' => [ 'shape' => 'AwsRegion', ], 'availabilityZone' => [ 'shape' => 'AvailabilityZone', ], 'resourceCreationTime' => [ 'shape' => 'ResourceCreationTime', ], 'tags' => [ 'shape' => 'Tags', ], 'relatedEvents' => [ 'shape' => 'RelatedEventList', ], 'relationships' => [ 'shape' => 'RelationshipList', ], 'configuration' => [ 'shape' => 'Configuration', ], 'supplementaryConfiguration' => [ 'shape' => 'SupplementaryConfiguration', ], ], ], 'ConfigurationItemCaptureTime' => [ 'type' => 'timestamp', ], 'ConfigurationItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigurationItem', ], ], 'ConfigurationItemMD5Hash' => [ 'type' => 'string', ], 'ConfigurationItemStatus' => [ 'type' => 'string', 'enum' => [ 'Ok', 'Failed', 'Discovered', 'Deleted', ], ], 'ConfigurationRecorder' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'RecorderName', ], 'roleARN' => [ 'shape' => 'String', ], 'recordingGroup' => [ 'shape' => 'RecordingGroup', ], ], ], 'ConfigurationRecorderList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigurationRecorder', ], ], 'ConfigurationRecorderNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecorderName', ], ], 'ConfigurationRecorderStatus' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'lastStartTime' => [ 'shape' => 'Date', ], 'lastStopTime' => [ 'shape' => 'Date', ], 'recording' => [ 'shape' => 'Boolean', ], 'lastStatus' => [ 'shape' => 'RecorderStatus', ], 'lastErrorCode' => [ 'shape' => 'String', ], 'lastErrorMessage' => [ 'shape' => 'String', ], 'lastStatusChangeTime' => [ 'shape' => 'Date', ], ], ], 'ConfigurationRecorderStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConfigurationRecorderStatus', ], ], 'ConfigurationStateId' => [ 'type' => 'string', ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteConfigRuleRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigRuleName', ], 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], ], ], 'DeleteConfigurationRecorderRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigurationRecorderName', ], 'members' => [ 'ConfigurationRecorderName' => [ 'shape' => 'RecorderName', ], ], ], 'DeleteDeliveryChannelRequest' => [ 'type' => 'structure', 'required' => [ 'DeliveryChannelName', ], 'members' => [ 'DeliveryChannelName' => [ 'shape' => 'ChannelName', ], ], ], 'DeleteEvaluationResultsRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigRuleName', ], 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], ], ], 'DeleteEvaluationResultsResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeliverConfigSnapshotRequest' => [ 'type' => 'structure', 'required' => [ 'deliveryChannelName', ], 'members' => [ 'deliveryChannelName' => [ 'shape' => 'ChannelName', ], ], ], 'DeliverConfigSnapshotResponse' => [ 'type' => 'structure', 'members' => [ 'configSnapshotId' => [ 'shape' => 'String', ], ], ], 'DeliveryChannel' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'ChannelName', ], 's3BucketName' => [ 'shape' => 'String', ], 's3KeyPrefix' => [ 'shape' => 'String', ], 'snsTopicARN' => [ 'shape' => 'String', ], 'configSnapshotDeliveryProperties' => [ 'shape' => 'ConfigSnapshotDeliveryProperties', ], ], ], 'DeliveryChannelList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeliveryChannel', ], ], 'DeliveryChannelNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChannelName', ], ], 'DeliveryChannelStatus' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'configSnapshotDeliveryInfo' => [ 'shape' => 'ConfigExportDeliveryInfo', ], 'configHistoryDeliveryInfo' => [ 'shape' => 'ConfigExportDeliveryInfo', ], 'configStreamDeliveryInfo' => [ 'shape' => 'ConfigStreamDeliveryInfo', ], ], ], 'DeliveryChannelStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeliveryChannelStatus', ], ], 'DeliveryStatus' => [ 'type' => 'string', 'enum' => [ 'Success', 'Failure', 'Not_Applicable', ], ], 'DescribeComplianceByConfigRuleRequest' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ], 'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeComplianceByConfigRuleResponse' => [ 'type' => 'structure', 'members' => [ 'ComplianceByConfigRules' => [ 'shape' => 'ComplianceByConfigRules', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeComplianceByResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'StringWithCharLimit256', ], 'ResourceId' => [ 'shape' => 'StringWithCharLimit256', ], 'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ], 'Limit' => [ 'shape' => 'Limit', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeComplianceByResourceResponse' => [ 'type' => 'structure', 'members' => [ 'ComplianceByResources' => [ 'shape' => 'ComplianceByResources', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeConfigRuleEvaluationStatusRequest' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ], 'NextToken' => [ 'shape' => 'String', ], 'Limit' => [ 'shape' => 'RuleLimit', ], ], ], 'DescribeConfigRuleEvaluationStatusResponse' => [ 'type' => 'structure', 'members' => [ 'ConfigRulesEvaluationStatus' => [ 'shape' => 'ConfigRuleEvaluationStatusList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeConfigRulesRequest' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeConfigRulesResponse' => [ 'type' => 'structure', 'members' => [ 'ConfigRules' => [ 'shape' => 'ConfigRules', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeConfigurationRecorderStatusRequest' => [ 'type' => 'structure', 'members' => [ 'ConfigurationRecorderNames' => [ 'shape' => 'ConfigurationRecorderNameList', ], ], ], 'DescribeConfigurationRecorderStatusResponse' => [ 'type' => 'structure', 'members' => [ 'ConfigurationRecordersStatus' => [ 'shape' => 'ConfigurationRecorderStatusList', ], ], ], 'DescribeConfigurationRecordersRequest' => [ 'type' => 'structure', 'members' => [ 'ConfigurationRecorderNames' => [ 'shape' => 'ConfigurationRecorderNameList', ], ], ], 'DescribeConfigurationRecordersResponse' => [ 'type' => 'structure', 'members' => [ 'ConfigurationRecorders' => [ 'shape' => 'ConfigurationRecorderList', ], ], ], 'DescribeDeliveryChannelStatusRequest' => [ 'type' => 'structure', 'members' => [ 'DeliveryChannelNames' => [ 'shape' => 'DeliveryChannelNameList', ], ], ], 'DescribeDeliveryChannelStatusResponse' => [ 'type' => 'structure', 'members' => [ 'DeliveryChannelsStatus' => [ 'shape' => 'DeliveryChannelStatusList', ], ], ], 'DescribeDeliveryChannelsRequest' => [ 'type' => 'structure', 'members' => [ 'DeliveryChannelNames' => [ 'shape' => 'DeliveryChannelNameList', ], ], ], 'DescribeDeliveryChannelsResponse' => [ 'type' => 'structure', 'members' => [ 'DeliveryChannels' => [ 'shape' => 'DeliveryChannelList', ], ], ], 'EarlierTime' => [ 'type' => 'timestamp', ], 'EmptiableStringWithCharLimit256' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Evaluation' => [ 'type' => 'structure', 'required' => [ 'ComplianceResourceType', 'ComplianceResourceId', 'ComplianceType', 'OrderingTimestamp', ], 'members' => [ 'ComplianceResourceType' => [ 'shape' => 'StringWithCharLimit256', ], 'ComplianceResourceId' => [ 'shape' => 'StringWithCharLimit256', ], 'ComplianceType' => [ 'shape' => 'ComplianceType', ], 'Annotation' => [ 'shape' => 'StringWithCharLimit256', ], 'OrderingTimestamp' => [ 'shape' => 'OrderingTimestamp', ], ], ], 'EvaluationResult' => [ 'type' => 'structure', 'members' => [ 'EvaluationResultIdentifier' => [ 'shape' => 'EvaluationResultIdentifier', ], 'ComplianceType' => [ 'shape' => 'ComplianceType', ], 'ResultRecordedTime' => [ 'shape' => 'Date', ], 'ConfigRuleInvokedTime' => [ 'shape' => 'Date', ], 'Annotation' => [ 'shape' => 'StringWithCharLimit256', ], 'ResultToken' => [ 'shape' => 'String', ], ], ], 'EvaluationResultIdentifier' => [ 'type' => 'structure', 'members' => [ 'EvaluationResultQualifier' => [ 'shape' => 'EvaluationResultQualifier', ], 'OrderingTimestamp' => [ 'shape' => 'Date', ], ], ], 'EvaluationResultQualifier' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], 'ResourceType' => [ 'shape' => 'StringWithCharLimit256', ], 'ResourceId' => [ 'shape' => 'StringWithCharLimit256', ], ], ], 'EvaluationResults' => [ 'type' => 'list', 'member' => [ 'shape' => 'EvaluationResult', ], ], 'Evaluations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Evaluation', ], 'max' => 100, 'min' => 0, ], 'EventSource' => [ 'type' => 'string', 'enum' => [ 'aws.config', ], ], 'GetComplianceDetailsByConfigRuleRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigRuleName', ], 'members' => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], 'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ], 'Limit' => [ 'shape' => 'Limit', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'GetComplianceDetailsByConfigRuleResponse' => [ 'type' => 'structure', 'members' => [ 'EvaluationResults' => [ 'shape' => 'EvaluationResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'GetComplianceDetailsByResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceType', 'ResourceId', ], 'members' => [ 'ResourceType' => [ 'shape' => 'StringWithCharLimit256', ], 'ResourceId' => [ 'shape' => 'StringWithCharLimit256', ], 'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetComplianceDetailsByResourceResponse' => [ 'type' => 'structure', 'members' => [ 'EvaluationResults' => [ 'shape' => 'EvaluationResults', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'GetComplianceSummaryByConfigRuleResponse' => [ 'type' => 'structure', 'members' => [ 'ComplianceSummary' => [ 'shape' => 'ComplianceSummary', ], ], ], 'GetComplianceSummaryByResourceTypeRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceTypes' => [ 'shape' => 'ResourceTypes', ], ], ], 'GetComplianceSummaryByResourceTypeResponse' => [ 'type' => 'structure', 'members' => [ 'ComplianceSummariesByResourceType' => [ 'shape' => 'ComplianceSummariesByResourceType', ], ], ], 'GetResourceConfigHistoryRequest' => [ 'type' => 'structure', 'required' => [ 'resourceType', 'resourceId', ], 'members' => [ 'resourceType' => [ 'shape' => 'ResourceType', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'laterTime' => [ 'shape' => 'LaterTime', ], 'earlierTime' => [ 'shape' => 'EarlierTime', ], 'chronologicalOrder' => [ 'shape' => 'ChronologicalOrder', ], 'limit' => [ 'shape' => 'Limit', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'GetResourceConfigHistoryResponse' => [ 'type' => 'structure', 'members' => [ 'configurationItems' => [ 'shape' => 'ConfigurationItemList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'IncludeGlobalResourceTypes' => [ 'type' => 'boolean', ], 'InsufficientDeliveryPolicyException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InsufficientPermissionsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'Integer' => [ 'type' => 'integer', ], 'InvalidConfigurationRecorderNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidDeliveryChannelNameException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidLimitException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidRecordingGroupException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidResultTokenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidRoleException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidS3KeyPrefixException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidSNSTopicARNException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidTimeRangeException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'LastDeliveryChannelDeleteFailedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'LaterTime' => [ 'type' => 'timestamp', ], 'Limit' => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ListDiscoveredResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'resourceType', ], 'members' => [ 'resourceType' => [ 'shape' => 'ResourceType', ], 'resourceIds' => [ 'shape' => 'ResourceIdList', ], 'resourceName' => [ 'shape' => 'ResourceName', ], 'limit' => [ 'shape' => 'Limit', ], 'includeDeletedResources' => [ 'shape' => 'Boolean', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDiscoveredResourcesResponse' => [ 'type' => 'structure', 'members' => [ 'resourceIdentifiers' => [ 'shape' => 'ResourceIdentifierList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxNumberOfConfigRulesExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'MaxNumberOfConfigurationRecordersExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'MaxNumberOfDeliveryChannelsExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'MaximumExecutionFrequency' => [ 'type' => 'string', 'enum' => [ 'One_Hour', 'Three_Hours', 'Six_Hours', 'Twelve_Hours', 'TwentyFour_Hours', ], ], 'MessageType' => [ 'type' => 'string', 'enum' => [ 'ConfigurationItemChangeNotification', 'ConfigurationSnapshotDeliveryCompleted', 'ScheduledNotification', 'OversizedConfigurationItemChangeNotification', ], ], 'Name' => [ 'type' => 'string', ], 'NextToken' => [ 'type' => 'string', ], 'NoAvailableConfigurationRecorderException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NoAvailableDeliveryChannelException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NoRunningConfigurationRecorderException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NoSuchBucketException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NoSuchConfigRuleException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NoSuchConfigurationRecorderException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'NoSuchDeliveryChannelException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'OrderingTimestamp' => [ 'type' => 'timestamp', ], 'Owner' => [ 'type' => 'string', 'enum' => [ 'CUSTOM_LAMBDA', 'AWS', ], ], 'PutConfigRuleRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigRule', ], 'members' => [ 'ConfigRule' => [ 'shape' => 'ConfigRule', ], ], ], 'PutConfigurationRecorderRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigurationRecorder', ], 'members' => [ 'ConfigurationRecorder' => [ 'shape' => 'ConfigurationRecorder', ], ], ], 'PutDeliveryChannelRequest' => [ 'type' => 'structure', 'required' => [ 'DeliveryChannel', ], 'members' => [ 'DeliveryChannel' => [ 'shape' => 'DeliveryChannel', ], ], ], 'PutEvaluationsRequest' => [ 'type' => 'structure', 'required' => [ 'ResultToken', ], 'members' => [ 'Evaluations' => [ 'shape' => 'Evaluations', ], 'ResultToken' => [ 'shape' => 'String', ], 'TestMode' => [ 'shape' => 'Boolean', ], ], ], 'PutEvaluationsResponse' => [ 'type' => 'structure', 'members' => [ 'FailedEvaluations' => [ 'shape' => 'Evaluations', ], ], ], 'RecorderName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'RecorderStatus' => [ 'type' => 'string', 'enum' => [ 'Pending', 'Success', 'Failure', ], ], 'RecordingGroup' => [ 'type' => 'structure', 'members' => [ 'allSupported' => [ 'shape' => 'AllSupported', ], 'includeGlobalResourceTypes' => [ 'shape' => 'IncludeGlobalResourceTypes', ], 'resourceTypes' => [ 'shape' => 'ResourceTypeList', ], ], ], 'ReevaluateConfigRuleNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringWithCharLimit64', ], 'max' => 25, 'min' => 1, ], 'RelatedEvent' => [ 'type' => 'string', ], 'RelatedEventList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RelatedEvent', ], ], 'Relationship' => [ 'type' => 'structure', 'members' => [ 'resourceType' => [ 'shape' => 'ResourceType', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'resourceName' => [ 'shape' => 'ResourceName', ], 'relationshipName' => [ 'shape' => 'RelationshipName', ], ], ], 'RelationshipList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Relationship', ], ], 'RelationshipName' => [ 'type' => 'string', ], 'ResourceCreationTime' => [ 'type' => 'timestamp', ], 'ResourceDeletionTime' => [ 'type' => 'timestamp', ], 'ResourceId' => [ 'type' => 'string', ], 'ResourceIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceId', ], ], 'ResourceIdentifier' => [ 'type' => 'structure', 'members' => [ 'resourceType' => [ 'shape' => 'ResourceType', ], 'resourceId' => [ 'shape' => 'ResourceId', ], 'resourceName' => [ 'shape' => 'ResourceName', ], 'resourceDeletionTime' => [ 'shape' => 'ResourceDeletionTime', ], ], ], 'ResourceIdentifierList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceIdentifier', ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ResourceName' => [ 'type' => 'string', ], 'ResourceNotDiscoveredException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'AWS::EC2::CustomerGateway', 'AWS::EC2::EIP', 'AWS::EC2::Host', 'AWS::EC2::Instance', 'AWS::EC2::InternetGateway', 'AWS::EC2::NetworkAcl', 'AWS::EC2::NetworkInterface', 'AWS::EC2::RouteTable', 'AWS::EC2::SecurityGroup', 'AWS::EC2::Subnet', 'AWS::CloudTrail::Trail', 'AWS::EC2::Volume', 'AWS::EC2::VPC', 'AWS::EC2::VPNConnection', 'AWS::EC2::VPNGateway', 'AWS::IAM::Group', 'AWS::IAM::Policy', 'AWS::IAM::Role', 'AWS::IAM::User', 'AWS::ACM::Certificate', 'AWS::RDS::DBInstance', 'AWS::RDS::DBSubnetGroup', 'AWS::RDS::DBSecurityGroup', 'AWS::RDS::DBSnapshot', 'AWS::RDS::EventSubscription', 'AWS::ElasticLoadBalancingV2::LoadBalancer', 'AWS::S3::Bucket', 'AWS::SSM::ManagedInstanceInventory', 'AWS::Redshift::Cluster', 'AWS::Redshift::ClusterSnapshot', 'AWS::Redshift::ClusterParameterGroup', 'AWS::Redshift::ClusterSecurityGroup', 'AWS::Redshift::ClusterSubnetGroup', 'AWS::Redshift::EventSubscription', 'AWS::CloudWatch::Alarm', ], ], 'ResourceTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceType', ], ], 'ResourceTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringWithCharLimit256', ], 'max' => 20, 'min' => 0, ], 'RuleLimit' => [ 'type' => 'integer', 'max' => 50, 'min' => 0, ], 'Scope' => [ 'type' => 'structure', 'members' => [ 'ComplianceResourceTypes' => [ 'shape' => 'ComplianceResourceTypes', ], 'TagKey' => [ 'shape' => 'StringWithCharLimit128', ], 'TagValue' => [ 'shape' => 'StringWithCharLimit256', ], 'ComplianceResourceId' => [ 'shape' => 'StringWithCharLimit256', ], ], ], 'Source' => [ 'type' => 'structure', 'required' => [ 'Owner', 'SourceIdentifier', ], 'members' => [ 'Owner' => [ 'shape' => 'Owner', ], 'SourceIdentifier' => [ 'shape' => 'StringWithCharLimit256', ], 'SourceDetails' => [ 'shape' => 'SourceDetails', ], ], ], 'SourceDetail' => [ 'type' => 'structure', 'members' => [ 'EventSource' => [ 'shape' => 'EventSource', ], 'MessageType' => [ 'shape' => 'MessageType', ], 'MaximumExecutionFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ], ], ], 'SourceDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'SourceDetail', ], 'max' => 25, 'min' => 0, ], 'StartConfigRulesEvaluationRequest' => [ 'type' => 'structure', 'members' => [ 'ConfigRuleNames' => [ 'shape' => 'ReevaluateConfigRuleNames', ], ], ], 'StartConfigRulesEvaluationResponse' => [ 'type' => 'structure', 'members' => [], ], 'StartConfigurationRecorderRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigurationRecorderName', ], 'members' => [ 'ConfigurationRecorderName' => [ 'shape' => 'RecorderName', ], ], ], 'StopConfigurationRecorderRequest' => [ 'type' => 'structure', 'required' => [ 'ConfigurationRecorderName', ], 'members' => [ 'ConfigurationRecorderName' => [ 'shape' => 'RecorderName', ], ], ], 'String' => [ 'type' => 'string', ], 'StringWithCharLimit1024' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'StringWithCharLimit128' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'StringWithCharLimit256' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'StringWithCharLimit64' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'SupplementaryConfiguration' => [ 'type' => 'map', 'key' => [ 'shape' => 'SupplementaryConfigurationName', ], 'value' => [ 'shape' => 'SupplementaryConfigurationValue', ], ], 'SupplementaryConfigurationName' => [ 'type' => 'string', ], 'SupplementaryConfigurationValue' => [ 'type' => 'string', ], 'Tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'Name', ], 'value' => [ 'shape' => 'Value', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'Value' => [ 'type' => 'string', ], 'Version' => [ 'type' => 'string', ], ],];
