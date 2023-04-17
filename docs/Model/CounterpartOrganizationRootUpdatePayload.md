# # CounterpartOrganizationRootUpdatePayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_shipping_address_id** | **string** | ID of the shipping address. | [optional]
**default_billing_address_id** | **string** | ID of the billing address. | [optional]
**type** | **string** | Must be \&quot;organization\&quot;. |
**organization** | [**\OpenAPI\Client\Model\CounterpartOrganizationUpdatePayload**](CounterpartOrganizationUpdatePayload.md) |  |
**created_automatically** | **bool** | &#x60;true&#x60; if the counterpart was created automatically by Monite when processing incoming invoices with OCR. &#x60;false&#x60; if the counterpart was created by the API client. | [optional] [default to false]
**reminders_enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
