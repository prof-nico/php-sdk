# # UpdateQuote

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
**payment_terms_id** | **string** | Unique ID of the payment terms. | [optional]
**expiry_date** | **\DateTime** | The date (in ISO 8601 format) until which the quote is valid. | [optional]
**quote_accept_page_url** | **string** | Link for custom quote accept page | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
