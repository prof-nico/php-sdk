# OpenAPI\Client\ApprovalRequestsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getApprovalRequests()**](ApprovalRequestsApi.md#getApprovalRequests) | **GET** /approval_requests | Search |
| [**getApprovalRequestsId()**](ApprovalRequestsApi.md#getApprovalRequestsId) | **GET** /approval_requests/{approval_request_id} | Get |
| [**postApprovalRequests()**](ApprovalRequestsApi.md#postApprovalRequests) | **POST** /approval_requests | Create |
| [**postApprovalRequestsIdApprove()**](ApprovalRequestsApi.md#postApprovalRequestsIdApprove) | **POST** /approval_requests/{approval_request_id}/approve | Approve |
| [**postApprovalRequestsIdCancel()**](ApprovalRequestsApi.md#postApprovalRequestsIdCancel) | **POST** /approval_requests/{approval_request_id}/cancel | Cancel |
| [**postApprovalRequestsIdReject()**](ApprovalRequestsApi.md#postApprovalRequestsIdReject) | **POST** /approval_requests/{approval_request_id}/reject | Reject |


## `getApprovalRequests()`

```php
getApprovalRequests($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $id__in, $created_by, $object_id, $status, $user_id, $role_id): \OpenAPI\Client\Model\ApprovalRequestResourceList
```

Search

Get a list of approval requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalRequestsApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApprovalRequestCursorFields(); // \OpenAPI\Client\Model\ApprovalRequestCursorFields | Allowed sort fields
$id__in = array('id__in_example'); // string[]
$created_by = 'created_by_example'; // string
$object_id = 'object_id_example'; // string
$status = new \OpenAPI\Client\Model\ApprovalRequestStatus(); // ApprovalRequestStatus
$user_id = 'user_id_example'; // string
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->getApprovalRequests($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $id__in, $created_by, $object_id, $status, $user_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->getApprovalRequests: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\ApprovalRequestCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **id__in** | [**string[]**](../Model/string.md)|  | [optional] |
| **created_by** | **string**|  | [optional] |
| **object_id** | **string**|  | [optional] |
| **status** | [**ApprovalRequestStatus**](../Model/.md)|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **role_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApprovalRequestResourceList**](../Model/ApprovalRequestResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalRequestsId()`

```php
getApprovalRequestsId($x_monite_version, $approval_request_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata
```

Get

Get a specific approval request by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_request_id = 'approval_request_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getApprovalRequestsId($x_monite_version, $approval_request_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->getApprovalRequestsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_request_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata**](../Model/ApprovalRequestResourceWithMetadata.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApprovalRequests()`

```php
postApprovalRequests($x_monite_version, $x_monite_entity_id, $approval_request_create_request): \OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata
```

Create

Create a new approval request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$approval_request_create_request = new \OpenAPI\Client\Model\ApprovalRequestCreateRequest(); // \OpenAPI\Client\Model\ApprovalRequestCreateRequest

try {
    $result = $apiInstance->postApprovalRequests($x_monite_version, $x_monite_entity_id, $approval_request_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->postApprovalRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **approval_request_create_request** | [**\OpenAPI\Client\Model\ApprovalRequestCreateRequest**](../Model/ApprovalRequestCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata**](../Model/ApprovalRequestResourceWithMetadata.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApprovalRequestsIdApprove()`

```php
postApprovalRequestsIdApprove($x_monite_version, $approval_request_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata
```

Approve

Approve an approval request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_request_id = 'approval_request_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postApprovalRequestsIdApprove($x_monite_version, $approval_request_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->postApprovalRequestsIdApprove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_request_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata**](../Model/ApprovalRequestResourceWithMetadata.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApprovalRequestsIdCancel()`

```php
postApprovalRequestsIdCancel($x_monite_version, $approval_request_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata
```

Cancel

Cancel an approval request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_request_id = 'approval_request_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postApprovalRequestsIdCancel($x_monite_version, $approval_request_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->postApprovalRequestsIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_request_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata**](../Model/ApprovalRequestResourceWithMetadata.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApprovalRequestsIdReject()`

```php
postApprovalRequestsIdReject($x_monite_version, $approval_request_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata
```

Reject

Reject an approval request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_request_id = 'approval_request_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postApprovalRequestsIdReject($x_monite_version, $approval_request_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->postApprovalRequestsIdReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_request_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalRequestResourceWithMetadata**](../Model/ApprovalRequestResourceWithMetadata.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
