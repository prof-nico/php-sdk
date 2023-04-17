# OpenAPI\Client\ProjectSettingsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSettings()**](ProjectSettingsApi.md#getSettings) | **GET** /settings | Get partner settings |
| [**patchSettings()**](ProjectSettingsApi.md#patchSettings) | **PATCH** /settings | Update partner settings |


## `getSettings()`

```php
getSettings($x_monite_version): \OpenAPI\Client\Model\PartnerProjectSettingsResponse
```

Get partner settings

Retrieve all settings for this partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime

try {
    $result = $apiInstance->getSettings($x_monite_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSettingsApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\PartnerProjectSettingsResponse**](../Model/PartnerProjectSettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSettings()`

```php
patchSettings($x_monite_version, $partner_project_settings_payload): \OpenAPI\Client\Model\PartnerProjectSettingsResponse
```

Update partner settings

Change the specified fields with the provided values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$partner_project_settings_payload = new \OpenAPI\Client\Model\PartnerProjectSettingsPayload(); // \OpenAPI\Client\Model\PartnerProjectSettingsPayload

try {
    $result = $apiInstance->patchSettings($x_monite_version, $partner_project_settings_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectSettingsApi->patchSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **partner_project_settings_payload** | [**\OpenAPI\Client\Model\PartnerProjectSettingsPayload**](../Model/PartnerProjectSettingsPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PartnerProjectSettingsResponse**](../Model/PartnerProjectSettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
