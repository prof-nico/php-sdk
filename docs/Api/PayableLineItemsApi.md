# OpenAPI\Client\PayableLineItemsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePayablesIdLineItemsId()**](PayableLineItemsApi.md#deletePayablesIdLineItemsId) | **DELETE** /payables/{payable_id}/line_items/{line_item_id} | Delete Line Item |
| [**getPayablesIdLineItems()**](PayableLineItemsApi.md#getPayablesIdLineItems) | **GET** /payables/{payable_id}/line_items | Get Line Items |
| [**getPayablesIdLineItemsId()**](PayableLineItemsApi.md#getPayablesIdLineItemsId) | **GET** /payables/{payable_id}/line_items/{line_item_id} | Get Line Item |
| [**patchPayablesIdLineItemsId()**](PayableLineItemsApi.md#patchPayablesIdLineItemsId) | **PATCH** /payables/{payable_id}/line_items/{line_item_id} | Update Line Item |
| [**postPayablesIdLineItems()**](PayableLineItemsApi.md#postPayablesIdLineItems) | **POST** /payables/{payable_id}/line_items | Create Line Item |


## `deletePayablesIdLineItemsId()`

```php
deletePayablesIdLineItemsId($x_monite_version, $line_item_id, $payable_id, $x_monite_entity_id)
```

Delete Line Item

Delete the line item with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$line_item_id = 'line_item_id_example'; // string
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deletePayablesIdLineItemsId($x_monite_version, $line_item_id, $payable_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling PayableLineItemsApi->deletePayablesIdLineItemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **line_item_id** | **string**|  | |
| **payable_id** | **string**|  | |
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

## `getPayablesIdLineItems()`

```php
getPayablesIdLineItems($x_monite_version, $payable_id, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $was_created_by_user_id): \OpenAPI\Client\Model\LineItemPaginationResponse
```

Get Line Items

Get a list of all line items related to the specified payable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\LineItemCursorFields(); // \OpenAPI\Client\Model\LineItemCursorFields | Allowed sort fields
$was_created_by_user_id = 'was_created_by_user_id_example'; // string

try {
    $result = $apiInstance->getPayablesIdLineItems($x_monite_version, $payable_id, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $was_created_by_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableLineItemsApi->getPayablesIdLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\LineItemCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **was_created_by_user_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LineItemPaginationResponse**](../Model/LineItemPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablesIdLineItemsId()`

```php
getPayablesIdLineItemsId($x_monite_version, $line_item_id, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\LineItemResponse
```

Get Line Item

Get information about a line item with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$line_item_id = 'line_item_id_example'; // string
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPayablesIdLineItemsId($x_monite_version, $line_item_id, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableLineItemsApi->getPayablesIdLineItemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **line_item_id** | **string**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\LineItemResponse**](../Model/LineItemResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPayablesIdLineItemsId()`

```php
patchPayablesIdLineItemsId($x_monite_version, $line_item_id, $payable_id, $x_monite_entity_id, $line_item_request): \OpenAPI\Client\Model\LineItemResponse
```

Update Line Item

Change the line item data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$line_item_id = 'line_item_id_example'; // string
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$line_item_request = new \OpenAPI\Client\Model\LineItemRequest(); // \OpenAPI\Client\Model\LineItemRequest

try {
    $result = $apiInstance->patchPayablesIdLineItemsId($x_monite_version, $line_item_id, $payable_id, $x_monite_entity_id, $line_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableLineItemsApi->patchPayablesIdLineItemsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **line_item_id** | **string**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **line_item_request** | [**\OpenAPI\Client\Model\LineItemRequest**](../Model/LineItemRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LineItemResponse**](../Model/LineItemResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesIdLineItems()`

```php
postPayablesIdLineItems($x_monite_version, $payable_id, $x_monite_entity_id, $line_item_request): \OpenAPI\Client\Model\LineItemResponse
```

Create Line Item

Create a new line item for a specified payable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayableLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$line_item_request = new \OpenAPI\Client\Model\LineItemRequest(); // \OpenAPI\Client\Model\LineItemRequest

try {
    $result = $apiInstance->postPayablesIdLineItems($x_monite_version, $payable_id, $x_monite_entity_id, $line_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayableLineItemsApi->postPayablesIdLineItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **line_item_request** | [**\OpenAPI\Client\Model\LineItemRequest**](../Model/LineItemRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\LineItemResponse**](../Model/LineItemResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
