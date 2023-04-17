# OpenAPI\Client\OverdueRemindersApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOverdueRemindersId()**](OverdueRemindersApi.md#deleteOverdueRemindersId) | **DELETE** /overdue_reminders/{overdue_reminder_id} | Delete Overdue Reminder By Id |
| [**getOverdueReminders()**](OverdueRemindersApi.md#getOverdueReminders) | **GET** /overdue_reminders | Get Overdue Reminder |
| [**getOverdueRemindersId()**](OverdueRemindersApi.md#getOverdueRemindersId) | **GET** /overdue_reminders/{overdue_reminder_id} | Get Overdue Reminder By Id |
| [**patchOverdueRemindersId()**](OverdueRemindersApi.md#patchOverdueRemindersId) | **PATCH** /overdue_reminders/{overdue_reminder_id} | Update Overdue Reminder By Id |
| [**postOverdueReminders()**](OverdueRemindersApi.md#postOverdueReminders) | **POST** /overdue_reminders | Create Overdue Reminder |


## `deleteOverdueRemindersId()`

```php
deleteOverdueRemindersId($x_monite_version, $overdue_reminder_id, $x_monite_entity_id)
```

Delete Overdue Reminder By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OverdueRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$overdue_reminder_id = 'overdue_reminder_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteOverdueRemindersId($x_monite_version, $overdue_reminder_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling OverdueRemindersApi->deleteOverdueRemindersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **overdue_reminder_id** | **string**|  | |
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

## `getOverdueReminders()`

```php
getOverdueReminders($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\AllOverdueRemindersResponse
```

Get Overdue Reminder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OverdueRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getOverdueReminders($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverdueRemindersApi->getOverdueReminders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\AllOverdueRemindersResponse**](../Model/AllOverdueRemindersResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOverdueRemindersId()`

```php
getOverdueRemindersId($x_monite_version, $overdue_reminder_id, $x_monite_entity_id): \OpenAPI\Client\Model\OverdueReminderResponse
```

Get Overdue Reminder By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OverdueRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$overdue_reminder_id = 'overdue_reminder_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getOverdueRemindersId($x_monite_version, $overdue_reminder_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverdueRemindersApi->getOverdueRemindersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **overdue_reminder_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\OverdueReminderResponse**](../Model/OverdueReminderResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOverdueRemindersId()`

```php
patchOverdueRemindersId($x_monite_version, $overdue_reminder_id, $x_monite_entity_id, $overdue_reminder_request): \OpenAPI\Client\Model\OverdueReminderResponse
```

Update Overdue Reminder By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OverdueRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$overdue_reminder_id = 'overdue_reminder_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$overdue_reminder_request = new \OpenAPI\Client\Model\OverdueReminderRequest(); // \OpenAPI\Client\Model\OverdueReminderRequest

try {
    $result = $apiInstance->patchOverdueRemindersId($x_monite_version, $overdue_reminder_id, $x_monite_entity_id, $overdue_reminder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverdueRemindersApi->patchOverdueRemindersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **overdue_reminder_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **overdue_reminder_request** | [**\OpenAPI\Client\Model\OverdueReminderRequest**](../Model/OverdueReminderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OverdueReminderResponse**](../Model/OverdueReminderResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOverdueReminders()`

```php
postOverdueReminders($x_monite_version, $x_monite_entity_id, $overdue_reminder_request): \OpenAPI\Client\Model\OverdueReminderResponse
```

Create Overdue Reminder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OverdueRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$overdue_reminder_request = new \OpenAPI\Client\Model\OverdueReminderRequest(); // \OpenAPI\Client\Model\OverdueReminderRequest

try {
    $result = $apiInstance->postOverdueReminders($x_monite_version, $x_monite_entity_id, $overdue_reminder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverdueRemindersApi->postOverdueReminders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **overdue_reminder_request** | [**\OpenAPI\Client\Model\OverdueReminderRequest**](../Model/OverdueReminderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OverdueReminderResponse**](../Model/OverdueReminderResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
