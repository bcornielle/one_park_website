<?php
// This file was auto-generated from sdk-root/src/data/codebuild/2016-10-06/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-10-06', 'endpointPrefix' => 'codebuild', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS CodeBuild', 'signatureVersion' => 'v4', 'targetPrefix' => 'CodeBuild_20161006', 'uid' => 'codebuild-2016-10-06', ], 'operations' => [ 'BatchGetBuilds' => [ 'name' => 'BatchGetBuilds', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetBuildsInput', ], 'output' => [ 'shape' => 'BatchGetBuildsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'BatchGetProjects' => [ 'name' => 'BatchGetProjects', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetProjectsInput', ], 'output' => [ 'shape' => 'BatchGetProjectsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'CreateProject' => [ 'name' => 'CreateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateProjectInput', ], 'output' => [ 'shape' => 'CreateProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'AccountLimitExceededException', ], ], ], 'DeleteProject' => [ 'name' => 'DeleteProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteProjectInput', ], 'output' => [ 'shape' => 'DeleteProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'ListBuilds' => [ 'name' => 'ListBuilds', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListBuildsInput', ], 'output' => [ 'shape' => 'ListBuildsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'ListBuildsForProject' => [ 'name' => 'ListBuildsForProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListBuildsForProjectInput', ], 'output' => [ 'shape' => 'ListBuildsForProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListCuratedEnvironmentImages' => [ 'name' => 'ListCuratedEnvironmentImages', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListCuratedEnvironmentImagesInput', ], 'output' => [ 'shape' => 'ListCuratedEnvironmentImagesOutput', ], ], 'ListProjects' => [ 'name' => 'ListProjects', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListProjectsInput', ], 'output' => [ 'shape' => 'ListProjectsOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], ], ], 'StartBuild' => [ 'name' => 'StartBuild', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartBuildInput', ], 'output' => [ 'shape' => 'StartBuildOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccountLimitExceededException', ], ], ], 'StopBuild' => [ 'name' => 'StopBuild', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopBuildInput', ], 'output' => [ 'shape' => 'StopBuildOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateProject' => [ 'name' => 'UpdateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateProjectInput', ], 'output' => [ 'shape' => 'UpdateProjectOutput', ], 'errors' => [ [ 'shape' => 'InvalidInputException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'AccountLimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ArtifactNamespace' => [ 'type' => 'string', 'enum' => [ 'NONE', 'BUILD_ID', ], ], 'ArtifactPackaging' => [ 'type' => 'string', 'enum' => [ 'NONE', 'ZIP', ], ], 'ArtifactsType' => [ 'type' => 'string', 'enum' => [ 'CODEPIPELINE', 'S3', 'NO_ARTIFACTS', ], ], 'BatchGetBuildsInput' => [ 'type' => 'structure', 'required' => [ 'ids', ], 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], ], ], 'BatchGetBuildsOutput' => [ 'type' => 'structure', 'members' => [ 'builds' => [ 'shape' => 'Builds', ], 'buildsNotFound' => [ 'shape' => 'BuildIds', ], ], ], 'BatchGetProjectsInput' => [ 'type' => 'structure', 'required' => [ 'names', ], 'members' => [ 'names' => [ 'shape' => 'ProjectNames', ], ], ], 'BatchGetProjectsOutput' => [ 'type' => 'structure', 'members' => [ 'projects' => [ 'shape' => 'Projects', ], 'projectsNotFound' => [ 'shape' => 'ProjectNames', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'Build' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'NonEmptyString', ], 'arn' => [ 'shape' => 'NonEmptyString', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'currentPhase' => [ 'shape' => 'String', ], 'buildStatus' => [ 'shape' => 'StatusType', ], 'sourceVersion' => [ 'shape' => 'NonEmptyString', ], 'projectName' => [ 'shape' => 'NonEmptyString', ], 'phases' => [ 'shape' => 'BuildPhases', ], 'source' => [ 'shape' => 'ProjectSource', ], 'artifacts' => [ 'shape' => 'BuildArtifacts', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'logs' => [ 'shape' => 'LogsLocation', ], 'timeoutInMinutes' => [ 'shape' => 'WrapperInt', ], 'buildComplete' => [ 'shape' => 'Boolean', ], 'initiator' => [ 'shape' => 'String', ], ], ], 'BuildArtifacts' => [ 'type' => 'structure', 'members' => [ 'location' => [ 'shape' => 'String', ], 'sha256sum' => [ 'shape' => 'String', ], 'md5sum' => [ 'shape' => 'String', ], ], ], 'BuildIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 100, 'min' => 1, ], 'BuildPhase' => [ 'type' => 'structure', 'members' => [ 'phaseType' => [ 'shape' => 'BuildPhaseType', ], 'phaseStatus' => [ 'shape' => 'StatusType', ], 'startTime' => [ 'shape' => 'Timestamp', ], 'endTime' => [ 'shape' => 'Timestamp', ], 'durationInSeconds' => [ 'shape' => 'WrapperLong', ], 'contexts' => [ 'shape' => 'PhaseContexts', ], ], ], 'BuildPhaseType' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'PROVISIONING', 'DOWNLOAD_SOURCE', 'INSTALL', 'PRE_BUILD', 'BUILD', 'POST_BUILD', 'UPLOAD_ARTIFACTS', 'FINALIZING', 'COMPLETED', ], ], 'BuildPhases' => [ 'type' => 'list', 'member' => [ 'shape' => 'BuildPhase', ], ], 'Builds' => [ 'type' => 'list', 'member' => [ 'shape' => 'Build', ], ], 'ComputeType' => [ 'type' => 'string', 'enum' => [ 'BUILD_GENERAL1_SMALL', 'BUILD_GENERAL1_MEDIUM', 'BUILD_GENERAL1_LARGE', ], ], 'CreateProjectInput' => [ 'type' => 'structure', 'required' => [ 'name', 'source', 'artifacts', 'environment', ], 'members' => [ 'name' => [ 'shape' => 'ProjectName', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'source' => [ 'shape' => 'ProjectSource', ], 'artifacts' => [ 'shape' => 'ProjectArtifacts', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'timeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'CreateProjectOutput' => [ 'type' => 'structure', 'members' => [ 'project' => [ 'shape' => 'Project', ], ], ], 'DeleteProjectInput' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'NonEmptyString', ], ], ], 'DeleteProjectOutput' => [ 'type' => 'structure', 'members' => [], ], 'EnvironmentImage' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'description' => [ 'shape' => 'String', ], ], ], 'EnvironmentImages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentImage', ], ], 'EnvironmentLanguage' => [ 'type' => 'structure', 'members' => [ 'language' => [ 'shape' => 'LanguageType', ], 'images' => [ 'shape' => 'EnvironmentImages', ], ], ], 'EnvironmentLanguages' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentLanguage', ], ], 'EnvironmentPlatform' => [ 'type' => 'structure', 'members' => [ 'platform' => [ 'shape' => 'PlatformType', ], 'languages' => [ 'shape' => 'EnvironmentLanguages', ], ], ], 'EnvironmentPlatforms' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentPlatform', ], ], 'EnvironmentType' => [ 'type' => 'string', 'enum' => [ 'LINUX_CONTAINER', ], ], 'EnvironmentVariable' => [ 'type' => 'structure', 'required' => [ 'name', 'value', ], 'members' => [ 'name' => [ 'shape' => 'NonEmptyString', ], 'value' => [ 'shape' => 'String', ], ], ], 'EnvironmentVariables' => [ 'type' => 'list', 'member' => [ 'shape' => 'EnvironmentVariable', ], ], 'InvalidInputException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'KeyInput' => [ 'type' => 'string', 'max' => 127, 'min' => 1, 'pattern' => '^([\\\\p{L}\\\\p{Z}\\\\p{N}_.:/=@+\\\\-]*)$', ], 'LanguageType' => [ 'type' => 'string', 'enum' => [ 'JAVA', 'PYTHON', 'NODE_JS', 'RUBY', 'GOLANG', 'DOCKER', 'ANDROID', 'BASE', ], ], 'ListBuildsForProjectInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'NonEmptyString', ], 'sortOrder' => [ 'shape' => 'SortOrderType', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListBuildsForProjectOutput' => [ 'type' => 'structure', 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListBuildsInput' => [ 'type' => 'structure', 'members' => [ 'sortOrder' => [ 'shape' => 'SortOrderType', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListBuildsOutput' => [ 'type' => 'structure', 'members' => [ 'ids' => [ 'shape' => 'BuildIds', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListCuratedEnvironmentImagesInput' => [ 'type' => 'structure', 'members' => [], ], 'ListCuratedEnvironmentImagesOutput' => [ 'type' => 'structure', 'members' => [ 'platforms' => [ 'shape' => 'EnvironmentPlatforms', ], ], ], 'ListProjectsInput' => [ 'type' => 'structure', 'members' => [ 'sortBy' => [ 'shape' => 'ProjectSortByType', ], 'sortOrder' => [ 'shape' => 'SortOrderType', ], 'nextToken' => [ 'shape' => 'NonEmptyString', ], ], ], 'ListProjectsOutput' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'projects' => [ 'shape' => 'ProjectNames', ], ], ], 'LogsLocation' => [ 'type' => 'structure', 'members' => [ 'groupName' => [ 'shape' => 'String', ], 'streamName' => [ 'shape' => 'String', ], 'deepLink' => [ 'shape' => 'String', ], ], ], 'NonEmptyString' => [ 'type' => 'string', 'min' => 1, ], 'PhaseContext' => [ 'type' => 'structure', 'members' => [ 'statusCode' => [ 'shape' => 'String', ], 'message' => [ 'shape' => 'String', ], ], ], 'PhaseContexts' => [ 'type' => 'list', 'member' => [ 'shape' => 'PhaseContext', ], ], 'PlatformType' => [ 'type' => 'string', 'enum' => [ 'DEBIAN', 'AMAZON_LINUX', 'UBUNTU', ], ], 'Project' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'ProjectName', ], 'arn' => [ 'shape' => 'String', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'source' => [ 'shape' => 'ProjectSource', ], 'artifacts' => [ 'shape' => 'ProjectArtifacts', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'timeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], 'tags' => [ 'shape' => 'TagList', ], 'created' => [ 'shape' => 'Timestamp', ], 'lastModified' => [ 'shape' => 'Timestamp', ], ], ], 'ProjectArtifacts' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'ArtifactsType', ], 'location' => [ 'shape' => 'String', ], 'path' => [ 'shape' => 'String', ], 'namespaceType' => [ 'shape' => 'ArtifactNamespace', ], 'name' => [ 'shape' => 'String', ], 'packaging' => [ 'shape' => 'ArtifactPackaging', ], ], ], 'ProjectDescription' => [ 'type' => 'string', 'max' => 255, 'min' => 0, ], 'ProjectEnvironment' => [ 'type' => 'structure', 'required' => [ 'type', 'image', 'computeType', ], 'members' => [ 'type' => [ 'shape' => 'EnvironmentType', ], 'image' => [ 'shape' => 'NonEmptyString', ], 'computeType' => [ 'shape' => 'ComputeType', ], 'environmentVariables' => [ 'shape' => 'EnvironmentVariables', ], 'privilegedMode' => [ 'shape' => 'WrapperBoolean', ], ], ], 'ProjectName' => [ 'type' => 'string', 'max' => 255, 'min' => 2, 'pattern' => '[A-Za-z0-9][A-Za-z0-9\\-_]{1,254}', ], 'ProjectNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 100, 'min' => 1, ], 'ProjectSortByType' => [ 'type' => 'string', 'enum' => [ 'NAME', 'CREATED_TIME', 'LAST_MODIFIED_TIME', ], ], 'ProjectSource' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'SourceType', ], 'location' => [ 'shape' => 'String', ], 'buildspec' => [ 'shape' => 'String', ], 'auth' => [ 'shape' => 'SourceAuth', ], ], ], 'Projects' => [ 'type' => 'list', 'member' => [ 'shape' => 'Project', ], ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'SortOrderType' => [ 'type' => 'string', 'enum' => [ 'ASCENDING', 'DESCENDING', ], ], 'SourceAuth' => [ 'type' => 'structure', 'required' => [ 'type', ], 'members' => [ 'type' => [ 'shape' => 'SourceAuthType', ], 'resource' => [ 'shape' => 'String', ], ], ], 'SourceAuthType' => [ 'type' => 'string', 'enum' => [ 'OAUTH', ], ], 'SourceType' => [ 'type' => 'string', 'enum' => [ 'CODECOMMIT', 'CODEPIPELINE', 'GITHUB', 'S3', ], ], 'StartBuildInput' => [ 'type' => 'structure', 'required' => [ 'projectName', ], 'members' => [ 'projectName' => [ 'shape' => 'NonEmptyString', ], 'sourceVersion' => [ 'shape' => 'String', ], 'artifactsOverride' => [ 'shape' => 'ProjectArtifacts', ], 'environmentVariablesOverride' => [ 'shape' => 'EnvironmentVariables', ], 'buildspecOverride' => [ 'shape' => 'String', ], 'timeoutInMinutesOverride' => [ 'shape' => 'TimeOut', ], ], ], 'StartBuildOutput' => [ 'type' => 'structure', 'members' => [ 'build' => [ 'shape' => 'Build', ], ], ], 'StatusType' => [ 'type' => 'string', 'enum' => [ 'SUCCEEDED', 'FAILED', 'FAULT', 'TIMED_OUT', 'IN_PROGRESS', 'STOPPED', ], ], 'StopBuildInput' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'NonEmptyString', ], ], ], 'StopBuildOutput' => [ 'type' => 'structure', 'members' => [ 'build' => [ 'shape' => 'Build', ], ], ], 'String' => [ 'type' => 'string', ], 'Tag' => [ 'type' => 'structure', 'members' => [ 'key' => [ 'shape' => 'KeyInput', ], 'value' => [ 'shape' => 'ValueInput', ], ], ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 0, ], 'TimeOut' => [ 'type' => 'integer', 'max' => 480, 'min' => 5, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UpdateProjectInput' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'NonEmptyString', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'source' => [ 'shape' => 'ProjectSource', ], 'artifacts' => [ 'shape' => 'ProjectArtifacts', ], 'environment' => [ 'shape' => 'ProjectEnvironment', ], 'serviceRole' => [ 'shape' => 'NonEmptyString', ], 'timeoutInMinutes' => [ 'shape' => 'TimeOut', ], 'encryptionKey' => [ 'shape' => 'NonEmptyString', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'UpdateProjectOutput' => [ 'type' => 'structure', 'members' => [ 'project' => [ 'shape' => 'Project', ], ], ], 'ValueInput' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^([\\\\p{L}\\\\p{Z}\\\\p{N}_.:/=@+\\\\-]*)$', ], 'WrapperBoolean' => [ 'type' => 'boolean', ], 'WrapperInt' => [ 'type' => 'integer', ], 'WrapperLong' => [ 'type' => 'long', ], ],];
