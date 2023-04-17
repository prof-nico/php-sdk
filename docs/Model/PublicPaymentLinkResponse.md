# # PublicPaymentLinkResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payer** | [**\OpenAPI\Client\Model\AccountResponse**](AccountResponse.md) |  | [optional]
**recipient** | [**\OpenAPI\Client\Model\RecipientAccountResponse**](RecipientAccountResponse.md) |  |
**id** | **string** |  |
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**status** | **string** |  |
**payment_reference** | **string** |  | [optional]
**amount** | **int** |  |
**payment_methods** | **string[]** |  |
**return_url** | **string** |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\Invoice**](Invoice.md) |  | [optional]
**expires_at** | **\DateTime** |  |
**payment_page_url** | **string** |  |
**payment_intent** | [**\OpenAPI\Client\Model\PaymentIntent**](PaymentIntent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
