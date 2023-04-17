# # PurchaseOrderResponseSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**counterpart_id** | **string** | Counterpart unique ID. |
**valid_for_days** | **int** | Number of days for which purchase order is valid |
**items** | [**\OpenAPI\Client\Model\PurchaseOrderItem[]**](PurchaseOrderItem.md) | List of item to purchase |
**message** | **string** | Msg which will be send to counterpart for who the purchase order is issued. |
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**id** | **string** | A unique ID assigned to this purchase order. |
**created_at** | **\DateTime** | Time at which the receivable was created. Timestamps follow the ISO 8601 standard. |
**updated_at** | **\DateTime** | Time at which the receivable was last updated. Timestamps follow the ISO 8601 standard. |
**counterpart** | [**\OpenAPI\Client\Model\PurchaseOrderResponseSchemaCounterpart**](PurchaseOrderResponseSchemaCounterpart.md) |  |
**issued_at** | **\DateTime** | When status changed from &#39;draft&#39; to &#39;send&#39;, so after sending purchase order | [optional]
**entity_id** | **string** | The ID of the entity which issued the purchase order. |
**entity** | [**\OpenAPI\Client\Model\PurchaseOrderResponseSchemaEntity**](PurchaseOrderResponseSchemaEntity.md) |  |
**created_by_user_id** | **string** | ID of the creator of the purchase order | [optional]
**status** | **string** | Purchase order can be in &#39;draft&#39; state before sending it to counterpart. After that state is &#39;issued&#39; |
**document_id** | **string** |  |
**file_url** | **string** |  | [optional]
**file_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
