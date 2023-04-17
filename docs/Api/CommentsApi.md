# OpenAPI\Client\CommentsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewCommentV1CommentsObjectTypeObjectIdPost()**](CommentsApi.md#createNewCommentV1CommentsObjectTypeObjectIdPost) | **POST** /comments/{object_type}/{object_id} | Create New Comment |
| [**getCommentByIdV1CommentsCommentIdGet()**](CommentsApi.md#getCommentByIdV1CommentsCommentIdGet) | **GET** /comments/{comment_id} | Get Comment By Id |
| [**getCommentsV1CommentsObjectTypeObjectIdGet()**](CommentsApi.md#getCommentsV1CommentsObjectTypeObjectIdGet) | **GET** /comments/{object_type}/{object_id} | Get Comments |
| [**updateCommentByIdV1CommentsCommentIdPatch()**](CommentsApi.md#updateCommentByIdV1CommentsCommentIdPatch) | **PATCH** /comments/{comment_id} | Update Comment By Id |


## `createNewCommentV1CommentsObjectTypeObjectIdPost()`

```php
createNewCommentV1CommentsObjectTypeObjectIdPost($x_monite_version, $object_type, $object_id, $x_monite_entity_id, $create_update_comment_schema): \OpenAPI\Client\Model\CommentSchema
```

Create New Comment

Create new comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$object_type = new \OpenAPI\Client\Model\ObjectTypeAvailableComment(); // ObjectTypeAvailableComment
$object_id = 'object_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_update_comment_schema = new \OpenAPI\Client\Model\CreateUpdateCommentSchema(); // \OpenAPI\Client\Model\CreateUpdateCommentSchema

try {
    $result = $apiInstance->createNewCommentV1CommentsObjectTypeObjectIdPost($x_monite_version, $object_type, $object_id, $x_monite_entity_id, $create_update_comment_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->createNewCommentV1CommentsObjectTypeObjectIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **object_type** | [**ObjectTypeAvailableComment**](../Model/.md)|  | |
| **object_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_update_comment_schema** | [**\OpenAPI\Client\Model\CreateUpdateCommentSchema**](../Model/CreateUpdateCommentSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommentSchema**](../Model/CommentSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentByIdV1CommentsCommentIdGet()`

```php
getCommentByIdV1CommentsCommentIdGet($x_monite_version, $comment_id, $x_monite_entity_id): \OpenAPI\Client\Model\CommentSchema
```

Get Comment By Id

Get comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$comment_id = 'comment_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCommentByIdV1CommentsCommentIdGet($x_monite_version, $comment_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentByIdV1CommentsCommentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **comment_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CommentSchema**](../Model/CommentSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentsV1CommentsObjectTypeObjectIdGet()`

```php
getCommentsV1CommentsObjectTypeObjectIdGet($x_monite_version, $object_type, $object_id, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\MultipleCommentSchema
```

Get Comments

Get comments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$object_type = new \OpenAPI\Client\Model\ObjectTypeAvailableComment(); // ObjectTypeAvailableComment
$object_id = 'object_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum3(); // \OpenAPI\Client\Model\OrderEnum3 | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CommentCursorFields(); // \OpenAPI\Client\Model\CommentCursorFields | Allowed sort fields
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getCommentsV1CommentsObjectTypeObjectIdGet($x_monite_version, $object_type, $object_id, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentsV1CommentsObjectTypeObjectIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **object_type** | [**ObjectTypeAvailableComment**](../Model/.md)|  | |
| **object_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum3**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\CommentCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MultipleCommentSchema**](../Model/MultipleCommentSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommentByIdV1CommentsCommentIdPatch()`

```php
updateCommentByIdV1CommentsCommentIdPatch($x_monite_version, $comment_id, $x_monite_entity_id, $create_update_comment_schema): \OpenAPI\Client\Model\CommentSchema
```

Update Comment By Id

Update comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$comment_id = 'comment_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_update_comment_schema = new \OpenAPI\Client\Model\CreateUpdateCommentSchema(); // \OpenAPI\Client\Model\CreateUpdateCommentSchema

try {
    $result = $apiInstance->updateCommentByIdV1CommentsCommentIdPatch($x_monite_version, $comment_id, $x_monite_entity_id, $create_update_comment_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->updateCommentByIdV1CommentsCommentIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **comment_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_update_comment_schema** | [**\OpenAPI\Client\Model\CreateUpdateCommentSchema**](../Model/CreateUpdateCommentSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommentSchema**](../Model/CommentSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
