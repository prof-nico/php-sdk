# OpenAPI\Client\DomainsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMailboxDomainsId()**](DomainsApi.md#deleteMailboxDomainsId) | **DELETE** /mailbox_domains/{domain_id} | Delete Domain |
| [**getMailboxDomains()**](DomainsApi.md#getMailboxDomains) | **GET** /mailbox_domains | Get Domains |
| [**postMailboxDomains()**](DomainsApi.md#postMailboxDomains) | **POST** /mailbox_domains | Create Domain |
| [**postMailboxDomainsIdVerify()**](DomainsApi.md#postMailboxDomainsIdVerify) | **POST** /mailbox_domains/{domain_id}/verify | Verify Domain |


## `deleteMailboxDomainsId()`

```php
deleteMailboxDomainsId($x_monite_version, $domain_id)
```

Delete Domain

Delete domain for the partner_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$domain_id = 'domain_id_example'; // string

try {
    $apiInstance->deleteMailboxDomainsId($x_monite_version, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteMailboxDomainsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **domain_id** | **string**|  | |

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

## `getMailboxDomains()`

```php
getMailboxDomains($x_monite_version): \OpenAPI\Client\Model\DomainListResponse
```

Get Domains

Get all domains owned by partner_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime

try {
    $result = $apiInstance->getMailboxDomains($x_monite_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getMailboxDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\DomainListResponse**](../Model/DomainListResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMailboxDomains()`

```php
postMailboxDomains($x_monite_version, $domain_request): \OpenAPI\Client\Model\DomainResponse
```

Create Domain

Create domain for the partner_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$domain_request = new \OpenAPI\Client\Model\DomainRequest(); // \OpenAPI\Client\Model\DomainRequest

try {
    $result = $apiInstance->postMailboxDomains($x_monite_version, $domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->postMailboxDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **domain_request** | [**\OpenAPI\Client\Model\DomainRequest**](../Model/DomainRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DomainResponse**](../Model/DomainResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMailboxDomainsIdVerify()`

```php
postMailboxDomainsIdVerify($x_monite_version, $domain_id): \OpenAPI\Client\Model\VerifyResponse
```

Verify Domain

Verify domain for the partner_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$domain_id = 'domain_id_example'; // string

try {
    $result = $apiInstance->postMailboxDomainsIdVerify($x_monite_version, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->postMailboxDomainsIdVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **domain_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\VerifyResponse**](../Model/VerifyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
