# OpenAPI\Client\RecurrencesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRecurrences()**](RecurrencesApi.md#getRecurrences) | **GET** /recurrences | Get All Recurrences |
| [**getRecurrencesId()**](RecurrencesApi.md#getRecurrencesId) | **GET** /recurrences/{recurrence_id} | Get Recurrence |
| [**patchRecurrencesId()**](RecurrencesApi.md#patchRecurrencesId) | **PATCH** /recurrences/{recurrence_id} | Update Recurrence |
| [**postRecurrences()**](RecurrencesApi.md#postRecurrences) | **POST** /recurrences | Create Recurrence |
| [**postRecurrencesIdCancel()**](RecurrencesApi.md#postRecurrencesIdCancel) | **POST** /recurrences/{recurrence_id}/cancel | Delete Reccurence By Id |


## `getRecurrences()`

```php
getRecurrences($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\GetAllRecurrences
```

Get All Recurrences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RecurrencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getRecurrences($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrencesApi->getRecurrences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\GetAllRecurrences**](../Model/GetAllRecurrences.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecurrencesId()`

```php
getRecurrencesId($x_monite_version, $recurrence_id, $x_monite_entity_id): \OpenAPI\Client\Model\Recurrence
```

Get Recurrence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RecurrencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$recurrence_id = 'recurrence_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getRecurrencesId($x_monite_version, $recurrence_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrencesApi->getRecurrencesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **recurrence_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\Recurrence**](../Model/Recurrence.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRecurrencesId()`

```php
patchRecurrencesId($x_monite_version, $recurrence_id, $x_monite_entity_id, $update_recurrence_payload): \OpenAPI\Client\Model\Recurrence
```

Update Recurrence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RecurrencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$recurrence_id = 'recurrence_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_recurrence_payload = new \OpenAPI\Client\Model\UpdateRecurrencePayload(); // \OpenAPI\Client\Model\UpdateRecurrencePayload

try {
    $result = $apiInstance->patchRecurrencesId($x_monite_version, $recurrence_id, $x_monite_entity_id, $update_recurrence_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrencesApi->patchRecurrencesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **recurrence_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_recurrence_payload** | [**\OpenAPI\Client\Model\UpdateRecurrencePayload**](../Model/UpdateRecurrencePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Recurrence**](../Model/Recurrence.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRecurrences()`

```php
postRecurrences($x_monite_version, $x_monite_entity_id, $create_recurrence_payload): \OpenAPI\Client\Model\Recurrence
```

Create Recurrence

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RecurrencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_recurrence_payload = new \OpenAPI\Client\Model\CreateRecurrencePayload(); // \OpenAPI\Client\Model\CreateRecurrencePayload

try {
    $result = $apiInstance->postRecurrences($x_monite_version, $x_monite_entity_id, $create_recurrence_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrencesApi->postRecurrences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_recurrence_payload** | [**\OpenAPI\Client\Model\CreateRecurrencePayload**](../Model/CreateRecurrencePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Recurrence**](../Model/Recurrence.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRecurrencesIdCancel()`

```php
postRecurrencesIdCancel($x_monite_version, $recurrence_id, $x_monite_entity_id)
```

Delete Reccurence By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RecurrencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$recurrence_id = 'recurrence_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->postRecurrencesIdCancel($x_monite_version, $recurrence_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling RecurrencesApi->postRecurrencesIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **recurrence_id** | **string**|  | |
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
