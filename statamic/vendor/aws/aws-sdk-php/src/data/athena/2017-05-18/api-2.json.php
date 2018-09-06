<?php
// This file was auto-generated from sdk-root/src/data/athena/2017-05-18/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-05-18', 'endpointPrefix' => 'athena', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Athena', 'signatureVersion' => 'v4', 'targetPrefix' => 'AmazonAthena', 'uid' => 'athena-2017-05-18', ], 'operations' => [ 'BatchGetNamedQuery' => [ 'name' => 'BatchGetNamedQuery', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetNamedQueryInput', ], 'output' => [ 'shape' => 'BatchGetNamedQueryOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'BatchGetQueryExecution' => [ 'name' => 'BatchGetQueryExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchGetQueryExecutionInput', ], 'output' => [ 'shape' => 'BatchGetQueryExecutionOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'CreateNamedQuery' => [ 'name' => 'CreateNamedQuery', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateNamedQueryInput', ], 'output' => [ 'shape' => 'CreateNamedQueryOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], 'idempotent' => true, ], 'DeleteNamedQuery' => [ 'name' => 'DeleteNamedQuery', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteNamedQueryInput', ], 'output' => [ 'shape' => 'DeleteNamedQueryOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], 'idempotent' => true, ], 'GetNamedQuery' => [ 'name' => 'GetNamedQuery', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetNamedQueryInput', ], 'output' => [ 'shape' => 'GetNamedQueryOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'GetQueryExecution' => [ 'name' => 'GetQueryExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetQueryExecutionInput', ], 'output' => [ 'shape' => 'GetQueryExecutionOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'GetQueryResults' => [ 'name' => 'GetQueryResults', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetQueryResultsInput', ], 'output' => [ 'shape' => 'GetQueryResultsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'ListNamedQueries' => [ 'name' => 'ListNamedQueries', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListNamedQueriesInput', ], 'output' => [ 'shape' => 'ListNamedQueriesOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'ListQueryExecutions' => [ 'name' => 'ListQueryExecutions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListQueryExecutionsInput', ], 'output' => [ 'shape' => 'ListQueryExecutionsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], ], 'StartQueryExecution' => [ 'name' => 'StartQueryExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartQueryExecutionInput', ], 'output' => [ 'shape' => 'StartQueryExecutionOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'StopQueryExecution' => [ 'name' => 'StopQueryExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StopQueryExecutionInput', ], 'output' => [ 'shape' => 'StopQueryExecutionOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'InvalidRequestException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'BatchGetNamedQueryInput' => [ 'type' => 'structure', 'required' => [ 'NamedQueryIds', ], 'members' => [ 'NamedQueryIds' => [ 'shape' => 'NamedQueryIdList', ], ], ], 'BatchGetNamedQueryOutput' => [ 'type' => 'structure', 'members' => [ 'NamedQueries' => [ 'shape' => 'NamedQueryList', ], 'UnprocessedNamedQueryIds' => [ 'shape' => 'UnprocessedNamedQueryIdList', ], ], ], 'BatchGetQueryExecutionInput' => [ 'type' => 'structure', 'required' => [ 'QueryExecutionIds', ], 'members' => [ 'QueryExecutionIds' => [ 'shape' => 'QueryExecutionIdList', ], ], ], 'BatchGetQueryExecutionOutput' => [ 'type' => 'structure', 'members' => [ 'QueryExecutions' => [ 'shape' => 'QueryExecutionList', ], 'UnprocessedQueryExecutionIds' => [ 'shape' => 'UnprocessedQueryExecutionIdList', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'ColumnInfo' => [ 'type' => 'structure', 'required' => [ 'Name', 'Type', ], 'members' => [ 'CatalogName' => [ 'shape' => 'String', ], 'SchemaName' => [ 'shape' => 'String', ], 'TableName' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], 'Label' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'String', ], 'Precision' => [ 'shape' => 'Integer', ], 'Scale' => [ 'shape' => 'Integer', ], 'Nullable' => [ 'shape' => 'ColumnNullable', ], 'CaseSensitive' => [ 'shape' => 'Boolean', ], ], ], 'ColumnInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnInfo', ], ], 'ColumnNullable' => [ 'type' => 'string', 'enum' => [ 'NOT_NULL', 'NULLABLE', 'UNKNOWN', ], ], 'CreateNamedQueryInput' => [ 'type' => 'structure', 'required' => [ 'Name', 'Database', 'QueryString', ], 'members' => [ 'Name' => [ 'shape' => 'NameString', ], 'Description' => [ 'shape' => 'DescriptionString', ], 'Database' => [ 'shape' => 'DatabaseString', ], 'QueryString' => [ 'shape' => 'QueryString', ], 'ClientRequestToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], ], ], 'CreateNamedQueryOutput' => [ 'type' => 'structure', 'members' => [ 'NamedQueryId' => [ 'shape' => 'NamedQueryId', ], ], ], 'DatabaseString' => [ 'type' => 'string', 'max' => 32, 'min' => 1, ], 'Date' => [ 'type' => 'timestamp', ], 'Datum' => [ 'type' => 'structure', 'members' => [ 'VarCharValue' => [ 'shape' => 'datumString', ], ], ], 'DeleteNamedQueryInput' => [ 'type' => 'structure', 'required' => [ 'NamedQueryId', ], 'members' => [ 'NamedQueryId' => [ 'shape' => 'NamedQueryId', 'idempotencyToken' => true, ], ], ], 'DeleteNamedQueryOutput' => [ 'type' => 'structure', 'members' => [], ], 'DescriptionString' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'EncryptionConfiguration' => [ 'type' => 'structure', 'required' => [ 'EncryptionOption', ], 'members' => [ 'EncryptionOption' => [ 'shape' => 'EncryptionOption', ], 'KmsKey' => [ 'shape' => 'String', ], ], ], 'EncryptionOption' => [ 'type' => 'string', 'enum' => [ 'SSE_S3', 'SSE_KMS', 'CSE_KMS', ], ], 'ErrorCode' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ErrorMessage' => [ 'type' => 'string', ], 'GetNamedQueryInput' => [ 'type' => 'structure', 'required' => [ 'NamedQueryId', ], 'members' => [ 'NamedQueryId' => [ 'shape' => 'NamedQueryId', ], ], ], 'GetNamedQueryOutput' => [ 'type' => 'structure', 'members' => [ 'NamedQuery' => [ 'shape' => 'NamedQuery', ], ], ], 'GetQueryExecutionInput' => [ 'type' => 'structure', 'required' => [ 'QueryExecutionId', ], 'members' => [ 'QueryExecutionId' => [ 'shape' => 'QueryExecutionId', ], ], ], 'GetQueryExecutionOutput' => [ 'type' => 'structure', 'members' => [ 'QueryExecution' => [ 'shape' => 'QueryExecution', ], ], ], 'GetQueryResultsInput' => [ 'type' => 'structure', 'required' => [ 'QueryExecutionId', ], 'members' => [ 'QueryExecutionId' => [ 'shape' => 'QueryExecutionId', ], 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxQueryResults', ], ], ], 'GetQueryResultsOutput' => [ 'type' => 'structure', 'members' => [ 'ResultSet' => [ 'shape' => 'ResultSet', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'IdempotencyToken' => [ 'type' => 'string', 'max' => 128, 'min' => 32, ], 'Integer' => [ 'type' => 'integer', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'AthenaErrorCode' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ListNamedQueriesInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxNamedQueriesCount', ], ], ], 'ListNamedQueriesOutput' => [ 'type' => 'structure', 'members' => [ 'NamedQueryIds' => [ 'shape' => 'NamedQueryIdList', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'ListQueryExecutionsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'Token', ], 'MaxResults' => [ 'shape' => 'MaxQueryExecutionsCount', ], ], ], 'ListQueryExecutionsOutput' => [ 'type' => 'structure', 'members' => [ 'QueryExecutionIds' => [ 'shape' => 'QueryExecutionIdList', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'Long' => [ 'type' => 'long', ], 'MaxNamedQueriesCount' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 0, ], 'MaxQueryExecutionsCount' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 0, ], 'MaxQueryResults' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 0, ], 'NameString' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'NamedQuery' => [ 'type' => 'structure', 'required' => [ 'Name', 'Database', 'QueryString', ], 'members' => [ 'Name' => [ 'shape' => 'NameString', ], 'Description' => [ 'shape' => 'DescriptionString', ], 'Database' => [ 'shape' => 'DatabaseString', ], 'QueryString' => [ 'shape' => 'QueryString', ], 'NamedQueryId' => [ 'shape' => 'NamedQueryId', ], ], ], 'NamedQueryId' => [ 'type' => 'string', ], 'NamedQueryIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NamedQueryId', ], 'max' => 50, 'min' => 1, ], 'NamedQueryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NamedQuery', ], ], 'QueryExecution' => [ 'type' => 'structure', 'members' => [ 'QueryExecutionId' => [ 'shape' => 'QueryExecutionId', ], 'Query' => [ 'shape' => 'QueryString', ], 'ResultConfiguration' => [ 'shape' => 'ResultConfiguration', ], 'QueryExecutionContext' => [ 'shape' => 'QueryExecutionContext', ], 'Status' => [ 'shape' => 'QueryExecutionStatus', ], 'Statistics' => [ 'shape' => 'QueryExecutionStatistics', ], ], ], 'QueryExecutionContext' => [ 'type' => 'structure', 'members' => [ 'Database' => [ 'shape' => 'DatabaseString', ], ], ], 'QueryExecutionId' => [ 'type' => 'string', ], 'QueryExecutionIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryExecutionId', ], 'max' => 50, 'min' => 1, ], 'QueryExecutionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryExecution', ], ], 'QueryExecutionState' => [ 'type' => 'string', 'enum' => [ 'QUEUED', 'RUNNING', 'SUCCEEDED', 'FAILED', 'CANCELLED', ], ], 'QueryExecutionStatistics' => [ 'type' => 'structure', 'members' => [ 'EngineExecutionTimeInMillis' => [ 'shape' => 'Long', ], 'DataScannedInBytes' => [ 'shape' => 'Long', ], ], ], 'QueryExecutionStatus' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => 'QueryExecutionState', ], 'StateChangeReason' => [ 'shape' => 'String', ], 'SubmissionDateTime' => [ 'shape' => 'Date', ], 'CompletionDateTime' => [ 'shape' => 'Date', ], ], ], 'QueryString' => [ 'type' => 'string', 'max' => 262144, 'min' => 1, ], 'ResultConfiguration' => [ 'type' => 'structure', 'required' => [ 'OutputLocation', ], 'members' => [ 'OutputLocation' => [ 'shape' => 'String', ], 'EncryptionConfiguration' => [ 'shape' => 'EncryptionConfiguration', ], ], ], 'ResultSet' => [ 'type' => 'structure', 'members' => [ 'Rows' => [ 'shape' => 'RowList', ], 'ResultSetMetadata' => [ 'shape' => 'ResultSetMetadata', ], ], ], 'ResultSetMetadata' => [ 'type' => 'structure', 'members' => [ 'ColumnInfo' => [ 'shape' => 'ColumnInfoList', ], ], ], 'Row' => [ 'type' => 'structure', 'members' => [ 'Data' => [ 'shape' => 'datumList', ], ], ], 'RowList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Row', ], ], 'StartQueryExecutionInput' => [ 'type' => 'structure', 'required' => [ 'QueryString', 'ResultConfiguration', ], 'members' => [ 'QueryString' => [ 'shape' => 'QueryString', ], 'ClientRequestToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'QueryExecutionContext' => [ 'shape' => 'QueryExecutionContext', ], 'ResultConfiguration' => [ 'shape' => 'ResultConfiguration', ], ], ], 'StartQueryExecutionOutput' => [ 'type' => 'structure', 'members' => [ 'QueryExecutionId' => [ 'shape' => 'QueryExecutionId', ], ], ], 'StopQueryExecutionInput' => [ 'type' => 'structure', 'required' => [ 'QueryExecutionId', ], 'members' => [ 'QueryExecutionId' => [ 'shape' => 'QueryExecutionId', 'idempotencyToken' => true, ], ], ], 'StopQueryExecutionOutput' => [ 'type' => 'structure', 'members' => [], ], 'String' => [ 'type' => 'string', ], 'ThrottleReason' => [ 'type' => 'string', 'enum' => [ 'CONCURRENT_QUERY_LIMIT_EXCEEDED', ], ], 'Token' => [ 'type' => 'string', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Reason' => [ 'shape' => 'ThrottleReason', ], ], 'exception' => true, ], 'UnprocessedNamedQueryId' => [ 'type' => 'structure', 'members' => [ 'NamedQueryId' => [ 'shape' => 'NamedQueryId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'UnprocessedNamedQueryIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnprocessedNamedQueryId', ], ], 'UnprocessedQueryExecutionId' => [ 'type' => 'structure', 'members' => [ 'QueryExecutionId' => [ 'shape' => 'QueryExecutionId', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'UnprocessedQueryExecutionIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UnprocessedQueryExecutionId', ], ], 'datumList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Datum', ], ], 'datumString' => [ 'type' => 'string', ], ],];
