# OpenAPI\Client\TextTemplatesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTextTemplatesId()**](TextTemplatesApi.md#deleteTextTemplatesId) | **DELETE** /text_templates/{text_template_id} | Delete |
| [**getTextTemplates()**](TextTemplatesApi.md#getTextTemplates) | **GET** /text_templates | Get All |
| [**getTextTemplatesId()**](TextTemplatesApi.md#getTextTemplatesId) | **GET** /text_templates/{text_template_id} | Get |
| [**getTextTemplatesVariables()**](TextTemplatesApi.md#getTextTemplatesVariables) | **GET** /text_templates/variables | Get Variables |
| [**patchTextTemplatesId()**](TextTemplatesApi.md#patchTextTemplatesId) | **PATCH** /text_templates/{text_template_id} | Update |
| [**postTextTemplates()**](TextTemplatesApi.md#postTextTemplates) | **POST** /text_templates | Create |
| [**postTextTemplatesIdMakeDefault()**](TextTemplatesApi.md#postTextTemplatesIdMakeDefault) | **POST** /text_templates/{text_template_id}/make_default | Make |


## `deleteTextTemplatesId()`

```php
deleteTextTemplatesId($x_monite_version, $text_template_id, $x_monite_entity_id)
```

Delete

Delete custom content by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$text_template_id = 'text_template_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteTextTemplatesId($x_monite_version, $text_template_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->deleteTextTemplatesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **text_template_id** | **string**|  | |
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

## `getTextTemplates()`

```php
getTextTemplates($x_monite_version, $x_monite_entity_id, $type, $document_type, $is_default): \OpenAPI\Client\Model\TextTemplateResponseList
```

Get All

Get all custom contents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$type = new \OpenAPI\Client\Model\TextTemplateType(); // TextTemplateType
$document_type = new \OpenAPI\Client\Model\DocumentTypeEnum(); // DocumentTypeEnum
$is_default = True; // bool

try {
    $result = $apiInstance->getTextTemplates($x_monite_version, $x_monite_entity_id, $type, $document_type, $is_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->getTextTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **type** | [**TextTemplateType**](../Model/.md)|  | [optional] |
| **document_type** | [**DocumentTypeEnum**](../Model/.md)|  | [optional] |
| **is_default** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TextTemplateResponseList**](../Model/TextTemplateResponseList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextTemplatesId()`

```php
getTextTemplatesId($x_monite_version, $text_template_id, $x_monite_entity_id): \OpenAPI\Client\Model\TextTemplateResponse
```

Get

Get custom content by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$text_template_id = 'text_template_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getTextTemplatesId($x_monite_version, $text_template_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->getTextTemplatesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **text_template_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\TextTemplateResponse**](../Model/TextTemplateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTextTemplatesVariables()`

```php
getTextTemplatesVariables($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\VariablesObjectList
```

Get Variables

Get variables for text template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getTextTemplatesVariables($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->getTextTemplatesVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\VariablesObjectList**](../Model/VariablesObjectList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchTextTemplatesId()`

```php
patchTextTemplatesId($x_monite_version, $text_template_id, $x_monite_entity_id, $update_text_template_payload): \OpenAPI\Client\Model\TextTemplateResponse
```

Update

Update custom content by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$text_template_id = 'text_template_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_text_template_payload = new \OpenAPI\Client\Model\UpdateTextTemplatePayload(); // \OpenAPI\Client\Model\UpdateTextTemplatePayload

try {
    $result = $apiInstance->patchTextTemplatesId($x_monite_version, $text_template_id, $x_monite_entity_id, $update_text_template_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->patchTextTemplatesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **text_template_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_text_template_payload** | [**\OpenAPI\Client\Model\UpdateTextTemplatePayload**](../Model/UpdateTextTemplatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TextTemplateResponse**](../Model/TextTemplateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTextTemplates()`

```php
postTextTemplates($x_monite_version, $x_monite_entity_id, $create_text_template_payload): \OpenAPI\Client\Model\TextTemplateResponse
```

Create

Create custom content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_text_template_payload = new \OpenAPI\Client\Model\CreateTextTemplatePayload(); // \OpenAPI\Client\Model\CreateTextTemplatePayload

try {
    $result = $apiInstance->postTextTemplates($x_monite_version, $x_monite_entity_id, $create_text_template_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->postTextTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_text_template_payload** | [**\OpenAPI\Client\Model\CreateTextTemplatePayload**](../Model/CreateTextTemplatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TextTemplateResponse**](../Model/TextTemplateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTextTemplatesIdMakeDefault()`

```php
postTextTemplatesIdMakeDefault($x_monite_version, $text_template_id, $x_monite_entity_id): \OpenAPI\Client\Model\TextTemplateResponse
```

Make

Make text template default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TextTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$text_template_id = 'text_template_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postTextTemplatesIdMakeDefault($x_monite_version, $text_template_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplatesApi->postTextTemplatesIdMakeDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **text_template_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\TextTemplateResponse**](../Model/TextTemplateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
