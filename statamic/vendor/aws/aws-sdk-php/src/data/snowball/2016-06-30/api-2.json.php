<?php
// This file was auto-generated from sdk-root/src/data/snowball/2016-06-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-06-30', 'endpointPrefix' => 'snowball', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'Amazon Snowball', 'serviceFullName' => 'Amazon Import/Export Snowball', 'serviceId' => 'Snowball', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSIESnowballJobManagementService', 'uid' => 'snowball-2016-06-30', ], 'operations' => [ 'CancelCluster' => [ 'name' => 'CancelCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CancelClusterRequest', ], 'output' => [ 'shape' => 'CancelClusterResult', ], 'errors' => [ [ 'shape' => 'KMSRequestFailedException', ], [ 'shape' => 'InvalidJobStateException', ], [ 'shape' => 'InvalidResourceException', ], ], ], 'CancelJob' => [ 'name' => 'CancelJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CancelJobRequest', ], 'output' => [ 'shape' => 'CancelJobResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidJobStateException', ], [ 'shape' => 'KMSRequestFailedException', ], ], ], 'CreateAddress' => [ 'name' => 'CreateAddress', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateAddressRequest', ], 'output' => [ 'shape' => 'CreateAddressResult', ], 'errors' => [ [ 'shape' => 'InvalidAddressException', ], [ 'shape' => 'UnsupportedAddressException', ], ], ], 'CreateCluster' => [ 'name' => 'CreateCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateClusterRequest', ], 'output' => [ 'shape' => 'CreateClusterResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'KMSRequestFailedException', ], [ 'shape' => 'InvalidInputCombinationException', ], [ 'shape' => 'Ec2RequestFailedException', ], ], ], 'CreateJob' => [ 'name' => 'CreateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateJobRequest', ], 'output' => [ 'shape' => 'CreateJobResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'KMSRequestFailedException', ], [ 'shape' => 'InvalidInputCombinationException', ], [ 'shape' => 'ClusterLimitExceededException', ], [ 'shape' => 'Ec2RequestFailedException', ], ], ], 'DescribeAddress' => [ 'name' => 'DescribeAddress', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAddressRequest', ], 'output' => [ 'shape' => 'DescribeAddressResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], ], ], 'DescribeAddresses' => [ 'name' => 'DescribeAddresses', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAddressesRequest', ], 'output' => [ 'shape' => 'DescribeAddressesResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeCluster' => [ 'name' => 'DescribeCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeClusterRequest', ], 'output' => [ 'shape' => 'DescribeClusterResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], ], ], 'DescribeJob' => [ 'name' => 'DescribeJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeJobRequest', ], 'output' => [ 'shape' => 'DescribeJobResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], ], ], 'GetJobManifest' => [ 'name' => 'GetJobManifest', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetJobManifestRequest', ], 'output' => [ 'shape' => 'GetJobManifestResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidJobStateException', ], ], ], 'GetJobUnlockCode' => [ 'name' => 'GetJobUnlockCode', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetJobUnlockCodeRequest', ], 'output' => [ 'shape' => 'GetJobUnlockCodeResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidJobStateException', ], ], ], 'GetSnowballUsage' => [ 'name' => 'GetSnowballUsage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetSnowballUsageRequest', ], 'output' => [ 'shape' => 'GetSnowballUsageResult', ], ], 'ListClusterJobs' => [ 'name' => 'ListClusterJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListClusterJobsRequest', ], 'output' => [ 'shape' => 'ListClusterJobsResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'ListClusters' => [ 'name' => 'ListClusters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListClustersRequest', ], 'output' => [ 'shape' => 'ListClustersResult', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], ], ], 'ListCompatibleImages' => [ 'name' => 'ListCompatibleImages', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListCompatibleImagesRequest', ], 'output' => [ 'shape' => 'ListCompatibleImagesResult', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'Ec2RequestFailedException', ], ], ], 'ListJobs' => [ 'name' => 'ListJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListJobsRequest', ], 'output' => [ 'shape' => 'ListJobsResult', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], ], ], 'UpdateCluster' => [ 'name' => 'UpdateCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateClusterRequest', ], 'output' => [ 'shape' => 'UpdateClusterResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidJobStateException', ], [ 'shape' => 'KMSRequestFailedException', ], [ 'shape' => 'InvalidInputCombinationException', ], [ 'shape' => 'Ec2RequestFailedException', ], ], ], 'UpdateJob' => [ 'name' => 'UpdateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateJobRequest', ], 'output' => [ 'shape' => 'UpdateJobResult', ], 'errors' => [ [ 'shape' => 'InvalidResourceException', ], [ 'shape' => 'InvalidJobStateException', ], [ 'shape' => 'KMSRequestFailedException', ], [ 'shape' => 'InvalidInputCombinationException', ], [ 'shape' => 'ClusterLimitExceededException', ], [ 'shape' => 'Ec2RequestFailedException', ], ], ], ], 'shapes' => [ 'Address' => [ 'type' => 'structure', 'members' => [ 'AddressId' => [ 'shape' => 'AddressId', ], 'Name' => [ 'shape' => 'String', ], 'Company' => [ 'shape' => 'String', ], 'Street1' => [ 'shape' => 'String', ], 'Street2' => [ 'shape' => 'String', ], 'Street3' => [ 'shape' => 'String', ], 'City' => [ 'shape' => 'String', ], 'StateOrProvince' => [ 'shape' => 'String', ], 'PrefectureOrDistrict' => [ 'shape' => 'String', ], 'Landmark' => [ 'shape' => 'String', ], 'Country' => [ 'shape' => 'String', ], 'PostalCode' => [ 'shape' => 'String', ], 'PhoneNumber' => [ 'shape' => 'String', ], 'IsRestricted' => [ 'shape' => 'Boolean', ], ], ], 'AddressId' => [ 'type' => 'string', 'max' => 40, 'min' => 40, 'pattern' => 'ADID[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', ], 'AddressList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Address', ], ], 'AmiId' => [ 'type' => 'string', 'max' => 21, 'min' => 12, 'pattern' => '(ami-[0-9a-f]{8})|(ami-[0-9a-f]{17})', ], 'Boolean' => [ 'type' => 'boolean', ], 'CancelClusterRequest' => [ 'type' => 'structure', 'required' => [ 'ClusterId', ], 'members' => [ 'ClusterId' => [ 'shape' => 'ClusterId', ], ], ], 'CancelClusterResult' => [ 'type' => 'structure', 'members' => [], ], 'CancelJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'CancelJobResult' => [ 'type' => 'structure', 'members' => [], ], 'ClusterId' => [ 'type' => 'string', 'max' => 39, 'min' => 39, 'pattern' => 'CID[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', ], 'ClusterLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ClusterListEntry' => [ 'type' => 'structure', 'members' => [ 'ClusterId' => [ 'shape' => 'String', ], 'ClusterState' => [ 'shape' => 'ClusterState', ], 'CreationDate' => [ 'shape' => 'Timestamp', ], 'Description' => [ 'shape' => 'String', ], ], ], 'ClusterListEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ClusterListEntry', ], ], 'ClusterMetadata' => [ 'type' => 'structure', 'members' => [ 'ClusterId' => [ 'shape' => 'String', ], 'Description' => [ 'shape' => 'String', ], 'KmsKeyARN' => [ 'shape' => 'KmsKeyARN', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'ClusterState' => [ 'shape' => 'ClusterState', ], 'JobType' => [ 'shape' => 'JobType', ], 'SnowballType' => [ 'shape' => 'SnowballType', ], 'CreationDate' => [ 'shape' => 'Timestamp', ], 'Resources' => [ 'shape' => 'JobResource', ], 'AddressId' => [ 'shape' => 'AddressId', ], 'ShippingOption' => [ 'shape' => 'ShippingOption', ], 'Notification' => [ 'shape' => 'Notification', ], 'ForwardingAddressId' => [ 'shape' => 'AddressId', ], ], ], 'ClusterState' => [ 'type' => 'string', 'enum' => [ 'AwaitingQuorum', 'Pending', 'InUse', 'Complete', 'Cancelled', ], ], 'CompatibleImage' => [ 'type' => 'structure', 'members' => [ 'AmiId' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], ], ], 'CompatibleImageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CompatibleImage', ], ], 'CreateAddressRequest' => [ 'type' => 'structure', 'required' => [ 'Address', ], 'members' => [ 'Address' => [ 'shape' => 'Address', ], ], ], 'CreateAddressResult' => [ 'type' => 'structure', 'members' => [ 'AddressId' => [ 'shape' => 'String', ], ], ], 'CreateClusterRequest' => [ 'type' => 'structure', 'required' => [ 'JobType', 'Resources', 'AddressId', 'RoleARN', 'ShippingOption', ], 'members' => [ 'JobType' => [ 'shape' => 'JobType', ], 'Resources' => [ 'shape' => 'JobResource', ], 'Description' => [ 'shape' => 'String', ], 'AddressId' => [ 'shape' => 'AddressId', ], 'KmsKeyARN' => [ 'shape' => 'KmsKeyARN', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'SnowballType' => [ 'shape' => 'SnowballType', ], 'ShippingOption' => [ 'shape' => 'ShippingOption', ], 'Notification' => [ 'shape' => 'Notification', ], 'ForwardingAddressId' => [ 'shape' => 'AddressId', ], ], ], 'CreateClusterResult' => [ 'type' => 'structure', 'members' => [ 'ClusterId' => [ 'shape' => 'ClusterId', ], ], ], 'CreateJobRequest' => [ 'type' => 'structure', 'members' => [ 'JobType' => [ 'shape' => 'JobType', ], 'Resources' => [ 'shape' => 'JobResource', ], 'Description' => [ 'shape' => 'String', ], 'AddressId' => [ 'shape' => 'AddressId', ], 'KmsKeyARN' => [ 'shape' => 'KmsKeyARN', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'SnowballCapacityPreference' => [ 'shape' => 'SnowballCapacity', ], 'ShippingOption' => [ 'shape' => 'ShippingOption', ], 'Notification' => [ 'shape' => 'Notification', ], 'ClusterId' => [ 'shape' => 'ClusterId', ], 'SnowballType' => [ 'shape' => 'SnowballType', ], 'ForwardingAddressId' => [ 'shape' => 'AddressId', ], ], ], 'CreateJobResult' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DataTransfer' => [ 'type' => 'structure', 'members' => [ 'BytesTransferred' => [ 'shape' => 'Long', ], 'ObjectsTransferred' => [ 'shape' => 'Long', ], 'TotalBytes' => [ 'shape' => 'Long', ], 'TotalObjects' => [ 'shape' => 'Long', ], ], ], 'DescribeAddressRequest' => [ 'type' => 'structure', 'required' => [ 'AddressId', ], 'members' => [ 'AddressId' => [ 'shape' => 'AddressId', ], ], ], 'DescribeAddressResult' => [ 'type' => 'structure', 'members' => [ 'Address' => [ 'shape' => 'Address', ], ], ], 'DescribeAddressesRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListLimit', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeAddressesResult' => [ 'type' => 'structure', 'members' => [ 'Addresses' => [ 'shape' => 'AddressList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeClusterRequest' => [ 'type' => 'structure', 'required' => [ 'ClusterId', ], 'members' => [ 'ClusterId' => [ 'shape' => 'ClusterId', ], ], ], 'DescribeClusterResult' => [ 'type' => 'structure', 'members' => [ 'ClusterMetadata' => [ 'shape' => 'ClusterMetadata', ], ], ], 'DescribeJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeJobResult' => [ 'type' => 'structure', 'members' => [ 'JobMetadata' => [ 'shape' => 'JobMetadata', ], 'SubJobMetadata' => [ 'shape' => 'JobMetadataList', ], ], ], 'Ec2AmiResource' => [ 'type' => 'structure', 'required' => [ 'AmiId', ], 'members' => [ 'AmiId' => [ 'shape' => 'AmiId', ], 'SnowballAmiId' => [ 'shape' => 'String', ], ], ], 'Ec2AmiResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ec2AmiResource', ], ], 'Ec2RequestFailedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'EventTriggerDefinition' => [ 'type' => 'structure', 'members' => [ 'EventResourceARN' => [ 'shape' => 'ResourceARN', ], ], ], 'EventTriggerDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventTriggerDefinition', ], ], 'GetJobManifestRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'GetJobManifestResult' => [ 'type' => 'structure', 'members' => [ 'ManifestURI' => [ 'shape' => 'String', ], ], ], 'GetJobUnlockCodeRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ], ], 'GetJobUnlockCodeResult' => [ 'type' => 'structure', 'members' => [ 'UnlockCode' => [ 'shape' => 'String', ], ], ], 'GetSnowballUsageRequest' => [ 'type' => 'structure', 'members' => [], ], 'GetSnowballUsageResult' => [ 'type' => 'structure', 'members' => [ 'SnowballLimit' => [ 'shape' => 'Integer', ], 'SnowballsInUse' => [ 'shape' => 'Integer', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'InvalidAddressException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidInputCombinationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidJobStateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidResourceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], 'ResourceType' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'JobId' => [ 'type' => 'string', 'max' => 39, 'min' => 39, 'pattern' => '(M|J)ID[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}', ], 'JobListEntry' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'String', ], 'JobState' => [ 'shape' => 'JobState', ], 'IsMaster' => [ 'shape' => 'Boolean', ], 'JobType' => [ 'shape' => 'JobType', ], 'SnowballType' => [ 'shape' => 'SnowballType', ], 'CreationDate' => [ 'shape' => 'Timestamp', ], 'Description' => [ 'shape' => 'String', ], ], ], 'JobListEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobListEntry', ], ], 'JobLogs' => [ 'type' => 'structure', 'members' => [ 'JobCompletionReportURI' => [ 'shape' => 'String', ], 'JobSuccessLogURI' => [ 'shape' => 'String', ], 'JobFailureLogURI' => [ 'shape' => 'String', ], ], ], 'JobMetadata' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'String', ], 'JobState' => [ 'shape' => 'JobState', ], 'JobType' => [ 'shape' => 'JobType', ], 'SnowballType' => [ 'shape' => 'SnowballType', ], 'CreationDate' => [ 'shape' => 'Timestamp', ], 'Resources' => [ 'shape' => 'JobResource', ], 'Description' => [ 'shape' => 'String', ], 'KmsKeyARN' => [ 'shape' => 'KmsKeyARN', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'AddressId' => [ 'shape' => 'AddressId', ], 'ShippingDetails' => [ 'shape' => 'ShippingDetails', ], 'SnowballCapacityPreference' => [ 'shape' => 'SnowballCapacity', ], 'Notification' => [ 'shape' => 'Notification', ], 'DataTransferProgress' => [ 'shape' => 'DataTransfer', ], 'JobLogInfo' => [ 'shape' => 'JobLogs', ], 'ClusterId' => [ 'shape' => 'String', ], 'ForwardingAddressId' => [ 'shape' => 'AddressId', ], ], ], 'JobMetadataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobMetadata', ], ], 'JobResource' => [ 'type' => 'structure', 'members' => [ 'S3Resources' => [ 'shape' => 'S3ResourceList', ], 'LambdaResources' => [ 'shape' => 'LambdaResourceList', ], 'Ec2AmiResources' => [ 'shape' => 'Ec2AmiResourceList', ], ], ], 'JobState' => [ 'type' => 'string', 'enum' => [ 'New', 'PreparingAppliance', 'PreparingShipment', 'InTransitToCustomer', 'WithCustomer', 'InTransitToAWS', 'WithAWSSortingFacility', 'WithAWS', 'InProgress', 'Complete', 'Cancelled', 'Listing', 'Pending', ], ], 'JobStateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobState', ], ], 'JobType' => [ 'type' => 'string', 'enum' => [ 'IMPORT', 'EXPORT', 'LOCAL_USE', ], ], 'KMSRequestFailedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'KeyRange' => [ 'type' => 'structure', 'members' => [ 'BeginMarker' => [ 'shape' => 'String', ], 'EndMarker' => [ 'shape' => 'String', ], ], ], 'KmsKeyARN' => [ 'type' => 'string', 'max' => 255, 'pattern' => 'arn:aws.*:kms:.*:[0-9]{12}:key/.*', ], 'LambdaResource' => [ 'type' => 'structure', 'members' => [ 'LambdaArn' => [ 'shape' => 'ResourceARN', ], 'EventTriggers' => [ 'shape' => 'EventTriggerDefinitionList', ], ], ], 'LambdaResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LambdaResource', ], ], 'ListClusterJobsRequest' => [ 'type' => 'structure', 'required' => [ 'ClusterId', ], 'members' => [ 'ClusterId' => [ 'shape' => 'ClusterId', ], 'MaxResults' => [ 'shape' => 'ListLimit', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListClusterJobsResult' => [ 'type' => 'structure', 'members' => [ 'JobListEntries' => [ 'shape' => 'JobListEntryList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListClustersRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListLimit', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListClustersResult' => [ 'type' => 'structure', 'members' => [ 'ClusterListEntries' => [ 'shape' => 'ClusterListEntryList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListCompatibleImagesRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListLimit', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListCompatibleImagesResult' => [ 'type' => 'structure', 'members' => [ 'CompatibleImages' => [ 'shape' => 'CompatibleImageList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListJobsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListLimit', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListJobsResult' => [ 'type' => 'structure', 'members' => [ 'JobListEntries' => [ 'shape' => 'JobListEntryList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListLimit' => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ], 'Long' => [ 'type' => 'long', ], 'Notification' => [ 'type' => 'structure', 'members' => [ 'SnsTopicARN' => [ 'shape' => 'SnsTopicARN', ], 'JobStatesToNotify' => [ 'shape' => 'JobStateList', ], 'NotifyAll' => [ 'shape' => 'Boolean', ], ], ], 'ResourceARN' => [ 'type' => 'string', 'max' => 255, ], 'RoleARN' => [ 'type' => 'string', 'max' => 255, 'pattern' => 'arn:aws.*:iam::[0-9]{12}:role/.*', ], 'S3Resource' => [ 'type' => 'structure', 'members' => [ 'BucketArn' => [ 'shape' => 'ResourceARN', ], 'KeyRange' => [ 'shape' => 'KeyRange', ], ], ], 'S3ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'S3Resource', ], ], 'Shipment' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'String', ], 'TrackingNumber' => [ 'shape' => 'String', ], ], ], 'ShippingDetails' => [ 'type' => 'structure', 'members' => [ 'ShippingOption' => [ 'shape' => 'ShippingOption', ], 'InboundShipment' => [ 'shape' => 'Shipment', ], 'OutboundShipment' => [ 'shape' => 'Shipment', ], ], ], 'ShippingOption' => [ 'type' => 'string', 'enum' => [ 'SECOND_DAY', 'NEXT_DAY', 'EXPRESS', 'STANDARD', ], ], 'SnowballCapacity' => [ 'type' => 'string', 'enum' => [ 'T50', 'T80', 'T100', 'T42', 'NoPreference', ], ], 'SnowballType' => [ 'type' => 'string', 'enum' => [ 'STANDARD', 'EDGE', 'EDGE_C', 'EDGE_CG', ], ], 'SnsTopicARN' => [ 'type' => 'string', 'max' => 255, 'pattern' => 'arn:aws.*:sns:.*:[0-9]{12}:.*', ], 'String' => [ 'type' => 'string', 'min' => 1, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UnsupportedAddressException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'UpdateClusterRequest' => [ 'type' => 'structure', 'required' => [ 'ClusterId', ], 'members' => [ 'ClusterId' => [ 'shape' => 'ClusterId', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'Description' => [ 'shape' => 'String', ], 'Resources' => [ 'shape' => 'JobResource', ], 'AddressId' => [ 'shape' => 'AddressId', ], 'ShippingOption' => [ 'shape' => 'ShippingOption', ], 'Notification' => [ 'shape' => 'Notification', ], 'ForwardingAddressId' => [ 'shape' => 'AddressId', ], ], ], 'UpdateClusterResult' => [ 'type' => 'structure', 'members' => [], ], 'UpdateJobRequest' => [ 'type' => 'structure', 'required' => [ 'JobId', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'RoleARN' => [ 'shape' => 'RoleARN', ], 'Notification' => [ 'shape' => 'Notification', ], 'Resources' => [ 'shape' => 'JobResource', ], 'AddressId' => [ 'shape' => 'AddressId', ], 'ShippingOption' => [ 'shape' => 'ShippingOption', ], 'Description' => [ 'shape' => 'String', ], 'SnowballCapacityPreference' => [ 'shape' => 'SnowballCapacity', ], 'ForwardingAddressId' => [ 'shape' => 'AddressId', ], ], ], 'UpdateJobResult' => [ 'type' => 'structure', 'members' => [], ], ],];
