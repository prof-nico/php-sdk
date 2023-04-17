# OpenAPI\Client\TemplatesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMailTemplatesId()**](TemplatesApi.md#deleteMailTemplatesId) | **DELETE** /mail_templates/{template_id} | Delete |
| [**getMailTemplates()**](TemplatesApi.md#getMailTemplates) | **GET** /mail_templates | Get All |
| [**getMailTemplatesId()**](TemplatesApi.md#getMailTemplatesId) | **GET** /mail_templates/{template_id} | Get |
| [**getMailTemplatesSystem()**](TemplatesApi.md#getMailTemplatesSystem) | **GET** /mail_templates/system | Get All System Templates |
| [**patchMailTemplatesId()**](TemplatesApi.md#patchMailTemplatesId) | **PATCH** /mail_templates/{template_id} | Update |
| [**postMailTemplates()**](TemplatesApi.md#postMailTemplates) | **POST** /mail_templates | Create |


## `deleteMailTemplatesId()`

```php
deleteMailTemplatesId($x_monite_version, $template_id)
```

Delete

Delete custom template bt ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$template_id = 'template_id_example'; // string

try {
    $apiInstance->deleteMailTemplatesId($x_monite_version, $template_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteMailTemplatesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **template_id** | **string**|  | |

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

## `getMailTemplates()`

```php
getMailTemplates($x_monite_version): \OpenAPI\Client\Model\CustomTemplates
```

Get All

Get all custom templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime

try {
    $result = $apiInstance->getMailTemplates($x_monite_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getMailTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\CustomTemplates**](../Model/CustomTemplates.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailTemplatesId()`

```php
getMailTemplatesId($x_monite_version, $template_id): \OpenAPI\Client\Model\CustomTemplateDataSchema
```

Get

Get custom template by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$template_id = 'template_id_example'; // string

try {
    $result = $apiInstance->getMailTemplatesId($x_monite_version, $template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getMailTemplatesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **template_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CustomTemplateDataSchema**](../Model/CustomTemplateDataSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailTemplatesSystem()`

```php
getMailTemplatesSystem($x_monite_version): \OpenAPI\Client\Model\SystemTemplates
```

Get All System Templates

Get all system templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime

try {
    $result = $apiInstance->getMailTemplatesSystem($x_monite_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getMailTemplatesSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |

### Return type

[**\OpenAPI\Client\Model\SystemTemplates**](../Model/SystemTemplates.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchMailTemplatesId()`

```php
patchMailTemplatesId($x_monite_version, $template_id, $update_custom_template_schema_request): \OpenAPI\Client\Model\CustomTemplateDataSchema
```

Update

Update custom template by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$template_id = 'template_id_example'; // string
$update_custom_template_schema_request = new \OpenAPI\Client\Model\UpdateCustomTemplateSchemaRequest(); // \OpenAPI\Client\Model\UpdateCustomTemplateSchemaRequest

try {
    $result = $apiInstance->patchMailTemplatesId($x_monite_version, $template_id, $update_custom_template_schema_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->patchMailTemplatesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **template_id** | **string**|  | |
| **update_custom_template_schema_request** | [**\OpenAPI\Client\Model\UpdateCustomTemplateSchemaRequest**](../Model/UpdateCustomTemplateSchemaRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomTemplateDataSchema**](../Model/CustomTemplateDataSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMailTemplates()`

```php
postMailTemplates($x_monite_version, $add_custom_template_schema): \OpenAPI\Client\Model\CustomTemplateDataSchema
```

Create

Create custom template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$add_custom_template_schema = new \OpenAPI\Client\Model\AddCustomTemplateSchema(); // \OpenAPI\Client\Model\AddCustomTemplateSchema

try {
    $result = $apiInstance->postMailTemplates($x_monite_version, $add_custom_template_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postMailTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **add_custom_template_schema** | [**\OpenAPI\Client\Model\AddCustomTemplateSchema**](../Model/AddCustomTemplateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomTemplateDataSchema**](../Model/CustomTemplateDataSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
