# # CounterpartBankAccountResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iban** | **string** | required for non-GB bank accounts | [optional]
**bic** | **string** |  | [optional]
**name** | **string** |  | [optional]
**account_holder_name** | **string** |  | [optional]
**account_number** | **string** | required for non-GB bank accounts | [optional]
**sort_code** | **string** |  | [optional]
**routing_number** | **string** |  | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**country** | [**\OpenAPI\Client\Model\AllowedCountriesCodes**](AllowedCountriesCodes.md) |  |
**is_default** | **bool** |  | [optional] [default to false]
**id** | **string** |  |
**counterpart_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
