# OpenAPI\Client\PaymentTermsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePaymentTermsId()**](PaymentTermsApi.md#deletePaymentTermsId) | **DELETE** /payment_terms/{payment_terms_id} | Delete Item By Id |
| [**getPaymentTerms()**](PaymentTermsApi.md#getPaymentTerms) | **GET** /payment_terms | Get Items |
| [**getPaymentTermsId()**](PaymentTermsApi.md#getPaymentTermsId) | **GET** /payment_terms/{payment_terms_id} | Get Item By Id |
| [**patchPaymentTermsId()**](PaymentTermsApi.md#patchPaymentTermsId) | **PATCH** /payment_terms/{payment_terms_id} | Update Item By Id |
| [**postPaymentTerms()**](PaymentTermsApi.md#postPaymentTerms) | **POST** /payment_terms | Create Item |


## `deletePaymentTermsId()`

```php
deletePaymentTermsId($x_monite_version, $payment_terms_id, $x_monite_entity_id)
```

Delete Item By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_terms_id = 'payment_terms_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deletePaymentTermsId($x_monite_version, $payment_terms_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->deletePaymentTermsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_terms_id** | **string**|  | |
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

## `getPaymentTerms()`

```php
getPaymentTerms($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\PaymentTermsListResponse
```

Get Items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPaymentTerms($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->getPaymentTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PaymentTermsListResponse**](../Model/PaymentTermsListResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentTermsId()`

```php
getPaymentTermsId($x_monite_version, $payment_terms_id, $x_monite_entity_id): \OpenAPI\Client\Model\PaymentTermsResponse
```

Get Item By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_terms_id = 'payment_terms_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPaymentTermsId($x_monite_version, $payment_terms_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->getPaymentTermsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_terms_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PaymentTermsResponse**](../Model/PaymentTermsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPaymentTermsId()`

```php
patchPaymentTermsId($x_monite_version, $payment_terms_id, $x_monite_entity_id, $payment_terms_update_payload): \OpenAPI\Client\Model\PaymentTermsResponse
```

Update Item By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_terms_id = 'payment_terms_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$payment_terms_update_payload = new \OpenAPI\Client\Model\PaymentTermsUpdatePayload(); // \OpenAPI\Client\Model\PaymentTermsUpdatePayload

try {
    $result = $apiInstance->patchPaymentTermsId($x_monite_version, $payment_terms_id, $x_monite_entity_id, $payment_terms_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->patchPaymentTermsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_terms_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **payment_terms_update_payload** | [**\OpenAPI\Client\Model\PaymentTermsUpdatePayload**](../Model/PaymentTermsUpdatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentTermsResponse**](../Model/PaymentTermsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentTerms()`

```php
postPaymentTerms($x_monite_version, $x_monite_entity_id, $payment_terms_create_payload): \OpenAPI\Client\Model\PaymentTermsResponse
```

Create Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$payment_terms_create_payload = new \OpenAPI\Client\Model\PaymentTermsCreatePayload(); // \OpenAPI\Client\Model\PaymentTermsCreatePayload

try {
    $result = $apiInstance->postPaymentTerms($x_monite_version, $x_monite_entity_id, $payment_terms_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->postPaymentTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **payment_terms_create_payload** | [**\OpenAPI\Client\Model\PaymentTermsCreatePayload**](../Model/PaymentTermsCreatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentTermsResponse**](../Model/PaymentTermsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
