<?php
namespace Aws\WorkDocs;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkDocs** service.
 * @method \Aws\Result abortDocumentVersionUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise abortDocumentVersionUploadAsync(array $args = [])
 * @method \Aws\Result activateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise activateUserAsync(array $args = [])
 * @method \Aws\Result addResourcePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addResourcePermissionsAsync(array $args = [])
 * @method \Aws\Result createComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCommentAsync(array $args = [])
 * @method \Aws\Result createCustomMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomMetadataAsync(array $args = [])
 * @method \Aws\Result createFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFolderAsync(array $args = [])
 * @method \Aws\Result createLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLabelsAsync(array $args = [])
 * @method \Aws\Result createNotificationSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationSubscriptionAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deactivateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deactivateUserAsync(array $args = [])
 * @method \Aws\Result deleteComment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCommentAsync(array $args = [])
 * @method \Aws\Result deleteCustomMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomMetadataAsync(array $args = [])
 * @method \Aws\Result deleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \Aws\Result deleteFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFolderAsync(array $args = [])
 * @method \Aws\Result deleteFolderContents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFolderContentsAsync(array $args = [])
 * @method \Aws\Result deleteLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLabelsAsync(array $args = [])
 * @method \Aws\Result deleteNotificationSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result describeActivities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivitiesAsync(array $args = [])
 * @method \Aws\Result describeComments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCommentsAsync(array $args = [])
 * @method \Aws\Result describeDocumentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentVersionsAsync(array $args = [])
 * @method \Aws\Result describeFolderContents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFolderContentsAsync(array $args = [])
 * @method \Aws\Result describeGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupsAsync(array $args = [])
 * @method \Aws\Result describeNotificationSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNotificationSubscriptionsAsync(array $args = [])
 * @method \Aws\Result describeResourcePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeResourcePermissionsAsync(array $args = [])
 * @method \Aws\Result describeRootFolders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRootFoldersAsync(array $args = [])
 * @method \Aws\Result describeUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsersAsync(array $args = [])
 * @method \Aws\Result getCurrentUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCurrentUserAsync(array $args = [])
 * @method \Aws\Result getDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \Aws\Result getDocumentPath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentPathAsync(array $args = [])
 * @method \Aws\Result getDocumentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentVersionAsync(array $args = [])
 * @method \Aws\Result getFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFolderAsync(array $args = [])
 * @method \Aws\Result getFolderPath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFolderPathAsync(array $args = [])
 * @method \Aws\Result getResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Aws\Result initiateDocumentVersionUpload(array $args = [])
 * @method \GuzzleHttp\Promise\Promise initiateDocumentVersionUploadAsync(array $args = [])
 * @method \Aws\Result removeAllResourcePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeAllResourcePermissionsAsync(array $args = [])
 * @method \Aws\Result removeResourcePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeResourcePermissionAsync(array $args = [])
 * @method \Aws\Result updateDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentAsync(array $args = [])
 * @method \Aws\Result updateDocumentVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentVersionAsync(array $args = [])
 * @method \Aws\Result updateFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFolderAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class WorkDocsClient extends AwsClient {}
