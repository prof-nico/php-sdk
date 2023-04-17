# # ReceivableFacadeCreateInvoicePayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the document uploaded. |
**fulfillment_date** | **\DateTime** | The date when the goods are shipped or the service is provided.  If omitted, defaults to the invoice issue date, and the value is automatically set when the invoice status changes to &#x60;issued&#x60;. | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**line_items** | [**\OpenAPI\Client\Model\LineItem[]**](LineItem.md) |  |
**counterpart_id** | **string** |  |
**commercial_condition_description** | **string** |  | [optional]
**entity_bank_account** | [**\OpenAPI\Client\Model\EntityBankAccountRequest**](EntityBankAccountRequest.md) |  | [optional]
**vat_exempt** | **bool** |  | [optional]
**vat_exemption_rationale** | **string** |  | [optional]
**memo** | **string** | A note with additional information for a receivable | [optional]
**discount** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadDiscount**](CreditNoteResponsePayloadDiscount.md) |  | [optional]
**counterpart_shipping_address** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartShippingAddress**](CreditNoteResponsePayloadCounterpartShippingAddress.md) |  | [optional]
**counterpart_billing_address** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartBillingAddress**](CreditNoteResponsePayloadCounterpartBillingAddress.md) |  | [optional]
**counterpart_business_type** | **string** | Different types of companies for different countries, ex. GmbH, SAS, SNC, etc. | [optional]
**payment_terms_id** | **string** |  | [optional]
**payment_reminder_id** | **string** |  | [optional]
**overdue_reminder_id** | **string** |  | [optional]
**purchase_order** | **string** | Contain purchase order number. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
