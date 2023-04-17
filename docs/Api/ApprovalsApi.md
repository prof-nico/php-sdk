# OpenAPI\Client\ApprovalsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveV1ApprovalsApprovalIdApprovePost()**](ApprovalsApi.md#approveV1ApprovalsApprovalIdApprovePost) | **POST** /approvals/{approval_id}/approve | Approve |
| [**getAllPendingApprovalsV1ApprovalsGet()**](ApprovalsApi.md#getAllPendingApprovalsV1ApprovalsGet) | **GET** /approvals | Get All Pending Approvals |
| [**getApprovalByIdV1ApprovalsApprovalIdGet()**](ApprovalsApi.md#getApprovalByIdV1ApprovalsApprovalIdGet) | **GET** /approvals/{approval_id} | Get Approval By Id |
| [**rejectV1ApprovalsApprovalIdRejectPost()**](ApprovalsApi.md#rejectV1ApprovalsApprovalIdRejectPost) | **POST** /approvals/{approval_id}/reject | Reject |


## `approveV1ApprovalsApprovalIdApprovePost()`

```php
approveV1ApprovalsApprovalIdApprovePost($x_monite_version, $approval_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalResponse
```

Approve

Approve approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_id = 'approval_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->approveV1ApprovalsApprovalIdApprovePost($x_monite_version, $approval_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->approveV1ApprovalsApprovalIdApprovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalResponse**](../Model/ApprovalResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllPendingApprovalsV1ApprovalsGet()`

```php
getAllPendingApprovalsV1ApprovalsGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $status, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\PaginatedApprovalResponse
```

Get All Pending Approvals

Get all pending approvals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApprovalCursorFields(); // \OpenAPI\Client\Model\ApprovalCursorFields | The field by which the results will be sorted.
$object_type = new \OpenAPI\Client\Model\ObjectType(); // ObjectType
$status = new \OpenAPI\Client\Model\ApprovalStatusEnum(); // ApprovalStatusEnum
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getAllPendingApprovalsV1ApprovalsGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $status, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->getAllPendingApprovalsV1ApprovalsGet: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\ApprovalCursorFields**](../Model/.md)| The field by which the results will be sorted. | [optional] |
| **object_type** | [**ObjectType**](../Model/.md)|  | [optional] |
| **status** | [**ApprovalStatusEnum**](../Model/.md)|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedApprovalResponse**](../Model/PaginatedApprovalResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalByIdV1ApprovalsApprovalIdGet()`

```php
getApprovalByIdV1ApprovalsApprovalIdGet($x_monite_version, $approval_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalResponse
```

Get Approval By Id

Get approval details by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_id = 'approval_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getApprovalByIdV1ApprovalsApprovalIdGet($x_monite_version, $approval_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->getApprovalByIdV1ApprovalsApprovalIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalResponse**](../Model/ApprovalResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectV1ApprovalsApprovalIdRejectPost()`

```php
rejectV1ApprovalsApprovalIdRejectPost($x_monite_version, $approval_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalResponse
```

Reject

Reject approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_id = 'approval_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->rejectV1ApprovalsApprovalIdRejectPost($x_monite_version, $approval_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalsApi->rejectV1ApprovalsApprovalIdRejectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalResponse**](../Model/ApprovalResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
