# # CounterpartResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_shipping_address_id** | **string** | ID of the shipping address. | [optional]
**default_billing_address_id** | **string** | ID of the billing address. | [optional]
**id** | **string** | Unique ID of the counterpart. |
**created_at** | **\DateTime** | Date and time when the counterpart was created. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) standard. |
**updated_at** | **\DateTime** | Date and time when the counterpart was last updated. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) standard. |
**type** | [**\OpenAPI\Client\Model\CounterpartType**](CounterpartType.md) |  |
**created_automatically** | **bool** | &#x60;true&#x60; if the counterpart was created automatically by Monite when processing incoming invoices with OCR. &#x60;false&#x60; if the counterpart was created by the API client. | [optional] [default to false]
**reminders_enabled** | **bool** |  | [optional]
**individual** | [**\OpenAPI\Client\Model\CounterpartIndividualResponse**](CounterpartIndividualResponse.md) |  |
**organization** | [**\OpenAPI\Client\Model\CounterpartOrganizationResponse**](CounterpartOrganizationResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
