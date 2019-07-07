<?php
namespace Aws\Rekognition;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Rekognition** service.
 * @method \Aws\Result compareFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise compareFacesAsync(array $args = [])
 * @method \Aws\Result createCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollectionAsync(array $args = [])
 * @method \Aws\Result createStreamProcessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamProcessorAsync(array $args = [])
 * @method \Aws\Result deleteCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCollectionAsync(array $args = [])
 * @method \Aws\Result deleteFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFacesAsync(array $args = [])
 * @method \Aws\Result deleteStreamProcessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStreamProcessorAsync(array $args = [])
 * @method \Aws\Result describeCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCollectionAsync(array $args = [])
 * @method \Aws\Result describeStreamProcessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStreamProcessorAsync(array $args = [])
 * @method \Aws\Result detectFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectFacesAsync(array $args = [])
 * @method \Aws\Result detectLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectLabelsAsync(array $args = [])
 * @method \Aws\Result detectModerationLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectModerationLabelsAsync(array $args = [])
 * @method \Aws\Result detectText(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectTextAsync(array $args = [])
 * @method \Aws\Result getCelebrityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCelebrityInfoAsync(array $args = [])
 * @method \Aws\Result getCelebrityRecognition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCelebrityRecognitionAsync(array $args = [])
 * @method \Aws\Result getContentModeration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContentModerationAsync(array $args = [])
 * @method \Aws\Result getFaceDetection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFaceDetectionAsync(array $args = [])
 * @method \Aws\Result getFaceSearch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFaceSearchAsync(array $args = [])
 * @method \Aws\Result getLabelDetection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLabelDetectionAsync(array $args = [])
 * @method \Aws\Result getPersonTracking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPersonTrackingAsync(array $args = [])
 * @method \Aws\Result indexFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise indexFacesAsync(array $args = [])
 * @method \Aws\Result listCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollectionsAsync(array $args = [])
 * @method \Aws\Result listFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFacesAsync(array $args = [])
 * @method \Aws\Result listStreamProcessors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listStreamProcessorsAsync(array $args = [])
 * @method \Aws\Result recognizeCelebrities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeCelebritiesAsync(array $args = [])
 * @method \Aws\Result searchFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesAsync(array $args = [])
 * @method \Aws\Result searchFacesByImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesByImageAsync(array $args = [])
 * @method \Aws\Result startCelebrityRecognition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startCelebrityRecognitionAsync(array $args = [])
 * @method \Aws\Result startContentModeration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startContentModerationAsync(array $args = [])
 * @method \Aws\Result startFaceDetection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFaceDetectionAsync(array $args = [])
 * @method \Aws\Result startFaceSearch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFaceSearchAsync(array $args = [])
 * @method \Aws\Result startLabelDetection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startLabelDetectionAsync(array $args = [])
 * @method \Aws\Result startPersonTracking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startPersonTrackingAsync(array $args = [])
 * @method \Aws\Result startStreamProcessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startStreamProcessorAsync(array $args = [])
 * @method \Aws\Result stopStreamProcessor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopStreamProcessorAsync(array $args = [])
 */
class RekognitionClient extends AwsClient {}
