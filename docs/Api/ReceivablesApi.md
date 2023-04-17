# OpenAPI\Client\ReceivablesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteReceivablesId()**](ReceivablesApi.md#deleteReceivablesId) | **DELETE** /receivables/{receivable_id} | Delete Receivable By Id |
| [**getReceivables()**](ReceivablesApi.md#getReceivables) | **GET** /receivables | Get All |
| [**getReceivablesId()**](ReceivablesApi.md#getReceivablesId) | **GET** /receivables/{receivable_id} | Get Receivable By Id |
| [**getReceivablesIdPdfLink()**](ReceivablesApi.md#getReceivablesIdPdfLink) | **GET** /receivables/{receivable_id}/pdf_link | Get Pdf Link |
| [**getReceivablesVariables()**](ReceivablesApi.md#getReceivablesVariables) | **GET** /receivables/variables | Get Variables |
| [**patchReceivablesId()**](ReceivablesApi.md#patchReceivablesId) | **PATCH** /receivables/{receivable_id} | Update Receivable By Id |
| [**postReceivables()**](ReceivablesApi.md#postReceivables) | **POST** /receivables | Create New Receivable |
| [**postReceivablesIdAccept()**](ReceivablesApi.md#postReceivablesIdAccept) | **POST** /receivables/{receivable_id}/accept | Accept Quote |
| [**postReceivablesIdCancel()**](ReceivablesApi.md#postReceivablesIdCancel) | **POST** /receivables/{receivable_id}/cancel | Cancel Receivable By Id |
| [**postReceivablesIdClone()**](ReceivablesApi.md#postReceivablesIdClone) | **POST** /receivables/{receivable_id}/clone | Clone Receivable |
| [**postReceivablesIdDecline()**](ReceivablesApi.md#postReceivablesIdDecline) | **POST** /receivables/{receivable_id}/decline | Decline Quote |
| [**postReceivablesIdIssue()**](ReceivablesApi.md#postReceivablesIdIssue) | **POST** /receivables/{receivable_id}/issue | Issue Receivable |
| [**postReceivablesIdMarkAsPaid()**](ReceivablesApi.md#postReceivablesIdMarkAsPaid) | **POST** /receivables/{receivable_id}/mark_as_paid | Mark As Paid |
| [**postReceivablesIdMarkAsUncollectible()**](ReceivablesApi.md#postReceivablesIdMarkAsUncollectible) | **POST** /receivables/{receivable_id}/mark_as_uncollectible | Mark As Uncollectible |
| [**postReceivablesIdPreview()**](ReceivablesApi.md#postReceivablesIdPreview) | **POST** /receivables/{receivable_id}/preview | Preview |
| [**postReceivablesIdSend()**](ReceivablesApi.md#postReceivablesIdSend) | **POST** /receivables/{receivable_id}/send | Send |
| [**postReceivablesIdVerify()**](ReceivablesApi.md#postReceivablesIdVerify) | **POST** /receivables/{receivable_id}/verify | Verify Receivable |


## `deleteReceivablesId()`

```php
deleteReceivablesId($x_monite_version, $receivable_id, $x_monite_entity_id)
```

Delete Receivable By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteReceivablesId($x_monite_version, $receivable_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->deleteReceivablesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
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

## `getReceivables()`

```php
getReceivables($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $type, $document_id, $document_id__contains, $document_id__icontains, $issue_date__gt, $issue_date__lt, $issue_date__gte, $issue_date__lte, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $counterpart_name, $counterpart_name__contains, $counterpart_name__icontains, $amount, $amount__gt, $amount__lt, $amount__gte, $amount__lte, $status, $status__in, $entity_user_id, $entity_user_id__in, $based_on): \OpenAPI\Client\Model\ReceivablePaginationResponse
```

Get All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReceivableCursorFields(); // \OpenAPI\Client\Model\ReceivableCursorFields | Allowed sort fields
$type = new \OpenAPI\Client\Model\ReceivableType(); // ReceivableType
$document_id = 'document_id_example'; // string
$document_id__contains = 'document_id__contains_example'; // string
$document_id__icontains = 'document_id__icontains_example'; // string
$issue_date__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$issue_date__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$issue_date__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$issue_date__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$counterpart_name = 'counterpart_name_example'; // string
$counterpart_name__contains = 'counterpart_name__contains_example'; // string
$counterpart_name__icontains = 'counterpart_name__icontains_example'; // string
$amount = 56; // int
$amount__gt = 56; // int
$amount__lt = 56; // int
$amount__gte = 56; // int
$amount__lte = 56; // int
$status = new \OpenAPI\Client\Model\ReceivablesStatusEnum(); // ReceivablesStatusEnum
$status__in = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReceivablesStatusEnum()); // \OpenAPI\Client\Model\ReceivablesStatusEnum[]
$entity_user_id = 'entity_user_id_example'; // string
$entity_user_id__in = array('entity_user_id__in_example'); // string[]
$based_on = 'based_on_example'; // string

try {
    $result = $apiInstance->getReceivables($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $type, $document_id, $document_id__contains, $document_id__icontains, $issue_date__gt, $issue_date__lt, $issue_date__gte, $issue_date__lte, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $counterpart_name, $counterpart_name__contains, $counterpart_name__icontains, $amount, $amount__gt, $amount__lt, $amount__gte, $amount__lte, $status, $status__in, $entity_user_id, $entity_user_id__in, $based_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->getReceivables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\ReceivableCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **type** | [**ReceivableType**](../Model/.md)|  | [optional] |
| **document_id** | **string**|  | [optional] |
| **document_id__contains** | **string**|  | [optional] |
| **document_id__icontains** | **string**|  | [optional] |
| **issue_date__gt** | **\DateTime**|  | [optional] |
| **issue_date__lt** | **\DateTime**|  | [optional] |
| **issue_date__gte** | **\DateTime**|  | [optional] |
| **issue_date__lte** | **\DateTime**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |
| **counterpart_name** | **string**|  | [optional] |
| **counterpart_name__contains** | **string**|  | [optional] |
| **counterpart_name__icontains** | **string**|  | [optional] |
| **amount** | **int**|  | [optional] |
| **amount__gt** | **int**|  | [optional] |
| **amount__lt** | **int**|  | [optional] |
| **amount__gte** | **int**|  | [optional] |
| **amount__lte** | **int**|  | [optional] |
| **status** | [**ReceivablesStatusEnum**](../Model/.md)|  | [optional] |
| **status__in** | [**\OpenAPI\Client\Model\ReceivablesStatusEnum[]**](../Model/\OpenAPI\Client\Model\ReceivablesStatusEnum.md)|  | [optional] |
| **entity_user_id** | **string**|  | [optional] |
| **entity_user_id__in** | [**string[]**](../Model/string.md)|  | [optional] |
| **based_on** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReceivablePaginationResponse**](../Model/ReceivablePaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivablesId()`

```php
getReceivablesId($x_monite_version, $receivable_id, $x_monite_entity_id): \OpenAPI\Client\Model\ReceivableResponse
```

Get Receivable By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getReceivablesId($x_monite_version, $receivable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->getReceivablesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivablesIdPdfLink()`

```php
getReceivablesIdPdfLink($x_monite_version, $receivable_id, $x_monite_entity_id): \OpenAPI\Client\Model\ReceivableFileUrl
```

Get Pdf Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getReceivablesIdPdfLink($x_monite_version, $receivable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->getReceivablesIdPdfLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ReceivableFileUrl**](../Model/ReceivableFileUrl.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReceivablesVariables()`

```php
getReceivablesVariables($x_monite_version): \OpenAPI\Client\Model\VariablesObjectList
```

Get Variables

Get a list of placeholders allowed to insert into an email template for customization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime

try {
    $result = $apiInstance->getReceivablesVariables($x_monite_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->getReceivablesVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |

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

## `patchReceivablesId()`

```php
patchReceivablesId($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_update_payload): \OpenAPI\Client\Model\ReceivableResponse
```

Update Receivable By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_update_payload = new \OpenAPI\Client\Model\ReceivableUpdatePayload(); // \OpenAPI\Client\Model\ReceivableUpdatePayload

try {
    $result = $apiInstance->patchReceivablesId($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->patchReceivablesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_update_payload** | [**\OpenAPI\Client\Model\ReceivableUpdatePayload**](../Model/ReceivableUpdatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivables()`

```php
postReceivables($x_monite_version, $x_monite_entity_id, $receivable_facade_create_payload): \OpenAPI\Client\Model\ReceivableResponse
```

Create New Receivable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_facade_create_payload = new \OpenAPI\Client\Model\ReceivableFacadeCreatePayload(); // \OpenAPI\Client\Model\ReceivableFacadeCreatePayload

try {
    $result = $apiInstance->postReceivables($x_monite_version, $x_monite_entity_id, $receivable_facade_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_facade_create_payload** | [**\OpenAPI\Client\Model\ReceivableFacadeCreatePayload**](../Model/ReceivableFacadeCreatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdAccept()`

```php
postReceivablesIdAccept($x_monite_version, $receivable_id, $x_monite_entity_id, $body): \OpenAPI\Client\Model\SuccessResult
```

Accept Quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->postReceivablesIdAccept($x_monite_version, $receivable_id, $x_monite_entity_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdAccept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **body** | **object**|  | |

### Return type

[**\OpenAPI\Client\Model\SuccessResult**](../Model/SuccessResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdCancel()`

```php
postReceivablesIdCancel($x_monite_version, $receivable_id, $x_monite_entity_id)
```

Cancel Receivable By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->postReceivablesIdCancel($x_monite_version, $receivable_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
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

## `postReceivablesIdClone()`

```php
postReceivablesIdClone($x_monite_version, $receivable_id, $x_monite_entity_id): \OpenAPI\Client\Model\ReceivableResponse
```

Clone Receivable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postReceivablesIdClone($x_monite_version, $receivable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdClone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdDecline()`

```php
postReceivablesIdDecline($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_decline_payload): \OpenAPI\Client\Model\SuccessResult
```

Decline Quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_decline_payload = new \OpenAPI\Client\Model\ReceivableDeclinePayload(); // \OpenAPI\Client\Model\ReceivableDeclinePayload

try {
    $result = $apiInstance->postReceivablesIdDecline($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_decline_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdDecline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_decline_payload** | [**\OpenAPI\Client\Model\ReceivableDeclinePayload**](../Model/ReceivableDeclinePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SuccessResult**](../Model/SuccessResult.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdIssue()`

```php
postReceivablesIdIssue($x_monite_version, $receivable_id, $x_monite_entity_id): \OpenAPI\Client\Model\ReceivableResponse
```

Issue Receivable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postReceivablesIdIssue($x_monite_version, $receivable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdMarkAsPaid()`

```php
postReceivablesIdMarkAsPaid($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_paid_payload): \OpenAPI\Client\Model\ReceivableResponse
```

Mark As Paid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_paid_payload = new \OpenAPI\Client\Model\ReceivablePaidPayload(); // \OpenAPI\Client\Model\ReceivablePaidPayload

try {
    $result = $apiInstance->postReceivablesIdMarkAsPaid($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_paid_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdMarkAsPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_paid_payload** | [**\OpenAPI\Client\Model\ReceivablePaidPayload**](../Model/ReceivablePaidPayload.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdMarkAsUncollectible()`

```php
postReceivablesIdMarkAsUncollectible($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_uncollectible_payload): \OpenAPI\Client\Model\ReceivableResponse
```

Mark As Uncollectible

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_uncollectible_payload = new \OpenAPI\Client\Model\ReceivableUncollectiblePayload(); // \OpenAPI\Client\Model\ReceivableUncollectiblePayload

try {
    $result = $apiInstance->postReceivablesIdMarkAsUncollectible($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_uncollectible_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdMarkAsUncollectible: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_uncollectible_payload** | [**\OpenAPI\Client\Model\ReceivableUncollectiblePayload**](../Model/ReceivableUncollectiblePayload.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReceivableResponse**](../Model/ReceivableResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdPreview()`

```php
postReceivablesIdPreview($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_preview_request): \OpenAPI\Client\Model\ReceivablePreviewResponse
```

Preview

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_preview_request = new \OpenAPI\Client\Model\ReceivablePreviewRequest(); // \OpenAPI\Client\Model\ReceivablePreviewRequest

try {
    $result = $apiInstance->postReceivablesIdPreview($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_preview_request** | [**\OpenAPI\Client\Model\ReceivablePreviewRequest**](../Model/ReceivablePreviewRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReceivablePreviewResponse**](../Model/ReceivablePreviewResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdSend()`

```php
postReceivablesIdSend($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_send_request): \OpenAPI\Client\Model\ReceivableSendResponse
```

Send

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$receivable_send_request = new \OpenAPI\Client\Model\ReceivableSendRequest(); // \OpenAPI\Client\Model\ReceivableSendRequest

try {
    $result = $apiInstance->postReceivablesIdSend($x_monite_version, $receivable_id, $x_monite_entity_id, $receivable_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **receivable_send_request** | [**\OpenAPI\Client\Model\ReceivableSendRequest**](../Model/ReceivableSendRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReceivableSendResponse**](../Model/ReceivableSendResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceivablesIdVerify()`

```php
postReceivablesIdVerify($x_monite_version, $receivable_id, $x_monite_entity_id): \OpenAPI\Client\Model\MissingFields
```

Verify Receivable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReceivablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$receivable_id = 'receivable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postReceivablesIdVerify($x_monite_version, $receivable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivablesApi->postReceivablesIdVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **receivable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\MissingFields**](../Model/MissingFields.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
