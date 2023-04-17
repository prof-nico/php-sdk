# # CreateEntityBankAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iban** | **string** | The IBAN of the entity’s bank account. | [optional]
**bic** | **string** | The BIC of the entity’s bank account. | [optional]
**bank_name** | **string** | The name of the entity’s bank account. | [optional]
**display_name** | **string** |  | [optional]
**is_default** | **bool** | Marks if a bank account should be used by default. Only 1 can be True | [optional] [default to false]
**account_holder_name** | **string** | Account holder&#39;s name | [optional]
**account_number** | **string** | Account number (required if IBAN is not provided) | [optional]
**routing_number** | **string** | Routing number (US) | [optional]
**sort_code** | **string** | Sort code (GB) | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**country** | [**\OpenAPI\Client\Model\AllowedCountriesCodes**](AllowedCountriesCodes.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
