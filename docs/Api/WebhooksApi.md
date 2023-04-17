# OpenAPI\Client\WebhooksApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllV1WebhooksGet()**](WebhooksApi.md#getAllV1WebhooksGet) | **GET** /webhooks | Get All |


## `getAllV1WebhooksGet()`

```php
getAllV1WebhooksGet($x_monite_version, $x_monite_entity_id, $object_type, $event_id, $order, $limit, $pagination_token, $sort, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\WebhooksPaginationResponse
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$object_type = new \OpenAPI\Client\Model\ObjectType(); // ObjectType
$event_id = 'event_id_example'; // string
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WebhookCursorFields(); // \OpenAPI\Client\Model\WebhookCursorFields | Allowed sort fields
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getAllV1WebhooksGet($x_monite_version, $x_monite_entity_id, $object_type, $event_id, $order, $limit, $pagination_token, $sort, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getAllV1WebhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **object_type** | [**ObjectType**](../Model/.md)|  | [optional] |
| **event_id** | **string**|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\WebhookCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **created_at** | **\DateTime**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhooksPaginationResponse**](../Model/WebhooksPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
