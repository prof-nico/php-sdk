# OpenAPI\Client\MailboxesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMailboxesId()**](MailboxesApi.md#deleteMailboxesId) | **DELETE** /mailboxes/{mailbox_id} | Delete Mailbox |
| [**getMailboxes()**](MailboxesApi.md#getMailboxes) | **GET** /mailboxes | Get Mailboxes |
| [**postMailboxes()**](MailboxesApi.md#postMailboxes) | **POST** /mailboxes | Create Mailbox |
| [**postMailboxesSearch()**](MailboxesApi.md#postMailboxesSearch) | **POST** /mailboxes/search | Get Mailboxes By Multiple Entity Ids |


## `deleteMailboxesId()`

```php
deleteMailboxesId($x_monite_version, $mailbox_id, $x_monite_entity_id)
```

Delete Mailbox

Delete mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$mailbox_id = 'mailbox_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteMailboxesId($x_monite_version, $mailbox_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->deleteMailboxesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **mailbox_id** | **string**|  | |
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

## `getMailboxes()`

```php
getMailboxes($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\MailboxDataResponse
```

Get Mailboxes

Get all mailboxes owned by Entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getMailboxes($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->getMailboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\MailboxDataResponse**](../Model/MailboxDataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMailboxes()`

```php
postMailboxes($x_monite_version, $x_monite_entity_id, $mailbox_domain_request): \OpenAPI\Client\Model\MailboxResponse
```

Create Mailbox

Create a new mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$mailbox_domain_request = new \OpenAPI\Client\Model\MailboxDomainRequest(); // \OpenAPI\Client\Model\MailboxDomainRequest

try {
    $result = $apiInstance->postMailboxes($x_monite_version, $x_monite_entity_id, $mailbox_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->postMailboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **mailbox_domain_request** | [**\OpenAPI\Client\Model\MailboxDomainRequest**](../Model/MailboxDomainRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MailboxResponse**](../Model/MailboxResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMailboxesSearch()`

```php
postMailboxesSearch($x_monite_version, $x_monite_entity_id, $mailbox_multiple_entities_request): \OpenAPI\Client\Model\MailboxDataResponse
```

Get Mailboxes By Multiple Entity Ids

Get all mailboxes owned by Entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MailboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$mailbox_multiple_entities_request = new \OpenAPI\Client\Model\MailboxMultipleEntitiesRequest(); // \OpenAPI\Client\Model\MailboxMultipleEntitiesRequest

try {
    $result = $apiInstance->postMailboxesSearch($x_monite_version, $x_monite_entity_id, $mailbox_multiple_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxesApi->postMailboxesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **mailbox_multiple_entities_request** | [**\OpenAPI\Client\Model\MailboxMultipleEntitiesRequest**](../Model/MailboxMultipleEntitiesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MailboxDataResponse**](../Model/MailboxDataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
