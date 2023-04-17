# OpenAPI\Client\CounterpartContactsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCounterpartsIdContactsId()**](CounterpartContactsApi.md#deleteCounterpartsIdContactsId) | **DELETE** /counterparts/{counterpart_id}/contacts/{contact_id} | Delete Counterpart Contact By Id |
| [**getCounterpartsIdContacts()**](CounterpartContactsApi.md#getCounterpartsIdContacts) | **GET** /counterparts/{counterpart_id}/contacts | Get Counterpart Contacts |
| [**getCounterpartsIdContactsId()**](CounterpartContactsApi.md#getCounterpartsIdContactsId) | **GET** /counterparts/{counterpart_id}/contacts/{contact_id} | Get Counterpart Contact By Id |
| [**patchCounterpartsIdContactsId()**](CounterpartContactsApi.md#patchCounterpartsIdContactsId) | **PATCH** /counterparts/{counterpart_id}/contacts/{contact_id} | Update Counterpart Contact By Id |
| [**postCounterpartsIdContacts()**](CounterpartContactsApi.md#postCounterpartsIdContacts) | **POST** /counterparts/{counterpart_id}/contacts | Create Counterpart Contacts |
| [**postCounterpartsIdContactsIdMakeDefault()**](CounterpartContactsApi.md#postCounterpartsIdContactsIdMakeDefault) | **POST** /counterparts/{counterpart_id}/contacts/{contact_id}/make_default | Make Counterpart Contact Default |


## `deleteCounterpartsIdContactsId()`

```php
deleteCounterpartsIdContactsId($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id)
```

Delete Counterpart Contact By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$contact_id = 'contact_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteCounterpartsIdContactsId($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartContactsApi->deleteCounterpartsIdContactsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **contact_id** | **string**|  | |
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

## `getCounterpartsIdContacts()`

```php
getCounterpartsIdContacts($x_monite_version, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartContactsResourceList
```

Get Counterpart Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdContacts($x_monite_version, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartContactsApi->getCounterpartsIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartContactsResourceList**](../Model/CounterpartContactsResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartsIdContactsId()`

```php
getCounterpartsIdContactsId($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartContactResponse
```

Get Counterpart Contact By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$contact_id = 'contact_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdContactsId($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartContactsApi->getCounterpartsIdContactsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **contact_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartContactResponse**](../Model/CounterpartContactResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCounterpartsIdContactsId()`

```php
patchCounterpartsIdContactsId($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id, $update_counterpart_contact_payload): \OpenAPI\Client\Model\CounterpartContactResponse
```

Update Counterpart Contact By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$contact_id = 'contact_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_counterpart_contact_payload = new \OpenAPI\Client\Model\UpdateCounterpartContactPayload(); // \OpenAPI\Client\Model\UpdateCounterpartContactPayload

try {
    $result = $apiInstance->patchCounterpartsIdContactsId($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id, $update_counterpart_contact_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartContactsApi->patchCounterpartsIdContactsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **contact_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_counterpart_contact_payload** | [**\OpenAPI\Client\Model\UpdateCounterpartContactPayload**](../Model/UpdateCounterpartContactPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartContactResponse**](../Model/CounterpartContactResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterpartsIdContacts()`

```php
postCounterpartsIdContacts($x_monite_version, $counterpart_id, $x_monite_entity_id, $create_counterpart_contact_payload): \OpenAPI\Client\Model\CounterpartContactResponse
```

Create Counterpart Contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_counterpart_contact_payload = new \OpenAPI\Client\Model\CreateCounterpartContactPayload(); // \OpenAPI\Client\Model\CreateCounterpartContactPayload

try {
    $result = $apiInstance->postCounterpartsIdContacts($x_monite_version, $counterpart_id, $x_monite_entity_id, $create_counterpart_contact_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartContactsApi->postCounterpartsIdContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_counterpart_contact_payload** | [**\OpenAPI\Client\Model\CreateCounterpartContactPayload**](../Model/CreateCounterpartContactPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartContactResponse**](../Model/CounterpartContactResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterpartsIdContactsIdMakeDefault()`

```php
postCounterpartsIdContactsIdMakeDefault($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartContactResponse
```

Make Counterpart Contact Default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$contact_id = 'contact_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postCounterpartsIdContactsIdMakeDefault($x_monite_version, $contact_id, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartContactsApi->postCounterpartsIdContactsIdMakeDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **contact_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartContactResponse**](../Model/CounterpartContactResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
