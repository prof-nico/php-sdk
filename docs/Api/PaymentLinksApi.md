# OpenAPI\Client\PaymentLinksApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaymentLinksId()**](PaymentLinksApi.md#getPaymentLinksId) | **GET** /payment_links/{payment_link_id} | Get Payment Link |
| [**postPaymentLinks()**](PaymentLinksApi.md#postPaymentLinks) | **POST** /payment_links | Create Payment Link |
| [**postPaymentLinksIdExpire()**](PaymentLinksApi.md#postPaymentLinksIdExpire) | **POST** /payment_links/{payment_link_id}/expire | Expire Payment Link |


## `getPaymentLinksId()`

```php
getPaymentLinksId($x_monite_version, $payment_link_id, $x_monite_entity_id): \OpenAPI\Client\Model\PublicPaymentLinkResponse
```

Get Payment Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_link_id = 'payment_link_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPaymentLinksId($x_monite_version, $payment_link_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->getPaymentLinksId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_link_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PublicPaymentLinkResponse**](../Model/PublicPaymentLinkResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentLinks()`

```php
postPaymentLinks($x_monite_version, $x_monite_entity_id, $create_payment_link_request): \OpenAPI\Client\Model\PublicPaymentLinkResponse
```

Create Payment Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_payment_link_request = new \OpenAPI\Client\Model\CreatePaymentLinkRequest(); // \OpenAPI\Client\Model\CreatePaymentLinkRequest

try {
    $result = $apiInstance->postPaymentLinks($x_monite_version, $x_monite_entity_id, $create_payment_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->postPaymentLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_payment_link_request** | [**\OpenAPI\Client\Model\CreatePaymentLinkRequest**](../Model/CreatePaymentLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PublicPaymentLinkResponse**](../Model/PublicPaymentLinkResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentLinksIdExpire()`

```php
postPaymentLinksIdExpire($x_monite_version, $payment_link_id, $x_monite_entity_id): \OpenAPI\Client\Model\PublicPaymentLinkResponse
```

Expire Payment Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_link_id = 'payment_link_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postPaymentLinksIdExpire($x_monite_version, $payment_link_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->postPaymentLinksIdExpire: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_link_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PublicPaymentLinkResponse**](../Model/PublicPaymentLinkResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
