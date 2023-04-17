# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postAuthRevoke()**](AuthenticationApi.md#postAuthRevoke) | **POST** /auth/revoke | Revoke a token |
| [**postAuthToken()**](AuthenticationApi.md#postAuthToken) | **POST** /auth/token | Create a token |


## `postAuthRevoke()`

```php
postAuthRevoke($x_monite_version, $revoke_token_payload): \OpenAPI\Client\Model\MessageResponse
```

Revoke a token

Revoke an existing token immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$revoke_token_payload = new \OpenAPI\Client\Model\RevokeTokenPayload(); // \OpenAPI\Client\Model\RevokeTokenPayload

try {
    $result = $apiInstance->postAuthRevoke($x_monite_version, $revoke_token_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postAuthRevoke: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **revoke_token_payload** | [**\OpenAPI\Client\Model\RevokeTokenPayload**](../Model/RevokeTokenPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthToken()`

```php
postAuthToken($x_monite_version, $obtain_token_payload): \OpenAPI\Client\Model\AccessTokenResponse
```

Create a token

Create a new access token based on client ID and client secret.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$obtain_token_payload = new \OpenAPI\Client\Model\ObtainTokenPayload(); // \OpenAPI\Client\Model\ObtainTokenPayload

try {
    $result = $apiInstance->postAuthToken($x_monite_version, $obtain_token_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postAuthToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **obtain_token_payload** | [**\OpenAPI\Client\Model\ObtainTokenPayload**](../Model/ObtainTokenPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
