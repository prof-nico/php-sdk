# OpenAPI\Client\CounterpartsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCounterpartsId()**](CounterpartsApi.md#deleteCounterpartsId) | **DELETE** /counterparts/{counterpart_id} | Delete Counterpart By Id |
| [**getCounterparts()**](CounterpartsApi.md#getCounterparts) | **GET** /counterparts | Get Counterparts |
| [**getCounterpartsId()**](CounterpartsApi.md#getCounterpartsId) | **GET** /counterparts/{counterpart_id} | Get Counterpart By Id |
| [**getCounterpartsIdPartnerMetadata()**](CounterpartsApi.md#getCounterpartsIdPartnerMetadata) | **GET** /counterparts/{counterpart_id}/partner_metadata | Get Partner Metadata |
| [**patchCounterpartsId()**](CounterpartsApi.md#patchCounterpartsId) | **PATCH** /counterparts/{counterpart_id} | Update Counterpart |
| [**postCounterparts()**](CounterpartsApi.md#postCounterparts) | **POST** /counterparts | Create New Counterpart |
| [**putCounterpartsIdPartnerMetadata()**](CounterpartsApi.md#putCounterpartsIdPartnerMetadata) | **PUT** /counterparts/{counterpart_id}/partner_metadata | Put Partner Metadata |


## `deleteCounterpartsId()`

```php
deleteCounterpartsId($x_monite_version, $counterpart_id, $x_monite_entity_id)
```

Delete Counterpart By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $apiInstance->deleteCounterpartsId($x_monite_version, $counterpart_id, $x_monite_entity_id);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->deleteCounterpartsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
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

## `getCounterparts()`

```php
getCounterparts($x_monite_version, $x_monite_entity_id, $iban, $tax_id, $order, $limit, $pagination_token, $sort, $type, $counterpart_name, $counterpart_name__iexact, $counterpart_name__contains, $counterpart_name__icontains, $is_vendor, $is_customer, $email, $email__contains, $email__icontains, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $address_country, $address_city, $address_postal_code, $address_state, $address_line1, $address_line2): \OpenAPI\Client\Model\CounterpartPaginationResponse
```

Get Counterparts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$iban = 'iban_example'; // string | The IBAN of the entity’s bank account.
$tax_id = 'tax_id_example'; // string | The tax id of the counterpart.
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderEnum(); // \OpenAPI\Client\Model\OrderEnum | Order by
$limit = 100; // int | Max is 100
$pagination_token = 'pagination_token_example'; // string | A token, obtained from previous page. Prior over other filters
$sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CounterpartCursorFields(); // \OpenAPI\Client\Model\CounterpartCursorFields | Allowed sort fields
$type = new \OpenAPI\Client\Model\CounterpartType(); // CounterpartType
$counterpart_name = 'counterpart_name_example'; // string
$counterpart_name__iexact = 'counterpart_name__iexact_example'; // string
$counterpart_name__contains = 'counterpart_name__contains_example'; // string
$counterpart_name__icontains = 'counterpart_name__icontains_example'; // string
$is_vendor = True; // bool
$is_customer = True; // bool
$email = 'email_example'; // string
$email__contains = 'email__contains_example'; // string
$email__icontains = 'email__icontains_example'; // string
$created_at__gt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_at__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$address_country = 'address_country_example'; // string
$address_city = 'address_city_example'; // string
$address_postal_code = 'address_postal_code_example'; // string
$address_state = 'address_state_example'; // string
$address_line1 = 'address_line1_example'; // string
$address_line2 = 'address_line2_example'; // string

try {
    $result = $apiInstance->getCounterparts($x_monite_version, $x_monite_entity_id, $iban, $tax_id, $order, $limit, $pagination_token, $sort, $type, $counterpart_name, $counterpart_name__iexact, $counterpart_name__contains, $counterpart_name__icontains, $is_vendor, $is_customer, $email, $email__contains, $email__icontains, $created_at__gt, $created_at__lt, $created_at__gte, $created_at__lte, $address_country, $address_city, $address_postal_code, $address_state, $address_line1, $address_line2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->getCounterparts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **iban** | **string**| The IBAN of the entity’s bank account. | [optional] |
| **tax_id** | **string**| The tax id of the counterpart. | [optional] |
| **order** | [**\OpenAPI\Client\Model\OrderEnum**](../Model/.md)| Order by | [optional] |
| **limit** | **int**| Max is 100 | [optional] [default to 100] |
| **pagination_token** | **string**| A token, obtained from previous page. Prior over other filters | [optional] |
| **sort** | [**\OpenAPI\Client\Model\CounterpartCursorFields**](../Model/.md)| Allowed sort fields | [optional] |
| **type** | [**CounterpartType**](../Model/.md)|  | [optional] |
| **counterpart_name** | **string**|  | [optional] |
| **counterpart_name__iexact** | **string**|  | [optional] |
| **counterpart_name__contains** | **string**|  | [optional] |
| **counterpart_name__icontains** | **string**|  | [optional] |
| **is_vendor** | **bool**|  | [optional] |
| **is_customer** | **bool**|  | [optional] |
| **email** | **string**|  | [optional] |
| **email__contains** | **string**|  | [optional] |
| **email__icontains** | **string**|  | [optional] |
| **created_at__gt** | **\DateTime**|  | [optional] |
| **created_at__lt** | **\DateTime**|  | [optional] |
| **created_at__gte** | **\DateTime**|  | [optional] |
| **created_at__lte** | **\DateTime**|  | [optional] |
| **address_country** | **string**|  | [optional] |
| **address_city** | **string**|  | [optional] |
| **address_postal_code** | **string**|  | [optional] |
| **address_state** | **string**|  | [optional] |
| **address_line1** | **string**|  | [optional] |
| **address_line2** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CounterpartPaginationResponse**](../Model/CounterpartPaginationResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartsId()`

```php
getCounterpartsId($x_monite_version, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\CounterpartResponse
```

Get Counterpart By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsId($x_monite_version, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->getCounterpartsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |

### Return type

[**\OpenAPI\Client\Model\CounterpartResponse**](../Model/CounterpartResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartsIdPartnerMetadata()`

```php
getCounterpartsIdPartnerMetadata($x_monite_version, $counterpart_id, $x_monite_entity_id): \OpenAPI\Client\Model\PartnerMetadataResponse
```

Get Partner Metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->getCounterpartsIdPartnerMetadata($x_monite_version, $counterpart_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->getCounterpartsIdPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
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

## `patchCounterpartsId()`

```php
patchCounterpartsId($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_update_payload): \OpenAPI\Client\Model\CounterpartResponse
```

Update Counterpart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_update_payload = new \OpenAPI\Client\Model\CounterpartUpdatePayload(); // \OpenAPI\Client\Model\CounterpartUpdatePayload

try {
    $result = $apiInstance->patchCounterpartsId($x_monite_version, $counterpart_id, $x_monite_entity_id, $counterpart_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->patchCounterpartsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_update_payload** | [**\OpenAPI\Client\Model\CounterpartUpdatePayload**](../Model/CounterpartUpdatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartResponse**](../Model/CounterpartResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCounterparts()`

```php
postCounterparts($x_monite_version, $x_monite_entity_id, $counterpart_create_payload): \OpenAPI\Client\Model\CounterpartResponse
```

Create New Counterpart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$counterpart_create_payload = new \OpenAPI\Client\Model\CounterpartCreatePayload(); // \OpenAPI\Client\Model\CounterpartCreatePayload

try {
    $result = $apiInstance->postCounterparts($x_monite_version, $x_monite_entity_id, $counterpart_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->postCounterparts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **counterpart_create_payload** | [**\OpenAPI\Client\Model\CounterpartCreatePayload**](../Model/CounterpartCreatePayload.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CounterpartResponse**](../Model/CounterpartResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCounterpartsIdPartnerMetadata()`

```php
putCounterpartsIdPartnerMetadata($x_monite_version, $counterpart_id, $x_monite_entity_id, $partner_metadata): \OpenAPI\Client\Model\PartnerMetadataResponse
```

Put Partner Metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CounterpartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$counterpart_id = 'counterpart_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$partner_metadata = new \OpenAPI\Client\Model\PartnerMetadata(); // \OpenAPI\Client\Model\PartnerMetadata

try {
    $result = $apiInstance->putCounterpartsIdPartnerMetadata($x_monite_version, $counterpart_id, $x_monite_entity_id, $partner_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartsApi->putCounterpartsIdPartnerMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **counterpart_id** | **string**|  | |
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
