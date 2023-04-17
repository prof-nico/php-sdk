# OpenAPI\Client\PayablesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPayables()**](PayablesApi.md#getPayables) | **GET** /payables | Get Payables |
| [**getPayablesId()**](PayablesApi.md#getPayablesId) | **GET** /payables/{payable_id} | Get Payable By Id |
| [**getPayablesIdApprovalStatus()**](PayablesApi.md#getPayablesIdApprovalStatus) | **GET** /payables/{payable_id}/approval_status | Get Approval Status Of Payable By Id |
| [**getPayablesIdPartnerMetadata()**](PayablesApi.md#getPayablesIdPartnerMetadata) | **GET** /payables/{payable_id}/partner_metadata | Get Partner Metadata |
| [**getPayablesIdWorkflow()**](PayablesApi.md#getPayablesIdWorkflow) | **GET** /payables/{payable_id}/workflow | Get Workflow By Active Pipeline |
| [**getPayablesPendingActions()**](PayablesApi.md#getPayablesPendingActions) | **GET** /payables/pending_actions | Get Pending Actions |
| [**patchPayablesId()**](PayablesApi.md#patchPayablesId) | **PATCH** /payables/{payable_id} | Update Payable By Id |
| [**postPayables()**](PayablesApi.md#postPayables) | **POST** /payables | Upload New Payable |
| [**postPayablesIdApprovePaymentOperation()**](PayablesApi.md#postPayablesIdApprovePaymentOperation) | **POST** /payables/{payable_id}/approve_payment_operation | Confirm Payment |
| [**postPayablesIdCancel()**](PayablesApi.md#postPayablesIdCancel) | **POST** /payables/{payable_id}/cancel | Cancel Payable |
| [**postPayablesIdMarkAsPaid()**](PayablesApi.md#postPayablesIdMarkAsPaid) | **POST** /payables/{payable_id}/mark_as_paid | Mark Payable As Paid |
| [**postPayablesIdReject()**](PayablesApi.md#postPayablesIdReject) | **POST** /payables/{payable_id}/reject | Reject Payable |
| [**postPayablesIdSubmitForApproval()**](PayablesApi.md#postPayablesIdSubmitForApproval) | **POST** /payables/{payable_id}/submit_for_approval | Submit For Approval |
| [**postPayablesUploadFromFile()**](PayablesApi.md#postPayablesUploadFromFile) | **POST** /payables/upload_from_file | Upload Payable From File |
| [**postPayablesUploadWithData()**](PayablesApi.md#postPayablesUploadWithData) | **POST** /payables/upload_with_data | Create a payable |
| [**putPayablesIdPartnerMetadata()**](PayablesApi.md#putPayablesIdPartnerMetadata) | **PUT** /payables/{payable_id}/partner_metadata | Put Partner Metadata |


## `getPayables()`

```php
getPayables($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $status, $status__in, $id__in, $amount, $amount__gt, $amount__lt, $amount__gte, $amount__lte, $currency, $counterpart_name, $due_date, $due_date__gt, $due_date__lt, $due_date__gte, $due_date__lte, $document_id, $was_created_by_user_id): \OpenAPI\Client\Model\PayablePaginationResponse
```

Get Payables

Lists all payables from the connected entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PayableCursorFields(); // \OpenAPI\Client\Model\PayableCursorFields | Allowed sort fields
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$status = new \OpenAPI\Client\Model\PayableStateEnum(); // PayableStateEnum
$status__in = array('status__in_example'); // string[]
$id__in = array('id__in_example'); // string[]
$amount = 56; // int
$amount__gt = 56; // int
$amount__lt = 56; // int
$amount__gte = 56; // int
$amount__lte = 56; // int
$currency = new \OpenAPI\Client\Model\CurrencyEnum(); // CurrencyEnum
$counterpart_name = 'counterpart_name_example'; // string
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$due_date__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$due_date__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$due_date__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$due_date__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$document_id = 'document_id_example'; // string
$was_created_by_user_id = 'was_created_by_user_id_example'; // string

try {
    $result = $apiInstance->getPayables($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $status, $status__in, $id__in, $amount, $amount__gt, $amount__lt, $amount__gte, $amount__lte, $currency, $counterpart_name, $due_date, $due_date__gt, $due_date__lt, $due_date__gte, $due_date__lte, $document_id, $was_created_by_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPayables: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\PayableCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |
| **status** | [**PayableStateEnum**](../Model/.md)|  | [optional] |
| **status__in** | [**string[]**](../Model/string.md)|  | [optional] |
| **id__in** | [**string[]**](../Model/string.md)|  | [optional] |
| **amount** | **int**|  | [optional] |
| **amount__gt** | **int**|  | [optional] |
| **amount__lt** | **int**|  | [optional] |
| **amount__gte** | **int**|  | [optional] |
| **amount__lte** | **int**|  | [optional] |
| **currency** | [**CurrencyEnum**](../Model/.md)|  | [optional] |
| **counterpart_name** | **string**|  | [optional] |
| **due_date** | **\DateTime**|  | [optional] |
| **due_date__gt** | **\DateTime**|  | [optional] |
| **due_date__lt** | **\DateTime**|  | [optional] |
| **due_date__gte** | **\DateTime**|  | [optional] |
| **due_date__lte** | **\DateTime**|  | [optional] |
| **document_id** | **string**|  | [optional] |
| **was_created_by_user_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayablePaginationResponse**](../Model/PayablePaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablesId()`

```php
getPayablesId($x_monite_version, $payable_id, $x_monite_entity_id, $activate_workflows): \OpenAPI\Client\Model\PayableResponseSchema
```

Get Payable By Id

Retrieves information about a specific payable with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$activate_workflows = false; // bool

try {
    $result = $apiInstance->getPayablesId($x_monite_version, $payable_id, $x_monite_entity_id, $activate_workflows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPayablesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **activate_workflows** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablesIdApprovalStatus()`

```php
getPayablesIdApprovalStatus($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\WorkflowPipelineApprovals
```

Get Approval Status Of Payable By Id

Get approvals status of the payable by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPayablesIdApprovalStatus($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPayablesIdApprovalStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\WorkflowPipelineApprovals**](../Model/WorkflowPipelineApprovals.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablesIdPartnerMetadata()`

```php
getPayablesIdPartnerMetadata($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\PartnerMetadataResponse
```

Get Partner Metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPayablesIdPartnerMetadata($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPayablesIdPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PartnerMetadataResponse**](../Model/PartnerMetadataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayablesIdWorkflow()`

```php
getPayablesIdWorkflow($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\WorkflowResponseSchema
```

Get Workflow By Active Pipeline

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getPayablesIdWorkflow($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPayablesIdWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
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

## `getPayablesPendingActions()`

```php
getPayablesPendingActions($x_monite_version, $x_monite_entity_id, $action_type): \OpenAPI\Client\Model\PayablePendingActionResponse
```

Get Pending Actions

Get next best actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$action_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PayablePendingActionEnum(); // \OpenAPI\Client\Model\PayablePendingActionEnum | Action for pending invoice.

try {
    $result = $apiInstance->getPayablesPendingActions($x_monite_version, $x_monite_entity_id, $action_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->getPayablesPendingActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **action_type** | [**\OpenAPI\Client\Model\PayablePendingActionEnum**](../Model/.md)| Action for pending invoice. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayablePendingActionResponse**](../Model/PayablePendingActionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPayablesId()`

```php
patchPayablesId($x_monite_version, $payable_id, $x_monite_entity_id, $payable_update_schema): \OpenAPI\Client\Model\PayableResponseSchema
```

Update Payable By Id

Updates the information about a specific payable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$payable_update_schema = new \OpenAPI\Client\Model\PayableUpdateSchema(); // \OpenAPI\Client\Model\PayableUpdateSchema

try {
    $result = $apiInstance->patchPayablesId($x_monite_version, $payable_id, $x_monite_entity_id, $payable_update_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->patchPayablesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **payable_update_schema** | [**\OpenAPI\Client\Model\PayableUpdateSchema**](../Model/PayableUpdateSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayables()`

```php
postPayables($x_monite_version, $x_monite_entity_id, $file): \OpenAPI\Client\Model\PayableResponseSchema
```

Upload New Payable

Uploads an incoming invoice (payable) in PDF, PNG, JPG, or GIF format. The max file size is 10MB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->postPayables($x_monite_version, $x_monite_entity_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesIdApprovePaymentOperation()`

```php
postPayablesIdApprovePaymentOperation($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\PayableResponseSchema
```

Confirm Payment

Confirms that the payable is ready to be paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postPayablesIdApprovePaymentOperation($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesIdApprovePaymentOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesIdCancel()`

```php
postPayablesIdCancel($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\PayableResponseSchema
```

Cancel Payable

Cancels the payable that was not confirmed during the review.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postPayablesIdCancel($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesIdCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesIdMarkAsPaid()`

```php
postPayablesIdMarkAsPaid($x_monite_version, $payable_id, $x_monite_entity_id, $comment_payload): \OpenAPI\Client\Model\PayableResponseSchema
```

Mark Payable As Paid

Converts the specified payable status into paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$comment_payload = new \OpenAPI\Client\Model\CommentPayload(); // \OpenAPI\Client\Model\CommentPayload

try {
    $result = $apiInstance->postPayablesIdMarkAsPaid($x_monite_version, $payable_id, $x_monite_entity_id, $comment_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesIdMarkAsPaid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **comment_payload** | [**\OpenAPI\Client\Model\CommentPayload**](../Model/CommentPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesIdReject()`

```php
postPayablesIdReject($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\PayableResponseSchema
```

Reject Payable

Declines the payable when an approver finds any mismatch or discrepancies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postPayablesIdReject($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesIdReject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesIdSubmitForApproval()`

```php
postPayablesIdSubmitForApproval($x_monite_version, $payable_id, $x_monite_entity_id): \OpenAPI\Client\Model\PayableResponseSchema
```

Submit For Approval

Starts the approval process once the uploaded payable is validated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->postPayablesIdSubmitForApproval($x_monite_version, $payable_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesIdSubmitForApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesUploadFromFile()`

```php
postPayablesUploadFromFile($x_monite_version, $x_monite_entity_id, $file): \OpenAPI\Client\Model\PayableResponseSchema
```

Upload Payable From File

Upload an incoming invoice (payable) in PDF, PNG, JPG, or GIF format and scan its contents. The maximum file size is 10MB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->postPayablesUploadFromFile($x_monite_version, $x_monite_entity_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesUploadFromFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayablesUploadWithData()`

```php
postPayablesUploadWithData($x_monite_version, $x_monite_entity_id, $payable_upload_with_data_schema): \OpenAPI\Client\Model\PayableResponseSchema
```

Create a payable

Add a new payable by providing the amount, currency, vendor name, and other details. You can provide the base64_encoded contents of the original invoice file in the field `base64_encoded_file`.  You can use this endpoint to bypass the Monite OCR service and provide the data directly (for example, if you already have the data in place).  A newly created payable has the the `draft` [status](https://docs.monite.com/docs/payables-lifecycle).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$payable_upload_with_data_schema = new \OpenAPI\Client\Model\PayableUploadWithDataSchema(); // \OpenAPI\Client\Model\PayableUploadWithDataSchema

try {
    $result = $apiInstance->postPayablesUploadWithData($x_monite_version, $x_monite_entity_id, $payable_upload_with_data_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->postPayablesUploadWithData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **payable_upload_with_data_schema** | [**\OpenAPI\Client\Model\PayableUploadWithDataSchema**](../Model/PayableUploadWithDataSchema.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PayableResponseSchema**](../Model/PayableResponseSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPayablesIdPartnerMetadata()`

```php
putPayablesIdPartnerMetadata($x_monite_version, $payable_id, $x_monite_entity_id, $partner_metadata): \OpenAPI\Client\Model\PartnerMetadataResponse
```

Put Partner Metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$payable_id = 'payable_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$partner_metadata = new \OpenAPI\Client\Model\PartnerMetadata(); // \OpenAPI\Client\Model\PartnerMetadata

try {
    $result = $apiInstance->putPayablesIdPartnerMetadata($x_monite_version, $payable_id, $x_monite_entity_id, $partner_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayablesApi->putPayablesIdPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **payable_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **partner_metadata** | [**\OpenAPI\Client\Model\PartnerMetadata**](../Model/PartnerMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PartnerMetadataResponse**](../Model/PartnerMetadataResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
