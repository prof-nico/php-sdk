# # UpdateInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  | [optional]
**vat_exempt** | **bool** |  | [optional]
**vat_exemption_rationale** | **string** |  | [optional]
**memo** | **string** | A note with additional information for a receivable | [optional]
**discount** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadDiscount**](CreditNoteResponsePayloadDiscount.md) |  | [optional]
**counterpart_shipping_address** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartShippingAddress**](CreditNoteResponsePayloadCounterpartShippingAddress.md) |  | [optional]
**counterpart_billing_address** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartBillingAddress**](CreditNoteResponsePayloadCounterpartBillingAddress.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\LineItemUpdate[]**](LineItemUpdate.md) |  | [optional]
**counterpart_id** | **string** | Unique ID of the counterpart. | [optional]
**contact_id** | **string** | Unique ID of the counterpart contact. | [optional]
**payment_terms_id** | **string** |  | [optional]
**payment_reminder_id** | **string** |  | [optional]
**overdue_reminder_id** | **string** |  | [optional]
**fulfillment_date** | **\DateTime** | The date when the goods are shipped or the service is provided.  If omitted, defaults to the invoice issue date, and the value is automatically set when the invoice status changes to &#x60;issued&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
