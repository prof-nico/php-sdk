# # LabelNValueLabel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | The text as recognized by OCR. |
**confidence** | **float** | OCR confidence score - the estimated accuracy percentage of character recognition of the extracted text, from 0 to 100%. |
**processed_text** | **mixed** | If the &#x60;text&#x60; value is identified as a currency amount or a date, &#x60;processed_text&#x60; contains this value converted to a common format:  * Currency amounts (such as the total, subtotal, tax/VAT, line item prices) are converted to numbers with the currency character removed. For example, \&quot;€1,125.00\&quot; becomes 1125.0.* Dates are converted to the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format, &#x60;YYYY-MM-DDThh:mm:ss&#x60;. For example, \&quot;26/3/2021\&quot; becomes \&quot;2021-03-26T00:00:00\&quot;.  If &#x60;text&#x60; is not a currency amount or a date, &#x60;processed_text&#x60; is &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
