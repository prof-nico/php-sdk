# # PayableUploadWithDataSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  | [optional]
**amount** | **int** | The total amount to be paid, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250. | [optional]
**description** | **string** | An arbitrary description of this payable. | [optional]
**due_date** | **\DateTime** | The date by which the payable must be paid, in the YYYY-MM-DD format. If the payable specifies payment terms with early payment discounts, this is the final payment date. | [optional]
**payment_terms** | [**\OpenAPI\Client\Model\PayableResponseSchemaPaymentTerms**](PayableResponseSchemaPaymentTerms.md) |  | [optional]
**suggested_payment_term** | [**\OpenAPI\Client\Model\PayableResponseSchemaSuggestedPaymentTerm**](PayableResponseSchemaSuggestedPaymentTerm.md) |  | [optional]
**issued_at** | **\DateTime** | The date when the payable was issued, in the YYYY-MM-DD format. | [optional]
**counterpart_id** | **string** | UUID of the vendor or supplier in the system. | [optional]
**counterpart_bank_id** | **string** | SWIFT code (BIC) of the vendor&#39;s bank. | [optional]
**counterpart_account_id** | **string** | Vendor&#39;s bank account number, IBAN, or similar. | [optional]
**counterpart_name** | **string** | Vendor or supplier name. | [optional]
**counterpart_address** | [**\OpenAPI\Client\Model\PayableUpdateSchemaCounterpartAddress**](PayableUpdateSchemaCounterpartAddress.md) |  | [optional]
**counterpart_tax_id** | **string** | The tax id of the counterpart. | [optional]
**base64_encoded_file** | **string** | Base64-encoded contents of the original issued payable. The file is provided for reference purposes as the original source of the data.   Any file formats are allowed. The most common formats are PDF, PNG, JPG, GIF. | [optional]
**file_name** | **string** | The original file name. | [optional]
**tag_ids** | **string[]** | A list of IDs of user-defined tags (labels) assigned to this payable. Tags can be used to trigger a specific approval policy for this payable. | [optional]
**document_id** | **string** | A unique invoice number assigned by the invoice issuer for payment tracking purposes. | [optional]
**subtotal** | **int** | The subtotal amount to be paid, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250. | [optional]
**tax** | **int** | Registered tax applied for a service price, in [minor units](https://docs.monite.com/docs/currencies#minor-units). For example, $12.50 is represented as 1250. | [optional]
**sender** | **string** | The email address from which the invoice was sent to the entity. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
