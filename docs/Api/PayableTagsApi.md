# OpenAPI\Client\PayableTagsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTagsId()**](PayableTagsApi.md#deleteTagsId) | **DELETE** /tags/{tag_id} | Delete Tag |
| [**getTags()**](PayableTagsApi.md#getTags) | **GET** /tags | Get Tags |
| [**getTagsId()**](PayableTagsApi.md#getTagsId) | **GET** /tags/{tag_id} | Get Tag |
| [**patchTagsId()**](PayableTagsApi.md#patchTagsId) | **PATCH** /tags/{tag_id} | Update Tag |
| [**postTags()**](PayableTagsApi.md#postTags) | **POST** /tags | Create Tag |


## `deleteTagsId()`

```php
deleteTagsId($x_monite_version, $tag_id, $x_monite_entity_id)
```

Delete Tag

Delete a tag with the given ID. This tag will be automatically deleted from all payables where it's used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$tag_id = 'tag_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteTagsId($x_monite_version, $tag_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling PayableTagsApi->deleteTagsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **tag_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTags()`

```php
getTags($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_by_entity_user_id): \OpenAPI\Client\Model\TagsPaginationResponse
```

Get Tags

Get a list of all tags that can be assigned to payables.     Tags can be used, for example, as trigger conditions in payable approval workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TagCursorFields(); // \OpenAPI\Client\Model\TagCursorFields | Allowed sort fields
$created_by_entity_user_id = 'created_by_entity_user_id_example'; // string

try {
    $result = $apiInstance->getTags($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_by_entity_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableTagsApi->getTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\TagCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **created_by_entity_user_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TagsPaginationResponse**](../Model/TagsPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagsId()`

```php
getTagsId($x_monite_version, $tag_id, $x_monite_entity_id): \OpenAPI\Client\Model\TagReadSchema
```

Get Tag

Get information about a tag with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$tag_id = 'tag_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getTagsId($x_monite_version, $tag_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableTagsApi->getTagsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **tag_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\TagReadSchema**](../Model/TagReadSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTagsId()`

```php
patchTagsId($x_monite_version, $tag_id, $x_monite_entity_id, $tag_create_or_update_schema): \OpenAPI\Client\Model\TagReadSchema
```

Update Tag

Change the tag name. The new name must be unique among existing tags.     Tag names are case-sensitive, that is `Marketing` and `marketing` are two different tags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$tag_id = 'tag_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$tag_create_or_update_schema = new \OpenAPI\Client\Model\TagCreateOrUpdateSchema(); // \OpenAPI\Client\Model\TagCreateOrUpdateSchema

try {
    $result = $apiInstance->patchTagsId($x_monite_version, $tag_id, $x_monite_entity_id, $tag_create_or_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableTagsApi->patchTagsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **tag_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **tag_create_or_update_schema** | [**\OpenAPI\Client\Model\TagCreateOrUpdateSchema**](../Model/TagCreateOrUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TagReadSchema**](../Model/TagReadSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTags()`

```php
postTags($x_monite_version, $x_monite_entity_id, $tag_create_or_update_schema): \OpenAPI\Client\Model\TagReadSchema
```

Create Tag

Create a new tag for use in payables. The tag name must be unique.     Tag names are case-sensitive, that is `Marketing` and `marketing` are two different tags.   The response returns an auto-generated ID assigned to this tag. To assign this tag to a payable, send the tag ID in the `tag_ids` list when creating or updating a payable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$tag_create_or_update_schema = new \OpenAPI\Client\Model\TagCreateOrUpdateSchema(); // \OpenAPI\Client\Model\TagCreateOrUpdateSchema

try {
    $result = $apiInstance->postTags($x_monite_version, $x_monite_entity_id, $tag_create_or_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableTagsApi->postTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **tag_create_or_update_schema** | [**\OpenAPI\Client\Model\TagCreateOrUpdateSchema**](../Model/TagCreateOrUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TagReadSchema**](../Model/TagReadSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
