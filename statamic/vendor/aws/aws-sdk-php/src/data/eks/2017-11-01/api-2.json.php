<?php
// This file was auto-generated from sdk-root/src/data/eks/2017-11-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-11-01', 'endpointPrefix' => 'eks', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Amazon EKS', 'serviceFullName' => 'Amazon Elastic Kubernetes Service', 'serviceId' => 'EKS', 'signatureVersion' => 'v4', 'signingName' => 'eks', 'uid' => 'eks-2017-11-01', ], 'operations' => [ 'CreateCluster' => [ 'name' => 'CreateCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/clusters', ], 'input' => [ 'shape' => 'CreateClusterRequest', ], 'output' => [ 'shape' => 'CreateClusterResponse', ], 'errors' => [ [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceLimitExceededException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'UnsupportedAvailabilityZoneException', ], ], ], 'DeleteCluster' => [ 'name' => 'DeleteCluster', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/clusters/{name}', ], 'input' => [ 'shape' => 'DeleteClusterRequest', ], 'output' => [ 'shape' => 'DeleteClusterResponse', ], 'errors' => [ [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DescribeCluster' => [ 'name' => 'DescribeCluster', 'http' => [ 'method' => 'GET', 'requestUri' => '/clusters/{name}', ], 'input' => [ 'shape' => 'DescribeClusterRequest', ], 'output' => [ 'shape' => 'DescribeClusterResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DescribeUpdate' => [ 'name' => 'DescribeUpdate', 'http' => [ 'method' => 'GET', 'requestUri' => '/clusters/{name}/updates/{updateId}', ], 'input' => [ 'shape' => 'DescribeUpdateRequest', ], 'output' => [ 'shape' => 'DescribeUpdateResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListClusters' => [ 'name' => 'ListClusters', 'http' => [ 'method' => 'GET', 'requestUri' => '/clusters', ], 'input' => [ 'shape' => 'ListClustersRequest', ], 'output' => [ 'shape' => 'ListClustersResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListUpdates' => [ 'name' => 'ListUpdates', 'http' => [ 'method' => 'GET', 'requestUri' => '/clusters/{name}/updates', ], 'input' => [ 'shape' => 'ListUpdatesRequest', ], 'output' => [ 'shape' => 'ListUpdatesResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateClusterConfig' => [ 'name' => 'UpdateClusterConfig', 'http' => [ 'method' => 'POST', 'requestUri' => '/clusters/{name}/update-config', ], 'input' => [ 'shape' => 'UpdateClusterConfigRequest', ], 'output' => [ 'shape' => 'UpdateClusterConfigResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'UpdateClusterVersion' => [ 'name' => 'UpdateClusterVersion', 'http' => [ 'method' => 'POST', 'requestUri' => '/clusters/{name}/updates', ], 'input' => [ 'shape' => 'UpdateClusterVersionRequest', ], 'output' => [ 'shape' => 'UpdateClusterVersionResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], ], ], ], 'shapes' => [ 'Boolean' => [ 'type' => 'boolean', ], 'BoxedBoolean' => [ 'type' => 'boolean', 'box' => true, ], 'Certificate' => [ 'type' => 'structure', 'members' => [ 'data' => [ 'shape' => 'String', ], ], ], 'ClientException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Cluster' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'arn' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'version' => [ 'shape' => 'String', ], 'endpoint' => [ 'shape' => 'String', ], 'roleArn' => [ 'shape' => 'String', ], 'resourcesVpcConfig' => [ 'shape' => 'VpcConfigResponse', ], 'logging' => [ 'shape' => 'Logging', ], 'status' => [ 'shape' => 'ClusterStatus', ], 'certificateAuthority' => [ 'shape' => 'Certificate', ], 'clientRequestToken' => [ 'shape' => 'String', ], 'platformVersion' => [ 'shape' => 'String', ], ], ], 'ClusterName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[0-9A-Za-z][A-Za-z0-9\\-_]*', ], 'ClusterStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'DELETING', 'FAILED', ], ], 'CreateClusterRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'roleArn', 'resourcesVpcConfig', ], 'members' => [ 'name' => [ 'shape' => 'ClusterName', ], 'version' => [ 'shape' => 'String', ], 'roleArn' => [ 'shape' => 'String', ], 'resourcesVpcConfig' => [ 'shape' => 'VpcConfigRequest', ], 'logging' => [ 'shape' => 'Logging', ], 'clientRequestToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], ], ], 'CreateClusterResponse' => [ 'type' => 'structure', 'members' => [ 'cluster' => [ 'shape' => 'Cluster', ], ], ], 'DeleteClusterRequest' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'name', ], ], ], 'DeleteClusterResponse' => [ 'type' => 'structure', 'members' => [ 'cluster' => [ 'shape' => 'Cluster', ], ], ], 'DescribeClusterRequest' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'name', ], ], ], 'DescribeClusterResponse' => [ 'type' => 'structure', 'members' => [ 'cluster' => [ 'shape' => 'Cluster', ], ], ], 'DescribeUpdateRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'updateId', ], 'members' => [ 'name' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'name', ], 'updateId' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'updateId', ], ], ], 'DescribeUpdateResponse' => [ 'type' => 'structure', 'members' => [ 'update' => [ 'shape' => 'Update', ], ], ], 'ErrorCode' => [ 'type' => 'string', 'enum' => [ 'SubnetNotFound', 'SecurityGroupNotFound', 'EniLimitReached', 'IpNotAvailable', 'AccessDenied', 'OperationNotPermitted', 'VpcIdNotFound', 'Unknown', ], ], 'ErrorDetail' => [ 'type' => 'structure', 'members' => [ 'errorCode' => [ 'shape' => 'ErrorCode', ], 'errorMessage' => [ 'shape' => 'String', ], 'resourceIds' => [ 'shape' => 'StringList', ], ], ], 'ErrorDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ErrorDetail', ], ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListClustersRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'ListClustersRequestMaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListClustersRequestMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ListClustersResponse' => [ 'type' => 'structure', 'members' => [ 'clusters' => [ 'shape' => 'StringList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListUpdatesRequest' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'name', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'ListUpdatesRequestMaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListUpdatesRequestMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ListUpdatesResponse' => [ 'type' => 'structure', 'members' => [ 'updateIds' => [ 'shape' => 'StringList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'LogSetup' => [ 'type' => 'structure', 'members' => [ 'types' => [ 'shape' => 'LogTypes', ], 'enabled' => [ 'shape' => 'BoxedBoolean', ], ], ], 'LogSetups' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogSetup', ], ], 'LogType' => [ 'type' => 'string', 'enum' => [ 'api', 'audit', 'authenticator', 'controllerManager', 'scheduler', ], ], 'LogTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'LogType', ], ], 'Logging' => [ 'type' => 'structure', 'members' => [ 'clusterLogging' => [ 'shape' => 'LogSetups', ], ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ServerException' => [ 'type' => 'structure', 'members' => [ 'clusterName' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, 'fault' => true, ], 'String' => [ 'type' => 'string', ], 'StringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UnsupportedAvailabilityZoneException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], 'clusterName' => [ 'shape' => 'String', ], 'validZones' => [ 'shape' => 'StringList', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Update' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'UpdateStatus', ], 'type' => [ 'shape' => 'UpdateType', ], 'params' => [ 'shape' => 'UpdateParams', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'errors' => [ 'shape' => 'ErrorDetails', ], ], ], 'UpdateClusterConfigRequest' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'name', ], 'resourcesVpcConfig' => [ 'shape' => 'VpcConfigRequest', ], 'logging' => [ 'shape' => 'Logging', ], 'clientRequestToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], ], ], 'UpdateClusterConfigResponse' => [ 'type' => 'structure', 'members' => [ 'update' => [ 'shape' => 'Update', ], ], ], 'UpdateClusterVersionRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'version', ], 'members' => [ 'name' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'name', ], 'version' => [ 'shape' => 'String', ], 'clientRequestToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], ], ], 'UpdateClusterVersionResponse' => [ 'type' => 'structure', 'members' => [ 'update' => [ 'shape' => 'Update', ], ], ], 'UpdateParam' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'UpdateParamType', ], 'value' => [ 'shape' => 'String', ], ], ], 'UpdateParamType' => [ 'type' => 'string', 'enum' => [ 'Version', 'PlatformVersion', 'EndpointPrivateAccess', 'EndpointPublicAccess', 'ClusterLogging', ], ], 'UpdateParams' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateParam', ], ], 'UpdateStatus' => [ 'type' => 'string', 'enum' => [ 'InProgress', 'Failed', 'Cancelled', 'Successful', ], ], 'UpdateType' => [ 'type' => 'string', 'enum' => [ 'VersionUpdate', 'EndpointAccessUpdate', 'LoggingUpdate', ], ], 'VpcConfigRequest' => [ 'type' => 'structure', 'members' => [ 'subnetIds' => [ 'shape' => 'StringList', ], 'securityGroupIds' => [ 'shape' => 'StringList', ], 'endpointPublicAccess' => [ 'shape' => 'BoxedBoolean', ], 'endpointPrivateAccess' => [ 'shape' => 'BoxedBoolean', ], ], ], 'VpcConfigResponse' => [ 'type' => 'structure', 'members' => [ 'subnetIds' => [ 'shape' => 'StringList', ], 'securityGroupIds' => [ 'shape' => 'StringList', ], 'vpcId' => [ 'shape' => 'String', ], 'endpointPublicAccess' => [ 'shape' => 'Boolean', ], 'endpointPrivateAccess' => [ 'shape' => 'Boolean', ], ], ], ],];
