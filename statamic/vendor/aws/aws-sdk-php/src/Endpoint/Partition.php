<?php
namespace Aws\Endpoint;

use ArrayAccess;
use Aws\HasDataTrait;
use InvalidArgumentException as Iae;

/**
 * Default implementation of an AWS partition.
 */
final class Partition implements ArrayAccess, PartitionInterface
{
    use HasDataTrait;

    /**
     * The partition constructor accepts the following options:
     *
     * - `partition`: (string, required) The partition name as specified in an
     *   ARN (e.g., `aws`)
     * - `partitionName`: (string) The human readable name of the partition
     *   (e.g., "AWS Standard")
     * - `dnsSuffix`: (string, required) The DNS suffix of the partition. This
     *   value is used to determine how endpoints in the partition are resolved.
     * - `regionRegex`: (string) A PCRE regular expression that specifies the
     *   pattern that region names in the endpoint adhere to.
     * - `regions`: (array, required) A map of the regions in the partition.
     *   Each key is the region as present in a hostname (e.g., `us-east-1`),
     *   and each value is a structure containing region information.
     * - `defaults`: (array) A map of default key value pairs to apply to each
     *   endpoint of the partition. Any value in an `endpoint` definition will
     *   supersede any values specified in `defaults`.
     * - `services`: (array, required) A map of service endpoint prefix name
     *   (the value found in a hostname) to information about the service.
     *
     * @param array $definition
     *
     * @throws Iae if any required options are missing
     */
    public function __construct(array $definition)
    {
        foreach (['partition', 'regions', 'services', 'dnsSuffix'] as $key) {
            if (!isset($definition[$key])) {
                throw new Iae("Partition missing required $key field");
            }
        }

        $this->data = $definition;
    }

    public function getName()
    {
        return $this->data['partition'];
    }

    public function isRegionMatch($region, $service)
    {
        if (isset($this->data['regions'][$region])
            || isset($this->data['services'][$service]['endpoints'][$region])
        ) {
            return true;
        }

        if (isset($this->data['regionRegex'])) {
            return (bool) preg_match(
                "@{$this->data['regionRegex']}@",
                $region
            );
        }

        return false;
    }

    public function getAvailableEndpoints(
        $service,
        $allowNonRegionalEndpoints = false
    ) {
        if ($this->isServicePartitionGlobal($service)) {
            return [$this->getPartitionEndpoint($service)];
        }

        if (isset($this->data['services'][$service]['endpoints'])) {
            $serviceRegions = array_keys(
                $this->data['services'][$service]['endpoints']
            );

            return $allowNonRegionalEndpoints
                ? $serviceRegions
                : array_intersect($serviceRegions, array_keys(
                    $this->data['regions']
                ));
        }

        return [];
    }

    public function __invoke(array $args = [])
    {
        $service = isset($args['service']) ? $args['service'] : '';
        $region = isset($args['region']) ? $args['region'] : '';
        $scheme = isset($args['scheme']) ? $args['scheme'] : 'https';
        $data = $this->getEndpointData($service, $region);

        return [
            'endpoint' => "{$scheme}://" . $this->formatEndpoint(
                    isset($data['hostname']) ? $data['hostname'] : '',
                    $service,
                    $region
                ),
            'signatureVersion' => $this->getSignatureVersion($data),
            'signingRegion' => isset($data['credentialScope']['region'])
                ? $data['credentialScope']['region']
                : $region,
            'signingName' => isset($data['credentialScope']['service'])
                ? $data['credentialScope']['service']
                : $service,
        ];
    }

    private function getEndpointData($service, $region)
    {

        $resolved = $this->resolveRegion($service, $region);
        $data = isset($this->data['services'][$service]['endpoints'][$resolved])
            ? $this->data['services'][$service]['endpoints'][$resolved]
            : [];
        $data += isset($this->data['services'][$service]['defaults'])
            ? $this->data['services'][$service]['defaults']
            : [];
        $data += isset($this->data['defaults'])
            ? $this->data['defaults']
            : [];

        return $data;
    }

    private function getSignatureVersion(array $data)
    {
        static $supportedBySdk = [
            's3v4',
            'v4',
            'anonymous',
        ];

        $possibilities = array_intersect(
            $supportedBySdk,
            isset($data['signatureVersions'])
                ? $data['signatureVersions']
                : ['v4']
        );

        return array_shift($possibilities);
    }

    private function resolveRegion($service, $region)
    {
        if ($this->isServicePartitionGlobal($service)) {
            return $this->getPartitionEndpoint($service);
        }

        return $region;
    }

    private function isServicePartitionGlobal($service)
    {
        return isset($this->data['services'][$service]['isRegionalized'])
            && false === $this->data['services'][$service]['isRegionalized']
            && isset($this->data['services'][$service]['partitionEndpoint']);
    }

    private function getPartitionEndpoint($service)
    {
        return $this->data['services'][$service]['partitionEndpoint'];
    }

    private function formatEndpoint($template, $service, $region)
    {
        return strtr($template, [
            '{service}' => $service,
            '{region}' => $region,
            '{dnsSuffix}' => $this->data['dnsSuffix'],
        ]);
    }
}
