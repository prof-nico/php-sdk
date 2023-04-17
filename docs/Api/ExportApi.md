# OpenAPI\Client\ExportApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentExportV1DataExportsPost()**](ExportApi.md#addDocumentExportV1DataExportsPost) | **POST** /data_exports | Add Document Export |
| [**getAllV1DataExportsGet()**](ExportApi.md#getAllV1DataExportsGet) | **GET** /data_exports | Get All |
| [**getDocumentExportByIdV1DataExportsIdGet()**](ExportApi.md#getDocumentExportByIdV1DataExportsIdGet) | **GET** /data_exports/{id} | Get Document Export By Id |
| [**getSupportedExportFormatsV1DataExportsSupportedFormatsGet()**](ExportApi.md#getSupportedExportFormatsV1DataExportsSupportedFormatsGet) | **GET** /data_exports/supported_formats | Get Supported Export Formats |


## `addDocumentExportV1DataExportsPost()`

```php
addDocumentExportV1DataExportsPost($x_monite_version, $x_monite_entity_id, $export_payload_schema): \OpenAPI\Client\Model\CreateExportTaskResponseSchema
```

Add Document Export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$export_payload_schema = new \OpenAPI\Client\Model\ExportPayloadSchema(); // \OpenAPI\Client\Model\ExportPayloadSchema

try {
    $result = $apiInstance->addDocumentExportV1DataExportsPost($x_monite_version, $x_monite_entity_id, $export_payload_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->addDocumentExportV1DataExportsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **export_payload_schema** | [**\OpenAPI\Client\Model\ExportPayloadSchema**](../Model/ExportPayloadSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateExportTaskResponseSchema**](../Model/CreateExportTaskResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllV1DataExportsGet()`

```php
getAllV1DataExportsGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_by_entity_user_id): \OpenAPI\Client\Model\AllDocumentExportResponseSchema
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum2(); // \OpenAPI\Client\Model\OrderEnum2 | Sort order: `asc` (ascending) or `desc` (descending).
$limit = 100; // int | The maximum number of results to return per page.
$pagination_token = 'pagination_token_example'; // string | The pagination token to access the next or previous page of results. If `pagination_token` is specified, the `sort`, `order`, and filtering parameters are ignored.
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ExportCursorFields(); // \OpenAPI\Client\Model\ExportCursorFields | The field by which the results will be sorted.
$created_by_entity_user_id = 'created_by_entity_user_id_example'; // string

try {
    $result = $apiInstance->getAllV1DataExportsGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_by_entity_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getAllV1DataExportsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum2**](../Model/.md)| Sort order: &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). | [optional] |
| **limit** | **int**| The maximum number of results to return per page. | [optional] [default to 100] |
| **pagination_token** | **string**| The pagination token to access the next or previous page of results. If &#x60;pagination_token&#x60; is specified, the &#x60;sort&#x60;, &#x60;order&#x60;, and filtering parameters are ignored. | [optional] |
| **sort** | [**\OpenAPI\Client\Model\ExportCursorFields**](../Model/.md)| The field by which the results will be sorted. | [optional] |
| **created_by_entity_user_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AllDocumentExportResponseSchema**](../Model/AllDocumentExportResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentExportByIdV1DataExportsIdGet()`

```php
getDocumentExportByIdV1DataExportsIdGet($x_monite_version, $id, $x_monite_entity_id): \OpenAPI\Client\Model\DocumentExportResponseSchema
```

Get Document Export By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$id = 'id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getDocumentExportByIdV1DataExportsIdGet($x_monite_version, $id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getDocumentExportByIdV1DataExportsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\DocumentExportResponseSchema**](../Model/DocumentExportResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportedExportFormatsV1DataExportsSupportedFormatsGet()`

```php
getSupportedExportFormatsV1DataExportsSupportedFormatsGet($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\SupportedFormatSchema[]
```

Get Supported Export Formats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getSupportedExportFormatsV1DataExportsSupportedFormatsGet($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getSupportedExportFormatsV1DataExportsSupportedFormatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\SupportedFormatSchema[]**](../Model/SupportedFormatSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
