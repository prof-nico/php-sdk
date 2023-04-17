# OpenAPI\Client\CounterpartTaxIDsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCounterpartsIdTaxIdsId()**](CounterpartTaxIDsApi.md#deleteCounterpartsIdTaxIdsId) | **DELETE** /counterparts/{counterpart_id}/tax_ids/{id} | Delete Counterpart Tax Id By Id |
| [**getCounterpartsIdTaxIds()**](CounterpartTaxIDsApi.md#getCounterpartsIdTaxIds) | **GET** /counterparts/{counterpart_id}/tax_ids | Get Counterparts Tax Ids |
| [**getCounterpartsIdTaxIdsId()**](CounterpartTaxIDsApi.md#getCounterpartsIdTaxIdsId) | **GET** /counterparts/{counterpart_id}/tax_ids/{id} | Get Counterparts Tax Ids By Id |
| [**patchCounterpartsIdTaxIdsId()**](CounterpartTaxIDsApi.md#patchCounterpartsIdTaxIdsId) | **PATCH** /counterparts/{counterpart_id}/tax_ids/{id} | Update Counterparts Tax Id |
| [**postCounterpartsIdTaxIds()**](CounterpartTaxIDsApi.md#postCounterpartsIdTaxIds) | **POST** /counterparts/{counterpart_id}/tax_ids | Create Counterparts Tax Id |


## `deleteCounterpartsIdTaxIdsId()`

```php
deleteCounterpartsIdTaxIdsId($x_monite_version, $id, $counterpart_id, $x_monite_entity_id)
```

Delete Counterpart Tax Id By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartTaxIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$id = 'id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteCounterpartsIdTaxIdsId($x_monite_version, $id, $counterpart_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartTaxIDsApi->deleteCounterpartsIdTaxIdsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **id** | **string**|  | |
| **counterpart_id** | **string**|  | |
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

## `getCounterpartsIdTaxIds()`

```php
getCounterpartsIdTaxIds($x_monite_version, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartTaxIDResourceList
```

Get Counterparts Tax Ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartTaxIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdTaxIds($x_monite_version, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartTaxIDsApi->getCounterpartsIdTaxIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartTaxIDResourceList**](../Model/CounterpartTaxIDResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartsIdTaxIdsId()`

```php
getCounterpartsIdTaxIdsId($x_monite_version, $id, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartTaxIDResponse
```

Get Counterparts Tax Ids By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartTaxIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$id = 'id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdTaxIdsId($x_monite_version, $id, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartTaxIDsApi->getCounterpartsIdTaxIdsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartTaxIDResponse**](../Model/CounterpartTaxIDResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCounterpartsIdTaxIdsId()`

```php
patchCounterpartsIdTaxIdsId($x_monite_version, $id, $counterpart_id, $x_monite_entity_id, $counterpart_update_tax_id): \OpenAPI\Client\Model\CounterpartTaxIDResponse
```

Update Counterparts Tax Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartTaxIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$id = 'id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_update_tax_id = new \OpenAPI\Client\Model\CounterpartUpdateTaxID(); // \OpenAPI\Client\Model\CounterpartUpdateTaxID

try {
    $result = $apiInstance->patchCounterpartsIdTaxIdsId($x_monite_version, $id, $counterpart_id, $x_monite_entity_id, $counterpart_update_tax_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartTaxIDsApi->patchCounterpartsIdTaxIdsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_update_tax_id** | [**\OpenAPI\Client\Model\CounterpartUpdateTaxID**](../Model/CounterpartUpdateTaxID.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartTaxIDResponse**](../Model/CounterpartTaxIDResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterpartsIdTaxIds()`

```php
postCounterpartsIdTaxIds($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_tax_id): \OpenAPI\Client\Model\CounterpartTaxIDResponse
```

Create Counterparts Tax Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartTaxIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_tax_id = new \OpenAPI\Client\Model\CounterpartTaxID(); // \OpenAPI\Client\Model\CounterpartTaxID

try {
    $result = $apiInstance->postCounterpartsIdTaxIds($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_tax_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartTaxIDsApi->postCounterpartsIdTaxIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_tax_id** | [**\OpenAPI\Client\Model\CounterpartTaxID**](../Model/CounterpartTaxID.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartTaxIDResponse**](../Model/CounterpartTaxIDResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
