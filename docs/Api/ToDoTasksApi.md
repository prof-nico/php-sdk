# OpenAPI\Client\ToDoTasksApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllTodoTasksAssignedV1TodoTasksGet()**](ToDoTasksApi.md#getAllTodoTasksAssignedV1TodoTasksGet) | **GET** /todo_tasks | Get All Todo Tasks Assigned |
| [**howManyTasksDoIHaveV1TodoTasksCountersGet()**](ToDoTasksApi.md#howManyTasksDoIHaveV1TodoTasksCountersGet) | **GET** /todo_tasks/counters | How Many Tasks Do I Have |
| [**readOneTodoTaskV1TodoTasksTodoTaskIdGet()**](ToDoTasksApi.md#readOneTodoTaskV1TodoTasksTodoTaskIdGet) | **GET** /todo_tasks/{todo_task_id} | Read One Todo Task |
| [**updateTaskV1TodoTasksTodoTaskIdPatch()**](ToDoTasksApi.md#updateTaskV1TodoTasksTodoTaskIdPatch) | **PATCH** /todo_tasks/{todo_task_id} | Update Task |


## `getAllTodoTasksAssignedV1TodoTasksGet()`

```php
getAllTodoTasksAssignedV1TodoTasksGet($x_monite_version, $include_related_object_information, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $object_id, $object_id__isnull, $status): \OpenAPI\Client\Model\PaginatedTodoTask
```

Get All Todo Tasks Assigned

Get all assigned todo tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ToDoTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$include_related_object_information = True; // bool
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum2(); // \OpenAPI\Client\Model\OrderEnum2 | Sort order: `asc` (ascending) or `desc` (descending).
$limit = 100; // int | The maximum number of results to return per page.
$pagination_token = 'pagination_token_example'; // string | The pagination token to access the next or previous page of results. If `pagination_token` is specified, the `sort`, `order`, and filtering parameters are ignored.
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TodoCursorFields(); // \OpenAPI\Client\Model\TodoCursorFields | The field by which the results will be sorted.
$object_type = new \OpenAPI\Client\Model\ObjectType(); // ObjectType
$object_id = 'object_id_example'; // string
$object_id__isnull = 'object_id__isnull_example'; // string
$status = new \OpenAPI\Client\Model\TodoTaskStatusEnum(); // TodoTaskStatusEnum

try {
    $result = $apiInstance->getAllTodoTasksAssignedV1TodoTasksGet($x_monite_version, $include_related_object_information, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $object_type, $object_id, $object_id__isnull, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToDoTasksApi->getAllTodoTasksAssignedV1TodoTasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **include_related_object_information** | **bool**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum2**](../Model/.md)| Sort order: &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). | [optional] |
| **limit** | **int**| The maximum number of results to return per page. | [optional] [default to 100] |
| **pagination_token** | **string**| The pagination token to access the next or previous page of results. If &#x60;pagination_token&#x60; is specified, the &#x60;sort&#x60;, &#x60;order&#x60;, and filtering parameters are ignored. | [optional] |
| **sort** | [**\OpenAPI\Client\Model\TodoCursorFields**](../Model/.md)| The field by which the results will be sorted. | [optional] |
| **object_type** | [**ObjectType**](../Model/.md)|  | [optional] |
| **object_id** | **string**|  | [optional] |
| **object_id__isnull** | **string**|  | [optional] |
| **status** | [**TodoTaskStatusEnum**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedTodoTask**](../Model/PaginatedTodoTask.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `howManyTasksDoIHaveV1TodoTasksCountersGet()`

```php
howManyTasksDoIHaveV1TodoTasksCountersGet($x_monite_version, $x_monite_entity_id): \OpenAPI\Client\Model\TasksCountSchema[]
```

How Many Tasks Do I Have

Tasks count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ToDoTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->howManyTasksDoIHaveV1TodoTasksCountersGet($x_monite_version, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToDoTasksApi->howManyTasksDoIHaveV1TodoTasksCountersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\TasksCountSchema[]**](../Model/TasksCountSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readOneTodoTaskV1TodoTasksTodoTaskIdGet()`

```php
readOneTodoTaskV1TodoTasksTodoTaskIdGet($x_monite_version, $todo_task_id, $x_monite_entity_id): \OpenAPI\Client\Model\TodoTask
```

Read One Todo Task

Read one todo task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ToDoTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$todo_task_id = 'todo_task_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->readOneTodoTaskV1TodoTasksTodoTaskIdGet($x_monite_version, $todo_task_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToDoTasksApi->readOneTodoTaskV1TodoTasksTodoTaskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **todo_task_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\TodoTask**](../Model/TodoTask.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaskV1TodoTasksTodoTaskIdPatch()`

```php
updateTaskV1TodoTasksTodoTaskIdPatch($x_monite_version, $todo_task_id, $x_monite_entity_id, $update_todo_task): \OpenAPI\Client\Model\TodoTask
```

Update Task

Update todo task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ToDoTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$todo_task_id = 'todo_task_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_todo_task = new \OpenAPI\Client\Model\UpdateTodoTask(); // \OpenAPI\Client\Model\UpdateTodoTask

try {
    $result = $apiInstance->updateTaskV1TodoTasksTodoTaskIdPatch($x_monite_version, $todo_task_id, $x_monite_entity_id, $update_todo_task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToDoTasksApi->updateTaskV1TodoTasksTodoTaskIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **todo_task_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_todo_task** | [**\OpenAPI\Client\Model\UpdateTodoTask**](../Model/UpdateTodoTask.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TodoTask**](../Model/TodoTask.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
