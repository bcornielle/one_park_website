<?php
namespace Aws\AutoScaling;

use Aws\AwsClient;

/**
 * Auto Scaling client.
 *
 * @method \Aws\Result attachInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachInstancesAsync(array $args = [])
 * @method \Aws\Result attachLoadBalancerTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \Aws\Result attachLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancersAsync(array $args = [])
 * @method \Aws\Result completeLifecycleAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise completeLifecycleActionAsync(array $args = [])
 * @method \Aws\Result createAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAutoScalingGroupAsync(array $args = [])
 * @method \Aws\Result createLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result createOrUpdateTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOrUpdateTagsAsync(array $args = [])
 * @method \Aws\Result deleteAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAutoScalingGroupAsync(array $args = [])
 * @method \Aws\Result deleteLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteLifecycleHook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLifecycleHookAsync(array $args = [])
 * @method \Aws\Result deleteNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result deletePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePolicyAsync(array $args = [])
 * @method \Aws\Result deleteScheduledAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScheduledActionAsync(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \Aws\Result describeAdjustmentTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAdjustmentTypesAsync(array $args = [])
 * @method \Aws\Result describeAutoScalingGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoScalingGroupsAsync(array $args = [])
 * @method \Aws\Result describeAutoScalingInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoScalingInstancesAsync(array $args = [])
 * @method \Aws\Result describeAutoScalingNotificationTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutoScalingNotificationTypesAsync(array $args = [])
 * @method \Aws\Result describeLaunchConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLaunchConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeLifecycleHookTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLifecycleHookTypesAsync(array $args = [])
 * @method \Aws\Result describeLifecycleHooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLifecycleHooksAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \Aws\Result describeMetricCollectionTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMetricCollectionTypesAsync(array $args = [])
 * @method \Aws\Result describeNotificationConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationConfigurationsAsync(array $args = [])
 * @method \Aws\Result describePolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePoliciesAsync(array $args = [])
 * @method \Aws\Result describeScalingActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingActivitiesAsync(array $args = [])
 * @method \Aws\Result describeScalingProcessTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingProcessTypesAsync(array $args = [])
 * @method \Aws\Result describeScheduledActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledActionsAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result describeTerminationPolicyTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTerminationPolicyTypesAsync(array $args = [])
 * @method \Aws\Result detachInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachInstancesAsync(array $args = [])
 * @method \Aws\Result detachLoadBalancerTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachLoadBalancerTargetGroupsAsync(array $args = [])
 * @method \Aws\Result detachLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachLoadBalancersAsync(array $args = [])
 * @method \Aws\Result disableMetricsCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableMetricsCollectionAsync(array $args = [])
 * @method \Aws\Result enableMetricsCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableMetricsCollectionAsync(array $args = [])
 * @method \Aws\Result enterStandby(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enterStandbyAsync(array $args = [])
 * @method \Aws\Result executePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executePolicyAsync(array $args = [])
 * @method \Aws\Result exitStandby(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exitStandbyAsync(array $args = [])
 * @method \Aws\Result putLifecycleHook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putLifecycleHookAsync(array $args = [])
 * @method \Aws\Result putNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \Aws\Result putScheduledUpdateGroupAction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScheduledUpdateGroupActionAsync(array $args = [])
 * @method \Aws\Result recordLifecycleActionHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recordLifecycleActionHeartbeatAsync(array $args = [])
 * @method \Aws\Result resumeProcesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeProcessesAsync(array $args = [])
 * @method \Aws\Result setDesiredCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDesiredCapacityAsync(array $args = [])
 * @method \Aws\Result setInstanceHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceHealthAsync(array $args = [])
 * @method \Aws\Result setInstanceProtection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setInstanceProtectionAsync(array $args = [])
 * @method \Aws\Result suspendProcesses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise suspendProcessesAsync(array $args = [])
 * @method \Aws\Result terminateInstanceInAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateInstanceInAutoScalingGroupAsync(array $args = [])
 * @method \Aws\Result updateAutoScalingGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAutoScalingGroupAsync(array $args = [])
 */
class AutoScalingClient extends AwsClient {}
