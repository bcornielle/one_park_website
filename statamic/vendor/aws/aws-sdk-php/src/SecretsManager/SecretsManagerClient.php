<?php
namespace Aws\SecretsManager;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Secrets Manager** service.
 * @method \Aws\Result cancelRotateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelRotateSecretAsync(array $args = [])
 * @method \Aws\Result createSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecretAsync(array $args = [])
 * @method \Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Aws\Result deleteSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecretAsync(array $args = [])
 * @method \Aws\Result describeSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecretAsync(array $args = [])
 * @method \Aws\Result getRandomPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRandomPasswordAsync(array $args = [])
 * @method \Aws\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Aws\Result getSecretValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSecretValueAsync(array $args = [])
 * @method \Aws\Result listSecretVersionIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecretVersionIdsAsync(array $args = [])
 * @method \Aws\Result listSecrets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSecretsAsync(array $args = [])
 * @method \Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Aws\Result putSecretValue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSecretValueAsync(array $args = [])
 * @method \Aws\Result restoreSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreSecretAsync(array $args = [])
 * @method \Aws\Result rotateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rotateSecretAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateSecret(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretAsync(array $args = [])
 * @method \Aws\Result updateSecretVersionStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSecretVersionStageAsync(array $args = [])
 */
class SecretsManagerClient extends AwsClient {}
