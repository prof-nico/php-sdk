# OpenAPI\Client\OnboardingLinksApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postPaymentOnboardingLinks()**](OnboardingLinksApi.md#postPaymentOnboardingLinks) | **POST** /payment_onboarding_links | Create Onboarding Link |


## `postPaymentOnboardingLinks()`

```php
postPaymentOnboardingLinks($x_monite_version, $x_monite_entity_id, $create_onboarding_link_request): \OpenAPI\Client\Model\OnboardingLinkResponse
```

Create Onboarding Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OnboardingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.
$create_onboarding_link_request = new \OpenAPI\Client\Model\CreateOnboardingLinkRequest(); // \OpenAPI\Client\Model\CreateOnboardingLinkRequest

try {
    $result = $apiInstance->postPaymentOnboardingLinks($x_monite_version, $x_monite_entity_id, $create_onboarding_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingLinksApi->postPaymentOnboardingLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **x_monite_entity_id** | **string**| The ID of the entity that owns the requested resource. | |
| **create_onboarding_link_request** | [**\OpenAPI\Client\Model\CreateOnboardingLinkRequest**](../Model/CreateOnboardingLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OnboardingLinkResponse**](../Model/OnboardingLinkResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
