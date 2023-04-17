# # UpdateIssuedInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memo** | **string** | A note with additional information for a receivable | [optional]
**entity_address** | [**\OpenAPI\Client\Model\EntityAddressSchema**](EntityAddressSchema.md) |  | [optional]
**entity** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadEntity**](CreditNoteResponsePayloadEntity.md) |  | [optional]
**counterpart_id** | **string** | Id of a new or updated counterpart | [optional]
**contact_id** | **string** | Unique ID of the counterpart contact. | [optional]
**fulfillment_date** | **\DateTime** | The date when the goods are shipped or the service is provided.  If omitted, defaults to the invoice issue date, and the value is automatically set when the invoice status changes to &#x60;issued&#x60;. | [optional]
**payment_terms_id** | **string** |  | [optional]
**payment_reminder_id** | **string** |  | [optional]
**overdue_reminder_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
