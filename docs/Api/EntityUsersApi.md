# OpenAPI\Client\EntityUsersApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEntityUsers()**](EntityUsersApi.md#getEntityUsers) | **GET** /entity_users | Get all entity users |
| [**getEntityUsersId()**](EntityUsersApi.md#getEntityUsersId) | **GET** /entity_users/{entity_user_id} | Get an entity user |
| [**patchEntityUsersId()**](EntityUsersApi.md#patchEntityUsersId) | **PATCH** /entity_users/{entity_user_id} | Update an entity user |
| [**postEntityUsers()**](EntityUsersApi.md#postEntityUsers) | **POST** /entity_users | Create an entity user |


## `getEntityUsers()`

```php
getEntityUsers($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $first_name, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\EntityUserPaginationResponse
```

Get all entity users

Retrieve a list of all entity users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityUsersApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EntityUserCursorFields(); // \OpenAPI\Client\Model\EntityUserCursorFields | Allowed sort fields
$first_name = 'first_name_example'; // string
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getEntityUsers($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $first_name, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityUsersApi->getEntityUsers: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\EntityUserCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **first_name** | **string**|  | [optional] |
| **created_at** | **\DateTime**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EntityUserPaginationResponse**](../Model/EntityUserPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntityUsersId()`

```php
getEntityUsersId($x_monite_version, $entity_user_id, $x_monite_entity_id): \OpenAPI\Client\Model\EntityUserResponse3
```

Get an entity user

Retrieve an entity user by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_user_id = 'entity_user_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getEntityUsersId($x_monite_version, $entity_user_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityUsersApi->getEntityUsersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_user_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\EntityUserResponse3**](../Model/EntityUserResponse3.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEntityUsersId()`

```php
patchEntityUsersId($x_monite_version, $entity_user_id, $x_monite_entity_id, $update_entity_user_request2): \OpenAPI\Client\Model\EntityUserResponse3
```

Update an entity user

Change the specified fields with provided values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_user_id = 'entity_user_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$update_entity_user_request2 = new \OpenAPI\Client\Model\UpdateEntityUserRequest2(); // \OpenAPI\Client\Model\UpdateEntityUserRequest2

try {
    $result = $apiInstance->patchEntityUsersId($x_monite_version, $entity_user_id, $x_monite_entity_id, $update_entity_user_request2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityUsersApi->patchEntityUsersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_user_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **update_entity_user_request2** | [**\OpenAPI\Client\Model\UpdateEntityUserRequest2**](../Model/UpdateEntityUserRequest2.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityUserResponse3**](../Model/EntityUserResponse3.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEntityUsers()`

```php
postEntityUsers($x_monite_version, $x_monite_entity_id, $create_entity_user_request): \OpenAPI\Client\Model\EntityUserResponse3
```

Create an entity user

Create a new entity user from the specified values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_entity_user_request = new \OpenAPI\Client\Model\CreateEntityUserRequest(); // \OpenAPI\Client\Model\CreateEntityUserRequest

try {
    $result = $apiInstance->postEntityUsers($x_monite_version, $x_monite_entity_id, $create_entity_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityUsersApi->postEntityUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_entity_user_request** | [**\OpenAPI\Client\Model\CreateEntityUserRequest**](../Model/CreateEntityUserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityUserResponse3**](../Model/EntityUserResponse3.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
