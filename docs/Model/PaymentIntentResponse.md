# # PaymentIntentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payer** | [**\OpenAPI\Client\Model\AccountResponse**](AccountResponse.md) |  | [optional]
**recipient** | [**\OpenAPI\Client\Model\RecipientAccountResponse**](RecipientAccountResponse.md) |  |
**id** | **string** |  |
**status** | **string** |  |
**amount** | **int** |  |
**payment_methods** | [**\OpenAPI\Client\Model\MoniteAllPaymentMethodsTypes[]**](MoniteAllPaymentMethodsTypes.md) |  |
**selected_payment_method** | [**\OpenAPI\Client\Model\MoniteAllPaymentMethodsTypes**](MoniteAllPaymentMethodsTypes.md) |  | [optional]
**payment_link_id** | **string** |  |
**currency** | **string** |  |
**payment_reference** | **string** |  | [optional]
**provider** | **string** |  | [optional]
**application_fee_amount** | **int** |  | [optional]
**invoice** | [**\OpenAPI\Client\Model\Invoice**](Invoice.md) |  | [optional]
**object** | [**\OpenAPI\Client\Model\PaymentObject**](PaymentObject.md) |  | [optional]
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
