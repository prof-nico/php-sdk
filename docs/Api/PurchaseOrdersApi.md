# OpenAPI\Client\PurchaseOrdersApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePayablePurchaseOrdersId()**](PurchaseOrdersApi.md#deletePayablePurchaseOrdersId) | **DELETE** /payable_purchase_orders/{purchase_order_id} | Delete Purchase Order |
| [**getPayablePurchaseOrdersId()**](PurchaseOrdersApi.md#getPayablePurchaseOrdersId) | **GET** /payable_purchase_orders/{purchase_order_id} | Get Purchase Order |
| [**getPayablePurchaseOrdersPagination()**](PurchaseOrdersApi.md#getPayablePurchaseOrdersPagination) | **GET** /payable_purchase_orders/pagination | Get All Purchase Orders |
| [**getPayablePurchaseOrdersVariables()**](PurchaseOrdersApi.md#getPayablePurchaseOrdersVariables) | **GET** /payable_purchase_orders/variables | Get Variables |
| [**patchPayablePurchaseOrdersId()**](PurchaseOrdersApi.md#patchPayablePurchaseOrdersId) | **PATCH** /payable_purchase_orders/{purchase_order_id} | Update Purchase Order |
| [**postPayablePurchaseOrders()**](PurchaseOrdersApi.md#postPayablePurchaseOrders) | **POST** /payable_purchase_orders | Create Purchase Order |
| [**postPayablePurchaseOrdersIdPreview()**](PurchaseOrdersApi.md#postPayablePurchaseOrdersIdPreview) | **POST** /payable_purchase_orders/{purchase_order_id}/preview | Preview |
| [**postPayablePurchaseOrdersIdSend()**](PurchaseOrdersApi.md#postPayablePurchaseOrdersIdSend) | **POST** /payable_purchase_orders/{purchase_order_id}/send | Send |


## `deletePayablePurchaseOrdersId()`

```php
deletePayablePurchaseOrdersId($x_monite_version, $purchase_order_id, $x_monite_entity_id)
```

Delete Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$purchase_order_id = 'purchase_order_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deletePayablePurchaseOrdersId($x_monite_version, $purchase_order_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->deletePayablePurchaseOrdersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **purchase_order_id** | **string**|  | |
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

## `getPayablePurchaseOrdersId()`

```php
getPayablePurchaseOrdersId($x_monite_version, $purchase_order_id, $x_monite_entity_id): \OpenAPI\Client\Model\PurchaseOrderResponseSchema
```

Get Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$purchase_order_id = 'purchase_order_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPayablePurchaseOrdersId($x_monite_version, $purchase_order_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPayablePurchaseOrdersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **purchase_order_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PurchaseOrderResponseSchema**](../Model/PurchaseOrderResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablePurchaseOrdersPagination()`

```php
getPayablePurchaseOrdersPagination($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\PurchaseOrderPaginationResponse
```

Get All Purchase Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PurchaseOrderCursorFields(); // \OpenAPI\Client\Model\PurchaseOrderCursorFields | Allowed sort fields
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getPayablePurchaseOrdersPagination($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPayablePurchaseOrdersPagination: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\PurchaseOrderCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PurchaseOrderPaginationResponse**](../Model/PurchaseOrderPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablePurchaseOrdersVariables()`

```php
getPayablePurchaseOrdersVariables($x_monite_version): \OpenAPI\Client\Model\VariablesObjectList
```

Get Variables

Get a list of placeholders allowed to insert into an email template for customization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime

try {
    $result = $apiInstance->getPayablePurchaseOrdersVariables($x_monite_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPayablePurchaseOrdersVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\VariablesObjectList**](../Model/VariablesObjectList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPayablePurchaseOrdersId()`

```php
patchPayablePurchaseOrdersId($x_monite_version, $purchase_order_id, $x_monite_entity_id, $update_purchase_order_payload_schema): \OpenAPI\Client\Model\PurchaseOrderResponseSchema
```

Update Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$purchase_order_id = 'purchase_order_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_purchase_order_payload_schema = new \OpenAPI\Client\Model\UpdatePurchaseOrderPayloadSchema(); // \OpenAPI\Client\Model\UpdatePurchaseOrderPayloadSchema

try {
    $result = $apiInstance->patchPayablePurchaseOrdersId($x_monite_version, $purchase_order_id, $x_monite_entity_id, $update_purchase_order_payload_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->patchPayablePurchaseOrdersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **purchase_order_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_purchase_order_payload_schema** | [**\OpenAPI\Client\Model\UpdatePurchaseOrderPayloadSchema**](../Model/UpdatePurchaseOrderPayloadSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PurchaseOrderResponseSchema**](../Model/PurchaseOrderResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablePurchaseOrders()`

```php
postPayablePurchaseOrders($x_monite_version, $x_monite_entity_id, $purchase_order_payload_schema): \OpenAPI\Client\Model\PurchaseOrderResponseSchema
```

Create Purchase Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$purchase_order_payload_schema = new \OpenAPI\Client\Model\PurchaseOrderPayloadSchema(); // \OpenAPI\Client\Model\PurchaseOrderPayloadSchema

try {
    $result = $apiInstance->postPayablePurchaseOrders($x_monite_version, $x_monite_entity_id, $purchase_order_payload_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->postPayablePurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **purchase_order_payload_schema** | [**\OpenAPI\Client\Model\PurchaseOrderPayloadSchema**](../Model/PurchaseOrderPayloadSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PurchaseOrderResponseSchema**](../Model/PurchaseOrderResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablePurchaseOrdersIdPreview()`

```php
postPayablePurchaseOrdersIdPreview($x_monite_version, $purchase_order_id, $x_monite_entity_id, $purchase_order_email_preview_request): \OpenAPI\Client\Model\PurchaseOrderEmailPreviewResponse
```

Preview

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$purchase_order_id = 'purchase_order_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$purchase_order_email_preview_request = new \OpenAPI\Client\Model\PurchaseOrderEmailPreviewRequest(); // \OpenAPI\Client\Model\PurchaseOrderEmailPreviewRequest

try {
    $result = $apiInstance->postPayablePurchaseOrdersIdPreview($x_monite_version, $purchase_order_id, $x_monite_entity_id, $purchase_order_email_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->postPayablePurchaseOrdersIdPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **purchase_order_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **purchase_order_email_preview_request** | [**\OpenAPI\Client\Model\PurchaseOrderEmailPreviewRequest**](../Model/PurchaseOrderEmailPreviewRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PurchaseOrderEmailPreviewResponse**](../Model/PurchaseOrderEmailPreviewResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablePurchaseOrdersIdSend()`

```php
postPayablePurchaseOrdersIdSend($x_monite_version, $purchase_order_id, $x_monite_entity_id, $send_purchase_order_via_email_request): \OpenAPI\Client\Model\PurchaseOrderEmailSentResponse
```

Send

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$purchase_order_id = 'purchase_order_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$send_purchase_order_via_email_request = new \OpenAPI\Client\Model\SendPurchaseOrderViaEmailRequest(); // \OpenAPI\Client\Model\SendPurchaseOrderViaEmailRequest

try {
    $result = $apiInstance->postPayablePurchaseOrdersIdSend($x_monite_version, $purchase_order_id, $x_monite_entity_id, $send_purchase_order_via_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->postPayablePurchaseOrdersIdSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **purchase_order_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **send_purchase_order_via_email_request** | [**\OpenAPI\Client\Model\SendPurchaseOrderViaEmailRequest**](../Model/SendPurchaseOrderViaEmailRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PurchaseOrderEmailSentResponse**](../Model/PurchaseOrderEmailSentResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
