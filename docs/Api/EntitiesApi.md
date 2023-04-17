# OpenAPI\Client\EntitiesApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEntities()**](EntitiesApi.md#getEntities) | **GET** /entities | Get all entities |
| [**getEntitiesId()**](EntitiesApi.md#getEntitiesId) | **GET** /entities/{entity_id} | Get an entity |
| [**getEntitiesIdPartnerMetadata()**](EntitiesApi.md#getEntitiesIdPartnerMetadata) | **GET** /entities/{entity_id}/partner_metadata | Get entity metadata |
| [**getEntitiesIdSettings()**](EntitiesApi.md#getEntitiesIdSettings) | **GET** /entities/{entity_id}/settings | Get entity settings |
| [**patchEntitiesId()**](EntitiesApi.md#patchEntitiesId) | **PATCH** /entities/{entity_id} | Update an entity |
| [**patchEntitiesIdSettings()**](EntitiesApi.md#patchEntitiesIdSettings) | **PATCH** /entities/{entity_id}/settings | Update entity settings |
| [**postEntities()**](EntitiesApi.md#postEntities) | **POST** /entities | Create an entity |
| [**putEntitiesIdLogo()**](EntitiesApi.md#putEntitiesIdLogo) | **PUT** /entities/{entity_id}/logo | Upload an entity logo |
| [**putEntitiesIdPartnerMetadata()**](EntitiesApi.md#putEntitiesIdPartnerMetadata) | **PUT** /entities/{entity_id}/partner_metadata | Replace entity metadata |


## `getEntities()`

```php
getEntities($x_monite_version, $order, $limit, $pagination_token, $sort, $type, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\EntityPaginationResponse
```

Get all entities

Retrieve a list of all entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EntityCursorFields(); // \OpenAPI\Client\Model\EntityCursorFields | Allowed sort fields
$type = new \OpenAPI\Client\Model\EntityTypeEnum(); // EntityTypeEnum
$created_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getEntities($x_monite_version, $order, $limit, $pagination_token, $sort, $type, $created_at, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\EntityCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **type** | [**EntityTypeEnum**](../Model/.md)|  | [optional] |
| **created_at** | **\DateTime**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EntityPaginationResponse**](../Model/EntityPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntitiesId()`

```php
getEntitiesId($x_monite_version, $entity_id): \OpenAPI\Client\Model\EntityResponse2
```

Get an entity

Retrieve an entity by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->getEntitiesId($x_monite_version, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->getEntitiesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\EntityResponse2**](../Model/EntityResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntitiesIdPartnerMetadata()`

```php
getEntitiesIdPartnerMetadata($x_monite_version, $entity_id): \OpenAPI\Client\Model\PartnerMetadataResponse
```

Get entity metadata

Retrieve a metadata object associated with this entity, usually in a JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->getEntitiesIdPartnerMetadata($x_monite_version, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->getEntitiesIdPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |

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

## `getEntitiesIdSettings()`

```php
getEntitiesIdSettings($x_monite_version, $entity_id): \OpenAPI\Client\Model\SettingsResponse
```

Get entity settings

Retrieve all settings for this entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = ea837e28-509b-4b6a-a600-d54b6aa0b1f5; // string | A unique ID to specify the entity.

try {
    $result = $apiInstance->getEntitiesIdSettings($x_monite_version, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->getEntitiesIdSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**| A unique ID to specify the entity. | |

### Return type

[**\OpenAPI\Client\Model\SettingsResponse**](../Model/SettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEntitiesId()`

```php
patchEntitiesId($x_monite_version, $entity_id, $update_entity_request2): \OpenAPI\Client\Model\EntityResponse2
```

Update an entity

Change the specified fields with the provided values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string
$update_entity_request2 = new \OpenAPI\Client\Model\UpdateEntityRequest2(); // \OpenAPI\Client\Model\UpdateEntityRequest2

try {
    $result = $apiInstance->patchEntitiesId($x_monite_version, $entity_id, $update_entity_request2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->patchEntitiesId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |
| **update_entity_request2** | [**\OpenAPI\Client\Model\UpdateEntityRequest2**](../Model/UpdateEntityRequest2.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityResponse2**](../Model/EntityResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEntitiesIdSettings()`

```php
patchEntitiesIdSettings($x_monite_version, $entity_id, $patch_settings_payload): \OpenAPI\Client\Model\SettingsResponse
```

Update entity settings

Change the specified fields with the provided values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = ea837e28-509b-4b6a-a600-d54b6aa0b1f5; // string | A unique ID to specify the entity.
$patch_settings_payload = new \OpenAPI\Client\Model\PatchSettingsPayload(); // \OpenAPI\Client\Model\PatchSettingsPayload

try {
    $result = $apiInstance->patchEntitiesIdSettings($x_monite_version, $entity_id, $patch_settings_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->patchEntitiesIdSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**| A unique ID to specify the entity. | |
| **patch_settings_payload** | [**\OpenAPI\Client\Model\PatchSettingsPayload**](../Model/PatchSettingsPayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SettingsResponse**](../Model/SettingsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEntities()`

```php
postEntities($x_monite_version, $create_entity_request): \OpenAPI\Client\Model\EntityResponse2
```

Create an entity

Create a new entity from the specified values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$create_entity_request = new \OpenAPI\Client\Model\CreateEntityRequest(); // \OpenAPI\Client\Model\CreateEntityRequest

try {
    $result = $apiInstance->postEntities($x_monite_version, $create_entity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->postEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **create_entity_request** | [**\OpenAPI\Client\Model\CreateEntityRequest**](../Model/CreateEntityRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntityResponse2**](../Model/EntityResponse2.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEntitiesIdLogo()`

```php
putEntitiesIdLogo($x_monite_version, $entity_id, $file): \OpenAPI\Client\Model\FileSchema
```

Upload an entity logo

Entity logo can be PNG, JPG, or GIF, up to 10 MB in size. The logo is used, for example, in PDF documents created by this entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->putEntitiesIdLogo($x_monite_version, $entity_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->putEntitiesIdLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\FileSchema**](../Model/FileSchema.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEntitiesIdPartnerMetadata()`

```php
putEntitiesIdPartnerMetadata($x_monite_version, $entity_id, $partner_metadata): \OpenAPI\Client\Model\PartnerMetadataResponse
```

Replace entity metadata

Fully replace the current metadata object with the specified instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string
$partner_metadata = new \OpenAPI\Client\Model\PartnerMetadata(); // \OpenAPI\Client\Model\PartnerMetadata

try {
    $result = $apiInstance->putEntitiesIdPartnerMetadata($x_monite_version, $entity_id, $partner_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->putEntitiesIdPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |
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
