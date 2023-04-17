# OpenAPI\Client\EntityBankAccountsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBankAccountsId()**](EntityBankAccountsApi.md#deleteBankAccountsId) | **DELETE** /bank_accounts/{bank_account_id} | Delete the bank account |
| [**getBankAccounts()**](EntityBankAccountsApi.md#getBankAccounts) | **GET** /bank_accounts | Get all bank accounts |
| [**getBankAccountsId()**](EntityBankAccountsApi.md#getBankAccountsId) | **GET** /bank_accounts/{bank_account_id} | Get a bank account |
| [**patchBankAccountsId()**](EntityBankAccountsApi.md#patchBankAccountsId) | **PATCH** /bank_accounts/{bank_account_id} | Update a bank account |
| [**postBankAccounts()**](EntityBankAccountsApi.md#postBankAccounts) | **POST** /bank_accounts | Create a bank account |
| [**postBankAccountsIdMakeDefault()**](EntityBankAccountsApi.md#postBankAccountsIdMakeDefault) | **POST** /bank_accounts/{bank_account_id}/make_default | Set a default bank account |


## `deleteBankAccountsId()`

```php
deleteBankAccountsId($x_monite_version, $bank_account_id, $x_monite_entity_id): mixed
```

Delete the bank account

Delete the bank account specified by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->deleteBankAccountsId($x_monite_version, $bank_account_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityBankAccountsApi->deleteBankAccountsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

**mixed**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccounts()`

```php
getBankAccounts($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\EntityBankAccountPaginationResponse
```

Get all bank accounts

Get all bank accounts of this entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getBankAccounts($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityBankAccountsApi->getBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\EntityBankAccountPaginationResponse**](../Model/EntityBankAccountPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccountsId()`

```php
getBankAccountsId($x_monite_version, $bank_account_id, $x_monite_entity_id): \OpenAPI\Client\Model\EntityBankAccountResponse
```

Get a bank account

Retrieve a bank account by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getBankAccountsId($x_monite_version, $bank_account_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityBankAccountsApi->getBankAccountsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\EntityBankAccountResponse**](../Model/EntityBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchBankAccountsId()`

```php
patchBankAccountsId($x_monite_version, $bank_account_id, $x_monite_entity_id, $update_entity_bank_account_request): \OpenAPI\Client\Model\EntityBankAccountResponse
```

Update a bank account

Change the specified fields with the provided values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_entity_bank_account_request = new \OpenAPI\Client\Model\UpdateEntityBankAccountRequest(); // \OpenAPI\Client\Model\UpdateEntityBankAccountRequest

try {
    $result = $apiInstance->patchBankAccountsId($x_monite_version, $bank_account_id, $x_monite_entity_id, $update_entity_bank_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityBankAccountsApi->patchBankAccountsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_entity_bank_account_request** | [**\OpenAPI\Client\Model\UpdateEntityBankAccountRequest**](../Model/UpdateEntityBankAccountRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityBankAccountResponse**](../Model/EntityBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankAccounts()`

```php
postBankAccounts($x_monite_version, $x_monite_entity_id, $create_entity_bank_account_request): \OpenAPI\Client\Model\EntityBankAccountResponse
```

Create a bank account

Create a new bank account for this entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_entity_bank_account_request = new \OpenAPI\Client\Model\CreateEntityBankAccountRequest(); // \OpenAPI\Client\Model\CreateEntityBankAccountRequest

try {
    $result = $apiInstance->postBankAccounts($x_monite_version, $x_monite_entity_id, $create_entity_bank_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityBankAccountsApi->postBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_entity_bank_account_request** | [**\OpenAPI\Client\Model\CreateEntityBankAccountRequest**](../Model/CreateEntityBankAccountRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityBankAccountResponse**](../Model/EntityBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankAccountsIdMakeDefault()`

```php
postBankAccountsIdMakeDefault($x_monite_version, $bank_account_id, $x_monite_entity_id): \OpenAPI\Client\Model\EntityBankAccountResponse
```

Set a default bank account

Set a bank account as default for this entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityBankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$bank_account_id = 'bank_account_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postBankAccountsIdMakeDefault($x_monite_version, $bank_account_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityBankAccountsApi->postBankAccountsIdMakeDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **bank_account_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\EntityBankAccountResponse**](../Model/EntityBankAccountResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
