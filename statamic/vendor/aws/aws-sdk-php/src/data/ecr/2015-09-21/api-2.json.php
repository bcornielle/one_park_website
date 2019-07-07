<?php
// This file was auto-generated from sdk-root/src/data/ecr/2015-09-21/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-09-21', 'endpointPrefix' => 'api.ecr', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'Amazon ECR', 'serviceFullName' => 'Amazon EC2 Container Registry', 'serviceId' => 'ECR', 'signatureVersion' => 'v4', 'signingName' => 'ecr', 'targetPrefix' => 'AmazonEC2ContainerRegistry_V20150921', 'uid' => 'ecr-2015-09-21', ], 'operations' => [ 'BatchCheckLayerAvailability' => [ 'name' => 'BatchCheckLayerAvailability', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchCheckLayerAvailabilityRequest', ], 'output' => [ 'shape' => 'BatchCheckLayerAvailabilityResponse', ], 'errors' => [ [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ServerException', ], ], ], 'BatchDeleteImage' => [ 'name' => 'BatchDeleteImage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchDeleteImageRequest', ], 'output' => [ 'shape' => 'BatchDeleteImageResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'BatchGetImage' => [ 'name' => 'BatchGetImage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetImageRequest', ], 'output' => [ 'shape' => 'BatchGetImageResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'CompleteLayerUpload' => [ 'name' => 'CompleteLayerUpload', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CompleteLayerUploadRequest', ], 'output' => [ 'shape' => 'CompleteLayerUploadResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'UploadNotFoundException', ], [ 'shape' => 'InvalidLayerException', ], [ 'shape' => 'LayerPartTooSmallException', ], [ 'shape' => 'LayerAlreadyExistsException', ], [ 'shape' => 'EmptyUploadException', ], ], ], 'CreateRepository' => [ 'name' => 'CreateRepository', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateRepositoryRequest', ], 'output' => [ 'shape' => 'CreateRepositoryResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidTagParameterException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'RepositoryAlreadyExistsException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'DeleteLifecyclePolicy' => [ 'name' => 'DeleteLifecyclePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteLifecyclePolicyRequest', ], 'output' => [ 'shape' => 'DeleteLifecyclePolicyResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'LifecyclePolicyNotFoundException', ], ], ], 'DeleteRepository' => [ 'name' => 'DeleteRepository', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteRepositoryRequest', ], 'output' => [ 'shape' => 'DeleteRepositoryResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'RepositoryNotEmptyException', ], ], ], 'DeleteRepositoryPolicy' => [ 'name' => 'DeleteRepositoryPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteRepositoryPolicyRequest', ], 'output' => [ 'shape' => 'DeleteRepositoryPolicyResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'RepositoryPolicyNotFoundException', ], ], ], 'DescribeImages' => [ 'name' => 'DescribeImages', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeImagesRequest', ], 'output' => [ 'shape' => 'DescribeImagesResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'ImageNotFoundException', ], ], ], 'DescribeRepositories' => [ 'name' => 'DescribeRepositories', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeRepositoriesRequest', ], 'output' => [ 'shape' => 'DescribeRepositoriesResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'GetAuthorizationToken' => [ 'name' => 'GetAuthorizationToken', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetAuthorizationTokenRequest', ], 'output' => [ 'shape' => 'GetAuthorizationTokenResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], ], ], 'GetDownloadUrlForLayer' => [ 'name' => 'GetDownloadUrlForLayer', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetDownloadUrlForLayerRequest', ], 'output' => [ 'shape' => 'GetDownloadUrlForLayerResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'LayersNotFoundException', ], [ 'shape' => 'LayerInaccessibleException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'GetLifecyclePolicy' => [ 'name' => 'GetLifecyclePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetLifecyclePolicyRequest', ], 'output' => [ 'shape' => 'GetLifecyclePolicyResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'LifecyclePolicyNotFoundException', ], ], ], 'GetLifecyclePolicyPreview' => [ 'name' => 'GetLifecyclePolicyPreview', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetLifecyclePolicyPreviewRequest', ], 'output' => [ 'shape' => 'GetLifecyclePolicyPreviewResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'LifecyclePolicyPreviewNotFoundException', ], ], ], 'GetRepositoryPolicy' => [ 'name' => 'GetRepositoryPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetRepositoryPolicyRequest', ], 'output' => [ 'shape' => 'GetRepositoryPolicyResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'RepositoryPolicyNotFoundException', ], ], ], 'InitiateLayerUpload' => [ 'name' => 'InitiateLayerUpload', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'InitiateLayerUploadRequest', ], 'output' => [ 'shape' => 'InitiateLayerUploadResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'ListImages' => [ 'name' => 'ListImages', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListImagesRequest', ], 'output' => [ 'shape' => 'ListImagesResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'ServerException', ], ], ], 'PutImage' => [ 'name' => 'PutImage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutImageRequest', ], 'output' => [ 'shape' => 'PutImageResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'ImageAlreadyExistsException', ], [ 'shape' => 'LayersNotFoundException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'PutLifecyclePolicy' => [ 'name' => 'PutLifecyclePolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutLifecyclePolicyRequest', ], 'output' => [ 'shape' => 'PutLifecyclePolicyResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'SetRepositoryPolicy' => [ 'name' => 'SetRepositoryPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SetRepositoryPolicyRequest', ], 'output' => [ 'shape' => 'SetRepositoryPolicyResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], ], ], 'StartLifecyclePolicyPreview' => [ 'name' => 'StartLifecyclePolicyPreview', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartLifecyclePolicyPreviewRequest', ], 'output' => [ 'shape' => 'StartLifecyclePolicyPreviewResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'LifecyclePolicyNotFoundException', ], [ 'shape' => 'LifecyclePolicyPreviewInProgressException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidTagParameterException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'ServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidTagParameterException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'ServerException', ], ], ], 'UploadLayerPart' => [ 'name' => 'UploadLayerPart', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UploadLayerPartRequest', ], 'output' => [ 'shape' => 'UploadLayerPartResponse', ], 'errors' => [ [ 'shape' => 'ServerException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidLayerPartException', ], [ 'shape' => 'RepositoryNotFoundException', ], [ 'shape' => 'UploadNotFoundException', ], [ 'shape' => 'LimitExceededException', ], ], ], ], 'shapes' => [ 'Arn' => [ 'type' => 'string', ], 'AuthorizationData' => [ 'type' => 'structure', 'members' => [ 'authorizationToken' => [ 'shape' => 'Base64', ], 'expiresAt' => [ 'shape' => 'ExpirationTimestamp', ], 'proxyEndpoint' => [ 'shape' => 'ProxyEndpoint', ], ], ], 'AuthorizationDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuthorizationData', ], ], 'Base64' => [ 'type' => 'string', 'pattern' => '^\\S+$', ], 'BatchCheckLayerAvailabilityRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'layerDigests', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'layerDigests' => [ 'shape' => 'BatchedOperationLayerDigestList', ], ], ], 'BatchCheckLayerAvailabilityResponse' => [ 'type' => 'structure', 'members' => [ 'layers' => [ 'shape' => 'LayerList', ], 'failures' => [ 'shape' => 'LayerFailureList', ], ], ], 'BatchDeleteImageRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'imageIds', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageIds' => [ 'shape' => 'ImageIdentifierList', ], ], ], 'BatchDeleteImageResponse' => [ 'type' => 'structure', 'members' => [ 'imageIds' => [ 'shape' => 'ImageIdentifierList', ], 'failures' => [ 'shape' => 'ImageFailureList', ], ], ], 'BatchGetImageRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'imageIds', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageIds' => [ 'shape' => 'ImageIdentifierList', ], 'acceptedMediaTypes' => [ 'shape' => 'MediaTypeList', ], ], ], 'BatchGetImageResponse' => [ 'type' => 'structure', 'members' => [ 'images' => [ 'shape' => 'ImageList', ], 'failures' => [ 'shape' => 'ImageFailureList', ], ], ], 'BatchedOperationLayerDigest' => [ 'type' => 'string', 'max' => 1000, 'min' => 0, ], 'BatchedOperationLayerDigestList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchedOperationLayerDigest', ], 'max' => 100, 'min' => 1, ], 'CompleteLayerUploadRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'uploadId', 'layerDigests', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'uploadId' => [ 'shape' => 'UploadId', ], 'layerDigests' => [ 'shape' => 'LayerDigestList', ], ], ], 'CompleteLayerUploadResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'uploadId' => [ 'shape' => 'UploadId', ], 'layerDigest' => [ 'shape' => 'LayerDigest', ], ], ], 'CreateRepositoryRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'CreateRepositoryResponse' => [ 'type' => 'structure', 'members' => [ 'repository' => [ 'shape' => 'Repository', ], ], ], 'CreationTimestamp' => [ 'type' => 'timestamp', ], 'DeleteLifecyclePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'DeleteLifecyclePolicyResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], 'lastEvaluatedAt' => [ 'shape' => 'EvaluationTimestamp', ], ], ], 'DeleteRepositoryPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'DeleteRepositoryPolicyResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'policyText' => [ 'shape' => 'RepositoryPolicyText', ], ], ], 'DeleteRepositoryRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'force' => [ 'shape' => 'ForceFlag', ], ], ], 'DeleteRepositoryResponse' => [ 'type' => 'structure', 'members' => [ 'repository' => [ 'shape' => 'Repository', ], ], ], 'DescribeImagesFilter' => [ 'type' => 'structure', 'members' => [ 'tagStatus' => [ 'shape' => 'TagStatus', ], ], ], 'DescribeImagesRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageIds' => [ 'shape' => 'ImageIdentifierList', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'filter' => [ 'shape' => 'DescribeImagesFilter', ], ], ], 'DescribeImagesResponse' => [ 'type' => 'structure', 'members' => [ 'imageDetails' => [ 'shape' => 'ImageDetailList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeRepositoriesRequest' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryNames' => [ 'shape' => 'RepositoryNameList', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], ], ], 'DescribeRepositoriesResponse' => [ 'type' => 'structure', 'members' => [ 'repositories' => [ 'shape' => 'RepositoryList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'EmptyUploadException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'EvaluationTimestamp' => [ 'type' => 'timestamp', ], 'ExceptionMessage' => [ 'type' => 'string', ], 'ExpirationTimestamp' => [ 'type' => 'timestamp', ], 'ForceFlag' => [ 'type' => 'boolean', ], 'GetAuthorizationTokenRegistryIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RegistryId', ], 'max' => 10, 'min' => 1, ], 'GetAuthorizationTokenRequest' => [ 'type' => 'structure', 'members' => [ 'registryIds' => [ 'shape' => 'GetAuthorizationTokenRegistryIdList', ], ], ], 'GetAuthorizationTokenResponse' => [ 'type' => 'structure', 'members' => [ 'authorizationData' => [ 'shape' => 'AuthorizationDataList', ], ], ], 'GetDownloadUrlForLayerRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'layerDigest', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'layerDigest' => [ 'shape' => 'LayerDigest', ], ], ], 'GetDownloadUrlForLayerResponse' => [ 'type' => 'structure', 'members' => [ 'downloadUrl' => [ 'shape' => 'Url', ], 'layerDigest' => [ 'shape' => 'LayerDigest', ], ], ], 'GetLifecyclePolicyPreviewRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageIds' => [ 'shape' => 'ImageIdentifierList', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'LifecyclePreviewMaxResults', ], 'filter' => [ 'shape' => 'LifecyclePolicyPreviewFilter', ], ], ], 'GetLifecyclePolicyPreviewResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], 'status' => [ 'shape' => 'LifecyclePolicyPreviewStatus', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'previewResults' => [ 'shape' => 'LifecyclePolicyPreviewResultList', ], 'summary' => [ 'shape' => 'LifecyclePolicyPreviewSummary', ], ], ], 'GetLifecyclePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'GetLifecyclePolicyResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], 'lastEvaluatedAt' => [ 'shape' => 'EvaluationTimestamp', ], ], ], 'GetRepositoryPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'GetRepositoryPolicyResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'policyText' => [ 'shape' => 'RepositoryPolicyText', ], ], ], 'Image' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageId' => [ 'shape' => 'ImageIdentifier', ], 'imageManifest' => [ 'shape' => 'ImageManifest', ], ], ], 'ImageActionType' => [ 'type' => 'string', 'enum' => [ 'EXPIRE', ], ], 'ImageAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'ImageCount' => [ 'type' => 'integer', 'min' => 0, ], 'ImageDetail' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageDigest' => [ 'shape' => 'ImageDigest', ], 'imageTags' => [ 'shape' => 'ImageTagList', ], 'imageSizeInBytes' => [ 'shape' => 'ImageSizeInBytes', ], 'imagePushedAt' => [ 'shape' => 'PushTimestamp', ], ], ], 'ImageDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageDetail', ], ], 'ImageDigest' => [ 'type' => 'string', ], 'ImageFailure' => [ 'type' => 'structure', 'members' => [ 'imageId' => [ 'shape' => 'ImageIdentifier', ], 'failureCode' => [ 'shape' => 'ImageFailureCode', ], 'failureReason' => [ 'shape' => 'ImageFailureReason', ], ], ], 'ImageFailureCode' => [ 'type' => 'string', 'enum' => [ 'InvalidImageDigest', 'InvalidImageTag', 'ImageTagDoesNotMatchDigest', 'ImageNotFound', 'MissingDigestAndTag', ], ], 'ImageFailureList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageFailure', ], ], 'ImageFailureReason' => [ 'type' => 'string', ], 'ImageIdentifier' => [ 'type' => 'structure', 'members' => [ 'imageDigest' => [ 'shape' => 'ImageDigest', ], 'imageTag' => [ 'shape' => 'ImageTag', ], ], ], 'ImageIdentifierList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageIdentifier', ], 'max' => 100, 'min' => 1, ], 'ImageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Image', ], ], 'ImageManifest' => [ 'type' => 'string', ], 'ImageNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'ImageSizeInBytes' => [ 'type' => 'long', ], 'ImageTag' => [ 'type' => 'string', ], 'ImageTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImageTag', ], ], 'InitiateLayerUploadRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], ], ], 'InitiateLayerUploadResponse' => [ 'type' => 'structure', 'members' => [ 'uploadId' => [ 'shape' => 'UploadId', ], 'partSize' => [ 'shape' => 'PartSize', ], ], ], 'InvalidLayerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'InvalidLayerPartException' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'uploadId' => [ 'shape' => 'UploadId', ], 'lastValidByteReceived' => [ 'shape' => 'PartSize', ], 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'InvalidTagParameterException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'Layer' => [ 'type' => 'structure', 'members' => [ 'layerDigest' => [ 'shape' => 'LayerDigest', ], 'layerAvailability' => [ 'shape' => 'LayerAvailability', ], 'layerSize' => [ 'shape' => 'LayerSizeInBytes', ], 'mediaType' => [ 'shape' => 'MediaType', ], ], ], 'LayerAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LayerAvailability' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'UNAVAILABLE', ], ], 'LayerDigest' => [ 'type' => 'string', 'pattern' => '[a-zA-Z0-9-_+.]+:[a-fA-F0-9]+', ], 'LayerDigestList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LayerDigest', ], 'max' => 100, 'min' => 1, ], 'LayerFailure' => [ 'type' => 'structure', 'members' => [ 'layerDigest' => [ 'shape' => 'BatchedOperationLayerDigest', ], 'failureCode' => [ 'shape' => 'LayerFailureCode', ], 'failureReason' => [ 'shape' => 'LayerFailureReason', ], ], ], 'LayerFailureCode' => [ 'type' => 'string', 'enum' => [ 'InvalidLayerDigest', 'MissingLayerDigest', ], ], 'LayerFailureList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LayerFailure', ], ], 'LayerFailureReason' => [ 'type' => 'string', ], 'LayerInaccessibleException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LayerList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Layer', ], ], 'LayerPartBlob' => [ 'type' => 'blob', ], 'LayerPartTooSmallException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LayerSizeInBytes' => [ 'type' => 'long', ], 'LayersNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LifecyclePolicyNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LifecyclePolicyPreviewFilter' => [ 'type' => 'structure', 'members' => [ 'tagStatus' => [ 'shape' => 'TagStatus', ], ], ], 'LifecyclePolicyPreviewInProgressException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LifecyclePolicyPreviewNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'LifecyclePolicyPreviewResult' => [ 'type' => 'structure', 'members' => [ 'imageTags' => [ 'shape' => 'ImageTagList', ], 'imageDigest' => [ 'shape' => 'ImageDigest', ], 'imagePushedAt' => [ 'shape' => 'PushTimestamp', ], 'action' => [ 'shape' => 'LifecyclePolicyRuleAction', ], 'appliedRulePriority' => [ 'shape' => 'LifecyclePolicyRulePriority', ], ], ], 'LifecyclePolicyPreviewResultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LifecyclePolicyPreviewResult', ], ], 'LifecyclePolicyPreviewStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'COMPLETE', 'EXPIRED', 'FAILED', ], ], 'LifecyclePolicyPreviewSummary' => [ 'type' => 'structure', 'members' => [ 'expiringImageTotalCount' => [ 'shape' => 'ImageCount', ], ], ], 'LifecyclePolicyRuleAction' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'ImageActionType', ], ], ], 'LifecyclePolicyRulePriority' => [ 'type' => 'integer', 'min' => 1, ], 'LifecyclePolicyText' => [ 'type' => 'string', 'max' => 30720, 'min' => 100, ], 'LifecyclePreviewMaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'ListImagesFilter' => [ 'type' => 'structure', 'members' => [ 'tagStatus' => [ 'shape' => 'TagStatus', ], ], ], 'ListImagesRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'filter' => [ 'shape' => 'ListImagesFilter', ], ], ], 'ListImagesResponse' => [ 'type' => 'structure', 'members' => [ 'imageIds' => [ 'shape' => 'ImageIdentifierList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagList', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ], 'MediaType' => [ 'type' => 'string', ], 'MediaTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MediaType', ], 'max' => 100, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', ], 'PartSize' => [ 'type' => 'long', 'min' => 0, ], 'ProxyEndpoint' => [ 'type' => 'string', ], 'PushTimestamp' => [ 'type' => 'timestamp', ], 'PutImageRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'imageManifest', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'imageManifest' => [ 'shape' => 'ImageManifest', ], 'imageTag' => [ 'shape' => 'ImageTag', ], ], ], 'PutImageResponse' => [ 'type' => 'structure', 'members' => [ 'image' => [ 'shape' => 'Image', ], ], ], 'PutLifecyclePolicyRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'lifecyclePolicyText', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], ], ], 'PutLifecyclePolicyResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], ], ], 'RegistryId' => [ 'type' => 'string', 'pattern' => '[0-9]{12}', ], 'Repository' => [ 'type' => 'structure', 'members' => [ 'repositoryArn' => [ 'shape' => 'Arn', ], 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'repositoryUri' => [ 'shape' => 'Url', ], 'createdAt' => [ 'shape' => 'CreationTimestamp', ], ], ], 'RepositoryAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'RepositoryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Repository', ], ], 'RepositoryName' => [ 'type' => 'string', 'max' => 256, 'min' => 2, 'pattern' => '(?:[a-z0-9]+(?:[._-][a-z0-9]+)*/)*[a-z0-9]+(?:[._-][a-z0-9]+)*', ], 'RepositoryNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RepositoryName', ], 'max' => 100, 'min' => 1, ], 'RepositoryNotEmptyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'RepositoryNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'RepositoryPolicyNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'RepositoryPolicyText' => [ 'type' => 'string', 'max' => 10240, 'min' => 0, ], 'ServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, 'fault' => true, ], 'SetRepositoryPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'policyText', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'policyText' => [ 'shape' => 'RepositoryPolicyText', ], 'force' => [ 'shape' => 'ForceFlag', ], ], ], 'SetRepositoryPolicyResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'policyText' => [ 'shape' => 'RepositoryPolicyText', ], ], ], 'StartLifecyclePolicyPreviewRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], ], ], 'StartLifecyclePolicyPreviewResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'lifecyclePolicyText' => [ 'shape' => 'LifecyclePolicyText', ], 'status' => [ 'shape' => 'LifecyclePolicyPreviewStatus', ], ], ], 'Tag' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagStatus' => [ 'type' => 'string', 'enum' => [ 'TAGGED', 'UNTAGGED', 'ANY', ], ], 'TagValue' => [ 'type' => 'string', ], 'TooManyTagsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UploadId' => [ 'type' => 'string', 'pattern' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', ], 'UploadLayerPartRequest' => [ 'type' => 'structure', 'required' => [ 'repositoryName', 'uploadId', 'partFirstByte', 'partLastByte', 'layerPartBlob', ], 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'uploadId' => [ 'shape' => 'UploadId', ], 'partFirstByte' => [ 'shape' => 'PartSize', ], 'partLastByte' => [ 'shape' => 'PartSize', ], 'layerPartBlob' => [ 'shape' => 'LayerPartBlob', ], ], ], 'UploadLayerPartResponse' => [ 'type' => 'structure', 'members' => [ 'registryId' => [ 'shape' => 'RegistryId', ], 'repositoryName' => [ 'shape' => 'RepositoryName', ], 'uploadId' => [ 'shape' => 'UploadId', ], 'lastByteReceived' => [ 'shape' => 'PartSize', ], ], ], 'UploadNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'Url' => [ 'type' => 'string', ], ],];
