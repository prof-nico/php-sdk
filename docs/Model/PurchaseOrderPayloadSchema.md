# # PurchaseOrderPayloadSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**counterpart_id** | **string** | Counterpart unique ID. |
**valid_for_days** | **int** | Number of days for which purchase order is valid |
**items** | [**\OpenAPI\Client\Model\PurchaseOrderItem[]**](PurchaseOrderItem.md) | List of item to purchase |
**message** | **string** | Msg which will be send to counterpart for who the purchase order is issued. |
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
