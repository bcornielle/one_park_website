<?php
// This file was auto-generated from sdk-root/src/data/xray/2016-04-12/paginators-1.json
return [ 'pagination' => [ 'BatchGetTraces' => [ 'input_token' => 'NextToken', 'non_aggregate_keys' => [ 'UnprocessedTraceIds', ], 'output_token' => 'NextToken', 'result_key' => 'Traces', ], 'GetGroups' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'Groups', ], 'GetSamplingRules' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'SamplingRuleRecords', ], 'GetSamplingStatisticSummaries' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'SamplingStatisticSummaries', ], 'GetServiceGraph' => [ 'input_token' => 'NextToken', 'non_aggregate_keys' => [ 'StartTime', 'EndTime', 'ContainsOldGroupVersions', ], 'output_token' => 'NextToken', 'result_key' => 'Services', ], 'GetTimeSeriesServiceStatistics' => [ 'input_token' => 'NextToken', 'non_aggregate_keys' => [ 'ContainsOldGroupVersions', ], 'output_token' => 'NextToken', 'result_key' => 'TimeSeriesServiceStatistics', ], 'GetTraceGraph' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'Services', ], 'GetTraceSummaries' => [ 'input_token' => 'NextToken', 'non_aggregate_keys' => [ 'TracesProcessedCount', 'ApproximateTime', ], 'output_token' => 'NextToken', 'result_key' => 'TraceSummaries', ], ],];
