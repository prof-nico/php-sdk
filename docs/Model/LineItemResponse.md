# # LineItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the product. | [optional]
**description** | **string** | Description of the product. | [optional]
**quantity** | **float** | The quantity of each of the goods, materials, or services listed in the payable. | [optional]
**total** | **int** | The actual price of the product. | [optional]
**tax** | **int** | VAT rate in percent [minor units](https://docs.monite.com/docs/currencies#minor-units). Example: 12.5% is 1250. | [optional]
**subtotal** | **int** | The subtotal (excluding VAT), in [minor units](https://docs.monite.com/docs/currencies#minor-units). | [optional]
**ledger_account_id** | **string** | ID of the account record used to store bookkeeping entries for balance-sheet and income-statement transactions. | [optional]
**id** | **string** |  |
**tax_account_id** | **string** | ID of the tax rate ref account which stores the tax for the specified type of products. | [optional]
**was_created_by_user_id** | **string** | ID of the user who created the tag. | [optional]
**payable_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
