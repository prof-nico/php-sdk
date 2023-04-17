# OpenAPI\Client\ApprovalPoliciesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApprovalPoliciesId()**](ApprovalPoliciesApi.md#deleteApprovalPoliciesId) | **DELETE** /approval_policies/{approval_policy_id} | Delete |
| [**getApprovalPolicies()**](ApprovalPoliciesApi.md#getApprovalPolicies) | **GET** /approval_policies | Search |
| [**getApprovalPoliciesId()**](ApprovalPoliciesApi.md#getApprovalPoliciesId) | **GET** /approval_policies/{approval_policy_id} | Get |
| [**getApprovalPoliciesIdProcesses()**](ApprovalPoliciesApi.md#getApprovalPoliciesIdProcesses) | **GET** /approval_policies/{approval_policy_id}/processes | Search Processes |
| [**getApprovalPoliciesIdProcessesId()**](ApprovalPoliciesApi.md#getApprovalPoliciesIdProcessesId) | **GET** /approval_policies/{approval_policy_id}/processes/{process_id} | Get Process |
| [**getApprovalPoliciesIdProcessesIdSteps()**](ApprovalPoliciesApi.md#getApprovalPoliciesIdProcessesIdSteps) | **GET** /approval_policies/{approval_policy_id}/processes/{process_id}/steps | Get Process Steps |
| [**patchApprovalPoliciesId()**](ApprovalPoliciesApi.md#patchApprovalPoliciesId) | **PATCH** /approval_policies/{approval_policy_id} | Update |
| [**postApprovalPolicies()**](ApprovalPoliciesApi.md#postApprovalPolicies) | **POST** /approval_policies | Create |
| [**postApprovalPoliciesIdProcessesIdCancel()**](ApprovalPoliciesApi.md#postApprovalPoliciesIdProcessesIdCancel) | **POST** /approval_policies/{approval_policy_id}/processes/{process_id}/cancel | Cancel Process |


## `deleteApprovalPoliciesId()`

```php
deleteApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id): mixed
```

Delete

Delete an existing approval policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->deleteApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->deleteApprovalPoliciesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
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

## `getApprovalPolicies()`

```php
getApprovalPolicies($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $status, $status__in, $name, $name__contains, $name__ncontains, $created_by, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $updated_at__gt, $updated_at__lt, $updated_at__gte, $updated_at__lte): \OpenAPI\Client\Model\ApprovalPolicyShortResourceList
```

Search

Retrieve a list of all approval policies with pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ApprovalPolicyCursorFields(); // \OpenAPI\Client\Model\ApprovalPolicyCursorFields | Allowed sort fields
$status = new \OpenAPI\Client\Model\ApprovalPolicyStatus(); // ApprovalPolicyStatus
$status__in = 'status__in_example'; // string
$name = 'name_example'; // string
$name__contains = 'name__contains_example'; // string
$name__ncontains = 'name__ncontains_example'; // string
$created_by = 'created_by_example'; // string
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getApprovalPolicies($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $status, $status__in, $name, $name__contains, $name__ncontains, $created_by, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $updated_at__gt, $updated_at__lt, $updated_at__gte, $updated_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->getApprovalPolicies: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\ApprovalPolicyCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **status** | [**ApprovalPolicyStatus**](../Model/.md)|  | [optional] |
| **status__in** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **name__contains** | **string**|  | [optional] |
| **name__ncontains** | **string**|  | [optional] |
| **created_by** | **string**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |
| **updated_at__gt** | **\DateTime**|  | [optional] |
| **updated_at__lt** | **\DateTime**|  | [optional] |
| **updated_at__gte** | **\DateTime**|  | [optional] |
| **updated_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApprovalPolicyShortResourceList**](../Model/ApprovalPolicyShortResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalPoliciesId()`

```php
getApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalPolicyResource
```

Get

Retrieve a specific approval policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->getApprovalPoliciesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalPolicyResource**](../Model/ApprovalPolicyResource.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalPoliciesIdProcesses()`

```php
getApprovalPoliciesIdProcesses($x_monite_version, $approval_policy_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalProcessResourceList
```

Search Processes

Retrieve a list of all approval policy processes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getApprovalPoliciesIdProcesses($x_monite_version, $approval_policy_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->getApprovalPoliciesIdProcesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalProcessResourceList**](../Model/ApprovalProcessResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalPoliciesIdProcessesId()`

```php
getApprovalPoliciesIdProcessesId($x_monite_version, $approval_policy_id, $process_id, $x_monite_entity_id): \OpenAPI\Client\Model\ProcessResource
```

Get Process

Retrieve a specific approval policy process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$process_id = 'process_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getApprovalPoliciesIdProcessesId($x_monite_version, $approval_policy_id, $process_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->getApprovalPoliciesIdProcessesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
| **process_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ProcessResource**](../Model/ProcessResource.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalPoliciesIdProcessesIdSteps()`

```php
getApprovalPoliciesIdProcessesIdSteps($x_monite_version, $approval_policy_id, $process_id, $x_monite_entity_id): \OpenAPI\Client\Model\ApprovalProcessStepResourceList
```

Get Process Steps

Retrieve a list of approval policy process steps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$process_id = 'process_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getApprovalPoliciesIdProcessesIdSteps($x_monite_version, $approval_policy_id, $process_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->getApprovalPoliciesIdProcessesIdSteps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
| **process_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ApprovalProcessStepResourceList**](../Model/ApprovalProcessStepResourceList.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchApprovalPoliciesId()`

```php
patchApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id, $approval_policy_update): \OpenAPI\Client\Model\ApprovalPolicyResource
```

Update

Update an existing approval policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$approval_policy_update = new \OpenAPI\Client\Model\ApprovalPolicyUpdate(); // \OpenAPI\Client\Model\ApprovalPolicyUpdate

try {
    $result = $apiInstance->patchApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id, $approval_policy_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->patchApprovalPoliciesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **approval_policy_update** | [**\OpenAPI\Client\Model\ApprovalPolicyUpdate**](../Model/ApprovalPolicyUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApprovalPolicyResource**](../Model/ApprovalPolicyResource.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApprovalPolicies()`

```php
postApprovalPolicies($x_monite_version, $x_monite_entity_id, $approval_policy_create): \OpenAPI\Client\Model\ApprovalPolicyResource
```

Create

Create a new approval policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$approval_policy_create = new \OpenAPI\Client\Model\ApprovalPolicyCreate(); // \OpenAPI\Client\Model\ApprovalPolicyCreate

try {
    $result = $apiInstance->postApprovalPolicies($x_monite_version, $x_monite_entity_id, $approval_policy_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->postApprovalPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **approval_policy_create** | [**\OpenAPI\Client\Model\ApprovalPolicyCreate**](../Model/ApprovalPolicyCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApprovalPolicyResource**](../Model/ApprovalPolicyResource.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApprovalPoliciesIdProcessesIdCancel()`

```php
postApprovalPoliciesIdProcessesIdCancel($x_monite_version, $approval_policy_id, $process_id, $x_monite_entity_id): \OpenAPI\Client\Model\ProcessResource
```

Cancel Process

Cancel an ongoing approval process for a specific approval policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$process_id = 'process_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postApprovalPoliciesIdProcessesIdCancel($x_monite_version, $approval_policy_id, $process_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->postApprovalPoliciesIdProcessesIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **approval_policy_id** | **string**|  | |
| **process_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ProcessResource**](../Model/ProcessResource.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
