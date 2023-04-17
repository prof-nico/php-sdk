# # OCRResponseInvoiceReceiptData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Total in cents/eurocents | [optional]
**currency** | **string** | ISO 4217 currency code | [optional]
**counterpart_name** | **string** | Counterpart name | [optional]
**counterpart_address** | **string** | Counterpart address | [optional]
**counterpart_account_id** | **string** | Counterpart bank ID | [optional]
**document_id** | **string** | Invoice/receipt ID | [optional]
**payment_terms** | **string** | Payment terms | [optional]
**tax_payer_id** | **string** | Tax payer ID (aka VAT ID) | [optional]
**document_issued_at_date** | **string** | Document issuance date in ISO format | [optional]
**document_due_date** | **string** | Document due date in ISO format | [optional]
**counterpart_address_object** | [**\OpenAPI\Client\Model\OCRResponseInvoiceReceiptDataCounterpartAddressObject**](OCRResponseInvoiceReceiptDataCounterpartAddressObject.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\OCRResponseInvoiceReceiptLineItem[]**](OCRResponseInvoiceReceiptLineItem.md) | List of line items from documen | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
