<?php
// This file was auto-generated from sdk-root/src/data/iot1click-devices/2018-05-14/api-2.json
return [ 'metadata' => [ 'apiVersion' => '2018-05-14', 'endpointPrefix' => 'devices.iot1click', 'signingName' => 'iot1click', 'serviceFullName' => 'AWS IoT 1-Click Devices Service', 'serviceId' => 'IoT 1Click Devices Service', 'protocol' => 'rest-json', 'jsonVersion' => '1.1', 'uid' => 'devices-2018-05-14', 'signatureVersion' => 'v4', ], 'operations' => [ 'ClaimDevicesByClaimCode' => [ 'name' => 'ClaimDevicesByClaimCode', 'http' => [ 'method' => 'PUT', 'requestUri' => '/claims/{claimCode}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ClaimDevicesByClaimCodeRequest', ], 'output' => [ 'shape' => 'ClaimDevicesByClaimCodeResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'DescribeDevice' => [ 'name' => 'DescribeDevice', 'http' => [ 'method' => 'GET', 'requestUri' => '/devices/{deviceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeDeviceRequest', ], 'output' => [ 'shape' => 'DescribeDeviceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'FinalizeDeviceClaim' => [ 'name' => 'FinalizeDeviceClaim', 'http' => [ 'method' => 'PUT', 'requestUri' => '/devices/{deviceId}/finalize-claim', 'responseCode' => 200, ], 'input' => [ 'shape' => 'FinalizeDeviceClaimRequest', ], 'output' => [ 'shape' => 'FinalizeDeviceClaimResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'PreconditionFailedException', ], [ 'shape' => 'ResourceConflictException', ], ], ], 'GetDeviceMethods' => [ 'name' => 'GetDeviceMethods', 'http' => [ 'method' => 'GET', 'requestUri' => '/devices/{deviceId}/methods', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDeviceMethodsRequest', ], 'output' => [ 'shape' => 'GetDeviceMethodsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'InitiateDeviceClaim' => [ 'name' => 'InitiateDeviceClaim', 'http' => [ 'method' => 'PUT', 'requestUri' => '/devices/{deviceId}/initiate-claim', 'responseCode' => 200, ], 'input' => [ 'shape' => 'InitiateDeviceClaimRequest', ], 'output' => [ 'shape' => 'InitiateDeviceClaimResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ResourceConflictException', ], ], ], 'InvokeDeviceMethod' => [ 'name' => 'InvokeDeviceMethod', 'http' => [ 'method' => 'POST', 'requestUri' => '/devices/{deviceId}/methods', 'responseCode' => 200, ], 'input' => [ 'shape' => 'InvokeDeviceMethodRequest', ], 'output' => [ 'shape' => 'InvokeDeviceMethodResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'PreconditionFailedException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RangeNotSatisfiableException', ], [ 'shape' => 'ResourceConflictException', ], ], ], 'ListDeviceEvents' => [ 'name' => 'ListDeviceEvents', 'http' => [ 'method' => 'GET', 'requestUri' => '/devices/{deviceId}/events', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDeviceEventsRequest', ], 'output' => [ 'shape' => 'ListDeviceEventsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RangeNotSatisfiableException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListDevices' => [ 'name' => 'ListDevices', 'http' => [ 'method' => 'GET', 'requestUri' => '/devices', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDevicesRequest', ], 'output' => [ 'shape' => 'ListDevicesResponse', ], 'errors' => [ [ 'shape' => 'RangeNotSatisfiableException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resource-arn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resource-arn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UnclaimDevice' => [ 'name' => 'UnclaimDevice', 'http' => [ 'method' => 'PUT', 'requestUri' => '/devices/{deviceId}/unclaim', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UnclaimDeviceRequest', ], 'output' => [ 'shape' => 'UnclaimDeviceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resource-arn}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UpdateDeviceState' => [ 'name' => 'UpdateDeviceState', 'http' => [ 'method' => 'PUT', 'requestUri' => '/devices/{deviceId}/state', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateDeviceStateRequest', ], 'output' => [ 'shape' => 'UpdateDeviceStateResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], ], 'shapes' => [ 'Attributes' => [ 'type' => 'structure', 'members' => [], ], 'ClaimDevicesByClaimCodeRequest' => [ 'type' => 'structure', 'members' => [ 'ClaimCode' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'claimCode', ], ], 'required' => [ 'ClaimCode', ], ], 'ClaimDevicesByClaimCodeResponse' => [ 'type' => 'structure', 'members' => [ 'ClaimCode' => [ 'shape' => '__stringMin12Max40', 'locationName' => 'claimCode', ], 'Total' => [ 'shape' => '__integer', 'locationName' => 'total', ], ], ], 'DescribeDeviceRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], ], 'required' => [ 'DeviceId', ], ], 'DescribeDeviceResponse' => [ 'type' => 'structure', 'members' => [ 'DeviceDescription' => [ 'shape' => 'DeviceDescription', 'locationName' => 'deviceDescription', ], ], ], 'Device' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'Attributes', 'locationName' => 'attributes', ], 'DeviceId' => [ 'shape' => '__string', 'locationName' => 'deviceId', ], 'Type' => [ 'shape' => '__string', 'locationName' => 'type', ], ], ], 'DeviceAttributes' => [ 'type' => 'map', 'key' => [ 'shape' => '__string', ], 'value' => [ 'shape' => '__string', ], ], 'DeviceClaimResponse' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => '__string', 'locationName' => 'state', ], ], ], 'DeviceDescription' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => '__string', 'locationName' => 'arn', ], 'Attributes' => [ 'shape' => 'DeviceAttributes', 'locationName' => 'attributes', ], 'DeviceId' => [ 'shape' => '__string', 'locationName' => 'deviceId', ], 'Enabled' => [ 'shape' => '__boolean', 'locationName' => 'enabled', ], 'RemainingLife' => [ 'shape' => '__doubleMin0Max100', 'locationName' => 'remainingLife', ], 'Type' => [ 'shape' => '__string', 'locationName' => 'type', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], ], 'DeviceEvent' => [ 'type' => 'structure', 'members' => [ 'Device' => [ 'shape' => 'Device', 'locationName' => 'device', ], 'StdEvent' => [ 'shape' => '__string', 'locationName' => 'stdEvent', ], ], ], 'DeviceEventsResponse' => [ 'type' => 'structure', 'members' => [ 'Events' => [ 'shape' => '__listOfDeviceEvent', 'locationName' => 'events', ], 'NextToken' => [ 'shape' => '__string', 'locationName' => 'nextToken', ], ], ], 'DeviceMethod' => [ 'type' => 'structure', 'members' => [ 'DeviceType' => [ 'shape' => '__string', 'locationName' => 'deviceType', ], 'MethodName' => [ 'shape' => '__string', 'locationName' => 'methodName', ], ], ], 'Empty' => [ 'type' => 'structure', 'members' => [], ], 'FinalizeDeviceClaimRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], 'required' => [ 'DeviceId', ], ], 'FinalizeDeviceClaimResponse' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => '__string', 'locationName' => 'state', ], ], ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 403, ], ], 'GetDeviceMethodsRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], ], 'required' => [ 'DeviceId', ], ], 'GetDeviceMethodsResponse' => [ 'type' => 'structure', 'members' => [ 'DeviceMethods' => [ 'shape' => '__listOfDeviceMethod', 'locationName' => 'deviceMethods', ], ], ], 'InitiateDeviceClaimRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], ], 'required' => [ 'DeviceId', ], ], 'InitiateDeviceClaimResponse' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => '__string', 'locationName' => 'state', ], ], ], 'InternalFailureException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 500, ], ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 400, ], ], 'InvokeDeviceMethodRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], 'DeviceMethod' => [ 'shape' => 'DeviceMethod', 'locationName' => 'deviceMethod', ], 'DeviceMethodParameters' => [ 'shape' => '__string', 'locationName' => 'deviceMethodParameters', ], ], 'required' => [ 'DeviceId', ], ], 'InvokeDeviceMethodResponse' => [ 'type' => 'structure', 'members' => [ 'DeviceMethodResponse' => [ 'shape' => '__string', 'locationName' => 'deviceMethodResponse', ], ], ], 'ListDeviceEventsRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], 'FromTimeStamp' => [ 'shape' => '__timestampIso8601', 'location' => 'querystring', 'locationName' => 'fromTimeStamp', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'ToTimeStamp' => [ 'shape' => '__timestampIso8601', 'location' => 'querystring', 'locationName' => 'toTimeStamp', ], ], 'required' => [ 'DeviceId', 'FromTimeStamp', 'ToTimeStamp', ], ], 'ListDeviceEventsResponse' => [ 'type' => 'structure', 'members' => [ 'Events' => [ 'shape' => '__listOfDeviceEvent', 'locationName' => 'events', ], 'NextToken' => [ 'shape' => '__string', 'locationName' => 'nextToken', ], ], ], 'ListDevicesRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceType' => [ 'shape' => '__string', 'location' => 'querystring', 'locationName' => 'deviceType', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => '__string', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListDevicesResponse' => [ 'type' => 'structure', 'members' => [ 'Devices' => [ 'shape' => '__listOfDeviceDescription', 'locationName' => 'devices', ], 'NextToken' => [ 'shape' => '__string', 'locationName' => 'nextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'resource-arn', ], ], 'required' => [ 'ResourceArn', ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'min' => 1, 'max' => 250, ], 'PreconditionFailedException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 412, ], ], 'RangeNotSatisfiableException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 416, ], ], 'ResourceConflictException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 409, ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => '__string', 'locationName' => 'code', ], 'Message' => [ 'shape' => '__string', 'locationName' => 'message', ], ], 'exception' => true, 'error' => [ 'httpStatusCode' => 404, ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'resource-arn', ], 'Tags' => [ 'shape' => '__mapOf__string', 'locationName' => 'tags', ], ], 'required' => [ 'ResourceArn', 'Tags', ], ], 'UnclaimDeviceRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], ], 'required' => [ 'DeviceId', ], ], 'UnclaimDeviceResponse' => [ 'type' => 'structure', 'members' => [ 'State' => [ 'shape' => '__string', 'locationName' => 'state', ], ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'members' => [ 'ResourceArn' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'resource-arn', ], 'TagKeys' => [ 'shape' => '__listOf__string', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], 'required' => [ 'TagKeys', 'ResourceArn', ], ], 'UpdateDeviceStateRequest' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => '__string', 'location' => 'uri', 'locationName' => 'deviceId', ], 'Enabled' => [ 'shape' => '__boolean', 'locationName' => 'enabled', ], ], 'required' => [ 'DeviceId', ], ], 'UpdateDeviceStateResponse' => [ 'type' => 'structure', 'members' => [], ], '__boolean' => [ 'type' => 'boolean', ], '__double' => [ 'type' => 'double', ], '__doubleMin0Max100' => [ 'type' => 'double', ], '__integer' => [ 'type' => 'integer', ], '__listOfDeviceDescription' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceDescription', ], ], '__listOfDeviceEvent' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceEvent', ], ], '__listOfDeviceMethod' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceMethod', ], ], '__listOf__string' => [ 'type' => 'list', 'member' => [ 'shape' => '__string', ], ], '__long' => [ 'type' => 'long', ], '__mapOf__string' => [ 'type' => 'map', 'key' => [ 'shape' => '__string', ], 'value' => [ 'shape' => '__string', ], ], '__string' => [ 'type' => 'string', ], '__stringMin12Max40' => [ 'type' => 'string', 'min' => 12, 'max' => 40, ], '__timestampIso8601' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], '__timestampUnix' => [ 'type' => 'timestamp', 'timestampFormat' => 'unixTimestamp', ], ],];
