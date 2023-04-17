# OpenAPI\Client\PaymentMethodsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEntitiesIdPaymentMethods()**](PaymentMethodsApi.md#getEntitiesIdPaymentMethods) | **GET** /entities/{entity_id}/payment_methods | Get Enabled Payment Methods |
| [**putEntitiesIdPaymentMethods()**](PaymentMethodsApi.md#putEntitiesIdPaymentMethods) | **PUT** /entities/{entity_id}/payment_methods | Enable Payment Methods |


## `getEntitiesIdPaymentMethods()`

```php
getEntitiesIdPaymentMethods($x_monite_version, $entity_id): \OpenAPI\Client\Model\OnboardingPaymentMethodsResponse
```

Get Enabled Payment Methods

Get all enabled payment methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->getEntitiesIdPaymentMethods($x_monite_version, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getEntitiesIdPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OnboardingPaymentMethodsResponse**](../Model/OnboardingPaymentMethodsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEntitiesIdPaymentMethods()`

```php
putEntitiesIdPaymentMethods($x_monite_version, $entity_id, $enabled_payment_methods): \OpenAPI\Client\Model\OnboardingPaymentMethodsResponse
```

Enable Payment Methods

Set which payment methods should be enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string
$enabled_payment_methods = new \OpenAPI\Client\Model\EnabledPaymentMethods(); // \OpenAPI\Client\Model\EnabledPaymentMethods

try {
    $result = $apiInstance->putEntitiesIdPaymentMethods($x_monite_version, $entity_id, $enabled_payment_methods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->putEntitiesIdPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |
| **enabled_payment_methods** | [**\OpenAPI\Client\Model\EnabledPaymentMethods**](../Model/EnabledPaymentMethods.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OnboardingPaymentMethodsResponse**](../Model/OnboardingPaymentMethodsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
