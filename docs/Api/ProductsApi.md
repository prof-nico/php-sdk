# OpenAPI\Client\ProductsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProductsId()**](ProductsApi.md#deleteProductsId) | **DELETE** /products/{product_id} | Delete Product By Id |
| [**getProducts()**](ProductsApi.md#getProducts) | **GET** /products | Get Products |
| [**getProductsId()**](ProductsApi.md#getProductsId) | **GET** /products/{product_id} | Get Product By Id |
| [**patchProductsId()**](ProductsApi.md#patchProductsId) | **PATCH** /products/{product_id} | Update Product By Id |
| [**postProducts()**](ProductsApi.md#postProducts) | **POST** /products | Create Product |


## `deleteProductsId()`

```php
deleteProductsId($x_monite_version, $product_id, $x_monite_entity_id)
```

Delete Product By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$product_id = 'product_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteProductsId($x_monite_version, $product_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **product_id** | **string**|  | |
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

## `getProducts()`

```php
getProducts($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $name, $name__contains, $name__icontains, $type, $price, $price__gt, $price__lt, $price__gte, $price__lte, $currency, $currency__in, $measure_unit_id, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte): \OpenAPI\Client\Model\ProductServicePaginationResponse
```

Get Products

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
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
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProductCursorFields(); // \OpenAPI\Client\Model\ProductCursorFields | Allowed sort fields
$name = 'name_example'; // string
$name__contains = 'name__contains_example'; // string
$name__icontains = 'name__icontains_example'; // string
$type = new \OpenAPI\Client\Model\ProductServiceTypeEnum(); // ProductServiceTypeEnum
$price = 56; // int
$price__gt = 56; // int
$price__lt = 56; // int
$price__gte = 56; // int
$price__lte = 56; // int
$currency = new \OpenAPI\Client\Model\CurrencyEnum(); // CurrencyEnum
$currency__in = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CurrencyEnum()); // \OpenAPI\Client\Model\CurrencyEnum[]
$measure_unit_id = 'measure_unit_id_example'; // string
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getProducts($x_monite_version, $x_monite_entity_id, $order, $limit, $pagination_token, $sort, $name, $name__contains, $name__icontains, $type, $price, $price__gt, $price__lt, $price__gte, $price__lte, $currency, $currency__in, $measure_unit_id, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
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
| **sort** | [**\OpenAPI\Client\Model\ProductCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **name** | **string**|  | [optional] |
| **name__contains** | **string**|  | [optional] |
| **name__icontains** | **string**|  | [optional] |
| **type** | [**ProductServiceTypeEnum**](../Model/.md)|  | [optional] |
| **price** | **int**|  | [optional] |
| **price__gt** | **int**|  | [optional] |
| **price__lt** | **int**|  | [optional] |
| **price__gte** | **int**|  | [optional] |
| **price__lte** | **int**|  | [optional] |
| **currency** | [**CurrencyEnum**](../Model/.md)|  | [optional] |
| **currency__in** | [**\OpenAPI\Client\Model\CurrencyEnum[]**](../Model/\OpenAPI\Client\Model\CurrencyEnum.md)|  | [optional] |
| **measure_unit_id** | **string**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductServicePaginationResponse**](../Model/ProductServicePaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductsId()`

```php
getProductsId($x_monite_version, $product_id, $x_monite_entity_id): \OpenAPI\Client\Model\ProductServiceResponse
```

Get Product By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$product_id = 'product_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getProductsId($x_monite_version, $product_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **product_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\ProductServiceResponse**](../Model/ProductServiceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProductsId()`

```php
patchProductsId($x_monite_version, $product_id, $x_monite_entity_id, $product_service_update): \OpenAPI\Client\Model\ProductServiceResponse
```

Update Product By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$product_id = 'product_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$product_service_update = new \OpenAPI\Client\Model\ProductServiceUpdate(); // \OpenAPI\Client\Model\ProductServiceUpdate

try {
    $result = $apiInstance->patchProductsId($x_monite_version, $product_id, $x_monite_entity_id, $product_service_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->patchProductsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **product_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **product_service_update** | [**\OpenAPI\Client\Model\ProductServiceUpdate**](../Model/ProductServiceUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductServiceResponse**](../Model/ProductServiceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProducts()`

```php
postProducts($x_monite_version, $x_monite_entity_id, $product_service_request): \OpenAPI\Client\Model\ProductServiceResponse
```

Create Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$product_service_request = new \OpenAPI\Client\Model\ProductServiceRequest(); // \OpenAPI\Client\Model\ProductServiceRequest

try {
    $result = $apiInstance->postProducts($x_monite_version, $x_monite_entity_id, $product_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->postProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **product_service_request** | [**\OpenAPI\Client\Model\ProductServiceRequest**](../Model/ProductServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductServiceResponse**](../Model/ProductServiceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
