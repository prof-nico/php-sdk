# OpenAPI\Client\WebhookSettingsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteV1WebhookSettingsWebhookIdDelete()**](WebhookSettingsApi.md#deleteV1WebhookSettingsWebhookIdDelete) | **DELETE** /webhook_settings/{webhook_id} | Delete |
| [**getAllV1WebhookSettingsGet()**](WebhookSettingsApi.md#getAllV1WebhookSettingsGet) | **GET** /webhook_settings | Get All |
| [**getV1WebhookSettingsWebhookIdGet()**](WebhookSettingsApi.md#getV1WebhookSettingsWebhookIdGet) | **GET** /webhook_settings/{webhook_id} | Get |
| [**postV1WebhookSettingsPost()**](WebhookSettingsApi.md#postV1WebhookSettingsPost) | **POST** /webhook_settings | Post |
| [**updateWebhookV1WebhookSettingsWebhookIdPatch()**](WebhookSettingsApi.md#updateWebhookV1WebhookSettingsWebhookIdPatch) | **PATCH** /webhook_settings/{webhook_id} | Update Webhook |


## `deleteV1WebhookSettingsWebhookIdDelete()`

```php
deleteV1WebhookSettingsWebhookIdDelete($x_monite_version, $webhook_id): \OpenAPI\Client\Model\MessageResponse
```

Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhookSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$webhook_id = 'webhook_id_example'; // string

try {
    $result = $apiInstance->deleteV1WebhookSettingsWebhookIdDelete($x_monite_version, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSettingsApi->deleteV1WebhookSettingsWebhookIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **webhook_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllV1WebhookSettingsGet()`

```php
getAllV1WebhookSettingsGet($x_monite_version, $object_type, $order, $limit, $pagination_token, $sort, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\WebhookSettingsByObjectTypePaginationResponse
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhookSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$object_type = new \OpenAPI\Client\Model\WebhookObjectType(); // WebhookObjectType
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WebhookSettingCursorFields(); // \OpenAPI\Client\Model\WebhookSettingCursorFields | Allowed sort fields
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getAllV1WebhookSettingsGet($x_monite_version, $object_type, $order, $limit, $pagination_token, $sort, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSettingsApi->getAllV1WebhookSettingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **object_type** | [**WebhookObjectType**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\WebhookSettingCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **created_at** | **\DateTime**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhookSettingsByObjectTypePaginationResponse**](../Model/WebhookSettingsByObjectTypePaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1WebhookSettingsWebhookIdGet()`

```php
getV1WebhookSettingsWebhookIdGet($x_monite_version, $webhook_id): \OpenAPI\Client\Model\WebhookSettingsResponse
```

Get

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhookSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$webhook_id = 'webhook_id_example'; // string

try {
    $result = $apiInstance->getV1WebhookSettingsWebhookIdGet($x_monite_version, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSettingsApi->getV1WebhookSettingsWebhookIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **webhook_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WebhookSettingsResponse**](../Model/WebhookSettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV1WebhookSettingsPost()`

```php
postV1WebhookSettingsPost($x_monite_version, $create_webhook_request): \OpenAPI\Client\Model\WebhookSettingsResponse
```

Post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhookSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$create_webhook_request = new \OpenAPI\Client\Model\CreateWebhookRequest(); // \OpenAPI\Client\Model\CreateWebhookRequest

try {
    $result = $apiInstance->postV1WebhookSettingsPost($x_monite_version, $create_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSettingsApi->postV1WebhookSettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **create_webhook_request** | [**\OpenAPI\Client\Model\CreateWebhookRequest**](../Model/CreateWebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WebhookSettingsResponse**](../Model/WebhookSettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookV1WebhookSettingsWebhookIdPatch()`

```php
updateWebhookV1WebhookSettingsWebhookIdPatch($x_monite_version, $webhook_id, $webhook_update_request): \OpenAPI\Client\Model\WebhookSettingsResponse
```

Update Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhookSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$webhook_id = 'webhook_id_example'; // string
$webhook_update_request = new \OpenAPI\Client\Model\WebhookUpdateRequest(); // \OpenAPI\Client\Model\WebhookUpdateRequest

try {
    $result = $apiInstance->updateWebhookV1WebhookSettingsWebhookIdPatch($x_monite_version, $webhook_id, $webhook_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookSettingsApi->updateWebhookV1WebhookSettingsWebhookIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **webhook_id** | **string**|  | |
| **webhook_update_request** | [**\OpenAPI\Client\Model\WebhookUpdateRequest**](../Model/WebhookUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WebhookSettingsResponse**](../Model/WebhookSettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
