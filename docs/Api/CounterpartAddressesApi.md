# OpenAPI\Client\CounterpartAddressesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCounterpartsIdAddressesId()**](CounterpartAddressesApi.md#deleteCounterpartsIdAddressesId) | **DELETE** /counterparts/{counterpart_id}/addresses/{address_id} | Delete Counterpart Address By Id |
| [**getCounterpartsIdAddresses()**](CounterpartAddressesApi.md#getCounterpartsIdAddresses) | **GET** /counterparts/{counterpart_id}/addresses | Get Counterpart Addresses |
| [**getCounterpartsIdAddressesId()**](CounterpartAddressesApi.md#getCounterpartsIdAddressesId) | **GET** /counterparts/{counterpart_id}/addresses/{address_id} | Get Counterpart Addresses By Id |
| [**patchCounterpartsIdAddressesId()**](CounterpartAddressesApi.md#patchCounterpartsIdAddressesId) | **PATCH** /counterparts/{counterpart_id}/addresses/{address_id} | Update Counterparts Address |
| [**postCounterpartsIdAddresses()**](CounterpartAddressesApi.md#postCounterpartsIdAddresses) | **POST** /counterparts/{counterpart_id}/addresses | Create Counterparts Address |
| [**postCounterpartsIdAddressesIdMakeDefault()**](CounterpartAddressesApi.md#postCounterpartsIdAddressesIdMakeDefault) | **POST** /counterparts/{counterpart_id}/addresses/{address_id}/make_default | Make Counterparts Address Default |


## `deleteCounterpartsIdAddressesId()`

```php
deleteCounterpartsIdAddressesId($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id)
```

Delete Counterpart Address By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$address_id = 'address_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteCounterpartsIdAddressesId($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartAddressesApi->deleteCounterpartsIdAddressesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **address_id** | **string**|  | |
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

## `getCounterpartsIdAddresses()`

```php
getCounterpartsIdAddresses($x_monite_version, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartAddressResourceList
```

Get Counterpart Addresses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdAddresses($x_monite_version, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartAddressesApi->getCounterpartsIdAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartAddressResourceList**](../Model/CounterpartAddressResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartsIdAddressesId()`

```php
getCounterpartsIdAddressesId($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID
```

Get Counterpart Addresses By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$address_id = 'address_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdAddressesId($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartAddressesApi->getCounterpartsIdAddressesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **address_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID**](../Model/CounterpartAddressResponseWithCounterpartID.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCounterpartsIdAddressesId()`

```php
patchCounterpartsIdAddressesId($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id, $counterpart_update_address): \OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID
```

Update Counterparts Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$address_id = 'address_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_update_address = new \OpenAPI\Client\Model\CounterpartUpdateAddress(); // \OpenAPI\Client\Model\CounterpartUpdateAddress

try {
    $result = $apiInstance->patchCounterpartsIdAddressesId($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id, $counterpart_update_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartAddressesApi->patchCounterpartsIdAddressesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **address_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_update_address** | [**\OpenAPI\Client\Model\CounterpartUpdateAddress**](../Model/CounterpartUpdateAddress.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID**](../Model/CounterpartAddressResponseWithCounterpartID.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterpartsIdAddresses()`

```php
postCounterpartsIdAddresses($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_address): \OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID
```

Create Counterparts Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_address = new \OpenAPI\Client\Model\CounterpartAddress(); // \OpenAPI\Client\Model\CounterpartAddress

try {
    $result = $apiInstance->postCounterpartsIdAddresses($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartAddressesApi->postCounterpartsIdAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_address** | [**\OpenAPI\Client\Model\CounterpartAddress**](../Model/CounterpartAddress.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID**](../Model/CounterpartAddressResponseWithCounterpartID.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterpartsIdAddressesIdMakeDefault()`

```php
postCounterpartsIdAddressesIdMakeDefault($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID
```

Make Counterparts Address Default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$address_id = 'address_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postCounterpartsIdAddressesIdMakeDefault($x_monite_version, $address_id, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartAddressesApi->postCounterpartsIdAddressesIdMakeDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **address_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartAddressResponseWithCounterpartID**](../Model/CounterpartAddressResponseWithCounterpartID.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
