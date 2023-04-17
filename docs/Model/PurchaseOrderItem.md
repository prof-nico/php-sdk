# # PurchaseOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the product to purchase |
**quantity** | **int** | Number (quantity) of products |
**unit** | **string** | Units (hours, meters, unit) |
**price** | **int** | The subtotal cost (excluding VAT), in [minor units](https://docs.monite.com/docs/currencies#minor-units). |
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**vat_rate** | **int** | Percent minor units. Example: 12.5% is 1250 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
