# # PayableResponseSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID assigned to this payable. |
**entity_id** | **string** | The ID of the entity to which the payable was issued. |
**marked_as_paid_with_comment** | **string** | An arbitrary comment that describes how and when this payable was paid. | [optional]
**marked_as_paid_by_entity_user_id** | **string** | The ID of the entity user who marked this document as paid. | [optional]
**status** | [**\OpenAPI\Client\Model\PayableStateEnum**](PayableStateEnum.md) |  |
**source_of_payable_data** | [**\OpenAPI\Client\Model\SourceOfPayableDataEnum**](SourceOfPayableDataEnum.md) |  |
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  | [optional]
**amount** | **int** | The total amount to be paid, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250. | [optional]
**description** | **string** | An arbitrary description of this payable. | [optional]
**due_date** | **\DateTime** | The date by which the payable must be paid, in the YYYY-MM-DD format. If the payable specifies payment terms with early payment discounts, this is the final payment date. | [optional]
**payment_terms** | [**\OpenAPI\Client\Model\PayableResponseSchemaPaymentTerms**](PayableResponseSchemaPaymentTerms.md) |  | [optional]
**suggested_payment_term** | [**\OpenAPI\Client\Model\PayableResponseSchemaSuggestedPaymentTerm**](PayableResponseSchemaSuggestedPaymentTerm.md) |  | [optional]
**issued_at** | **\DateTime** | The date when the payable was issued, in the YYYY-MM-DD format. | [optional]
**counterpart_bank_id** | **string** | SWIFT code (BIC) of the vendor&#39;s bank (if specified in the payable document). | [optional]
**counterpart_id** | **string** | The ID of the counterpart object that represents the vendor or supplier. | [optional]
**counterpart_account_id** | **string** | Vendor&#39;s bank account number, IBAN, or similar (if specified in the payable document). | [optional]
**counterpart_name** | **string** | Vendor or supplier name. | [optional]
**counterpart_tax_id** | **string** | The tax id of the counterpart. | [optional]
**counterpart_address** | [**\OpenAPI\Client\Model\PayableResponseSchemaCounterpartAddress**](PayableResponseSchemaCounterpartAddress.md) |  | [optional]
**payable_origin** | [**\OpenAPI\Client\Model\PayableOriginEnum**](PayableOriginEnum.md) |  |
**was_created_by_user_id** | **string** |  | [optional]
**was_created_by_external_user_name** | **string** |  | [optional]
**was_created_by_external_user_id** | **string** |  | [optional]
**currency_exchange** | [**\OpenAPI\Client\Model\CurrencyExchangeSchema**](CurrencyExchangeSchema.md) |  | [optional]
**file** | [**\OpenAPI\Client\Model\PayableResponseSchemaFile**](PayableResponseSchemaFile.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\TagReadSchema[]**](TagReadSchema.md) | A list of user-defined tags (labels) assigned to this payable. Tags can be used to trigger a specific approval policy for this payable. | [optional]
**created_at** | **\DateTime** | UTC date and time when this payable was created. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. |
**updated_at** | **\DateTime** | UTC date and time when this payable was last updated. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. |
**other_extracted_data** | [**\OpenAPI\Client\Model\PayableResponseSchemaOtherExtractedData**](PayableResponseSchemaOtherExtractedData.md) |  | [optional]
**applied_policy** | **string** | The name of an existing workflow (approval policy) that applies to this payable, if any. A workflow is applied if the payable matches the workflow trigger conditions. | [optional]
**document_id** | **string** | A unique invoice number assigned by the invoice issuer for payment tracking purposes. This is different from &#x60;id&#x60; which is an internal ID created automatically by Monite. | [optional]
**subtotal** | **int** | The subtotal amount to be paid, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250. | [optional]
**tax** | **int** | Registered tax applied for a service price, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250. | [optional]
**sender** | **string** | The email address from which the invoice was sent to the entity. | [optional]
**line_items** | [**\OpenAPI\Client\Model\LineItemDataResponse[]**](LineItemDataResponse.md) | The list of items present in the payable. | [optional]
**ocr_request_id** | **string** | Id of OCR request to match asynchronous result of processing payable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
