# OpenAPI\Client\OnboardingRequirementsApi

All URIs are relative to https://api.sandbox.monite.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEntitiesIdOnboardingRequirements()**](OnboardingRequirementsApi.md#getEntitiesIdOnboardingRequirements) | **GET** /entities/{entity_id}/onboarding_requirements | Get Onboarding Requirements |
| [**patchEntitiesIdOnboardingRequirements()**](OnboardingRequirementsApi.md#patchEntitiesIdOnboardingRequirements) | **PATCH** /entities/{entity_id}/onboarding_requirements | Update Onboarding Requirements |


## `getEntitiesIdOnboardingRequirements()`

```php
getEntitiesIdOnboardingRequirements($x_monite_version, $entity_id): \OpenAPI\Client\Model\OnboardingRequirementsResponse
```

Get Onboarding Requirements

Get onboarding requirements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OnboardingRequirementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string

try {
    $result = $apiInstance->getEntitiesIdOnboardingRequirements($x_monite_version, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingRequirementsApi->getEntitiesIdOnboardingRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OnboardingRequirementsResponse**](../Model/OnboardingRequirementsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEntitiesIdOnboardingRequirements()`

```php
patchEntitiesIdOnboardingRequirements($x_monite_version, $entity_id, $tos_acceptance, $verification_document_front, $verification_document_back, $additional_verification_document_front, $additional_verification_document_back, $bank_account_ownership_verification, $company_license, $company_memorandum_of_association, $company_ministerial_decree, $company_registration_verification, $company_tax_id_verification, $proof_of_registration): \OpenAPI\Client\Model\OnboardingRequirementsResponse
```

Update Onboarding Requirements

Update onboarding requirements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OnboardingRequirementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$entity_id = 'entity_id_example'; // string
$tos_acceptance = new \OpenAPI\Client\Model\TosAcceptance(); // \OpenAPI\Client\Model\TosAcceptance
$verification_document_front = "/path/to/file.txt"; // \SplFileObject
$verification_document_back = "/path/to/file.txt"; // \SplFileObject
$additional_verification_document_front = "/path/to/file.txt"; // \SplFileObject
$additional_verification_document_back = "/path/to/file.txt"; // \SplFileObject
$bank_account_ownership_verification = array("/path/to/file.txt"); // \SplFileObject[]
$company_license = array("/path/to/file.txt"); // \SplFileObject[]
$company_memorandum_of_association = array("/path/to/file.txt"); // \SplFileObject[]
$company_ministerial_decree = array("/path/to/file.txt"); // \SplFileObject[]
$company_registration_verification = array("/path/to/file.txt"); // \SplFileObject[]
$company_tax_id_verification = array("/path/to/file.txt"); // \SplFileObject[]
$proof_of_registration = array("/path/to/file.txt"); // \SplFileObject[]

try {
    $result = $apiInstance->patchEntitiesIdOnboardingRequirements($x_monite_version, $entity_id, $tos_acceptance, $verification_document_front, $verification_document_back, $additional_verification_document_front, $additional_verification_document_back, $bank_account_ownership_verification, $company_license, $company_memorandum_of_association, $company_ministerial_decree, $company_registration_verification, $company_tax_id_verification, $proof_of_registration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingRequirementsApi->patchEntitiesIdOnboardingRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_monite_version** | **\DateTime**|  | |
| **entity_id** | **string**|  | |
| **tos_acceptance** | [**\OpenAPI\Client\Model\TosAcceptance**](../Model/TosAcceptance.md)|  | [optional] |
| **verification_document_front** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **verification_document_back** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **additional_verification_document_front** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **additional_verification_document_back** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **bank_account_ownership_verification** | **\SplFileObject[]**|  | [optional] |
| **company_license** | **\SplFileObject[]**|  | [optional] |
| **company_memorandum_of_association** | **\SplFileObject[]**|  | [optional] |
| **company_ministerial_decree** | **\SplFileObject[]**|  | [optional] |
| **company_registration_verification** | **\SplFileObject[]**|  | [optional] |
| **company_tax_id_verification** | **\SplFileObject[]**|  | [optional] |
| **proof_of_registration** | **\SplFileObject[]**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OnboardingRequirementsResponse**](../Model/OnboardingRequirementsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
