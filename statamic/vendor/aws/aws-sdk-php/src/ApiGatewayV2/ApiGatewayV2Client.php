<?php
namespace Aws\ApiGatewayV2;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AmazonApiGatewayV2** service.
 * @method \Aws\Result createApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiAsync(array $args = [])
 * @method \Aws\Result createApiMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApiMappingAsync(array $args = [])
 * @method \Aws\Result createAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws\Result createDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \Aws\Result createIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIntegrationAsync(array $args = [])
 * @method \Aws\Result createIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result createModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \Aws\Result createRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteAsync(array $args = [])
 * @method \Aws\Result createRouteResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteResponseAsync(array $args = [])
 * @method \Aws\Result createStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStageAsync(array $args = [])
 * @method \Aws\Result deleteApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiAsync(array $args = [])
 * @method \Aws\Result deleteApiMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApiMappingAsync(array $args = [])
 * @method \Aws\Result deleteAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \Aws\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \Aws\Result deleteDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \Aws\Result deleteIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \Aws\Result deleteIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result deleteModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Aws\Result deleteRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteAsync(array $args = [])
 * @method \Aws\Result deleteRouteResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteResponseAsync(array $args = [])
 * @method \Aws\Result deleteStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStageAsync(array $args = [])
 * @method \Aws\Result getApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiAsync(array $args = [])
 * @method \Aws\Result getApiMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiMappingAsync(array $args = [])
 * @method \Aws\Result getApiMappings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApiMappingsAsync(array $args = [])
 * @method \Aws\Result getApis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getApisAsync(array $args = [])
 * @method \Aws\Result getAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizerAsync(array $args = [])
 * @method \Aws\Result getAuthorizers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizersAsync(array $args = [])
 * @method \Aws\Result getDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \Aws\Result getDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \Aws\Result getDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \Aws\Result getDomainNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainNamesAsync(array $args = [])
 * @method \Aws\Result getIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \Aws\Result getIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result getIntegrationResponses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationResponsesAsync(array $args = [])
 * @method \Aws\Result getIntegrations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIntegrationsAsync(array $args = [])
 * @method \Aws\Result getModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelAsync(array $args = [])
 * @method \Aws\Result getModelTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelTemplateAsync(array $args = [])
 * @method \Aws\Result getModels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getModelsAsync(array $args = [])
 * @method \Aws\Result getRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRouteAsync(array $args = [])
 * @method \Aws\Result getRouteResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRouteResponseAsync(array $args = [])
 * @method \Aws\Result getRouteResponses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRouteResponsesAsync(array $args = [])
 * @method \Aws\Result getRoutes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoutesAsync(array $args = [])
 * @method \Aws\Result getStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStageAsync(array $args = [])
 * @method \Aws\Result getStages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStagesAsync(array $args = [])
 * @method \Aws\Result getTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateApi(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiAsync(array $args = [])
 * @method \Aws\Result updateApiMapping(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApiMappingAsync(array $args = [])
 * @method \Aws\Result updateAuthorizer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \Aws\Result updateDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeploymentAsync(array $args = [])
 * @method \Aws\Result updateDomainName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \Aws\Result updateIntegration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationAsync(array $args = [])
 * @method \Aws\Result updateIntegrationResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result updateModel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateModelAsync(array $args = [])
 * @method \Aws\Result updateRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRouteAsync(array $args = [])
 * @method \Aws\Result updateRouteResponse(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRouteResponseAsync(array $args = [])
 * @method \Aws\Result updateStage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStageAsync(array $args = [])
 */
class ApiGatewayV2Client extends AwsClient {}
