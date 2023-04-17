# OpenAPI\Client\PaymentRemindersApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePaymentRemindersId()**](PaymentRemindersApi.md#deletePaymentRemindersId) | **DELETE** /payment_reminders/{payment_reminder_id} | Delete Payment Reminders By Id |
| [**getPaymentReminders()**](PaymentRemindersApi.md#getPaymentReminders) | **GET** /payment_reminders | Get Payment Reminders |
| [**getPaymentRemindersId()**](PaymentRemindersApi.md#getPaymentRemindersId) | **GET** /payment_reminders/{payment_reminder_id} | Get Payment Reminders By Id |
| [**patchPaymentRemindersId()**](PaymentRemindersApi.md#patchPaymentRemindersId) | **PATCH** /payment_reminders/{payment_reminder_id} | Update Payment Reminders By Id |
| [**postPaymentReminders()**](PaymentRemindersApi.md#postPaymentReminders) | **POST** /payment_reminders | Create Payment Reminders |


## `deletePaymentRemindersId()`

```php
deletePaymentRemindersId($x_monite_version, $payment_reminder_id, $x_monite_entity_id)
```

Delete Payment Reminders By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_reminder_id = 'payment_reminder_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deletePaymentRemindersId($x_monite_version, $payment_reminder_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRemindersApi->deletePaymentRemindersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_reminder_id** | **string**|  | |
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

## `getPaymentReminders()`

```php
getPaymentReminders($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\GetAllPaymentReminders
```

Get Payment Reminders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPaymentReminders($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRemindersApi->getPaymentReminders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\GetAllPaymentReminders**](../Model/GetAllPaymentReminders.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRemindersId()`

```php
getPaymentRemindersId($x_monite_version, $payment_reminder_id, $x_monite_entity_id): \OpenAPI\Client\Model\PaymentReminderResponse
```

Get Payment Reminders By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_reminder_id = 'payment_reminder_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPaymentRemindersId($x_monite_version, $payment_reminder_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRemindersApi->getPaymentRemindersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_reminder_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PaymentReminderResponse**](../Model/PaymentReminderResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPaymentRemindersId()`

```php
patchPaymentRemindersId($x_monite_version, $payment_reminder_id, $x_monite_entity_id, $payment_reminder): \OpenAPI\Client\Model\PaymentReminderResponse
```

Update Payment Reminders By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payment_reminder_id = 'payment_reminder_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$payment_reminder = new \OpenAPI\Client\Model\PaymentReminder(); // \OpenAPI\Client\Model\PaymentReminder

try {
    $result = $apiInstance->patchPaymentRemindersId($x_monite_version, $payment_reminder_id, $x_monite_entity_id, $payment_reminder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRemindersApi->patchPaymentRemindersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payment_reminder_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **payment_reminder** | [**\OpenAPI\Client\Model\PaymentReminder**](../Model/PaymentReminder.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentReminderResponse**](../Model/PaymentReminderResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentReminders()`

```php
postPaymentReminders($x_monite_version, $x_monite_entity_id, $payment_reminder): \OpenAPI\Client\Model\PaymentReminderResponse
```

Create Payment Reminders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PaymentRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$payment_reminder = new \OpenAPI\Client\Model\PaymentReminder(); // \OpenAPI\Client\Model\PaymentReminder

try {
    $result = $apiInstance->postPaymentReminders($x_monite_version, $x_monite_entity_id, $payment_reminder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRemindersApi->postPaymentReminders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **payment_reminder** | [**\OpenAPI\Client\Model\PaymentReminder**](../Model/PaymentReminder.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentReminderResponse**](../Model/PaymentReminderResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
