# OpenAPI\Client\RolesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRoles()**](RolesApi.md#getRoles) | **GET** /roles | Get all roles |
| [**getRolesId()**](RolesApi.md#getRolesId) | **GET** /roles/{role_id} | Get a role |
| [**patchRolesId()**](RolesApi.md#patchRolesId) | **PATCH** /roles/{role_id} | Update a role |
| [**postRoles()**](RolesApi.md#postRoles) | **POST** /roles | Create a role |
| [**postRolesSearch()**](RolesApi.md#postRolesSearch) | **POST** /roles/search | Roles lookup |


## `getRoles()`

```php
getRoles($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $name, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\RolePaginationResponse
```

Get all roles

Retrieve a list of all roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RoleCursorFields(); // \OpenAPI\Client\Model\RoleCursorFields | Allowed sort fields
$name = 'name_example'; // string
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getRoles($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $name, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoles: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\RoleCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **name** | **string**|  | [optional] |
| **created_at** | **\DateTime**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RolePaginationResponse**](../Model/RolePaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRolesId()`

```php
getRolesId($x_monite_version, $role_id, $x_monite_entity_id): \OpenAPI\Client\Model\RoleResponse2
```

Get a role

Retrieve a role by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$role_id = 'role_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getRolesId($x_monite_version, $role_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRolesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **role_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\RoleResponse2**](../Model/RoleResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRolesId()`

```php
patchRolesId($x_monite_version, $role_id, $x_monite_entity_id, $update_role_request): \OpenAPI\Client\Model\RoleResponse2
```

Update a role

Change the specified fields with the provided values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$role_id = 'role_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_role_request = new \OpenAPI\Client\Model\UpdateRoleRequest(); // \OpenAPI\Client\Model\UpdateRoleRequest

try {
    $result = $apiInstance->patchRolesId($x_monite_version, $role_id, $x_monite_entity_id, $update_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->patchRolesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **role_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_role_request** | [**\OpenAPI\Client\Model\UpdateRoleRequest**](../Model/UpdateRoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleResponse2**](../Model/RoleResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRoles()`

```php
postRoles($x_monite_version, $x_monite_entity_id, $create_role_request): \OpenAPI\Client\Model\RoleResponse2
```

Create a role

Create a new role from the specified values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_role_request = new \OpenAPI\Client\Model\CreateRoleRequest(); // \OpenAPI\Client\Model\CreateRoleRequest

try {
    $result = $apiInstance->postRoles($x_monite_version, $x_monite_entity_id, $create_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_role_request** | [**\OpenAPI\Client\Model\CreateRoleRequest**](../Model/CreateRoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleResponse2**](../Model/RoleResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRolesSearch()`

```php
postRolesSearch($x_monite_version, $search_roles_payload): \OpenAPI\Client\Model\RoleResponse2[]
```

Roles lookup

Look up all roles meeting the search criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$search_roles_payload = new \OpenAPI\Client\Model\SearchRolesPayload(); // \OpenAPI\Client\Model\SearchRolesPayload

try {
    $result = $apiInstance->postRolesSearch($x_monite_version, $search_roles_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postRolesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **search_roles_payload** | [**\OpenAPI\Client\Model\SearchRolesPayload**](../Model/SearchRolesPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleResponse2[]**](../Model/RoleResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
