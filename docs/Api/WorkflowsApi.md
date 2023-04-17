# OpenAPI\Client\WorkflowsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewWorkflowV1WorkflowsPost()**](WorkflowsApi.md#createNewWorkflowV1WorkflowsPost) | **POST** /workflows | Create New Workflow |
| [**deleteWorkflowV1WorkflowsWorkflowIdDelete()**](WorkflowsApi.md#deleteWorkflowV1WorkflowsWorkflowIdDelete) | **DELETE** /workflows/{workflow_id} | Delete Workflow |
| [**getPipelinesV1WorkflowsPipelinesGet()**](WorkflowsApi.md#getPipelinesV1WorkflowsPipelinesGet) | **GET** /workflows/pipelines | Get Pipelines |
| [**getSinglePipelineV1WorkflowsPipelinesPipelineIdGet()**](WorkflowsApi.md#getSinglePipelineV1WorkflowsPipelinesPipelineIdGet) | **GET** /workflows/pipelines/{pipeline_id} | Get Single Pipeline |
| [**readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet()**](WorkflowsApi.md#readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet) | **GET** /workflows/{workflow_id}/pipelines | Read Pipelines By Workflow Id |
| [**readSingleWorkflowV1WorkflowsWorkflowIdGet()**](WorkflowsApi.md#readSingleWorkflowV1WorkflowsWorkflowIdGet) | **GET** /workflows/{workflow_id} | Read Single Workflow |
| [**readWorkflowsV1WorkflowsGet()**](WorkflowsApi.md#readWorkflowsV1WorkflowsGet) | **GET** /workflows | Read Workflows |


## `createNewWorkflowV1WorkflowsPost()`

```php
createNewWorkflowV1WorkflowsPost($x_monite_version, $x_monite_entity_id, $create_workflow_schema): \OpenAPI\Client\Model\WorkflowResponseSchema
```

Create New Workflow

Create new workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_workflow_schema = {"policy_name":"Approve everything","policy_description":"All newly added payables require a finance manager's approval","workflow":{"trigger":{"version":1,"object_type":"payable","action":"create","currency":"EUR"},"functions":[{"call":{"method":"Payables.request_approval_by_entity_user","params":{"entity_user_ids":["5f3196d2-48ce-4c1e-b29e-c3e5d1fb7a13"]}}}]}}; // \OpenAPI\Client\Model\CreateWorkflowSchema

try {
    $result = $apiInstance->createNewWorkflowV1WorkflowsPost($x_monite_version, $x_monite_entity_id, $create_workflow_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->createNewWorkflowV1WorkflowsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_workflow_schema** | [**\OpenAPI\Client\Model\CreateWorkflowSchema**](../Model/CreateWorkflowSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponseSchema**](../Model/WorkflowResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkflowV1WorkflowsWorkflowIdDelete()`

```php
deleteWorkflowV1WorkflowsWorkflowIdDelete($x_monite_version, $workflow_id, $x_monite_entity_id)
```

Delete Workflow

Delete workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$workflow_id = 'workflow_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteWorkflowV1WorkflowsWorkflowIdDelete($x_monite_version, $workflow_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->deleteWorkflowV1WorkflowsWorkflowIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **workflow_id** | **string**|  | |
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

## `getPipelinesV1WorkflowsPipelinesGet()`

```php
getPipelinesV1WorkflowsPipelinesGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $status, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\PipelinesPaginationResponse
```

Get Pipelines

Get pipelines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PipelineCursorFields(); // \OpenAPI\Client\Model\PipelineCursorFields | The field by which the results will be sorted.
$object_type = new \OpenAPI\Client\Model\ObjectType(); // ObjectType
$status = new \OpenAPI\Client\Model\WorkflowPipelineStatusEnum(); // WorkflowPipelineStatusEnum
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getPipelinesV1WorkflowsPipelinesGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $status, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getPipelinesV1WorkflowsPipelinesGet: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\PipelineCursorFields**](../Model/.md)| The field by which the results will be sorted. | [optional] |
| **object_type** | [**ObjectType**](../Model/.md)|  | [optional] |
| **status** | [**WorkflowPipelineStatusEnum**](../Model/.md)|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PipelinesPaginationResponse**](../Model/PipelinesPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSinglePipelineV1WorkflowsPipelinesPipelineIdGet()`

```php
getSinglePipelineV1WorkflowsPipelinesPipelineIdGet($x_monite_version, $pipeline_id, $x_monite_entity_id): \OpenAPI\Client\Model\PipelineResponseSchema
```

Get Single Pipeline

Get pipeline

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$pipeline_id = 'pipeline_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getSinglePipelineV1WorkflowsPipelinesPipelineIdGet($x_monite_version, $pipeline_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->getSinglePipelineV1WorkflowsPipelinesPipelineIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **pipeline_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PipelineResponseSchema**](../Model/PipelineResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet()`

```php
readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet($x_monite_version, $workflow_id, $x_monite_entity_id): \OpenAPI\Client\Model\PipelineResponseSchema[]
```

Read Pipelines By Workflow Id

Get pipelines by workflow ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$workflow_id = 'workflow_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet($x_monite_version, $workflow_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **workflow_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PipelineResponseSchema[]**](../Model/PipelineResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSingleWorkflowV1WorkflowsWorkflowIdGet()`

```php
readSingleWorkflowV1WorkflowsWorkflowIdGet($x_monite_version, $workflow_id, $x_monite_entity_id): \OpenAPI\Client\Model\WorkflowResponseSchema
```

Read Single Workflow

Get workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$workflow_id = 'workflow_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->readSingleWorkflowV1WorkflowsWorkflowIdGet($x_monite_version, $workflow_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->readSingleWorkflowV1WorkflowsWorkflowIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **workflow_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowResponseSchema**](../Model/WorkflowResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readWorkflowsV1WorkflowsGet()`

```php
readWorkflowsV1WorkflowsGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $action, $policy_name, $policy_name__contains, $policy_name__icontains, $created_by, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $updated_at, $updated_at__gt, $updated_at__lt, $updated_at__gte, $updated_at__lte): \OpenAPI\Client\Model\WorkflowsPaginationResponse
```

Read Workflows

Get workflows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkflowsApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\WorkflowCursorFields(); // \OpenAPI\Client\Model\WorkflowCursorFields | The field by which the results will be sorted.
$object_type = new \OpenAPI\Client\Model\ObjectType(); // ObjectType
$action = new \OpenAPI\Client\Model\ActionEnum(); // ActionEnum
$policy_name = 'policy_name_example'; // string
$policy_name__contains = 'policy_name__contains_example'; // string
$policy_name__icontains = 'policy_name__icontains_example'; // string
$created_by = 'created_by_example'; // string
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->readWorkflowsV1WorkflowsGet($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $action, $policy_name, $policy_name__contains, $policy_name__icontains, $created_by, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $updated_at, $updated_at__gt, $updated_at__lt, $updated_at__gte, $updated_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowsApi->readWorkflowsV1WorkflowsGet: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\WorkflowCursorFields**](../Model/.md)| The field by which the results will be sorted. | [optional] |
| **object_type** | [**ObjectType**](../Model/.md)|  | [optional] |
| **action** | [**ActionEnum**](../Model/.md)|  | [optional] |
| **policy_name** | **string**|  | [optional] |
| **policy_name__contains** | **string**|  | [optional] |
| **policy_name__icontains** | **string**|  | [optional] |
| **created_by** | **string**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |
| **updated_at** | **\DateTime**|  | [optional] |
| **updated_at__gt** | **\DateTime**|  | [optional] |
| **updated_at__lt** | **\DateTime**|  | [optional] |
| **updated_at__gte** | **\DateTime**|  | [optional] |
| **updated_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WorkflowsPaginationResponse**](../Model/WorkflowsPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
