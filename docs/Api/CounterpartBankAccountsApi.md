# OpenAPI\Client\CounterpartBankAccountsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCounterpartsIdBankAccountsId()**](CounterpartBankAccountsApi.md#deleteCounterpartsIdBankAccountsId) | **DELETE** /counterparts/{counterpart_id}/bank_accounts/{bank_account_id} | Delete Counterpart Bank Account By Id |
| [**getCounterpartsIdBankAccounts()**](CounterpartBankAccountsApi.md#getCounterpartsIdBankAccounts) | **GET** /counterparts/{counterpart_id}/bank_accounts | Get Counterparts Bank Accounts |
| [**getCounterpartsIdBankAccountsId()**](CounterpartBankAccountsApi.md#getCounterpartsIdBankAccountsId) | **GET** /counterparts/{counterpart_id}/bank_accounts/{bank_account_id} | Get Counterparts Bank Accounts By Id |
| [**patchCounterpartsIdBankAccountsId()**](CounterpartBankAccountsApi.md#patchCounterpartsIdBankAccountsId) | **PATCH** /counterparts/{counterpart_id}/bank_accounts/{bank_account_id} | Update Counterparts Bank Account |
| [**postCounterpartsIdBankAccounts()**](CounterpartBankAccountsApi.md#postCounterpartsIdBankAccounts) | **POST** /counterparts/{counterpart_id}/bank_accounts | Create Counterparts Bank Account |


## `deleteCounterpartsIdBankAccountsId()`

```php
deleteCounterpartsIdBankAccountsId($x_monite_version, $bank_account_id, $counterpart_id, $x_monite_entity_id)
```

Delete Counterpart Bank Account By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteCounterpartsIdBankAccountsId($x_monite_version, $bank_account_id, $counterpart_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartBankAccountsApi->deleteCounterpartsIdBankAccountsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
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

## `getCounterpartsIdBankAccounts()`

```php
getCounterpartsIdBankAccounts($x_monite_version, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartBankAccountResourceList
```

Get Counterparts Bank Accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdBankAccounts($x_monite_version, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartBankAccountsApi->getCounterpartsIdBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartBankAccountResourceList**](../Model/CounterpartBankAccountResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartsIdBankAccountsId()`

```php
getCounterpartsIdBankAccountsId($x_monite_version, $bank_account_id, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartBankAccountResponse
```

Get Counterparts Bank Accounts By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdBankAccountsId($x_monite_version, $bank_account_id, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartBankAccountsApi->getCounterpartsIdBankAccountsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartBankAccountResponse**](../Model/CounterpartBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCounterpartsIdBankAccountsId()`

```php
patchCounterpartsIdBankAccountsId($x_monite_version, $bank_account_id, $counterpart_id, $x_monite_entity_id, $counterpart_bank_account): \OpenAPI\Client\Model\CounterpartBankAccountResponse
```

Update Counterparts Bank Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_bank_account = new \OpenAPI\Client\Model\CounterpartBankAccount(); // \OpenAPI\Client\Model\CounterpartBankAccount

try {
    $result = $apiInstance->patchCounterpartsIdBankAccountsId($x_monite_version, $bank_account_id, $counterpart_id, $x_monite_entity_id, $counterpart_bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartBankAccountsApi->patchCounterpartsIdBankAccountsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_bank_account** | [**\OpenAPI\Client\Model\CounterpartBankAccount**](../Model/CounterpartBankAccount.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartBankAccountResponse**](../Model/CounterpartBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterpartsIdBankAccounts()`

```php
postCounterpartsIdBankAccounts($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_bank_account): \OpenAPI\Client\Model\CounterpartBankAccountResponse
```

Create Counterparts Bank Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_bank_account = new \OpenAPI\Client\Model\CounterpartBankAccount(); // \OpenAPI\Client\Model\CounterpartBankAccount

try {
    $result = $apiInstance->postCounterpartsIdBankAccounts($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartBankAccountsApi->postCounterpartsIdBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_bank_account** | [**\OpenAPI\Client\Model\CounterpartBankAccount**](../Model/CounterpartBankAccount.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartBankAccountResponse**](../Model/CounterpartBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
