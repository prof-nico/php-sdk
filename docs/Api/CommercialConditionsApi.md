# OpenAPI\Client\CommercialConditionsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCommercialConditionsId()**](CommercialConditionsApi.md#deleteCommercialConditionsId) | **DELETE** /commercial_conditions/{commercial_condition_id} | Delete Commercial Condition |
| [**getCommercialConditions()**](CommercialConditionsApi.md#getCommercialConditions) | **GET** /commercial_conditions | Get All Commercial Conditions |
| [**getCommercialConditionsId()**](CommercialConditionsApi.md#getCommercialConditionsId) | **GET** /commercial_conditions/{commercial_condition_id} | Get Commercial Condition |
| [**postCommercialConditions()**](CommercialConditionsApi.md#postCommercialConditions) | **POST** /commercial_conditions | Add Commercial Condition |
| [**putCommercialConditionsId()**](CommercialConditionsApi.md#putCommercialConditionsId) | **PUT** /commercial_conditions/{commercial_condition_id} | Update Commercial Condition |


## `deleteCommercialConditionsId()`

```php
deleteCommercialConditionsId($x_monite_version, $commercial_condition_id, $x_monite_entity_id)
```

Delete Commercial Condition

update commercial condition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommercialConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$commercial_condition_id = 'commercial_condition_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteCommercialConditionsId($x_monite_version, $commercial_condition_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling CommercialConditionsApi->deleteCommercialConditionsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **commercial_condition_id** | **string**|  | |
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

## `getCommercialConditions()`

```php
getCommercialConditions($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\CommercialConditionResponse[]
```

Get All Commercial Conditions

get all commercial conditions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommercialConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCommercialConditions($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialConditionsApi->getCommercialConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CommercialConditionResponse[]**](../Model/CommercialConditionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialConditionsId()`

```php
getCommercialConditionsId($x_monite_version, $commercial_condition_id, $x_monite_entity_id): \OpenAPI\Client\Model\CommercialConditionResponse
```

Get Commercial Condition

get commercial condition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommercialConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$commercial_condition_id = 'commercial_condition_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCommercialConditionsId($x_monite_version, $commercial_condition_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialConditionsApi->getCommercialConditionsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **commercial_condition_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CommercialConditionResponse**](../Model/CommercialConditionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCommercialConditions()`

```php
postCommercialConditions($x_monite_version, $x_monite_entity_id, $commercial_condition_request): \OpenAPI\Client\Model\CommercialConditionResponse
```

Add Commercial Condition

create commercial condition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommercialConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$commercial_condition_request = new \OpenAPI\Client\Model\CommercialConditionRequest(); // \OpenAPI\Client\Model\CommercialConditionRequest

try {
    $result = $apiInstance->postCommercialConditions($x_monite_version, $x_monite_entity_id, $commercial_condition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialConditionsApi->postCommercialConditions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **commercial_condition_request** | [**\OpenAPI\Client\Model\CommercialConditionRequest**](../Model/CommercialConditionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommercialConditionResponse**](../Model/CommercialConditionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCommercialConditionsId()`

```php
putCommercialConditionsId($x_monite_version, $commercial_condition_id, $x_monite_entity_id, $commercial_condition_update): \OpenAPI\Client\Model\CommercialConditionResponse
```

Update Commercial Condition

update commercial condition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CommercialConditionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$commercial_condition_id = 'commercial_condition_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$commercial_condition_update = new \OpenAPI\Client\Model\CommercialConditionUpdate(); // \OpenAPI\Client\Model\CommercialConditionUpdate

try {
    $result = $apiInstance->putCommercialConditionsId($x_monite_version, $commercial_condition_id, $x_monite_entity_id, $commercial_condition_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialConditionsApi->putCommercialConditionsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **commercial_condition_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **commercial_condition_update** | [**\OpenAPI\Client\Model\CommercialConditionUpdate**](../Model/CommercialConditionUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommercialConditionResponse**](../Model/CommercialConditionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
