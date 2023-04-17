# # CounterpartCreatePayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Must be \&quot;individual\&quot;. |
**organization** | [**\OpenAPI\Client\Model\CounterpartOrganizationCreatePayload**](CounterpartOrganizationCreatePayload.md) |  |
**created_automatically** | **bool** | &#x60;true&#x60; if the counterpart was created automatically by Monite when processing incoming invoices with OCR. &#x60;false&#x60; if the counterpart was created by the API client. | [optional] [default to false]
**reminders_enabled** | **bool** |  | [optional] [default to false]
**individual** | [**\OpenAPI\Client\Model\CounterpartIndividualCreatePayload**](CounterpartIndividualCreatePayload.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
