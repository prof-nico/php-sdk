# # UpdatePurchaseOrderPayloadSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**counterpart_id** | **string** | Counterpart unique ID. | [optional]
**valid_for_days** | **int** | Number of days for which purchase order is valid | [optional]
**items** | [**\OpenAPI\Client\Model\PurchaseOrderItem[]**](PurchaseOrderItem.md) | List of item to purchase | [optional]
**message** | **string** | Msg which will be send to counterpart for who the purchase order is issued. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
