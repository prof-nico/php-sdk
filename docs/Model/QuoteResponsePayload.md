# # QuoteResponsePayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the document uploaded. |
**expiry_date** | **\DateTime** | The date (in ISO 8601 format) until which the quote is valid. | [optional]
**quote_accept_page_url** | **string** | Link for custom quote accept page | [optional]
**id** | **string** |  |
**created_at** | **\DateTime** | Time at which the receivable was created. Timestamps follow the ISO 8601 standard. |
**updated_at** | **\DateTime** | Time at which the receivable was last updated. Timestamps follow the ISO 8601 standard. |
**document_id** | **string** | The sequential code systematically assigned to invoices. | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  |
**subtotal** | **int** | The subtotal (excluding VAT), in [minor units](https://docs.monite.com/docs/currencies#minor-units). | [optional]
**line_items** | [**\OpenAPI\Client\Model\ResponseItem[]**](ResponseItem.md) |  |
**entity_address** | [**\OpenAPI\Client\Model\EntityAddressSchema**](EntityAddressSchema.md) |  |
**entity** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadEntity**](CreditNoteResponsePayloadEntity.md) |  |
**entity_user_id** | **string** | The entity user who created this document. | [optional]
**counterpart_id** | **string** | Unique ID of the counterpart. |
**counterpart_tax_id** | **string** | The VAT/TAX ID of the counterpart. | [optional]
**counterpart_type** | [**\OpenAPI\Client\Model\CounterpartType**](CounterpartType.md) |  |
**counterpart_address** | [**\OpenAPI\Client\Model\CounterpartAddress**](CounterpartAddress.md) |  |
**counterpart_contact** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartContact**](CreditNoteResponsePayloadCounterpartContact.md) |  | [optional]
**counterpart_name** | **string** | A legal name of a counterpart it is an organization | [optional]
**file_url** | **string** |  | [optional]
**file** | [**\OpenAPI\Client\Model\FileSchema**](FileSchema.md) |  | [optional]
**commercial_condition_description** | **string** | The commercial terms of the receivable (e.g. The products must be delivered in X days). | [optional]
**total_amount** | **int** | Total price of the receivable in [minor units](https://docs.monite.com/docs/currencies#minor-units). Calculated as a subtotal + total_vat_amount. | [optional] [default to 0]
**total_vat_amount** | **int** | The total VAT of all line items, in [minor units](https://docs.monite.com/docs/currencies#minor-units). |
**entity_bank_account** | [**\OpenAPI\Client\Model\EntityBankAccountRequest**](EntityBankAccountRequest.md) |  | [optional]
**vat_exempt** | **bool** | Indicates whether the goods, materials, or services listed in the receivable are exempt from VAT or not. | [optional]
**vat_exemption_rationale** | **string** | The reason for the VAT exemption, if applicable. | [optional]
**based_on** | **string** | The unique ID of a previous document related to the receivable if applicable. | [optional]
**based_on_document_id** | **string** | The unique document ID of a previous document related to the receivable if applicable. | [optional]
**memo** | **string** | A note with additional information for a receivable. | [optional]
**issue_date** | **\DateTime** | Optional field for the issue of the entry. | [optional]
**counterpart_shipping_address** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartShippingAddress**](CreditNoteResponsePayloadCounterpartShippingAddress.md) |  | [optional]
**counterpart_billing_address** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadCounterpartBillingAddress**](CreditNoteResponsePayloadCounterpartBillingAddress.md) |  | [optional]
**counterpart_business_type** | **string** | Different types of companies for different countries, ex. GmbH, SAS, SNC, etc. | [optional]
**discount** | [**\OpenAPI\Client\Model\CreditNoteResponsePayloadDiscount**](CreditNoteResponsePayloadDiscount.md) |  | [optional]
**discounted_subtotal** | **int** | Total price of the receivable with discounts before taxes [minor units](https://docs.monite.com/docs/currencies#minor-units). | [optional]
**total_vat_amounts** | [**\OpenAPI\Client\Model\TotalVatAmountItem[]**](TotalVatAmountItem.md) | List of total vat amount for each VAT, presented in receivable | [optional]
**comment** | **string** | Field with a comment on why the client declined this Quote | [optional]
**status** | [**\OpenAPI\Client\Model\QuoteStateEnum**](QuoteStateEnum.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
