# OpenAPI\Client\EntityOnboardingDataApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEntitiesIdOnboardingData()**](EntityOnboardingDataApi.md#getEntitiesIdOnboardingData) | **GET** /entities/{entity_id}/onboarding_data | Get entity onboarding data |
| [**putEntitiesIdOnboardingData()**](EntityOnboardingDataApi.md#putEntitiesIdOnboardingData) | **PUT** /entities/{entity_id}/onboarding_data | Update entity onboarding data |


## `getEntitiesIdOnboardingData()`

```php
getEntitiesIdOnboardingData($x_monite_version, $entity_id): \OpenAPI\Client\Model\EntityOnboardingDataResponse
```

Get entity onboarding data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityOnboardingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->getEntitiesIdOnboardingData($x_monite_version, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityOnboardingDataApi->getEntitiesIdOnboardingData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EntityOnboardingDataResponse**](../Model/EntityOnboardingDataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEntitiesIdOnboardingData()`

```php
putEntitiesIdOnboardingData($x_monite_version, $entity_id, $entity_onboarding_data_request): \OpenAPI\Client\Model\EntityOnboardingDataResponse
```

Update entity onboarding data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityOnboardingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string
$entity_onboarding_data_request = new \OpenAPI\Client\Model\EntityOnboardingDataRequest(); // \OpenAPI\Client\Model\EntityOnboardingDataRequest

try {
    $result = $apiInstance->putEntitiesIdOnboardingData($x_monite_version, $entity_id, $entity_onboarding_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityOnboardingDataApi->putEntitiesIdOnboardingData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |
| **entity_onboarding_data_request** | [**\OpenAPI\Client\Model\EntityOnboardingDataRequest**](../Model/EntityOnboardingDataRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityOnboardingDataResponse**](../Model/EntityOnboardingDataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
